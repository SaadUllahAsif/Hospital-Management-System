<?php
    require ("connect.php");
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>  
        <title>Login Page</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->
        <!--Made with love by Mutiullah Samim -->
    
        <!--Bootsrap 4 CDN-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        
        <!--Fontawesome CDN-->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

        <!--Custom styles-->
        <link rel="stylesheet" type="text/css" href="styles.css">
        
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
          </ul>
        </div>
      </nav>
    </header>
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3>Sign In</h3>
                        <div class="d-flex justify-content-end social_icon">
                            <span><i class="fab fa-facebook-square"></i></span>
                            <span><i class="fab fa-google-plus-square"></i></span>
                            <span><i class="fab fa-twitter-square"></i></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                </div>
                                <input type="text" name="email" class="form-control" placeholder="email">
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-key"></i></span>
                                </div>
                                <input type="password" name="password" class="form-control" placeholder="password">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="login" value="Login" class="btn float-right login_btn">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center">
                            <a href="http://localhost/HMS/recover.php">Forgot your password?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>            
    </body>
</html>

<?php
    if(isset($_POST['login']))
    {
        $email=$_POST['email'];
        $password=$_POST['password'];    
        $query=" SELECT * FROM `administrator` WHERE `email` = '$email' AND `password`= '$password' ";
        $data= mysqli_query($con,$query);
        $result= mysqli_num_rows($data);
        if( $result == 1) 
        { 
            $check=mysqli_fetch_assoc($data);
            $_SESSION['name']=$check['name'];
            header("location:admindashbord.php");
        }
         else
        {
            $email=$_POST['email'];
            $password=$_POST['password'];
            $query="SELECT * FROM `doctor` WHERE `email`='$email' AND `password`='$password'";
            $data= mysqli_query($con,$query);
            $result= mysqli_num_rows($data);
            if($result == 1)
            {
                $check=mysqli_fetch_assoc($data);
                $_SESSION['name']=$check['name'];
                header("location:doctordashbord.php");
            }
            else
            {
                $email=$_POST['email'];
                $password=$_POST['password'];
                $query="SELECT * FROM `paitent` WHERE `email`='$email' AND `password`= '$password'";
                $data= mysqli_query($con,$query);
                $result= mysqli_num_rows($data);
                if($result == 1)
                {
                    $check=mysqli_fetch_assoc($data);
                    $_SESSION['id']=$check['id'];
                    $_SESSION['name']=$check['name'];
                    $_SESSION['dignosdetails']=$check['dignosdetails'];
                    $_SESSION['fee']=$check['fee'];
                    $_SESSION['testresult']=$check['testresult'];
                    $_SESSION['medicines']=$check['medicines'];
                    header("location:paitentdashbord.php");
                }
                else
                {
                    $email=$_POST['email'];
                    $password=$_POST['password'];
                    $query="SELECT * FROM `dataentryoperator` WHERE `email`='$email' AND `password`='$password'";
                    $data= mysqli_query($con,$query);
                    $result= mysqli_num_rows($data);     
                    if($result == 1)
                    {
                        $check=mysqli_fetch_assoc($data);
                        $_SESSION['name']=$check['name'];
                        header("location:operatordashbord.php");
                    }
                    else
                    {
                        echo "Login failed!";
                    }
                }
            }
        }
    }   
?>