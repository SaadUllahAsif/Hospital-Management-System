<?php
    require("connect.php");
    session_start();
    ?>
<!DOCTYPE html>
<html>
    <head>
        <title> Paiten Record </title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
            
        <!-- Start: injected by Adguard -->


        <!-- End: injected by Adguard -->
        <link rel="icon" href="../../../../favicon.ico">

        <title>Carousel Template for Bootstrap</title>

        <!-- Bootstrap core CSS -->
        <link href="../../css/editor.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="carousel.css" rel="stylesheet">
    </head>

    <body>
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

<svg xmlns="http://www.w3.org/2000/svg" width="500" height="500" viewBox="0 0 500 500" preserveAspectRatio="none" style="display: none; visibility: hidden; position: absolute; top: -100%; left: -100%;">
    <defs>
    <style type="text/css"></style>
    </defs>
    <text x="0" y="25" style="font-weight:bold;font-size:25pt;font-family:Arial, Helvetica, Open Sans, sans-serif">500x500</text>
    </svg>
    <table class="table" style="">
                    <thead>
                        <tr>
                            <th>Paitent ID</th>
                            <th>Date</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Pasward hint</th>
                            <th>Dignose Details</th>
                            <th>Advised Test</th>
                            <th>Test Result</th>
                            <th>Medicens</th>
                            <th>Diet Advice</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        
                            $userid=$_SESSION ['id'];

                            $query = " SELECT * FROM `paitent`WHERE `id`='$userid'  ";

                            $data = mysqli_query($con,$query);
                            if($data)
                                {
                                    while ($row = $data->fetch_assoc())
                                        {
                                            echo "<tr><td> ". $row["paitentno"]. " </td><td> ". $row["date"].
                                             " </td><td> ". $row["name"]. " </td><td> ". $row["phone"]. "
                                             </td><td> ". $row["address"]. "</td><td> ". $row["email"]. 
                                             "</td><td> ". $row["password"]."</td><td> ". $row["hintanswer"]."
                                             </td><td> ". $row["dignosdetails"]. "</td><td> ". $row["testadvise"]. "
                                             </td><td> ". $row["testresult"]. "</td><td> ". $row["medicines"]. 
                                             "</td><td> ". $row["dietadvice"]."</td>
                                             <td><a href= 'paitentupdate.php?id=". $row["id"]."'> Edit</a></td></tr> <br> ";
                                             
                                                                                
                                        }
                                }
                            else {"ERROR";}
                        ?>
                    </tbody>
                </table>   
            </div>
        </div>
        </div>
        <a href="http://localhost/hms/bill.php"> <button type="button" class="btn btn-danger">Bill</button></a>
    </body>
</html>
<?php include("footer.php");