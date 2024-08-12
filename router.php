<?php
$request = $_SERVER['REQUEST_URI'];

// Handle requests for the homepage
if ($request === '/' || $request === '') {
    include __DIR__ . '/index.php';
}
// Handle requests for existing files
elseif (file_exists(__DIR__ . $request)) {
    return false; // Serve the file directly
}
// Handle requests for PHP files within the project
elseif (preg_match('/^\/[^.]+\.php$/', $request)) {
    include __DIR__ . $request;
}
// Handle 404 errors
else {
    header("HTTP/1.0 404 Not Found");
    include __DIR__ . '/404.php';
}
