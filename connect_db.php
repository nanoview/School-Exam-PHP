<?php
// Database configuration
// Prefer environment variables to avoid committing secrets.
// Set these in your web server or local environment:
//   DB_HOST, DB_USER, DB_PASS, DB_NAME

$servername = getenv('DB_HOST') ?: 'localhost';
$username   = getenv('DB_USER') ?: 'root';
$password   = getenv('DB_PASS') ?: '';
$dbname     = getenv('DB_NAME') ?: 'arif_restaurant_db';

// Throw exceptions on MySQLi errors for cleaner handling
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Ensure proper Unicode support
    $conn->set_charset('utf8mb4');
} catch (mysqli_sql_exception $e) {
    // Log exact error for debugging (see error_log file), but don't show sensitive details to users
    error_log('DB connection failed: ' . $e->getMessage());
    http_response_code(500);
    exit('Tietokantayhteys epäonnistui. Ota yhteys ylläpitoon.');
}
// Connection successful - no echo needed