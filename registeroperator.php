<!DOCTYPE html>
<html>
<head>
    <title> Registration </title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
      	@media (min-width:767px){
		.registration{
			max-width: 400px;
		}
	}  
    </style>
</head>
<body>

    <nav aria-label="Page navigation example" style="border: 1px dashed rgb(66, 133, 244);">	  	</nav>

<header>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="http://localhost/HMS/admindashbord.php">Administrator</a>
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
    <div class="container">
        <div class="registration mx-auto d-block w-100">
            <div class="page-header text-center">
                <h1>Data Entry Operator Registration</h1>
            </div>
            
            <form id="member-registration" action="" method="post" class="form-validate form-horizontal well">
                <fieldset>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Operator ID </label>
                        <input type="text" name="operatorid" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Name </label>
                        <input type="text" name="name" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email Address </label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Phone Number</label>
                        <input type="text" name="number" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Address</label>
                        <input type="text" name="address" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hint For Password </label>
                        <input type="text" name="hint" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password </label>
                        <input type="password" name="password" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="form-group d-flex justify-content-start">
                            <button type="submit" name="register" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

</body>

</html>

<?php

    require ("connect.php");
    if(isset($_POST['register']))
    {
        $operatorid= $_POST['operatorid'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $number = $_POST['number'];
        $address = $_POST['address'];
        $hint = $_POST['hint'];
        $password = $_POST['password'];


        $query="INSERT INTO `dataentryoperator`(`operatorid`, `name`, `email`, `phone`, `address`, `hintanswer`, `password`) VALUES ('$operatorid','$name','$email','$number','$address','$hint','$password')";
        $data = mysqli_query($con,$query);

        if($data){
            header("location:admindashbord.php");
            
        }
        else{
            echo "Registration Failed!";
        }
    }
    include("footer.php");
?>