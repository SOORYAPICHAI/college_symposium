<?php
session_start();
  if(isset($_SESSION['user_id']))
  {
  
  }
  else
  {

   echo "<script type='text/javascript'> document.location = 'http://cyborgzz.dx.am/register'; </script>";
          exit();
  }
  
  ?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Free coming soon template with jQuery countdown">

  <title>CYBORGZZ</title>

  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/css/bootstrap-theme.css" rel="stylesheet">
  <link href="assets/css/font-awesome.css" rel="stylesheet">

  <!-- siimple style -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: WeBuild
    Theme URL: https://bootstrapmade.com/free-bootstrap-coming-soon-template-countdwon/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
  
  <style>
  @media (min-width: 300PX) {
  .iam{
   width:auto;
  height:80%;
  }
}
  </style>
</head>

<body style="width:100%">
<div >
            <a class="navbar-brand logo" href="http://cyborgzz.dx.am" class="iam">
            <img  src="/home/assets/img/cyborgzzlogo.png" alt="CYBORGZZ"/ style="height:100px;width:auto;float:left;">
           
			
        </a>
        
			
       
</div>
<br>
<br>
<br>
  <div id="wrapper">
  
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <!--<a href="http://cyborgzz.dx.am/home/">
          <h1 style="text-decoration:underline">CYBORGZZ</h1>
          </a>-->
          <h2 class="subtitle">Thank you for registering to our <strong>CYBORGZZ</strong> event</h2>
		  <h2 class="subtitle">We are looking out for your presence </h2>
          <div id="countdown"></div>
          

         
        </div>
      </div>

      

     
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.countdown.min.js"></script>
  <script type="text/javascript">
    $('#countdown').countdown('2019/03/02', function(event) {
      $(this).html(event.strftime('%w weeks %d days <br /> %H:%M:%S'));
    });
  </script>
 <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <p class="copyright">&copy; 2019 | CYBORGZZ | Futors club | All rights reserved.</p>
          
        </div>
      </div>

</body>

</html>
