<?php
// Database connection settings
$servername = "localhost"; // Your MySQL server
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "palmeera"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the posted data
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    
    // Insert the data into the database
    $sql = "INSERT INTO newsletter (name, email) VALUES ('$name', '$email')";
    
    if ($conn->query($sql) === TRUE) {
        // Redirect to index.html with success message
        echo "<script>
                alert('Subscription successful!');
                window.location.href = 'index.html';
              </script>";
    } else {
        // Display error message and redirect
        echo "<script>
                alert('Error: " . $conn->error . "');
                window.location.href = 'index.html';
              </script>";
    }
}

// Close the connection
$conn->close();
?>
