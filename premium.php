<?php
include 'header.php';
?>

                            <!--Page Title-->
                            <section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg);">
                                    <div class="auto-container">
                                        <h1>Premium Lounge</h1>
                                    </div>
                                </section>
                                
                                <!--Page Info-->
                                <section class="page-info">
                                    <div class="auto-container clearfix">
                                        <div class="pull-left"><h2>Premium Lounge</h2></div>
                                        <div class="pull-right">
                                            <ul class="bread-crumb clearfix">
                                                <li><a href="index.php">Home</a></li>
                                                <li><a href="#">Pages</a></li>
                                                <li>Premium Lounge</li>
                                            </ul>
                                        </div>
                                    </div>
                                </section>
                                
                                
                                <!--Project Details Section-->
                                <section class="project-details">
                                    <div class="auto-container">
                                        
                                        <!--Project Images-->
                                        <?php
                                        // Koneksi ke database
                                        $connection = new mysqli("localhost", "root", "", "palmeera");

                                        // Query untuk mengambil data
                                        $query = "SELECT * FROM gallery";
                                        $result = $connection->query($query);
                                        ?>

                            <?php
                            // Lokasi direktori galeri
                            $galleryDir = 'admin/assets/img/gallery/';

                            try {
                                // Cek apakah direktori galeri ada
                                if (!is_dir($galleryDir)) {
                                    throw new Exception("Direktori galeri tidak ditemukan: " . $galleryDir);
                                }

                                // Ambil daftar file dari folder galeri
                                $images = scandir($galleryDir);
                                
                                if (!$images) {
                                    throw new Exception("Gagal mengambil gambar dari direktori.");
                                }

                                // Filter hanya file gambar dengan ekstensi yang valid (jpg, jpeg, png, gif)
                                $imageFiles = array_filter($images, function($image) use ($galleryDir) {
                                    $extension = strtolower(pathinfo($image, PATHINFO_EXTENSION));
                                    return in_array($extension, ['jpg', 'jpeg', 'png', 'gif']) && is_file($galleryDir . $image);
                                });

                                if (empty($imageFiles)) {
                                    throw new Exception("Tidak ada gambar ditemukan di direktori.");
                                }
                                ?>

                                <!-- HTML untuk menampilkan galeri gambar -->
                                <div class="project-images">
                                    <ul class="single-item-carousel">
                                        <?php foreach ($imageFiles as $image): ?>
                                            <li>
                                                <figure class="image-box">
                                                    <a href="<?php echo $galleryDir . $image; ?>" class="lightbox-image" title="<?php echo pathinfo($image, PATHINFO_FILENAME); ?>">
                                                        <img src="<?php echo $galleryDir . $image; ?>" alt="<?php echo $image; ?>">
                                                    </a>
                                                </figure>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>

                                <?php
                            } catch (Exception $e) {
                                // Tampilkan pesan error jika terjadi masalah
                                echo "<p>Error: " . $e->getMessage() . "</p>";
                            }
            ?>
            <?php
            // Tutup koneksi
            $connection->close();
            ?>
          
             <!--Project Content-->
<div class="project-content">
    <div class="sidebar-title">
        <h3>Premium Lounge</h3>
    </div>
    <div class="row clearfix">
        <!--Content Column for Benefit Premium Lounge-->
        <div class="content-column col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h3>Benefit Premium Lounge:</h3>
            <ol class="benefit-list">
                <li>1. Fasilitas ruang tunggu Lounge yang lebih mewah dan terpisah dengan kapasitas 200 tempat duduk.</li>
                <li>2. Penggunaan ruang tunggu/lounge hingga 4 (empat) jam.</li>
                <li>3. Layanan makan perasmanan premium untuk Sarapan, Makan Siang maupun Makan Malam dengan variasi hidangan yang lebih bervariasi dan dengan brand premium.</li>
                <li>4. Pilihan menu live cooking yang dimasak ala minute.</li>
                <li>5. Layanan personal dan layanan butler.</li>
                <li>6. Tersedia fasilitas massaging sofa.</li>
                <li>7. Penggunaan fasilitas WiFi secara cuma-cuma.</li>
                <li>8. Area khusus untuk merokok.</li>
            </ol>
        </div>

        <!--Content Column for Fasilitas Ruang Serbaguna-->
        <div class="content-column col-lg-6 col-md-6 col-sm-12 col-xs-12">
            <h3>Fasilitas Ruang Serbaguna</h3>
            <p>Kami menyediakan ruangan serbaguna untuk keperluan briefing, manasik singkat, atau pemantapan sebelum keberangkatan dengan kapasitas hingga 50 orang. Fasilitas yang disediakan meliputi:</p>
            <ul class="facility-list">
                <li>1. Free penggunaan maksimum 1 jam</li>
                <li>2. Standard Sound System</li>
                <li>3. Display TV 65 inch</li>
            </ul>
        </div>
    </div>
</div>

<!--Sidebar Widget / Downloads-->
<div class="widget sidebar-widget downloads">
    <div class="sidebar-title">
        <h3>Download Brosur</h3>
    </div>
    <ul>
    <embed src="documents/Brosur Lounge Umrah.pdf" type="application/pdf" width="800" height="600">
    </ul>
</div>

            
            <!-- Post Nav -->
            <div class="post-nav clearfix">
            <a href="premium.php" class="prev-post pull-left"><span class="fa fa-angle-left"></span> &ensp;&ensp;Previous Post</a>
            <a href="standard.php" class="next-post pull-right">Next Post &ensp;&ensp;<span class="fa fa-angle-right"></span></a>
                <a href="gallery.php" class="all-post"><span class="fa fa-th-list"></span></a>
            </div>
            
        </div>
    </section>

<?php
include 'footer.php';
?>
