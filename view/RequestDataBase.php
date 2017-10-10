<?php
function dateNow(){
	$datetime = new DateTime();
	return $datetime->format('Y\-m\-d');
}
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectbig";
isset($_REQUEST["StringArray"])?$StringArray=$_REQUEST["StringArray"]:1;
        echo $StringArray;
	  $array=explode(".",$StringArray);
	  $id=$array[0];

	  $UserName=$array[1];
	  $Title=$array[2];
	  $Content=$array[3];
	  $Category=$array[4];
	  $view=1;
	  
	 
	  $DateUp=dateNow();

	  
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



	


	
	


	
