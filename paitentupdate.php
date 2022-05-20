<?php
    require("connect.php");
    session_start();
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title> Update data </title>
        <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


        
    </head>

    <body >
    <nav aria-label="Page navigation example" style="border: 1px dashed rgb(66, 133, 244);">	  	</nav>

<header>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="http://localhost/HMS/paitentdashbord.php">Paitent</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          
        </li>
        <li class="nav-item">
          
        </li>
        <li class="nav-item">
          
        </li>
      </ul>
      <form action="login.php" method="post" class="form-inline mt-2 mt-md-0">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">LOGOUT</button>
      </form>
      
    </div>
  </nav>
</header>
        <div class="container" style="margin-left: 750px; margin-top: 50px;">
            <div class="span3">
                <h2>Update Data</h2>
                <form action="" method="post">
                    <label>Name</label>
                    <input type="text" name="name" class="span3">

                    <label>Phone Number</label>
                    <input type="text" name="number" class="span3">

                    <label>Email Address</label>
                    <input type="email" name="email" class="span3">
                    
                    <label>Address</label>
                    <input type="text" name="address" class="span3">

                    <input type="submit" name="update" value="Update" class="btn btn-primary pull-right" >
                    <a href="http://localhost/HMS/paitentdashbord.php"> <button type="button" class="btn btn-danger">Back</button></a>
                    <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </body>

</html>

<?php
    

    if(isset($_POST['update']))
    {
        $userid=$_SESSION ['id'];
        $name=$_POST['name'];
        $number=$_POST['number'];
        $email=$_POST['email'];
        $address=$_POST['address'];

        $query="UPDATE `paitent` SET `name`='$name',`phone`='$number',`email`='$email',`address`='$address' WHERE `id`='$userid'";
        $data=mysqli_query($con,$query);

        if($data)
        {
            echo "";
        }
        else{
            echo "Failed";
        }
    }
    
    include("footer.php");

?>