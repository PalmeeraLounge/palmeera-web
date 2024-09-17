<?php
include 'config.php';

// Query untuk mengambil data portofolio
$sql = "SELECT * FROM portfolio";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <!-- Sertakan CSS dan JS yang diperlukan -->
</head>
<body>
    <div class="container">
        <?php
        if ($result->num_rows > 0) {
            // Menampilkan data untuk setiap baris
            while($row = $result->fetch_assoc()) {
                echo '<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 default-gallery-item masonry-item all ' . htmlspecialchars($row['category']) . '">
                    <div class="inner-box">
                        <figure class="image-box"><img src="' . htmlspecialchars($row['image_url']) . '" alt=""></figure>
                        <!--Overlay Box-->
                        <div class="overlay-one">
                            <div class="overlay-inner">
                                <div class="content">
                                    <a href="' . htmlspecialchars($row['link']) . '" class="proj-link"><span class="fa fa-link"></span></a>
                                </div>
                            </div>
                        </div>
                        <!--Caption Box-->
                        <div class="caption-box-one">
                            <h3><a href="' . htmlspecialchars($row['link']) . '">' . htmlspecialchars($row['title']) . '</a></h3>
                            <a href="#" class="cat-link">' . htmlspecialchars($row['category']) . '</a>
                        </div>
                    </div>
                </div>';
            }
        } else {
            echo "No gallery items found.";
        }
        $conn->close();
        ?>
    </div>
</body>
</html>
