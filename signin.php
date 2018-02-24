<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta name="description" content="">
    <meta name="author" content="">
    <title>LOGIN</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body style="background-color: #dedede ;">
    <div class="container">

      <div class="card card-login mx-auto mt-5">
        <div class="card-header">
          Login
        </div>
        <div class="card-body">
          <form method="POST" action="signin.php">
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="pass">
            </div>
            <div class="form-group">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                  Remember Password
                </label>
              </div>
            </div>
            <center> <input id="button" type="submit" name="submit" value="sign-in"></center>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="signup.php" >Register an Account</a>
           
          </div>
        </div>
        <center> <a href="index.php"> <BUTTON type="submit" style="background-color: #003366  ;color: white; "> GO TO MAIN PAGE</BUTTON></a></center>
      </div>
    </div>
     <?php
    require('config.php');

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
    $email=$_POST['email'];
$pass=$_POST['pass'];

                   if(isset($_POST['submit'])) 
                    { 
                      SignIn($con);
                    }
                    mysqli_close($con);
                    }

    function SignIn($con)
    { 
       
      //starting the session for user profile page
       if(!empty($_POST['email']) && !empty($_POST['pass']))
        //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
        { 
          $query = mysqli_query($con,"SELECT * FROM membe where email = '$_POST[email]' AND pass = '$_POST[pass]'") or die(mysqli_error($con));
         $row = mysqli_fetch_array($query) or die(mysqli_error($con));
          if(!empty($row['email']) AND !empty($row['pass']))
           {
            $_SESSION['email'] = $row['email'];
                            echo "<script type='text/javascript'>alert('SUCCESSFULLY LOGIN TO USER PROFILE PAGE...')</script>";

             //echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
             header('Location: details.php');
             } 
             else 
              { 
                echo "<script type='text/javascript'>alert('SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...')</script>";
                header('Location: details.php');
                //echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY..."; 
                }
                 }
                  }
                  ?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
