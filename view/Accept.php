<?php

function getId_post()
{ 
	
	
	include "../model/manager_user.php";
    $idS=Model_qlsv::inst()->CoutRowPost();
   
    $id=$idS["COUNT(id)"]+1;
    return $id;
    
	
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectbig";


	  
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql="INSERT INTO post (id, UserName, Title,Content,view,DateUp,Category)
VALUES ($id, '$UserName', '$Title','$Content',$view,'$DateUp','$Category')";
echo $sql;
$result = $conn->query($sql);

$conn->close();
?>