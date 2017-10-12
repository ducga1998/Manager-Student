<?php
if(isset($_REQUEST["StringArray"])){
function dateNow(){
	$datetime = new DateTime();
	return $datetime->format('Y\-m\-d');
}
 function getId_post()
{ 
	
	
	include "../model/manager_user.php";
    $idS=Model_qlsv::inst()->CoutRowPost();
   
    $id=$idS["COUNT(id)"]+1;
    return $id;
}
$s=getId_post();


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
	  $id_post=$s;
	  
	 
	  $DateUp=dateNow();

	
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql="INSERT INTO post (id, UserName, Title,Content,view,DateUp,Category,id_post)
VALUES ($id, '$UserName', '$Title','$Content',$view,'$DateUp','$Category',$id_post )";
echo $sql;
$_SESSION["sql12"]=$sql;
$result = $conn->query($sql);

$conn->close();
}

?>

<?php

/* function getidDelete($id)
{ 
	
	
	include "../model/manager_user.php";
	Model_qlsv::inst()->DeleteUser($id);

   
} */
/* isset()?$idDelete=$_REQUEST("id_delete"):1; */

	
	/* getidDelete($_REQUEST("id_delete"));     */



?>



	


	
	


	
