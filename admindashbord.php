<?php 
  require("connect.php");
  session_start();

$query="SELECT * FROM `doctor`";
$data=mysqli_query($con,$query);
$doctor=mysqli_num_rows($data);
if($doctor)
{ }
else{echo "not ok";}

$query="SELECT * FROM `dataentryoperator`";
$data=mysqli_query($con,$query);
$operator=mysqli_num_rows($data);
if($operator)
{ }
else{echo "not ok";}

$query="SELECT * FROM `paitent`";
$data=mysqli_query($con,$query);
$paitent=mysqli_num_rows($data);
if($paitent)
{ }
else{echo "not ok";}

$query="SELECT * FROM `doners`";
$data=mysqli_query($con,$query);
$doners=mysqli_num_rows($data);
if($doners)
{ }
else{echo "not ok";}

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
        echo "Registered!";
        
    }
    else{
        echo "Registration Failed!";
    }
}

if(isset($_POST['submit']))
{
    $doctorid= $_POST['doctorid'];
    $name = $_POST['name'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $email = $_POST['email'];
    $department = $_POST['department'];
    $hint = $_POST['hint'];
    $password = $_POST['password'];


    $query="INSERT INTO `doctor`(`doctorid`, `name`, `phone`, `address`, `email`, `department`, `hintanswer`, `password`) VALUES ('$doctorid','$name','$number','$address','$email','$department','$hint','$password')";
    $data = mysqli_query($con,$query);

    if($data){
        echo "Registered!";
        
    }
    else{
        echo "Registration Failed!";
    }
}


?>

<!DOCTYPE html>
<html>
    <head> 
         <title>Administration</title>

        <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        
        
        <style> 
                body {
            background: #F1F3FA;
            }

            /* Profile container */
            .profile {
            margin: 20px 0;
            }

            /* Profile sidebar */
            .profile-sidebar {
            padding: 20px 0 10px 0;
            background: #fff;
            }

            .profile-userpic img {
            float: none;
            margin: 0 auto;
            width: 50%;
            height: 50%;
            -webkit-border-radius: 50% !important;
            -moz-border-radius: 50% !important;
            border-radius: 50% !important;
            }

            .profile-usertitle {
            text-align: center;
            margin-top: 20px;
            }

            .profile-usertitle-name {
            color: #5a7391;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 7px;
            }

            .profile-usertitle-job {
            text-transform: uppercase;
            color: #5b9bd1;
            font-size: 12px;
            font-weight: 600;
            margin-bottom: 15px;
            }

            .profile-userbuttons {
            text-align: center;
            margin-top: 10px;
            }

            .profile-userbuttons .btn {
            text-transform: uppercase;
            font-size: 11px;
            font-weight: 600;
            padding: 6px 15px;
            margin-right: 5px;
            }

            .profile-userbuttons .btn:last-child {
            margin-right: 0px;
            }
                
            .profile-usermenu {
            margin-top: 30px;
            }

            .profile-usermenu ul li {
            border-bottom: 1px solid #f0f4f7;
            }

            .profile-usermenu ul li:last-child {
            border-bottom: none;
            }

            .profile-usermenu ul li a {
            color: #93a3b5;
            font-size: 14px;
            font-weight: 400;
            }

            .profile-usermenu ul li a i {
            margin-right: 8px;
            font-size: 14px;
            }

            .profile-usermenu ul li a:hover {
            background-color: #fafcfd;
            color: #5b9bd1;
            }

            .profile-usermenu ul li.active {
            border-bottom: none;
            }

            .profile-usermenu ul li.active a {
            color: #5b9bd1;
            background-color: #f6f9fb;
            border-left: 2px solid #5b9bd1;
            margin-left: -2px;
            }

            /* Profile Content */
            .profile-content {
            padding: 20px;
            background: #fff;
            min-height: 460px;
            }
            
            .panel-body .btn:not(.btn-block) { width:240px;margin-bottom:10px; }
        </style>    
    </head>
    <body>
        <nav class="navbar navbar-default" role="navigation">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                         <?php echo $_SESSION ['name']; ?>  
                         <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                            <li><a href="#">Profile</a> 
                                    <li><a href="login.php">Logout</a> 
                            </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
        <div class="container">
            <div class="row profile">
		        <div class="col-md-3">
			        <div class="profile-sidebar">
			            <div class="profile-usermenu">
				            <ul class="nav">
                                <li>
                                    <a href="http://localhost/HMS/viewdoctor.php">
			                        <i class="glyphicon glyphicon-ok"></i>
						            Doctor </a>
                                </li>
                                <li>
						            <a href="http://localhost/HMS/Viewoperator.php">
						            <i class="glyphicon glyphicon-ok"></i>
						            Data Operator</a>
					            </li>
						        <li>
							        <a href="http://localhost/HMS/viewpaitents.php">
							        <i class="glyphicon glyphicon-ok"></i>
							        Paitent </a>
						        </li>
                                <li>
							        <a href="http://localhost/HMS/viewbloodbank.php">
							        <i class="glyphicon glyphicon-ok"></i>
							        Blood Bank </a>
						        </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"> 
                                        Registration 
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li>
                                            <form action="" method="post" >
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                                                    Doctor
                                                </button>

                                                    <!-- Modal -->
                                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Doctor</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                               
                                                                <fieldset>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputPassword1">Doctor ID </label>
                                                                        <input type="text" name="doctorid" class="form-control" id="exampleInputPassword1" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputPassword1">Name </label>
                                                                        <input type="text" name="name" class="form-control" id="exampleInputPassword1" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputPassword1">Phone Number</label>
                                                                        <input type="text" name="number" class="form-control" id="exampleInputPassword1"required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputPassword1">Address</label>
                                                                        <input type="text" name="address" class="form-control" id="exampleInputPassword1" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Email Address </label>
                                                                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Department </label>
                                                                        <input type="text" name="department" class="form-control" id="exampleInputEmail1" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Hint For Password </label>
                                                                        <input type="text" name="hint" class="form-control" id="exampleInputEmail1" required>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="exampleInputEmail1">Password </label>
                                                                        <input type="password" name="password" class="form-control" id="exampleInputEmail1" required>
                                                                    </div>
                                                                </fieldset>
                                                
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                                                <!-- <button type="button" class="btn btn-primary" name='upload'>Upload</button> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                        </li>                                        
                                        <li>
                                           <form action="" method="post" >
                                                <!-- Button trigger modal -->
                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
                                                    Data Operator
                                                </button>

                                                        <!-- Modal -->
                                                <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Data Operator</h5>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                
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
                                                                            
                                                                        </div>
                                                                    </div>  
                                                                </fieldset>
                                                    
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                <button type="submit" name="register" class="btn btn-primary">Submit</button>
                                                                <!-- <button type="button" class="btn btn-primary" name='upload'>Upload</button> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            </ul>      
			            </div>
                    </div>
				</div>        <!-- END MENU -->
                <div class="col-md-9">
                    <div class="profile-content">
                        <div class="Back">
                            <i class="fa fa-arrow-left" onclick="Back()"></i>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">                        
                                    <div class="panel-body">
                                        <div class="row">
                                           <div class="col-xs-6 col-md-6">
                                                <a href="#" class="btn btn-success btn-lg" role="button"> <?php echo $doctor ?> <br/>Doctor</a>
                                                <a href="#" class="btn btn-info btn-lg" role="button"><?php echo $operator ?> <br/>Data Operator</a>
                                            </div>
                                            <div class="col-xs-6 col-md-6">
                                                <a href="#" class="btn btn-primary btn-lg" role="button"><?php echo $paitent ?></span> <br/>Paitent</a>
                                                <a href="#" class="btn btn-primary btn-lg" role="button"><?php echo $doners ?> <br/>Doner</a>
                                            </div>
                                        </div>                                
                                    </div>    
                                </div>
                            </div>
                        </div>      
                    </div>
                </div>
            </div>
            <br><br><br><br>
        </div>   
        <?php include("footer.php"); ?>
    </body>
</html>
