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
// delete post
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
    // CHÈN HTML VÀO PHẦN SELECT <SUBCATEGORY>
    if(isset($_REQUEST["selectName"])){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "projectbig";
        
        
        $selectName=$_REQUEST["selectName"];
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $sql1="SELECT id_category FROM category where name_category='$selectName'";
        $resultA = $conn->query($sql1);
        $id = $resultA->fetch_assoc();
      
        $id=$id["id_category"];
        
        $sql="SELECT name_category_detail
        FROM category_detail where
        id_category='$id'";
       $result = $conn->query($sql);
      
      
       while($row = $result->fetch_assoc()) {
        echo "<option>".$row["name_category_detail"]."</option>";
       }
      
      
      
        
       
     
     /*    while($row = $result->fetch_assoc()) {
            echo "<option>".$row["name_category_detail"]."</option>";
        } */
       
        
        $conn->close();
        }

?>
