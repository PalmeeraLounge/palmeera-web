<?php
// Database connection configuration
$host = "localhost";   // Hostname
$user = "root";        // Username
$pass = "";            // Password
$database = "palmeera"; // Database name

// Create connection
$koneksi = mysqli_connect($host, $user, $pass, $database);

// Check connection
if (!$koneksi) {
    // Display error message if connection fails
    die("Connection failed: " . mysqli_connect_error());
} else {
    // Connection successful (optional message)
    echo "Connection successful!";
}
?>
