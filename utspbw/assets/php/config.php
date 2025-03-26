<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'uts_pbw');

error_reporting(E_ALL);
ini_set('display_errors', 0); // Disable on production
ini_set('log_errors', 1);
ini_set('error_log', __DIR__ . '/error.log');

try {
    $koneksi = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    
    if ($koneksi->connect_errno) {
        throw new Exception("Database connection failed: " . $koneksi->connect_error);
    }
    
    $koneksi->set_charset("utf8mb4");
    
} catch (Exception $e) {
    error_log($e->getMessage());
    die("System temporarily unavailable. Please try again later.");
}

function clean_output($data) {
    return htmlspecialchars($data ?? '', ENT_QUOTES | ENT_HTML5, 'UTF-8');
}

function clean_input($data) {
    global $koneksi;
    if ($data === null) return null;
    return $koneksi->real_escape_string(trim($data));
}

function validate_email($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

define('EMAIL_FROM', 'allenwinters133@gmail.com');
define('EMAIL_ADMIN', 'evannathan78@gmail.com.com');
?>