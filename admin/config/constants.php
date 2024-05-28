<?php
session_start();

// Update ROOT_URL to the new site URL
define("ROOT_URL", "http://rishikblog.vercel.app/");

// Update MySQL connection details
define('DB_HOST', 'sql304.infinityfree.com');
define('DB_USER', 'if0_36312985');
define('DB_PASS', 'H0iCohPotYbx');
define('DB_NAME', 'if0_36312985_rishik');
define('DB_PORT', 3306); // Optional, if you want to explicitly set the port

// Check if user is logged in
if (!isset($_SESSION['user-id'])) {
    // Destroy all sessions and redirect user to login page
    session_destroy();
    header("location: " . ROOT_URL . "logout.php");
    die();
}
?>
