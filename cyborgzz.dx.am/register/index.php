<?php

 session_start();
  
     $_SESSION['user_id'] = 5;  
?>

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->


<!DOCTYPE HTML>
<html language="en"  oncontextmenu="return false">
<head>
<title>REGISTERATION</title>
<!-- Meta tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="alpha arts and science,alpha,computerscience,Symposium" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta tags -->
<script src="js/validation.js"></script>
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<!-- Stylesheet -->
<link href="css/style.css" rel='stylesheet' />
<!-- //Stylesheet -->
<!--fonts--> 
<link href="fonts/Roboto.html" rel="stylesheet">
<link href="fonts/Love_Ya_Like_A_Sister.html" rel="stylesheet">
<!--//fonts--> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<!-- -->

<!-- -->

<style>
@media (min-width: 300em) {
  .iam,.img2{
   width:auto;
  height:60%;
  }
}
#particles-js{
  width: 100%;
  height: 100%;
  position: fixed;
  background-color: #000;
  background-image: url('');
  background-size: cover;
  background-position: 50% 50%;
  background-repeat: no-repeat;
}

.body-particles{
  position: absolute;
  top: 0;
  left: 0;
  z-index: 100;
}

h1{
 font-family: 'Anton';font-size: 26px;
</style>

</head>
<body>
<!--	<div id="particles-js"></div>
<script src="E:\WAMP\www\SignUpWithDbConn and Forgot Page\checkSignUp\particles.js"></script>
<script src="E:\WAMP\www\SignUpWithDbConn and Forgot Page\checkSignUp\app.js"></script>-->
<!--background-->

<div >
<br>
            <a class="navbar-brand logo" href="http://cyborgzz.dx.am" class="iam">
            <img  src="/home/assets/img/cyborgzzlogo.png" alt="CYBORGZZ"/ style="height:100px;width:auto;float:left;"><br>
           
			
        </a>
        <!-- <img class="img2" src="/home/assets/img/logo1.png" alt="alpha" style="height:100px;width:auto;float:right;margin-right:2%;">-->
			
       
</div>
<br>
<br>
<br><br>
<br>
<br>

<!--<h1><a href="http://cyborgzz.dx.am/home/" style="color:white">CYBORGZZ</a> SYMPOSIUM 2019 </h1>-->
    <div class="bg-agile">

	<div class="book-appointment">
	<h2>Registration Opens Now</h2>
	
						<div class="book-form agileits-login">
							<form action="insert.php" method="post" name="register" autocomplete="off">
								<div class="agileits_reservation_grid">
								<div class="phone_email">
									<div class="form-text">
										<i class="fa fa-user" aria-hidden="true"></i>
										<input type="text" name="Name_first" placeholder="First name" required>
                                                                                <div id="f_name" style="display:none;color:red">Please don't leave this field empty</div>
									</div> 
								</div>
								<div class="phone_email phone_email1">
									<div class="form-text">
										<i class="fa fa-user" aria-hidden="true"></i>
										<input type="text" name="Name_last" placeholder="Last name" required>
                                                                                <div id="l_name"style="display:none;color:red">Please don't leave this field empty</div>                                                                                
									</div>
								</div>
								
								<div class="phone_email">
									<div class="form-text">
										<i class="fa fa-phone" aria-hidden="true"></i>
										<input type="text" name="Phone" placeholder="Phone number" required>
                                                                                <div id="phone" style="display:none;color:red">Please don't leave this field empty</div>                                                                                
									</div> 
								</div> 
								<div class="phone_email phone_email1">
									<div class="form-text">
										<i class="fa fa-envelope-o" aria-hidden="true"></i>
										<input type="email" name="emails" placeholder="Email" required>
                                                                                <div id="email" style="display:none;color:red">Please don't leave this field empty</div>                                                                                
									</div>
								</div>
									
								
									
									<div class="span1_of_1">
										<!-- start_section_room -->
										<div class="section_room">
											<i class="fa fa-university" aria-hidden="true"></i>
											<select id="country" onchange="change_country(this.value)" class="frm-field required" name="college" required>
												<option value="">College Name</option>
                                                                                                <option value="Asan Memorial College of Arts and Science">Asan Memorial College of Arts and Science</option>
												<option value="Bhaktavatsalam Memorial College for Women">Bhaktavatsalam Memorial College for Women</option>         
												<option value="Meenakshi College for Women">Meenakshi College for Women</option>
												<option value="Sriram College of Arts and Science">Sriram College of Arts and Science</option>
												<option value="Tagore College of Arts and Science">Tagore College of Arts and Science</option>
												<option value="Vels University (Vel's College of Science)">Vels University (Vel's College of Science)</option>
                                                                                                <option value="A.M. Jain College (Men)">A.M. Jain College (Men)</option>
												<option value="Bharathi's Women's College (Autonomous)">Bharathi's Women's College (Autonomous)</option>         
												<option value="C. Kandasami Naidu College for Men">C. Kandasami Naidu College for Men</option>
												<option value="Chellammal Women's College of the Pachaiyappa's Trust">Chellammal Women's College of the Pachaiyappa's Trust</option>
												<option value="Dhanraj Baid Jain College (Autonomous)">Dhanraj Baid Jain College (Autonomous)</option>
												<option value="Dharmamurthi Rao Bahadur Calavala Cunnan Chetty's Hindu (D.R.B.C.C.C.H.) College">Dharmamurthi Rao Bahadur Calavala Cunnan Chetty's Hindu (D.R.B.C.C.C.H.) College</option>
                                                                                                <option value="Dr. Ambedkar Government Arts College">Dr. Ambedkar Government Arts College</option>
												<option value="Dwaraka Doss Goverdhan Doss Vaishnav College">Dwaraka Doss Goverdhan Doss Vaishnav College</option>         
												<option value="Ethiraj College for Women (Autonomous)">Ethiraj College for Women (Autonomous)</option>
												<option value="Govt. Arts College for Men (Autonomous)">Govt. Arts College for Men (Autonomous)</option>
												<option value="Guru Nanak College">Guru Nanak College</option>
												<option value="Justice Basheer Ahmed Syed College for Women">Justice Basheer Ahmed Syed College for Women</option>
                                                                                                <option value="Loyola College (Autonomous)">Loyola College (Autonomous)</option>
												<option value="Madras Christian College (Autonomous)">Madras Christian College (Autonomous)</option>
												<option value="New College (Autonomous)">New College (Autonomous)</option>
                                                                                                <option value="Pachaiyappa's College">Pachaiyappa's College</option>
												<option value="Presidency College (Autonomous)">Presidency College (Autonomous)</option>
												<option value="Quaid-e-Millet College">Quaid-e-Millet College</option>
                                                                                                <option value="Quaid-e-Millet Government Arts College for Women (Autonomous)">Quaid-e-Millet Government Arts College for Women (Autonomous)</option>
												<option value="Queen Mary's College (Autonomous)">Queen Mary's College (Autonomous)</option>
												<option value="Ramakrishna Mission Vivekananda College (Men)">Ramakrishna Mission Vivekananda College (Men)</option>
                                                                                                <option value="S.D.N. Bhatt Vaishnav College for Women">S.D.N. Bhatt Vaishnav College for Women</option>
												<option value="S.I.V.E.T. College">S.I.V.E.T. College, Chennai</option>
												<option value="St. Louis College for the Deaf">St. Louis College for the Deaf</option>
                                                                                                <option value="Stella Maris College for Women (Autonomous)">Stella Maris College for Women (Autonomous)</option>
                                                                                                <option value="Women's Christian College (Autonomous)">Women's Christian College (Autonomous)</option>
                                                                                                <option value="A.A. Arts and Science College (Women)">A.A. Arts and Science College (Women)</option>
                                                                                                <option value="Alpha Arts and Science College">Alpha Arts and Science College</option>
                                                                                                <option value="Anna Adarsh College for Women">Anna Adarsh College for Women</option>
                                                                                                <option value="Annai Veilankanni's College of Arts and Science">Annai Veilankanni's College of Arts and Science</option>
                                                                                                <option value="Annai Violet Arts and Science College">Annai Violet Arts and Science College</option>
                                                                                                <option value="C.T.M. College of Arts and Science">C.T.M. College of Arts and Science</option>
                                                                                                <option value="Chennai National College (Arts and Science)">Chennai National College (Arts and Science)</option>
                                                                                                <option value="Chevaliar T. Thomas Elizabeth College for Women">Chevaliar T. Thomas Elizabeth College for Women</option>
                                                                                                <option value="Dr. M.G.R. Janaki College of Arts and Science for Women">Dr. M.G.R. Janaki College of Arts and Science for Women</option>
                                                                                                <option value="Guru Shree Shanti Vijai Jain College for Women">Guru Shree Shanti Vijai Jain College for Women</option>
                                                                                                <option value="Hindustan College of Arts and Science">Hindustan College of Arts and Science</option>
                                                                                                <option value="Indian Harvard Arts and Science College">Indian Harvard Arts and Science College</option>
                                                                                                <option value="J.A. Arts and Science College">J.A. Arts and Science College</option>
                                                                                                <option value="Jayagovind Harigopal Agarwal Agarsen College">Jayagovind Harigopal Agarwal Agarsen College</option>
                                                                                                <option value="K.C.S. Kasi Nadar College of Arts and Science">K.C.S. Kasi Nadar College of Arts and Science</option>
                                                                                                <option value="Kumara Rani Meena Muthiah College of Arts and Science for Women">Kumara Rani Meena Muthiah College of Arts and Science for Women</option>
                                                                                                <option value="M.O.P. Vaishnav College for Women (Autonomous)">M.O.P. Vaishnav College for Women (Autonomous)</option>
                                                                                                <option value="Madha Arts and Science College">Madha Arts and Science College</option>
                                                                                                <option value="Mahalakshmi College of Arts and Science">Mahalakshmi College of Arts and Science</option>
                                                                                                <option value="Mar Gregorios Arts and Science College">Mar Gregorios Arts and Science College</option>
                                                                                                <option value="Mohamed Sathak College of Arts and Science">Mohamed Sathak College of Arts and Science</option>
                                                                                                <option value="Nazareth College of Arts and Science">Nazareth College of Arts and Science</option>
                                                                                                <option value="New Prince Shri Bhavani Arts and Science College">New Prince Shri Bhavani Arts and Science College</option>
                                                                                                <option value="Patrician College of Arts and Science">Patrician College of Arts and Science</option>
                                                                                                <option value="Poonga College of Arts and Science">Poonga College of Arts and Science</option>
                                                                                                <option value="Prince Shri Venkateshwara Arts and Science College">Prince Shri Venkateshwara Arts and Science College</option>
                                                                                                <option value="Prof. Dhanapalan College for Women">Prof. Dhanapalan College for Women</option>
                                                                                                <option value="R.B. Gothi Jain College for Women">R.B. Gothi Jain College for Women</option>
                                                                                                <option value="S.R.M. Arts and Science College, Chengalpattu Taluk">S.R.M. Arts and Science College, Chengalpattu Taluk</option>
                                                                                                <option value="Shri Shankarlal Sundarbai Shasun Jain College for Women">Shri Shankarlal Sundarbai Shasun Jain College for Women</option>
                                                                                                <option value="Sindhi College of Arts and Science">Sindhi College of Arts and Science</option>
                                                                                                <option value="Sir Theagaraya College">Sir Theagaraya College</option>
                                                                                                <option value="Soka Ikeda Arts and Science College for Women">Soka Ikeda Arts and Science College for Women</option>
                                                                                                <option value="Sri Kanniga Parameswari Arts and Science College for Women">Sri Kanniga Parameswari Arts and Science College for Women</option>
                                                                                                <option value="Sri Muthukumarasamy College">Sri Muthukumarasamy College</option>
                                                                                                <option value="St. Joseph's College (Arts and Science)">St. Joseph's College (Arts and Science)</option>
                                                                                                <option value="St. Thomas College of Arts and Science">St. Thomas College of Arts and Science</option>
                                                                                                <option value="T.M.G. College of Arts and Science">T.M.G. College of Arts and Science</option>
                                                                                                <option value="T.S. Narayanasamy College of Arts and Science">T.S. Narayanasamy College of Arts and Science</option>
                                                                                                <option value="Tamilnadu Arts and Science College">Tamilnadu Arts and Science College</option>
                                                                                                <option value="Thirumurugan College of Arts and Science">Thirumurugan College of Arts and Science</option>
                                                                                                <option value="Thiruthangal Nadar College">Thiruthangal Nadar College</option>
                                                                                                <option value="Vailakanni Malathy Pannicker College of Arts and Science">Vailakanni Malathy Pannicker College of Arts and Science</option>
                                                                                                <option value="Valliammal College for Women">Valliammal College for Women</option>
                                                                                                <option value="Vel Sri Ranga Sanku College">Vel Sri Ranga Sanku College</option>
                                                                                              
                                                                                                






											</select>
                                                                                <div id="college" style="display:none;color:red">Please don't leave this field empty</div>                                                                                        
										</div>	
									</div>
									<div class="span1_of_1 phone_email1">
										<!-- start_section_room -->
										<div class="section_room">
											<i class="fa fa-calendar" aria-hidden="true"></i>
											<select id="country1" onchange="change_country(this.value)" class="frm-field required" name="event" required>
												<option value="">Events</option>
												<option value="Neo Logic">Neo Logic</option>
												<option value="Papyrus">Papyrus</option>         
												<option value="Adzap">Adzap</option>
												<option value="Brain Fizz">Brain Fizz</option>
												<option value="Link In">Link_In</option>
												<option value="Block and Tackle">Block and Tackle</option>
							
											</select>
                                                                                <div id="event" style="display:none;color:red">Please don't leave this field empty</div>                                                                                        
										</div>	
									</div>
                                                                        
                                                                
</div>
                                                                        
                                                                        
                                                                        <div class="phone_email">
									<div class="form-text" style="color:white">
										
										<input type="checkbox" name="checkbox"  checked required>                                                                               
                                                                               
                                                                               I knew all the rules and regulations of the event
                                                                               
                                                                                

                                                          
								</div>
								<!-- -->
                                                                
                                                             <!-- -->
                                                                <!-- -->
   
                                                                
                                                                <!-- -->
									<div class="clear"></div>
								</div> 
								<input type="submit" value="Register">
								<div class="clear"></div>
							</form>
						</div>

		</div>
   </div>
   	
  <!--copyright-->
	<div class="copy w3ls">
		<p>&copy; 2019 CYBORGZZ SYMPOSIUM Registration Form . All Rights Reserved   </p>
	</div>
<!--//copyright-->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<!-- Calendar -->
				<link rel="stylesheet" href="css/jquery-ui.css" />
				<script src="js/jquery-ui.js"></script>
				  <script>
						  $(function() {
							$( "#datepicker,#datepicker1,#datepicker2,#datepicker3" ).datepicker();
						  });
				  </script>
			<!-- //Calendar -->
                        
                        <!-- Inspect disabling STARTS -->
<script>
   document.onkeydown=function(e)
    {
        if(event.keyCode == 123)
        {
            return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode =="I".charCodeAt(0) )
        {
            return false;
        }
        if(e.ctrlKey && e.shiftKey && e.keyCode =="J".charCodeAt(0) )
        {
            return false;
        }
        if(e.ctrlKey  && e.keyCode =="U".charCodeAt(0) )
        {
            return false;
        }
    }
</script>

<!-- Inspect disabling ENDS -->  

</body>
</html>