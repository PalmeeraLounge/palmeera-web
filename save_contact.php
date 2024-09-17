<?php
// Database connection details
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "palmeera"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$name = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


// Insert data into MySQL
$sql = "INSERT INTO message (name, email, phone, message) 
        VALUES ('$name', '$email', '$phone', '$message')";

if ($conn->query($sql) === TRUE) {
    // Redirect to contact.html with success message
    echo "<script>
            alert('Pesan berhasil dikirimkan, Team Palmeera Lounge akan menghubungi Anda.');
            window.location.href = 'index.php';
          </script>";
} else {
    // Display error message and redirect
    echo "<script>
            alert('Error: " . $conn->error . "');
            window.location.href = 'index.php';
          </script>";
}


// Close connection
$conn->close();
?>
