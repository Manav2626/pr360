<!-- consent-banner.php -->
<div id="consent-banner" style="display: none; position: fixed; bottom: 0; width: 100%; background-color: #333; color: #fff; padding: 15px; text-align: center; z-index: 1000;">
    <p style="margin: 0; padding: 0;">
        We use cookies to ensure you get the best experience on our website. Some cookies are necessary for the website to function, while others help us improve your experience.
    </p>
    <div style="margin-top: 10px;">
        <a id="accept-necessary" class="vlt-btn vlt-btn--secondary vlt-btn--md">Accept Necessary</a>
        <button id="accept-all"class="vlt-btn vlt-btn--secondary vlt-btn--md">Accept All</button>
        
    </div>
</div>

<style>
    /* Optional additional styling */
    #consent-banner button:hover {
        opacity: 0.9;
    }
</style>

<script>
    // Function to check if the user has already accepted cookies
    function getCookie(name) {
        const value = `; ${document.cookie}`;
        const parts = value.split(`; ${name}=`);
        if (parts.length === 2) return parts.pop().split(';').shift();
    }

    // Function to set a cookie
    function setCookie(name, value, days) {
        let expires = "";
        if (days) {
            const date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            expires = "; expires=" + date.toUTCString();
        }
        document.cookie = name + "=" + (value || "") + expires + "; path=/";
    }

    // Show banner if the user hasn't made a choice yet
    if (!getCookie('cookie_consent')) {
        document.getElementById('consent-banner').style.display = 'block';
    }

    // Set cookie for necessary consent and hide banner
    document.getElementById('accept-necessary').addEventListener('click', function() {
        setCookie('cookie_consent', 'necessary', 365);
        document.getElementById('consent-banner').style.display = 'none';
        // You can add any logic here to handle necessary-only cookies
    });

    // Set cookie for all consent and hide banner
    document.getElementById('accept-all').addEventListener('click', function() {
        setCookie('cookie_consent', 'all', 365);
        document.getElementById('consent-banner').style.display = 'none';
        // You can add any logic here to handle all cookies
    });
</script>
