<?php
//include database configuration file
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

//get records from database
$query = $conn->query("SELECT * FROM symposium2019 where EVENT = 'Adzap'");

if($query->num_rows > 0){
    $delimiter = ",";
    $filename = "Adzap_" . date('Y-m-d') . ".csv";
    
    //create a file pointer
    $f = fopen('php://memory', 'w');
    
    //set column headers
    $fields = array('ID', 'FIRST_NAME', 'LAST_NAME', 'PHONE_NUMBER', 'E_MAIL', 'COLLEGE','EVENT');
    fputcsv($f, $fields, $delimiter);
    
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){
       // $status = ($row['status'] == '1')?'Active':'Inactive';
        $lineData = array($row['ID'], $row['FIRST_NAME'], $row['LAST_NAME'], $row['PHONE_NUMBER'], $row['E_MAIL'], $row['COLLEGE'], $row['EVENT']);
        fputcsv($f, $lineData, $delimiter);
    }
    
    //move back to beginning of file
    fseek($f, 0);
    
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    
    //output all remaining data on a file pointer
    fpassthru($f);
}
exit;

?>