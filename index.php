<?php //error_reporting(0);
include('includes/config.php'); 

if(isset($_POST['book']))
{
$ptype=$_POST['packagetype'];
$wpoint=$_POST['washingpoint'];   
$fname=$_POST['fname'];
$mobile=$_POST['contactno'];
$date=$_POST['washdate'];
$time=$_POST['washtime'];
$message=$_POST['message'];
$status='New';
$bno=mt_rand(100000000, 999999999);
$sql="INSERT INTO tblcarwashbooking(bookingId,packageType,carWashPoint,fullName,mobileNumber,washDate,washTime,message,status) VALUES(:bno,:ptype,:wpoint,:fname,:mobile,:date,:time,:message,:status)";
$query = $dbh->prepare($sql);
$query->bindParam(':bno',$bno,PDO::PARAM_STR);
$query->bindParam(':ptype',$ptype,PDO::PARAM_STR);
$query->bindParam(':wpoint',$wpoint,PDO::PARAM_STR);
$query->bindParam(':fname',$fname,PDO::PARAM_STR);
$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
$query->bindParam(':date',$date,PDO::PARAM_STR);
$query->bindParam(':time',$time,PDO::PARAM_STR);
$query->bindParam(':message',$message,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);
$query->execute();
$lastInsertId = $dbh->lastInsertId();
if($lastInsertId)
{
 
  echo '<script>alert("Your booking done successfully. Booking number is "+"'.$bno.'")</script>';
 echo "<script>window.location.href ='washing-plans.php'</script>";
}
else 
{
 echo "<script>alert('Something went wrong. Please try again.');</script>";
}

}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Car Wash management System | Home Page</title>


        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

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

        <!-- Carousel Start -->
        <div class="carousel">
            <div class="container-fluid">
                <div class="owl-carousel">
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/car1.jpeg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Keep your Car Newer</h1>
                       
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/car3.jpeg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Quality service for you</h1>
                      
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-img">
                            <img src="img/car4.jpeg" alt="Image">
                        </div>
                        <div class="carousel-text">
                            <h3>Washing & Detailing</h3>
                            <h1>Exterior & Interior Washing</h1>
                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Carousel End -->
        

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


        <!-- Service Start -->
        <div class="service">
            <div class="container">
                <h1 class="vertical-line-text-right"><span>What We Do</span></h1>
                <h1 class="vertical-line-text2-right"><span>What We Do?</span></h1>
                <div class="vertical-line-right"></div><br>
                <h2>Premium Washing Services</h2>
                <div class="row margin-custom-service">
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash-1"></i>
                            <h3>Exterior Washing</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash"></i>
                            <h3>Interior Washing</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-vacuum-cleaner"></i>
                            <h3>Vacuum Cleaning</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-seat"></i>
                            <h3>Seats Washing</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-service"></i>
                            <h3>Window Wiping</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-service-2"></i>
                            <h3>Wet Cleaning</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-car-wash"></i>
                            <h3>Oil Changing</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="service-item">
                            <i class="flaticon-brush-1"></i>
                            <h3>Brake Reparing</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->
        
        
        <!-- Facts Start -->
        <div class="facts" data-parallax="scroll" data-image-src="img/facts.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-map-marker-alt"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">25</h3>
                                <p>Service Points</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-user"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">350</h3>
                                <p>Engineers & Workers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-users"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">1500</h3>
                                <p>Happy Clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="facts-item">
                            <i class="fa fa-check"></i>
                            <div class="facts-text">
                                <h3 data-toggle="counter-up">5000</h3>
                                <p>Projects Completed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->
        
        
        <!-- Price Start -->
        <div class="price">
            <div class="container">
                <div class="vertical-line">
                    <h1 class="vertical-line-text">Pricing</h1>
                    <h1 class="vertical-line-text2">Pricing</h1>
                </div>
                <p class="price-text"><span>
                At WashPro, we believe in providing high-quality car care at a<br>price that fits your budget. Choose from our carefully designed<br>packages, whether you need a quick touch-up or a comprehensive<br>cleaning session. We aim to make your car feel brand new, inside and out!
                </span></p>
                <div class="service-cards">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Basic Cleaning</h3>
                                <h2><span>$</span><strong>10</strong><span>.99</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Window Wiping</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom"  data-toggle="modal" data-target="#myModal">Book Now</a>
                            </div>
                        </div>
                        </div>
                        <div class="col">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <h3>Premium Cleaning</h3>
                                <h2><span>$</span><strong>20</strong><span>.99</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Window Wiping</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom"  data-toggle="modal" data-target="#myModal">Book Now</a>
                            </div>
                        </div>
                        </div>
                        <div class="col">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Complex Cleaning</h3>
                                <h2><span>$</span><strong>30</strong><span>.99</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Window Wiping</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom"  data-toggle="modal" data-target="#myModal">Book Now</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>



                <!-- <div class="row">
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Basic Cleaning</h3>
                                <h2><span>$</span><strong>10</strong><span>.99</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Window Wiping</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom"  data-toggle="modal" data-target="#myModal">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item featured-item">
                            <div class="price-header">
                                <h3>Premium Cleaning</h3>
                                <h2><span>$</span><strong>20</strong><span>.99</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-times-circle"></i>Window Wiping</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom"  data-toggle="modal" data-target="#myModal">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="price-item">
                            <div class="price-header">
                                <h3>Complex Cleaning</h3>
                                <h2><span>$</span><strong>30</strong><span>.99</span></h2>
                            </div>
                            <div class="price-body">
                                <ul>
                                    <li><i class="far fa-check-circle"></i>Seats Washing</li>
                                    <li><i class="far fa-check-circle"></i>Vacuum Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Exterior Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Interior Wet Cleaning</li>
                                    <li><i class="far fa-check-circle"></i>Window Wiping</li>
                                </ul>
                            </div>
                            <div class="price-footer">
                                <a class="btn btn-custom"  data-toggle="modal" data-target="#myModal">Book Now</a>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
        <!-- Price End -->
        
        


        <!-- Footer Start -->
   <?php include_once('includes/footer.php');?>
        
<!--Model-->
 <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Car Wash Booking</h4>
        </div>
        <div class="modal-body">
<form method="post">   
  <p>
            <select name="packagetype" required class="form-control">
                <option value="">Package Type</option>
                <option value="1">BASIC CLEANING ($10.99)</option>
                 <option value="2">PREMIUM CLEANING ($20.99)</option>
                  <option value="3 ">COMPLEX CLEANING($30.99)</option>
              </select>

          <p>
            <select name="washingpoint" required class="form-control">
                <option value="">Select Washing Point</option>
<?php $sql = "SELECT * from tblwashingpoints";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
foreach($results as $result)
{               ?>  
    <option value="<?php echo htmlentities($result->id);?>"><?php echo htmlentities($result->washingPointName);?> (<?php echo htmlentities($result->washingPointAddress);?>)</option>
<?php } ?>
            </select></p>
            <p><input type="text" name="fname" class="form-control" required placeholder="Full Name"></p>
            <p><input type="text" name="contactno" class="form-control" pattern="[0-9]{10}" title="10 numeric characters only" required placeholder="Mobile No."></p>
            <p>Wash Date <br /><input type="date" name="washdate" required class="form-control"></p>
             <p>Wash Time <br /><input type="time" name="washtime" required class="form-control"></p>
             <p><textarea name="message"  class="form-control" placeholder="Message if any"></textarea></p>
             <p><input type="submit" class="btn btn-custom" name="book" value="Book Now"></p>
      </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


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

