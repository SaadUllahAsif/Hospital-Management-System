<!DOCTYPE html>
<html>
    <head> 
      <title>
        Password Recovery
     </title>
     
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    </head>
    <body> 
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">MediCare</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="http://localhost/hms/index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/hms/login.php">Sign In</a>
            </li>
            <!-- <li class="nav-item">
              <a class="nav-link" href="http://localhost/hms/login.php">Doctors</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/hms/login.php">Data Entry Operator</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://localhost/hms/login.php">Patient</a>
            </li> -->
          </ul>
        </div>
      </nav>
    </header>
       
        <div class="container" style="margin-top: 8%; margin-bottom: 8%">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">Password Recovery</div>
                            <div class="card-body">
                                <form class="form-horizontal" method="post" action= data-toggle="modal" data-target="#exampleModal"  >
                                   
                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label">Your Email</label>
                                            <div class="cols-sm-10">
                                                    <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your Email" />
                                                    </div>
                                            </div>
                                    </div>   
                                    <div class="form-group">
                                        <label for="confirm" class="cols-sm-2 control-label">Phone Number</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="number" id="confirm" placeholder="Phone number" />
                                                </div>
                                            </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="confirm" class="cols-sm-2 control-label">Recovery Hint</label>
                                            <div class="cols-sm-10">
                                                <div class="input-group">
                                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                                        <input type="text" class="form-control" name="hint" id="confirm" placeholder="Hint" />
                                                </div>
                                            </div>
                                    </div>
                                   
                                    <div class="form-group">
                                        <input type="submit" value="submit" name="submit" class="btn btn-primary btn-lg btn-block login-button" > </input>   
                                         
                                    </div>
                                    
                                    <div class="login-register">
                                        <a href="login.php">Login</a>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
    require ("connect.php");
    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $nubmer = $_POST['number'];
        $hint = $_POST['hint'];

        $query="SELECT * FROM `doctor` WHERE `email`='$email' AND `phone`='$nubmer' AND `hintanswer`='$hint'";
        $data = mysqli_query($con,$query);
        $result= mysqli_num_rows($data);

        if($result == 1)
        {
            $row = $data->fetch_assoc();
            echo " Password: ". $row["password"];
            
        }
        else
        {
            $email = $_POST['email'];
            $nubmer = $_POST['number'];
            $hint = $_POST['hint'];

            $query="SELECT * FROM `dataentryoperator` WHERE `email`='$email' AND `phone`='$nubmer' AND `hintanswer`='$hint'";
            $data = mysqli_query($con,$query);
            $result= mysqli_num_rows($data);

            if($result == 1)
            {
                $row = $data->fetch_assoc();
                echo " Password: ". $row["password"];
                
            }
        
            else
            {
                
                $email = $_POST['email'];
                $nubmer = $_POST['number'];
                $hint = $_POST['hint'];
                $query="SELECT * FROM  `paitent` WHERE `email`='$email' AND `phone`='$nubmer' AND `hintanswer`='$hint'";
                $data = mysqli_query($con,$query);
                $result= mysqli_num_rows($data);

                if($result == 1)
                {
                    $row = $data->fetch_assoc();
                    echo " Password: ". $row["password"];
                        
                }
                else
                {
                    echo "False Information";
                }
            }
        } 
    }
    include("footer.php");
?>


