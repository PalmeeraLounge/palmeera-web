<?php
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "palmeera";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query untuk mengambil data produk
$sql = "SELECT title, description FROM about WHERE id = 1"; // Sesuaikan ID jika diperlukan
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data produk
    while($row = $result->fetch_assoc()) {
        echo '<div class="column text-column col-md-6 col-sm-12 col-xs-12">';
        echo '<div class="inner-box">';
        echo '<div class="text">' . htmlspecialchars($row["description"]) . '</div>';
        echo '</div>';
        echo '</div>';
    }
} else {
    echo "No about found.";
}

$conn->close();
?>
