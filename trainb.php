<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>information</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body style="background-color: #dedede ; background-image: url(m/slide_three.jpg);">
     <div class="container">

      <div class="card card-login mx-auto mt-5">
        <div class="card-header">
          DETAILS
        </div>
        <div class="card-body">
          <label>SOURCE-kalyan</label><br>
           <label>DESTINATION-borivali</label><BR>
           <label>TIMINGS-5-56</label>
          <div class="text-center">
         
            <form method="POST" action="traina.php">
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label for="exampleInputName">First name</label>
                  <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" placeholder="Enter first name" name="fname">
                </div>
                <div class="col-md-6">
                  <label for="exampleInputLastName">Last name</label>
                  <input type="text" class="form-control" id="exampleInputLastName" aria-describedby="nameHelp" placeholder="Enter last name" name="lname">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email Address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            </div>
            

            <div class="form-group">
              <div class="form-row">
                
              </div>
            </div>
            <center> <input id="button" type="submit" name="submit" value="book"></center>
          </form>
          </div>
        </div>
       
      </div>
    </div>
 
<?php

require('config.php');

function NewUser($con){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $source='kalyan';
  $dest='borivali';
  $timee='5-56';

 
  $query = "INSERT INTO book (fname,lname,email,source,dest,timee) VALUES ('$fname','$lname','$email','$source','$dest','$timee')";
  $data = mysqli_query($con , $query) or die (mysqli_error($con));
  if ($data==true) {
    echo "<script type='text/javascript'>alert('your booking has been complete.')</script>";
      //echo "your registration is complete.";
    }
    // if($email===$row['email'])
    // {
    //    echo "<script type='text/javascript'>alert('invalid emailid already exists')</script>";
    // }
 
}


function cancel($con){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
 $source='santacruz';
  $dest='churchgate';
  $timee='12-56';


  $query = "DELETE from book where email ='$_POST[email]'" ;
  $data = mysqli_query($con , $query) or die (mysqli_error($con));
  if ($data==true) {
    echo "<script type='text/javascript'>alert('your booking has been cancelled.')</script>";
      //echo "your registration is complete.";
    }
    // if($email===$row['email'])
    // {
    //    echo "<script type='text/javascript'>alert('invalid emailid already exists')</script>";
    // }
 
}


if (isset($_POST['submit']))
{
  //echo "post";
  NewUser($con);
  
} 
if (isset($_POST['cancel']))
 {
  cancel($con);
  # code...
}
?>



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
