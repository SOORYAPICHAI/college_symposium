<?php
session_start();
  if(isset($_SESSION['user_id']))
  {
  
  }
  else
  {

   echo "<script type='text/javascript'> document.location = 'http://cyborgzz.dx.am/admin/index.php'; </script>";
          exit();
  }
  
  ?>
<DOCTYPE html>
<html>
<head>
<title>admin_home</title>
<style>
body {
  background-image: url("images/admin_home.jpg");
  background-repeat: no-repeat;
  background-size: cover;
 
}
@media (min-width: 300em) {
  .iam{
   width:auto;
  height:60%;
  }
}
</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.1/css/mdb.min.css" rel="stylesheet">
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.2.1/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.1/js/mdb.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body >
<div>
<a class="navbar-brand logo" href="http://cyborgzz.dx.am" class="iam">
            <img  src="/home/assets/img/CYBER.png" alt="CYBORGZZ"/ style="height:50px;width:auto;float:left;">
           
			
        </a>
        <a href="logout.php">
        <i class="fa fa-sign-out" style="font-size:48px;color:red;float:right" ></i>
        </a>
</div>

<div>
<br>
<h2 style="color:white;text-align:center"><strong>WELCOME TO THE ADMIN PORTAL OF CYBORGZZ</strong></h2>
</div>
<br>
<br><br><br>
<div class="container">
<div class="row">
<div class="col-sm col-md-4 col-lg-4">
<button class="btn peach-gradient" onclick="window.location.href='quiz.php'"><span style="font-weight:bold;font-size:20px;">Brain Fizz&nbsp;</span><i class="fa fa-download" style="font-size:24px;color:red"></i></button>
</div>
<div class="col-sm col-md-4 col-lg-4">
<button class="btn peach-gradient" onclick="window.location.href='Adzap.php'"><span style="font-weight:bold;font-size:20px;">ADZAP&nbsp;</span><i class="fa fa-download" style="font-size:24px;color:red"></i></button>
</div>

<div class="col-sm col-md-4 col-lg-4" >
<button class="btn peach-gradient" onclick="window.location.href='Neo_Logic.php'"><span style="font-weight:bold;font-size:20px;">NEO LOGIC&nbsp;</span><i class="fa fa-download" style="font-size:24px;color:red"></i></button>
</div>
</div>
<div class="row">
<div class="col-sm col-md-4 col-lg-4" >
<button class="btn peach-gradient" onclick="window.location.href='connexion.php'"><span style="font-weight:bold;font-size:20px;">Link In&nbsp;</span><i class="fa fa-download" style="font-size:24px;color:red"></i></button>
</div>
<div class="col-sm col-md-4 col-lg-4" >
<button class="btn peach-gradient" onclick="window.location.href='block_and_tackle.php'"><span style="font-weight:bold;font-size:20px;">BLOCK & TACKLE &nbsp;</span><i class="fa fa-download" style="font-size:24px;color:red"></i></button>
</div>
<div class="col-sm col-md-4 col-lg-4" >
<button class="btn peach-gradient" onclick="window.location.href='paper_presentation.php'"><span style="font-weight:bold;font-size:18px;">Papyrus&nbsp;</span><i class="fa fa-download" style="font-size:24px;color:red"></i></button>
</div>

</div>
<br>
<br>
<br>
<br>
<div class="row">
<div class="col-sm col-md-6 col-lg-4">
<button class="btn aqua-gradient" onclick="window.location.href='csv.php'" ><span style="font-weight:bold;font-size:28px;">ALL EVENT&nbsp;</span><i class="fa fa-download" style="font-size:28px;color:red"></i></button>
</div>

</div>

</div>
</body>
</html>