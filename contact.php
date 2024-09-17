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
            <h1>Kontak Kami</h1>
        </div>
    </section>
    
    <!--Page Info-->
    <section class="page-info">
        <div class="auto-container clearfix">
            <div class="pull-left"><h2>Kontak Kami</h2></div>
            <div class="pull-right">
                <ul class="bread-crumb clearfix">
                    <li><a href="index-2.html">Beranda</a></li>
                    <li>Kontak Kami</li>
                </ul>
            </div>
        </div>
    </section>
    
    <!--Contact Section-->
    <section class="contact-section">
    	<div class="auto-container">
        	<div class="row clearfix">
                
                <!--Form Column -->
            	<div class="column form-column col-lg-6 col-md-12 col-sm-12 col-xs-12">
                	<div class="sec-title medium"><h2>Kirim Pesan Kepada Kami</h2></div>
                	<!--form-box-->
                    <div class="form-box default-form">
                        <div class="contact-form default-form">
                            <form method="post" action="save_contact.php" onsubmit="return showSuccessAlert()">
                                <div class="row clearfix">
                                
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="username" value="" placeholder="Nama Anda *" required>
                                    </div>
        
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="email" name="email" value="" placeholder="Email Anda *" required>
                                    </div>
                                    
                                    <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                        <input type="text" name="phone" value="" placeholder="No Telepon">
                                    </div>
                                    
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <textarea name="message" placeholder="Pesan *"></textarea>
                                    </div>
                                    <div class="form-group col-md-12 col-sm-12 col-xs-12">
                                        <button type="submit" class="theme-btn btn-style-two">Kirim</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <script>
                    function showSuccessAlert() {
                        alert("Terima kasih telah menghubungi kami. Pesan Anda telah diterima dan tim kami akan segera menghubungi Anda untuk lebih lanjut.");
                        return true;  // Return true to allow the form to be submitted
                    }
                </script>
                
                
                <!--Column-->
                <div class="column info-column col-lg-6 col-md-6 col-sm-12 col-xs-12">
                	<div class="sec-title medium"><h2>Detail Kontak</h2></div>
                    <div class="info-style-one">
                        <ul>
                            <li><div class="icon-box"><span class="flaticon-international-delivery"></span></div><h4>Alamat :</h4><div class="text">Terminal 2F Soekarno-Hatta <br>Cengkareng, Indonesia.</div></li>
                            <li><div class="icon-box"><span class="flaticon-envelope"></span></div><h4>Email :</h4><a href="mailto:sales1.palmeeralounge@gmail.com">sales1.palmeeralounge@gmail.com</a></li>
                            <li><div class="icon-box"><span class="flaticon-phone-call"></span></div><h4>Hubungi Kami:</h4><div class="text"> +1 (44) 123-45-67, +1(44) 456-78-90</div></li>
                        </ul>
                    </div>
                </div>
                
            </div>    
       	</div>
   	</section>
      
<?php
include 'footer.php';
?>
    
</body>
</html>