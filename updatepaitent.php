<!DOCTYPE html>
<html>
    <head>
        <title> Update Paitent </title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
                            form_main {
                width: 100%;
            }
            .form_main h4 {
                font-family: roboto;
                font-size: 20px;
                font-weight: 300;
                margin-bottom: 15px;
                margin-top: 20px;
                text-transform: uppercase;
            }
            .heading {
                border-bottom: 1px solid #fcab0e;
                padding-bottom: 9px;
                position: relative;
            }
            .heading span {
                background: #9e6600 none repeat scroll 0 0;
                bottom: -2px;
                height: 3px;
                left: 0;
                position: absolute;
                width: 75px;
            }   
            .form {
                border-radius: 7px;
                padding: 6px;
            }
            .txt[type="text"] {
                border: 1px solid #ccc;
                margin: 10px 0;
                padding: 10px 0 10px 5px;
                width: 100%;
            }
            .txt_3[type="text"] {
                margin: 10px 0 0;
                padding: 10px 0 10px 5px;
                width: 100%;
            }
            .txt2[type="submit"] {
                background: #242424 none repeat scroll 0 0;
                border: 1px solid #4f5c04;
                border-radius: 25px;
                color: #fff;
                font-size: 16px;
                font-style: normal;
                line-height: 35px;
                margin: 10px 0;
                padding: 0;
                text-transform: uppercase;
                width: 30%;
            }
            .txt2:hover {
                background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
                color: #5793ef;
                transition: all 0.5s ease 0s;
            }

        </style>
    </head>
    <body>

    <nav aria-label="Page navigation example" style="border: 1px dashed rgb(66, 133, 244);">	  	</nav>

<header>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="http://localhost/HMS/operatordashbord.php">Data Operator</a>
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
	<div class="row">
    <div class="col-md-4">
		<div class="form_main">
                <h4 class="heading"><strong>Update Paitent </strong> <span></span></h4>
                <div class="form">
                <form action="" method="post" id="contactFrm" name="contactFrm">

                    <input type="text"  placeholder="Registration Number"  name="number" class="txt">
                    
                	 <textarea placeholder="Dignostics Details" name="dignosticsdetails" type="text" class="txt_3"></textarea>
                     <textarea placeholder="Test Result" name="testresult" type="text" class="txt_3"></textarea>
                     <textarea placeholder="Medicines" name="medicines" type="text" class="txt_3"></textarea>
                     <textarea placeholder="Diet Advice" name="dietadvice" type="text" class="txt_3"></textarea>
                     <textarea placeholder="Doctor Charges" name="fee" type="text" class="txt_3"></textarea>
                     

                     <input type="submit" value="submit" name="submit" class="txt2">
                </form>
            </div>
        </div>
            </div>
	    </div>
    </div>
    </body>

</html>

<?php
    require("connect.php");

    if(isset($_POST['submit']))
    {
        $regno=$_POST['number'];
        $dignosticdetails=$_POST['dignosticsdetails'];
        $testresulr=$_POST['testresult'];
        $medicine=$_POST['medicines'];
        $dietadvice=$_POST['dietadvice'];
        $fee=$_POST['fee'];

        $query="UPDATE `paitent` SET `dignosdetails`='$dignosticdetails',`medicines`='$medicine' ,`dietadvice`='$dietadvice',`testresult`='$testresulr',`fee`='$fee' WHERE `paitentno`='$regno'";
        $data=mysqli_query($con,$query);

        if($data)
        {
            echo "updated";
        }
        else
        {
            echo "failed";
        }
    }

    include("footer.php");
?>
