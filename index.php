<?php
include 'header.php';
?>

<!-- Modal Pop UP HTML -->
<div class="modal fade modalBox-popup" id="special-announcement2" tabindex="-1" role="dialog" aria-labelledby="specialAnnouncementLabel" data-backdrop="static" style="display: none;">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="specialAnnouncementLabel">Palmeera Lounge</h4>
            </div>
            <div class="modal-body">
                <div class="ctn">
                    <div style="text-align: center;">
                        <img alt="Elevate Your Travel Experience" src="images/popup/popup.jpg" title="Palmeera Lounge">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="text-center">
                    <button type="button" id="dismissPopup" class="btn btn-default outline black" data-dismiss="modal">Tutup</button>
                    <a href="news.php" target="_blank" class="btn btn-default">Cari Tahu Lebih Lanjut</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include jQuery and Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- JavaScript to show modal once -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Check if the modal has already been shown
        if (!localStorage.getItem('modalShown')) {
            $('#special-announcement2').modal('show');
            // Set the item in localStorage to indicate the modal has been shown
            localStorage.setItem('modalShown', 'true');
        }
    });
</script>
<!-- End Modal Pop UP HTML -->

    
    <!-- Main Slider -->
<section class="main-slider">

    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                
                <!-- Slide 1 -->
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-1.jpg" data-saveperformance="off" data-title="Palmeera Lounge">
                    <img src="images/main-slider/image-1.jpg" alt="Palmeera Lounge" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="-100"
                        data-speed="1500"
                        data-start="0"
                        data-easing="easeOutExpo"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn">
                        <h2>Palmeera Lounge</h2>
                    </div>

                    <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="40"
                        data-speed="1500"
                        data-start="500"
                        data-easing="easeOutExpo"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn">
                        <div class="text">Nikmati pengalaman pra-umrah di Palmeera Lounge,  <br>yang dirancang untuk memenuhi semua kebutuhan Anda sebelum perjalanan Anda.🕋✈️</div>
                    </div>

                    <div class="tp-caption sfr sfb tp-resizeme"
                        data-x="left" data-hoffset="15"
                        data-y="center" data-voffset="140"
                        data-speed="1500"
                        data-start="1000"
                        data-easing="easeOutExpo"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn">
                        <a href="services.html" class="theme-btn btn-style-one">Layanan Kami</a>
                    </div>
                </li>

                <!-- Slide 2 -->
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-2.jpg" data-saveperformance="off" data-title="Palmeera Lounge">
                    <img src="images/main-slider/image-2.jpg" alt="Palmeera Lounge" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="-100"
                        data-speed="1500"
                        data-start="0"
                        data-easing="easeOutExpo"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn">
                        <h2>Palmeera Lounge</h2>
                    </div>

                    <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="0"
                        data-speed="1500"
                        data-start="500"
                        data-easing="easeOutExpo"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn">
                        <div class="text">Nikmati pengalaman pra-umrah di Palmeera Lounge,  <br>yang dirancang untuk memenuhi semua kebutuhan Anda sebelum perjalanan Anda.🕋✈️</div>
                    </div>

                    <div class="tp-caption sfr sfb tp-resizeme"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="100"
                        data-speed="1500"
                        data-start="1000"
                        data-easing="easeOutExpo"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn">
                        <a href="services.html" class="theme-btn btn-style-one">Layanan Kami</a>
                    </div>
                </li>

                <!-- Slide 3 -->
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="images/main-slider/image-3.jpg" data-saveperformance="off" data-title="Palmeera Lounge">
                    <img src="images/main-slider/image-3.jpg" alt="Palmeera Lounge" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="500"
                        data-y="center" data-voffset="-100"
                        data-speed="1500"
                        data-start="0"
                        data-easing="easeOutExpo"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn">
                        <h2>Palmeera Lounge</h2>
                    </div>

                    <div class="tp-caption sfl sfb tp-resizeme"
                        data-x="left" data-hoffset="500"
                        data-y="center" data-voffset="40"
                        data-speed="1500"
                        data-start="500"
                        data-easing="easeOutExpo"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn">
                        <div class="text">Nikmati pengalaman pra-umrah di Palmeera Lounge,  <br>yang dirancang untuk memenuhi semua kebutuhan Anda sebelum perjalanan Anda.🕋✈️</div>
                    </div>

                    <div class="tp-caption sfr sfb tp-resizeme"
                        data-x="left" data-hoffset="500"
                        data-y="center" data-voffset="140"
                        data-speed="1500"
                        data-start="1000"
                        data-easing="easeOutExpo"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn">
                        <a href="services.html" class="theme-btn btn-style-one">Layanan Kami</a>
                    </div>
                </li>

            </ul>

            <!-- Slider Timer -->
            <div class="tp-bannertimer"></div>
        </div>
    </div>

</section>

    
    <!-- Welcome Section -->
<section class="welcome-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- Welcome Column -->
            <div class="col-md-6 col-sm-12 welcome-column">
                <div class="inner-content wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <h2>Selamat Datang Di Palmeera Lounge</h2>
                    <div class="text">
                        Fasilitas baru berupa Terminal Umrah 2F di Bandara Internasional Soekarno-Hatta. 
                        Terminal ini dirancang khusus untuk keberangkatan umrah sebagai bagian dari komitmen Palmeera Lounge untuk memberikan layanan terbaik bagi jamaah yang memulai perjalanan ibadah umrah mereka dari bandara ini. 
                        Fasilitas tersebut menawarkan berbagai kemudahan, termasuk area drop-off, ruang pengunjung yang luas, counter check-in, layanan imigrasi, masjid, dan Lounge Umrah yang nyaman.
                    </div>
                </div>
            </div>

            <!-- Service Column -->
            <div class="col-md-6 col-sm-12 service-column">
                
                <!-- Service Block One -->
                <div class="service-block-one">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="flaticon-avatar-1"></span>
                        </div>
                        <h3>We are Professional</h3>
                        <div class="category"><a href="#">Designers</a></div>
                        <div class="text">We bring creativity and attention to detail to provide high-quality design services. Our team ensures that every project is completed with professionalism.</div>
                    </div>
                </div>

                <!-- Service Block Two -->
                <div class="service-block-one">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="flaticon-correct"></span>
                        </div>
                        <h3>We are Trusted</h3>
                        <div class="category"><a href="#">Team Members</a></div>
                        <div class="text">Our team is committed to reliability and trustworthiness, ensuring that every project is handled with integrity and a focus on client satisfaction.</div>
                    </div>
                </div>

                <!-- Service Block Three -->
                <div class="service-block-one">
                    <div class="inner-box">
                        <div class="icon-box">
                            <span class="flaticon-compass"></span>
                        </div>
                        <h3>We are Experts</h3>
                        <div class="category"><a href="#">Interiors</a></div>
                        <div class="text">Our interior design experts craft innovative and personalized spaces, combining aesthetics with functionality to exceed client expectations.</div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

   <!-- Best Service Section -->
<section class="best-service-section">
    <div class="auto-container">
        
        <!-- Section Title -->
        <div class="sec-title clearfix">
            <h2 class="pull-left">Fasilitas</h2>
            <a class="service-link pull-right" href="services.html">Fasilitas Lainnya <span class="fa fa-caret-right"></span></a>
        </div>
        
        <div class="row clearfix">
        
           <!-- Service Block One -->
<!-- Service Block One -->
<div class="service-block-two col-lg-4 col-md-6 col-sm-12">
    <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
        <div class="image-layer" style="background-image:url(images/resource/service-block-two-bg.jpg)"></div>
        <div class="icon-box">
            <img src="images/icons/drop_off.png" alt="Drop Off Area Icon" class="service-icon" />
        </div>
        <h3>Drop Off Area</h3>
        <div class="text">A designated area to drop off passengers with ease, ensuring a smooth journey for travelers.</div>
        <a href="#" class="read-more">Read More</a>
    </div>
</div>


            
            <!-- Service Block Two -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeIn" data-wow-delay="400ms" data-wow-duration="1500ms">
                    <div class="image-layer" style="background-image:url(images/resource/service-block-two-bg.jpg)"></div>
                    <div class="icon-box">
                        <span class="flaticon-parquet"></span>
                    </div>
                    <h3>Aula Keberangkatan</h3>
                    <div class="text">A spacious hall designed to provide comfort while waiting for your departure.</div>
                    <a href="#" class="read-more">Read More</a>
                    <div class="bottom-icon">
                        <span class="flaticon-parquet"></span>
                    </div>
                </div>
            </div>
            
            <!-- Service Block Three -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
    <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
        <div class="image-layer" style="background-image:url(images/resource/service-block-two-bg.jpg)"></div>
        <div class="icon-box">
            <img src="images/icons/area_checkin.png" alt="Drop Off Area Icon" class="service-icon" />
        </div>
        <h3>Area Check In Khusus</h3>
        <div class="text">A dedicated check-in area for smooth and quick processing before your flight.</div>
        <a href="#" class="read-more">Read More</a>
    </div>
</div>
            
            <!-- Service Block Four -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
    <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
        <div class="image-layer" style="background-image:url(images/resource/service-block-two-bg.jpg)"></div>
        <div class="icon-box">
            <img src="images/icons/mosque.png" alt="Drop Off Area Icon" class="service-icon" />
        </div>
        <h3>Masjid</h3>
        <div class="text">A serene mosque space to provide comfort and convenience to travelers for prayer.</div>
        <a href="#" class="read-more">Read More</a>
    </div>
</div>
            
            <!-- Service Block Five -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
    <div class="inner-box wow fadeIn" data-wow-delay="0ms" data-wow-duration="1500ms">
        <div class="image-layer" style="background-image:url(images/resource/service-block-two-bg.jpg)"></div>
        <div class="icon-box">
            <img src="images/icons/immigration.png" alt="Drop Off Area Icon" class="service-icon" />
        </div>
        <h3>Layanan Immigrasi</h3>
        <div class="text">Seamless immigration services to assist in making the travel process as smooth as possible.</div>
        <a href="#" class="read-more">Read More</a>
    </div>
</div>
            
            <!-- Service Block Six -->
            <div class="service-block-two col-lg-4 col-md-6 col-sm-12">
                <div class="inner-box wow fadeIn" data-wow-delay="800ms" data-wow-duration="1500ms">
                    <div class="image-layer" style="background-image:url(images/resource/service-block-two-bg.jpg)"></div>
                    <div class="icon-box">
                        <span class="flaticon-dinner"></span>
                    </div>
                    <h3>Lighting Works</h3>
                    <div class="text">Modern lighting solutions that enhance the ambiance and functionality of spaces.</div>
                    <a href="#" class="read-more">Read More</a>
                    <div class="bottom-icon">
                        <span class="flaticon-bright-lightbulb"></span>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

    <!--call-to-action-->
    <section class="call-to-action" style="background-image:url(images/background/image-1.jpg);">
    	<div class="auto-container">
        	<div class="row">
            	<div class="text">Bergabunglah dengan Palmeera Lounge dan</div>
                <h2>Jadikan ibadah Umrah Anda Lebih berkesan!</h2>
                
                <a class="theme-btn btn-style-one" href="contact.html">Hubungi Kami</a>
                
            </div>
        </div>
    </section>
    
  <!--Sponsor-->
    <section class="sponsors-section">
    	<div class="auto-container">
	<div class="sec-title-four">
                <h2>Partnership</h2>
            </div>
        
        	<!--Sponsors SLider-->
            <ul class="sponsors-carousel">
                <li><div class="inner-box"><figure class="image-box"><img src="images/clients/1.png" alt=""></figure><div class="overlay-box"><div class="overlay-inner"><div class="overlay-content"><span class="count"></span><span class="text">Telkomsel</span></div></div></div></div></li>
                <li><div class="inner-box"><figure class="image-box"><img src="images/clients/2.png" alt=""></figure><div class="overlay-box"><div class="overlay-inner"><div class="overlay-content"><span class="count"></span><span class="text">Bank BRI</span></div></div></div></div></li>
                <li><div class="inner-box"><figure class="image-box"><img src="images/clients/1.png" alt=""></figure><div class="overlay-box"><div class="overlay-inner"><div class="overlay-content"><span class="count"></span><span class="text">Telkomsel</span></div></div></div></div></li>
                <li><div class="inner-box"><figure class="image-box"><img src="images/clients/2.png" alt=""></figure><div class="overlay-box"><div class="overlay-inner"><div class="overlay-content"><span class="count"></span><span class="text">Bank BRI</span></div></div></div></div></li><li><div class="inner-box"><figure class="image-box"><img src="images/clients/1.png" alt=""></figure><div class="overlay-box"><div class="overlay-inner"><div class="overlay-content"><span class="count"></span><span class="text">Telkomsel</span></div></div></div></div></li>
                <li><div class="inner-box"><figure class="image-box"><img src="images/clients/2.png" alt=""></figure><div class="overlay-box"><div class="overlay-inner"><div class="overlay-content"><span class="count"></span><span class="text">Bank BRI</span></div></div></div></div></li>
             </ul>
        </div>
    </section>
    
    
    <!--News Section-->
    <section class="news-section">
    	<div class="auto-container">
        
            <div class="sec-title-four">
                <h2>Berita Terbaru</h2>
            </div>
            
            
            <div class="news-carousel two-column-carousel">
            	
                <!--News Style One-->
                <?php
include 'config.php';

// Query the news data
$data_news = mysqli_query($conn, "SELECT * FROM news");

// Check if there are any rows returned
if (mysqli_num_rows($data_news) > 0) {
    // Loop through the news data
    while ($fetch_news = mysqli_fetch_assoc($data_news)) {
        // Extract data from each news record
        $id = $fetch_news['id'];
        $title = $fetch_news['title'];
        $content = $fetch_news['content'];
        $category = $fetch_news['category'];
        $date = $fetch_news['date'];
        $newDate = date("d-m-Y", strtotime($date)); // Format the date
        $image = isset($fetch_news['image']) ? $fetch_news['image'] : 'default.jpg'; // Use default image if not set
            
        // Set the image path
            $imagePath = "admin/assets/img/news/" . $image;        
        
            // You can now output the data as needed
?>

        <div class="news-style-one">
            <div class="inner-box">
                <div class="row clearfix">
                    <div class="image-column col-md-3 col-sm-4 col-xs-12">
                        <figure class="image-box">
                        <figure class="image-box"><img src="images/resource/blog-image-3.jpg" alt=""><a class="overlay-link" href="news.php"><span class="icon flaticon-plus-1"></span></a></figure>
                           <a class="overlay-link" href="news.php">
                                <span class="icon flaticon-plus-1"></span>
                            </a>
                        </figure>
                    </div>
                    <div class="content-column col-md-7 col-sm-6 col-xs-12">
                        <div class="content">
                            <h3><a href="news.php"><?= htmlspecialchars($title) ?></a></h3>
                            <ul class="post-meta clearfix">
                                <li><a href="#"><span class="icon fa fa-clock-o"></span> <?= htmlspecialchars($newDate) ?></a></li>
                                <li><a href="#"><span class="icon fa fa-tags"></span> <?= htmlspecialchars($category) ?></a></li>
                            </ul>
                            <div class="text"><?= base64_decode($content) ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php
    } // End of while loop
} else {
    // Output a message if no news data is found
    echo "<p>No news available.</p>";
}
?>

            </div>
        </div>
    </section>
    
    <!--Newsletter Style One-->
    <section class="newsletter-style-one">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="title-column col-lg-4 col-md-12 col-sm-12">
                    <h2>Berlangganan Berita</h2>
                    <div class="text">Kami mengirimkan berita terbaru kepada Anda beberapa kali dalam sebulan (Tanpa Spam).</div>
                </div>
                <!--Form Column-->
                <div class="form-column col-lg-8 col-md-12 col-sm-12">
                    <div class="inner-box">
                        <form method="post" action="save_newsletter.php" onsubmit="return showSuccessAlert()">
                            <div class="row clearfix">
                                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                                    <div class="row clearfix">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <span class="floated-icon fa fa-user"></span>
                                                <input type="text" name="name" placeholder="Your Name" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="form-group">
                                                <span class="floated-icon fa fa-envelope"></span>
                                                <input type="email" name="email" placeholder="Your Email" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                                    <button type="submit" class="theme-btn">Berlangganan</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <script>
        function showSuccessAlert() {
            alert("Subscription successful! Thank you for signing up.");
            return true;  // Return true to allow the form to be submitted
        }
    </script>
    
     <!--Main Footer-->
    <footer class="main-footer" style="background-image:url(images/background/footer-bg.jpg);">
    	<div class="auto-container">
        
            <!--Widgets Section-->
            <div class="widgets-section">
            	<div class="row clearfix">
                	<!--Big Column-->
                	<div class="big-column col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
                            
                            <!--Footer Column-->
                        	<div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="footer-widget about-widget">
                                	<div class="footer-logo"><figure><a href="index-2.html"><img src="images/logo-4.png" alt=""></a></figure></div>
                                    <div class="widget-content">
                                    	<div class="text">Rasakan kenyamanan dan kemewahan di Palmeera Lounge, Terminal 2F Bandara Soekarno-Hatta.
                                             Nikmati fasilitas premium, layanan personal, dan suasana yang tenang untuk membuat perjalanan Anda semakin menyenangkan.</div>
                                        <ul class="contact-info">
                                        	<li><span class="icon fa fa-map-marker"></span>Soekarno-Hatta International 2F, Indonesia</li>
                                            <li><span class="icon fa fa-phone"></span>(62) 812-3456-789</li>
                                            <li><span class="icon fa fa-envelope-o"></span>sales1.palmeeralounge@gmail.com</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                            <!--Footer Column-->
                        	<div class="footer-column col-md-6 col-sm-6 col-xs-12">
								<div class="footer-widget tags-widget">
                                	<h2>Maps</h2>
                                    <div class="map-container"></div>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3967.064377792485!2d106.64991367588347!3d-6.122037893864642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a026ad44ff845%3A0xd8ea333e48efd9f6!2sTerminal%202%2C%20RT.001%2FRW.010%2C%20Pajang%2C%20Benda%2C%20Tangerang%20City%2C%20Banten%2015126!5e0!3m2!1sen!2sid!4v1726112725807!5m2!1sen!2sid"
            width="250"
            height="300"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                    
                    <!--Big Column-->
                	<div class="big-column col-md-6 col-sm-12 col-xs-12">
                    	<div class="row clearfix">
                            
                          
                            
                            <!--Footer Column-->
                        	<div class="footer-column col-md-6 col-sm-6 col-xs-12">
                            	<div class="footer-widget contact-widget">
                                	<h2>Hubungi Kami</h2>
                                    <div class="widget-content">
                                        <div class="newsletter-form">
                                            <form method="post" action="save_contact.php" onsubmit="return showSuccessAlert()">
                                                <div class="form-group">
                                                    <input type="text" name="username" value="" placeholder="Name" required>
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" name="email" value="" placeholder="Email *" required>
                                                </div>
                                                <div class="form-group">
                                                 <input type="text" name="phone *" value="" placeholder="No Telepon">
                                                </div>
                                                <div class="form-group">
                                                    <textarea name="message" placeholder="Message *" required></textarea>
                                                </div>
                                                <button type="submit" class="theme-btn btn-style-two">Send us</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                function showSuccessAlert() {
                                alert("Terima kasih telah menghubungi kami. Pesan Anda telah diterima dan tim kami akan segera menghubungi Anda untuk lebih lanjut.");
                                return true;  // Return true to allow the form to be submitted
                                    }
                            </script>  
                        </div>
                    </div>
                    
                 </div>
             </div>
        
        </div>
        
        <!--Footer Bottom-->
         <div class="footer-bottom">
         	<div class="auto-container">
            	<div class="clearfix">
                	<div class="pull-left"><div class="copyright"><a href="#" target="_blank">IT Development - Palmeera Lounge</a></div></div>
                </div>
            </div>
        </div>
 

	<!--Cookie Bottom-->
<style>
  .cookieBox {
    position: fixed;
    bottom: 0;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.8);
    color: white;
    text-align: center;
    padding: 20px;
    z-index: 1000;
  }

  .cookieText p {
    margin: 10px 0;
    font-size: 14px;
  }

  .ConsentButton {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    font-size: 14px;
    border-radius: 4px;
  }

  .ConsentButton:hover {
    background-color: #45a049;
  }

  .cookieBox a {
    color: #ffd700;
    text-decoration: underline;
  }

  .cookieBox a:hover {
    color: #ffb700;
  }
</style>

<div class="cookieBox" id="cBox">
  <div class="container">
    <div class="cookieText">
      <div class="CookieConsent">
        <span class="ConsentText">
          <p>To provide certain services and enhance your experience on our website, we use tools like cookies to gather data on your interactions <br> By continuing to use our site, you consent to our use of these cookies. For more details on our data usage and cookie policy, please refer to our policy page.
            <a href="#" target="_blank"><strong>here.</strong></a>
          </p>
        </span>
        <span class="ConsentButtons">
          <input type="button" value="I Understand" id="dismissCookies" class="ConsentButton btn btn-default">
        </span>
      </div>
    </div>
  </div>
</div>


<script>
// Function to set a cookie
function setCookie(name, value, days) {
  let date = new Date();
  date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
  const expires = "expires=" + date.toUTCString();
  document.cookie = name + "=" + value + ";" + expires + ";path=/";
}

// Function to get a cookie by name
function getCookie(name) {
  const decodedCookie = decodeURIComponent(document.cookie);
  const cookiesArray = decodedCookie.split(';');
  for (let i = 0; i < cookiesArray.length; i++) {
    let cookie = cookiesArray[i].trim();
    if (cookie.indexOf(name + "=") == 0) {
      return cookie.substring(name.length + 1);
    }
  }
  return "";
}

// Function to check if the cookie exists and hide the cookie box if it does
function checkCookie() {
  let cookieConsent = getCookie("cookieConsent");
  if (cookieConsent === "accepted") {
    document.getElementById("cBox").style.display = "none";
  }
}

// Event listener for the dismiss button
document.getElementById("dismissCookies").addEventListener("click", function() {
  setCookie("cookieConsent", "accepted", 30); // Cookie expires in 30 days
  document.getElementById("cBox").style.display = "none";
});

// Check for cookie on page load
window.onload = function() {
  checkCookie();
};
</script>
<!--End Cookie-->
</footer>
</div>

<!--End pagewrapper-->


<!--Search Popup-->
<div id="search-popup" class="search-popup">
	<div class="close-search theme-btn"><span class="flaticon-unchecked"></span></div>
	<div class="popup-inner">
    
    	<div class="search-form">
        	<form method="post" action="#">
            	<div class="form-group">
                	<fieldset>
                        <input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required >
                        <input type="submit" value="Search" class="theme-btn">
                    </fieldset>
                </div>
            </form>
            
            <br>
            <h3>Recent Search Keywords</h3>
            <ul class="recent-searches">
                <li><a href="premium.php">Premium Lounge</a></li>
                <li><a href="standard.php">Standard Lounge</a></li>
            </ul>
        </div>
        
    </div>
</div>

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="fa fa-long-arrow-up"></span></div>


<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/revolution.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/isotope.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/script.js"></script>
</body>


</html>