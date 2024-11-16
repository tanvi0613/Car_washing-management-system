<?php //error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Car Wash management System | About Us Page</title>
   

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@400;500;600;700;800;900&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/flaticon/font/flaticon.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="style.css" rel="stylesheet">
    </head>

    <body>
<?php include_once('includes/header.php');?>
        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>About Us</h2>
                    </div>
                    <div class="col-12">
                        <a href="index.php">Home</a>
                        <a href="about.php">About Us</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->
        

        <!-- About Start -->
        <div class="about">
            <div class="vertical-line">
                <h1 class="vertical-line-text">Services</h1>
                <h1 class="vertical-line-text2">Services</h1>
            </div>
            <p class="service-text"><span class="vertical-line-p">
                We are dedicated to providing top-quality car washing<br> and detailing services to ensure that every vehicle shines<br>both inside and out.
            </span></p>
            <div class="service-cards">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    <div class="col">
                    <div class="card border-custom mb-3" style="max-width: 16rem;">
                        <div class="card-body text-secondary">
                            <h5 class="card-title">Seats washing</h5>
                            <p class="card-text">Refresh your car seats with our detailed washing service, designed to eliminate dirt, stains leaving them clean and comfortable.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                    <div class="card border-custom mb-3" style="max-width: 16rem;">
                        <div class="card-body text-secondary">
                            <h5 class="card-title">Vacuum cleaning</h5>
                            <p class="card-text">We offer thorough vacuum cleaning, ensuring every corner of your car is spotless by removing dust, and debris from all surfaces.</p>
                        </div>
                        </div>
                    </div>
                    <div class="col">
                    <div class="card border-custom mb-3" style="max-width: 16rem;">
                        <div class="card-body text-secondary">
                            <h5 class="card-title">Window wiping</h5>
                            <p class="card-text">Achieve crystal-clear visibility with our window wiping service, ensuring streak-free, gleaming windows for a perfect finish.</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="process">
                <h1 class="process-h1">Process</h1>
                <div class="row row-cols-1 row-cols-md-4 custom-gap">
                    <div class="col custom-col">
                        <h1 class="process-num">1</h1>
                        <div class="card">
                        <img src="./img/brush.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text-process">Brush, Vaccum, And Clean The Interior</p>
                        </div>
                        </div>
                    </div>
                    <div class="col custom-col">
                    <h1 class="process-num">2</h1>
                        <div class="card">
                        <img src="./img/wheel.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text-process">Clean Wheels And tires. Wash Exterior, Tire Dressing</p>
                        </div>
                        </div>
                    </div>
                    <div class="col custom-col">
                    <h1 class="process-num">3</h1>
                        <div class="card">
                        <img src="./img/wash.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text-process">Polish Wheels, Clean & Treat Exterior Trim</p>
                        </div>
                        </div>
                    </div>
                    <div class="col custom-col">
                    <h1 class="process-num">4</h1>
                        <div class="card">
                        <img src="./img/paint.jpeg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text-process">Polish And Then Wash Exterior Paints.</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
        
        



  

<?php include_once('includes/footer.php');?>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        
        <!-- Contact Javascript File -->
        <script src="mail/jqBootstrapValidation.min.js"></script>
        <script src="mail/contact.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>
