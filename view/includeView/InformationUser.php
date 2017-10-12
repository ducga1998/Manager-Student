<div class="container">
    <div class="span3 well">
        <center>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" class="img-circle"></a>
        <h3><?php
        echo $index["UserName"];
        ?></h3>
        <em>Click my face for more</em>
		</center>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title" id="myModalLabel">More About Joe</h4>
                    </div>
                <div class="modal-body">
                    <center>
                    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    <h3 class="media-heading"><?php
        echo $index["UserName"];
        ?> <small>Vn</small></h3>
                    <span><strong>Skills: </strong></span>
                    <span class="label label-success">Admin</span>
                        <!-- <span class="label label-warning">HTML5/CSS</span>
                        <span class="label label-info">Adobe CS 5.5</span>
                        <span class="label label-info">Microsoft Office</span>
                         -->
                    </center>
                    <hr>
                 
                    <!-- UserName
PassWord
                 


id

Mail

 -->

<h3>Name:<?php echo $rows["Name"] ?></h3> 
<h3>BirthDay:<?php echo $rows["BirthDay"] ?></h3> 
<h3>Country:<?php echo $rows["Country"] ?></h3> 
<h3>Grant:<?php echo "Admin"?></h3> 
<h3>NumberPhone:<?php echo $rows["NumberPhone"] ?></h3> 

                    



                    <br>    
                  
                </div>
                <div class="modal-footer">
                    <center>
                    <button type="button" class="btn btn-default" data-dismiss="modal">I've heard enough about Joe</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>


<?php 

echo "<table class='table table-bordered  table-hover'>
    <thead>
     <tr> 
      <th>Avatar</th>
	  <th>ID</th>
	  <th>Full Name</th>
	  <th>Email</th>
      
      <th>Number</th>
      <th>Birthday</th>
      <th>Setting</th>
	</tr>
    </thead>";
    foreach ($rowUser as $row) 
     	
      {
      	/* $data  = array(
      		'user_id' => $row['id'],
      		'current_id' => isset($_SESSION["current_id"])?$_SESSION["current_id"]:0,
      		'action' => 'delete_sv'
      	);

      	$url = './index.php';

      	$data = base64_encode(serialize($data));

      	$url .='?action='.$data; */
      	if($row["Avatar"]=="")
      	{
      		$avatar="deauft.jpg";

   }
   else {
   	# code...
   	$avatar=$row["Avatar"];
   }
/* UserName
PassWord



id
Current_id
Mail


 */
        echo " <tbody>
      <tr style='transition: 1s;' >
      <th style='text-align:center'><img style='width:60px;height:60px' src='./controller/folder/".$avatar."' ></th>
        <td>".$row["id"]." </td>
         
        <td>".htmlentities($row["Name"])."</td>

        <td>".$row["Country"]."</td>
        <th>".$row['NumberPhone']."</th>
        <th>".$row['BirthDay']."</th>
		<td><a Filename='".$row["Avatar"]."' data-toggle='modal'  data-target='#updateStudent' class='GetIdClass' id='".$row['id']."' firstname='".$row["Name"]."' LastName='".$row["Name"]."' avatar=".$row["Avatar"]." NumberPhone=".$row["NumberPhone"]." birthDay=".$row["BirthDay"]." ><i class='fa fa-wrench' aria-hidden='true'></i></a>
		<a id=".$row['id']."   type='button' class='btnDelete' name='".$row["Name"]."'><i class='fa fa-trash' aria-hidden='true'></i></a>
		<a getId='".$row['id']."' class='btnDetail'  data-toggle='modal' data-target='#DetailStudent'><i class='fa fa-info' aria-hidden='true'></i></a>
		</td>
		
		
      </tr>
      
    </tbody>";
    }
	


	echo "</table>";

 ?>