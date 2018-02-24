<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>REGISTER</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body  style="background-color: #dedede ;">

    <div class="container">

      <div class="card card-register mx-auto mt-5">
        <div class="card-header">
          Register an Account
        </div>
        <div class="card-body">
          <form method="POST" action="signup.php">
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
              <label for="exampleInputEmail1">Adhar card no</label>
              <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter no" name="adhar">
            </div>

            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
                </div>

                <div class="col-md-6">
                  <label for="exampleConfirmPassword">Confirm password</label>
                  <input type="password" class="form-control" id="exampleConfirmPassword" placeholder="Confirm password" name="cpass">
                </div>
              </div>
            </div>
            <center> <input id="button" type="submit" name="submit" value="sign-up"></center>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="signin.php">Login Page</a>
            

          </div>
        </div>
      <center> <a href="index.php"> <BUTTON type="submit" style="background-color: #003366  ;color: white; "> GO TO MAIN PAGE</BUTTON></a></center>
      </div>

    </div>
    <?php

require('config.php');

function NewUser($con){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $cpass = $_POST['cpass'];
  $query = "INSERT INTO membe (fname,lname,email,pass,cpass) VALUES ('$fname','$lname','$email','$pass','$cpass')";
  $data = mysqli_query($con , $query) or die (mysqli_error($con));
  if ($data==true) {
    echo "<script type='text/javascript'>alert('your registration is complete.')</script>";
      //echo "your registration is complete.";
    }
    // if($email===$row['email'])
    // {
    //    echo "<script type='text/javascript'>alert('invalid emailid already exists')</script>";
    // }
  if ($pass!=$cpass) {
    $query= "UPDATE membe SET pass ='$cpass' WHERE email='$email' ";
    //echo $query;
    $data = mysqli_query($con,$query) or die (mysqli_error($con));
    if ($data) {
       echo "<script type='text/javascript'>alert('update successful.')</script>";
      //echo "update successful";
      # code...
    }

  if ($data) {
    echo "<script type='text/javascript'>alert('your registration is complete.')</script>";
   // echo "your registration is complete.";
    # code...
  }
}
}

function Signup($con){
  if(!empty($_POST['email']))
  {
    //echo "signup";
    $query = mysqli_query($con,"SELECT * FROM membe WHERE email ='$_POST[email]' AND pass = '$_POST[pass]'")or die (mysqli_error($con));

    



    # code...
  
    if (!$row = mysqli_fetch_array($query) or die (mysqli_error($con))) 
    {
      //echo "new user";
      NewUser($con);
      # code...
    }
    else{
      echo "<script type='text/javascript'>alert('sorry.......you are already registered.')</script>";
      //echo "sorry.......you are already registered.";
    }
  }
}


if (isset($_POST['submit']))
{
  //echo "post";
  Signup($con);
  
} 
?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
