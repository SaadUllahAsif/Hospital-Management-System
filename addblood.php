<!DOCTYPE html>
<html>
<head>
    <title> Add Blood </title>
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
    <a class="navbar-brand" href="#">Data Operator</a>
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
      <form action="login.php" method=""  class="form-inline mt-2 mt-md-0">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">LOGOUT</button>
      </form>
    </div>
  </nav>
</header>
    <div class="container">
        <div class="registration mx-auto d-block w-100">
            <div class="page-header text-center">
                <h1>Blood Bank</h1>
            </div>
            
            <form id="member-registration" action="" method="post" class="form-validate form-horizontal well">
                <fieldset>
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Blood Group </label>
                        <input type="text" name="group" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Quantity </label>
                        <input type="number" name="quantity" class="form-control" id="exampleInputPassword1">
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
        
        $group = $_POST['group'];
        $number = $_POST['quantity'];
        


        $query="INSERT INTO `bloodbank`(`bloodgroup`, `quantity`) VALUES ('$group','$number')";
        $data = mysqli_query($con,$query);

        if($data){
            echo "Blood Added";
            
        }
        else{
            echo "Not Added";
        }
    }
    include("footer.php");
?>

