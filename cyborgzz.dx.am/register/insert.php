<?php


$servername = "fdb26.awardspace.net";
$username = "2951726_cyborgzz";
$password = "daniel007";
$dbname = "2951726_cyborgzz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$nameF=mysqli_real_escape_string($conn, $_REQUEST['Name_first']);
$nameL=mysqli_real_escape_string($conn, $_REQUEST['Name_last']);
$ph=mysqli_real_escape_string($conn, $_REQUEST['Phone']);
$emails=mysqli_real_escape_string($conn, $_REQUEST['emails']);
$college=mysqli_real_escape_string($conn, $_REQUEST['college']);
$event=mysqli_real_escape_string($conn, $_REQUEST['event']);


$sql = "INSERT INTO symposium2019 (FIRST_NAME,LAST_NAME,PHONE_NUMBER,E_MAIL,COLLEGE,EVENT)
VALUES ('$nameF','$nameL','$ph','$emails','$college','$event')"; 

if ($conn->query($sql) === TRUE) {
    
       header("Location: http://cyborgzz.dx.am/thankyou/");
exit;
    }
$conn->close();

?>