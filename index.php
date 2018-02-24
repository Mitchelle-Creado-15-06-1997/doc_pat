<!DOCTYPE html>
<html lang="en"> 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
  <title>Railway Reservation System</title>
  <link rel="stylesheet" href="m/css/font-awesome.min.css">
  <link rel="stylesheet" href="m/css/bootstrap.min.css">
  <link rel="stylesheet" href="m/css/style.css">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
  <script src="m/js/modernizr.js"></script>
  <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body style="background-color:  #003366;">
  
  <!-- ====================================================
  header section -->
  <header class="top-header" style="background-color:  #003366">
    <div class="container" style="background-color:  white;  size: landscape;" >
      <div class="row">
        <div class="col-xs-5 header-logo">
          <br>
          <a href="index.html"><img src="img/logo.jpg" alt="" class="img-responsive logo" style="height: 100px;width: 100px"></a>
        </div>

        <div class="col-md-7">
          <nav class="navbar navbar-default">
          
            <div class="container-fluid nav-bar">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header navbar-left"  style="color: #dedede;">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                
                <ul class="nav navbar-nav navbar-right">
                  <li><a class="menu active" href="#home" >Home</a></li>
                  <li><a class="menu" href="#about">about us</a></li>
                 
                  <li><a class="menu" href="#contact"> contact us</a></li>
                </ul>
              </div><!-- /navbar-collapse -->
            </div><!-- / .container-fluid -->
          </nav>
        </div>
      </div>
    </div>
  </header> <!-- end of header area -->

  <section class="slider" id="home">
    <div class="container-fluid">
      <div class="row">
          <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="header-backup"></div>
              <!-- Wrapper for slides -->
              <div class="carousel-inner" role="listbox">
                  <div class="item active">
                    <img src="m/slide-three.jpg" alt="" style="height: 400px; width: 100%;">
                      <div class="carousel-caption">
                       <h3 style="color: white">Rail-Way</h3>
                       
<button type="button" class="btn" data-toggle="modal" data-target="#myModal2" style="background-color: #003366;color: white;">click me</button>
                      </div>
                  </div>
                  <div class="item">
                    <img src="m/slide-one.jpg" alt="" style="height: 400px; width: 100%;">
                      <div class="carousel-caption">
                       <h3 style="color: white">Rail-Way</h3>
                       
<button type="button" class="btn" data-toggle="modal" data-target="#myModal2" style="background-color: #003366;color: white;">click me</button>
                
                      </div>
                  </div>
                  <div class="item">
                    <img src="m/slide-three.jpg" alt="" style="height: 400px; width: 100%;">
                      <div class="carousel-caption">
                        <h3 style="color: white">Rail-Way</h3>
                       
<button type="button" class="btn" data-toggle="modal" data-target="#myModal2" style="background-color: #003366;color: white;">click me</button>
              </div>
                  </div>
                  <div class="item">
                    <img src="m/slide-four.jpg" alt="" style="height: 400px; width: 100%;">
                      <div class="carousel-caption">
                        <h3 style="color: white">Rail-Way</h3>
                       
<button type="button" class="btn" data-toggle="modal" data-target="#myModal2" style="background-color: #003366;color: white;">click me</button>
</div>                  </div>
              </div>
              <!-- Controls -->
              <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
      </div>
    </div>
  </section><!-- end of slider section -->

  <!-- about section -->
  

  <!-- service section starts here -->
  <!-- team section -->
  
  <!-- map section -->
  <div class="api-map" id="contact">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 map" id="map"></div>
      </div>
    </div>
  </div><!-- end of map section -->

  <!-- contact section starts here -->
  <section class="contact">
    <div class="container">
      <div class="row">
        <div class="contact-caption clearfix">
          <div class="contact-heading text-center">
            <h2>contact us</h2>
          </div>
          <div class="col-md-5 contact-info text-left">
            <h3>contact information</h3>
            <div class="info-detail">
              
              <ul><li><span>Address:</span> 123 Some Street , London, UK, CP 123</li></ul>
              <ul><li><i class="fa fa-phone"></i><span>Phone:</span> (032) 987-1235</li></ul>
              <ul><li><i class="fa fa-fax"></i><span>Fax:</span> (123) 984-1234</li></ul>
              <ul><li><i class="fa fa-envelope"></i><span>Email:</span> info@doctor.com</li></ul>
            </div>
          </div>
          <div class="col-md-6 col-md-offset-1 contact-form">
            <h3>leave us a message</h3>

            <form class="form" action="index.php" method="POST">
              <input class="name" type="text" placeholder="Name" name="name">
              <input class="email" type="email" placeholder="Email" name="email">
              <input class="phone" type="text" placeholder="Phone No:" name="phone">
              <textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="Message" name="message"></textarea>
              <input class="submit-btn" type="submit" value="SUBMIT">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section><!-- end of contact section -->

<?php

require('config.php');
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$message=$_POST['message'];
if ($email!=null) {
  # code...

$query="INSERT into comment (name,email,phone,message) values('$name','$email','$phone','$message')";
$data=mysqli_query($con,$query) or die (mysqli_error($con));
if($data==true)
{
  echo "<script> alert('thans for contacting us')</script>";
}
else
{
  echo "<script> alert('your query not been sent')</script>";
}
}
?>

  <div>
    


  </div>

  <!-- footer starts here -->
  <footer class="footer clearfix" style="background-color: white">
    <div class="container">
      <div class="row">
        <div class="col-xs-6 footer-para">
          <center><h4 style="padding-left: 450px">&copy;creadomitchelle</h4></center>
        </div>
        <div class="col-xs-6 text-right">
          <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
          <a href="https://twitter.com/?lang=en-in"><i class="fa fa-twitter"></i></a>
          <a href="https://login.skype.com/login"><i class="fa fa-skype"></i></a>
        </div>
      </div>
    </div>
  </footer>




  <div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>

      </div>
      <div class="modal-body">
 <div class="col-md-6 col-sm-6">
          <div class="single-about-detail clearfix">
            <div class="about-img">
              <img class="img-responsive" src="m/slide_one.jpg" alt="" style="height: 200px ; height: 200px">
            </div>
            <div class="about-details">
             
            <a href="signup.php"> <CENTER>  <h3>Register</h3>
             <p>signup as member.</p></a></CENTER>
            </div>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="single-about-detail">
            <div class="about-img">
              <img class="img-responsive" src="m/slide_two.jpg" alt="" style="height: 200px ; height: 200px">
            </div>
            <div class="about-details">
             
 <a href="signin.php">
             <center> <h3>Login </h3>
              <p>Login as a member.</p></a></center>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>






  




  <!-- script tags
  ============================================================= -->
  <script src="m/js/jquery-2.1.1.js"></script>
  <script src="m/http://maps.google.com/maps/api/js?sensor=true"></script>
  <script src="m/js/gmaps.js"></script>
  <script src="m/js/smoothscroll.js"></script>
  <script src="m/js/bootstrap.min.js"></script>
  <script src="m/js/custom.js"></script>
</body>
</html>