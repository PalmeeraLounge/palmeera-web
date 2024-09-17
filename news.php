<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Character encoding -->
    <meta charset="UTF-8">
    
    <!-- Page title -->
    <title>Palmeera Lounge | Soekarno-Hatta International Airport 2F</title>
    
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/revolution-slider.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    
    <!-- Responsive Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    
    <!-- IE Compatibility Mode -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Responsive CSS -->
    <link href="css/responsive.css" rel="stylesheet">
    
    <!-- HTML5 Shim and Respond.js for IE8 support -->
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php
include 'header.php';
?>

        <!--Page Title-->
        <section class="page-title" style="background-image:url(images/background/bg-page-title-1.jpg);">
            <div class="auto-container">
                <h1>Berita</h1>
            </div>
        </section>

        <!--Page Info-->
        <section class="page-info">
            <div class="auto-container clearfix">
                <div class="pull-left">
                    <h2>Berita</h2>
                </div>
                <div class="pull-right">
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.php">Beranda</a></li>
                        <li><a href="news.php">Berita</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <!--Sidebar Page-->
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Content Side-->
                    <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
<!--News Section-->
<section class="news-section list-view no-padd-top no-padd-bottom">

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
                        <figure class="image-box"><img src="images/resource/blog-image-3.jpg" alt=""><a class="overlay-link" href="blog-single.html"><span class="icon flaticon-plus-1"></span></a></figure>
                                    
                            
                            <a class="overlay-link" href="blog-single.html">
                                <span class="icon flaticon-plus-1"></span>
                            </a>
                        </figure>
                    </div>
                    <div class="content-column col-md-7 col-sm-6 col-xs-12">
                        <div class="content">
                            <h3><a href="blog-single.html"><?= htmlspecialchars($title) ?></a></h3>
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

</section>


                            <!--News Style One-->
                         

                            <!--News Style One-->
                           

                            <!--News Style One-->
                            

                            <!--News Style One-->
                            

                            <!--News Style One-->
                           

                            <!--News Style One-->
                           

                            <!-- Styled Pagination -->
                            <div class="styled-pagination padd-top-20 text-left">
                                <ul>
                                    <li><a class="prev" href="#"><span class="fa fa-angle-left"></span></a></li>
                                    <li><a href="#" class="active">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a class="next" href="#"><span class="fa fa-angle-right"></span></a></li>
                                </ul>
                            </div>

                        </section>

                    </div><!--End Content Side-->

                    <!--Sidebar-->
                    <div class="sidebar-side col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <aside class="sidebar">

                            <!-- Search Form -->
                            <div class="widget search-box sidebar-widget">

                                <form method="post" action="#">
                                    <div class="form-group">
                                        <input type="search" name="search-field" value="" placeholder="Search Keyword">
                                        <button type="submit"><span class="icon fa fa-search"></span></button>
                                    </div>
                                </form>

                            </div>

                            <!-- Popular Categories -->
                            <div class="widget popular-categories sidebar-widget">
                                <div class="sidebar-title">
                                    <h3>News Categories</h3>
                                </div>
                                

                                <ul class="list">
                                    <li><a href="#">Texture Painting</a></li>
                                    <li><a href="#">Wooden Flooring</a></li>
                                    <li><a href="#">Artificial Grass Flooring</a></li>
                                    <li><a href="#">Tiles &amp; Marble Works</a></li>
                                </ul>

                            </div>

                            <!-- Recent Posts -->
                            <div class="widget recent-posts sidebar-widget">
                                <div class="sidebar-title">
                                    <h3>Popular Posts</h3>
                                </div>

                                <div class="post">
                                    <figure class="post-thumb"><img src="images/resource/post-thumb-3.jpg" alt=""><a
                                            href="#" class="overlay-link"><span class="flaticon-plus-1"></span></a>
                                    </figure>
                                    <h4><a href="#">We Using High Quality Paints Only</a></h4>
                                    <div class="post-meta"><a href="#"><span class="fa fa-user"></span> Mano</a> <a
                                            href="#"><span class="fa fa-eye"></span> 95 Views</a></div>
                                </div>

                                <div class="post">
                                    <figure class="post-thumb"><img src="images/resource/post-thumb-4.jpg" alt=""><a
                                            href="#" class="overlay-link"><span class="flaticon-plus-1"></span></a>
                                    </figure>
                                    <h4><a href="#">Star Wood Residence is Our First Work</a></h4>
                                    <div class="post-meta"><a href="#"><span class="fa fa-user"></span> Henry</a> <a
                                            href="#"><span class="fa fa-eye"></span> 110 Views</a></div>
                                </div>

                                <div class="post">
                                    <figure class="post-thumb"><img src="images/resource/post-thumb-5.jpg" alt=""><a
                                            href="#" class="overlay-link"><span class="flaticon-plus-1"></span></a>
                                    </figure>
                                    <h4><a href="#">We Launch New Concept For Lighting</a></h4>
                                    <div class="post-meta"><a href="#"><span class="fa fa-user"></span> Williams</a> <a
                                            href="#"><span class="fa fa-eye"></span> 31 Views</a></div>
                                </div>

                            </div>

                            <!-- Archives -->
                            <div class="widget archives sidebar-widget">
                                <div class="sidebar-title">
                                    <h3>Blog Archive</h3>
                                </div>

                                <ul class="list-two">
                                    <li><a href="#">August 2013 &ensp; (5)</a></li>
                                    <li><a href="#">December 2013 &ensp; (12)</a></li>
                                    <li><a href="#">January 2014 &ensp; (10)</a></li>
                                    <li><a href="#">September 2014 &ensp; (17)</a></li>
                                </ul>
                            </div>
                        </aside>
                    </div><!--End Sidebar-->

                </div>
            </div>
        </div>
<?php
include 'footer.php';
?>
</body>
</html>