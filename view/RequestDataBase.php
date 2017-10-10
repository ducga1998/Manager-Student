<?php



	


	
	
				
 $servername = "localhost";
					
$username = "root";
$password = "";
$dbname = "post";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "SELECT id, firstname, lastname,avatar,countryside,dateSchool FROM lastname WHERE id=".$_REQUEST["id_sv"]."";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
	
    while($row = $result->fetch_assoc()) { 
		echo '<table class="table table-hover">
						
						<tbody>
						<tr>
						<th>Avatar</th>
				      <td>	<img style="width:60px" src =./controller/folder/'.$row["avatar"].'></td>
						</tr>
							<tr>
							<th>Id</th>
							<td>'.$row["id"].'</td>
							 </tr>
							 <tr>
							<th>Email</th>
							<td>'.$row["firstname"].'</td>
							</tr>
							<tr>
							<th>Name</th>
							<td>'.$row["lastname"].'</td>
							</tr>
							<tr>
							<th>Country</th>
							<td>'.$row["countryside"].'</td>

							</tr>
							<tr>
							<th>Day admission</th>
							<td> '.$row["dateSchool"].' </td>
	
							</tr>


						</tbody>
					</table>';

										   
		
    }
    
							 
							
								
								
								
								

} else {
   echo "lỗi dữ liệu";
}
$conn->close();



?>

	
