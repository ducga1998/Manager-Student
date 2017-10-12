<?php

// view=2 thì hiển thị
if(isset($_REQUEST["Accept"])){
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
}
//view=0 là xóa, view =1 là chờ xuyệt
if(isset($_REQUEST["DeletePost"])){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "projectbig";
    
    
    $IdDeletePost=$_REQUEST["DeletePost"];
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
    
    $sql="UPDATE post SET view = 0 WHERE id_post=$IdDeletePost;";
    echo $sql;
    $result = $conn->query($sql);
    
    $conn->close();
    }

?>
