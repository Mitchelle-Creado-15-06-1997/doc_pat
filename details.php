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
          INFORMATION
        </div>
        <div class="card-body">
train 1-  <label>SOURCE-santacruz</label><br>
           <label>DESTINATION-churchgate</label><BR>
           <label>TIMINGS-12-56</label><br><br>
           train 2-<label>SOURCE-kalyan</label><br>
           <label>DESTINATION-borivali</label><BR>
           <label>TIMINGS-5-56</label>


          <form method="POST" action="details.php">
           
            <div class="col-md-6">
                  <label for="exampleInputPassword1"> enter train Number</label>
                  <input type="Number" class="form-control" id="exampleInputPassword1" placeholder="number 1/2" name="num">
                </div>

           
            <center> <input id="button" type="submit" name="submit" value="submit"></center>
          </form>
          

<script type="text/javascript">
  
</script>
             
        
      </div>
    </div>
     <?php
    require('config.php');
if(isset($_POST['submit'])) 
{
$num=$_POST['num'];
if($num==1 )
header('Location: traina.php');
if ($num==2) {
  header('Location: trainb.php');
  # code...
}
}



  
                  ?>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  </body>

</html>
