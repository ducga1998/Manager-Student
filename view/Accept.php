<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "projectbig";


$id_post=$_REQUEST["Accept"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql="UPDATE post SET view = 2 WHERE id_post=$id_post;";
echo $sql;
$result = $conn->query($sql);

$conn->close();
?>
