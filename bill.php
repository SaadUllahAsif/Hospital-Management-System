<?php 
    require("connect.php");
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<title>Page Title</title>

<style>
    .h3 {
      font-family: Arial, Helvetica, sans-serif;
      text-decoration: underline;
    }
    h3 {
      text-decoration: underline;
    }



</style>
</head>

<body>
	<div class="container">
    
      <h1 style="text-align: center;">MediCare Hospital</h1>

      <h3 > Paitent Name: </h3>
      <?php echo $_SESSION['name']; ?>
        
      <h3 > Diagnostics Report: </h3>
      <?php echo $_SESSION['dignosdetails']; ?>
      
      <h3 > Test Reports: </h3>
      <?php echo  $_SESSION['testresult']; ?>

      <h3 > Medicines:  </h3>
      <?php echo $_SESSION['medicines']; ?>

      <h3 > Charges (Doctor Fee + Test fee):  </h3>
      <?php echo $_SESSION['fee']; ?> Ruppees
      
    
      

</div>

</body>
</html>
