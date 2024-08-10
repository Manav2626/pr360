fetch("head.html")
  .then((response) => response.text())
  .then((data) => (document.getElementById("head").innerHTML = data));


