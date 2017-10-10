<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://use.fontawesome.com/68f547135b.js"></script>
	<script src="./view/script.js"></script>
	<script type="text/javascript" src="./view/css/datepicker.js"></script>
	<link rel="stylesheet" type="text/css" href="./view/css/datepicker.css">
	<link rel="stylesheet" href="./view/css/Test.css">
	<script type="text/javascript">
		$(document).ready(function() {
			$('.search-box input[type="text"]').on("keyup input", function() {
				/* Get input value on change */
				var inputVal = $(this).val();
				var resultDropdown = $(this).siblings(".result");
				if (inputVal.length) {
					$.get("./view/backendSearchSmart.php", {
						term: inputVal
					}).done(function(data) {
						// Display the returned data in browser
						resultDropdown.html(data);
					});
				} else {
					resultDropdown.empty();
				}
			});

			// Set search input value on click of result item
			$(document).on("click", ".result p", function() {
				$(this).parents(".search-box").find('input[type="text"]').val($(this).text());
				$(this).parent(".result").empty();
			});
		});

	</script>
</head>
<body>
	<nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="#">List Student</a>
		</div>
		<ul class="nav navbar-nav">
			<li class="active" data-toggle="modal" data-target="#modalAddStudent"><a href="#">Add Student</a></li>
			
		
				
		</ul>

		 <form class="navbar-form navbar-left">
      <div class="form-group search-box">
       <input name="search" class="form-control" type="text" autocomplete="off" placeholder="Search country..." />
       	<div class="result"></div>
      </div>
      <button type="submit" class="btn btn-default">Search</button>

    </form>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> <?php
$_SESSION["current_id"]==1?$typeUser="Admin":$typeUser="User";



      echo "WellCome"." "."$typeUser  ".$_SESSION["NameUser"];
       ?></a></li>
      <li><a href="./helper/helpAjAx.php"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
    </ul>
	</div>
</nav>
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
    foreach ($rows as $row) 
     	
      {
      	$data  = array(
      		'user_id' => $row['id'],
      		'current_id' => isset($_SESSION["current_id"])?$_SESSION["current_id"]:0,
      		'action' => 'delete_sv'
      	);

      	$url = './index.php';

      	$data = base64_encode(serialize($data));

      	$url .='?action='.$data;
      	if($row["avatar"]=="")
      	{
      		$avatar="deauft.jpg";

   }
   else {
   	# code...
   	$avatar=$row["avatar"];
   }

        echo " <tbody>
      <tr style='transition: 1s;' >
      <th style='text-align:center'><img style='width:60px;height:60px' src='./controller/folder/".$avatar."' ></th>
        <td>".$row["id"]." </td>
         
        <td>".htmlentities($row["firstname"])."</td>

        <td>".$row["lastname"]."</td>
        <th>".$row['NumberPhone']."</th>
        <th>".$row['birthday']."</th>
		<td><a Filename='".$row["avatar"]."' data-toggle='modal'  data-target='#updateStudent' class='GetIdClass' id='".$row['id']."' firstname='".$row["firstname"]."' LastName='".$row["lastname"]."' avatar=".$row["avatar"]." NumberPhone=".$row["NumberPhone"]." birthDay=".$row["birthday"]." ><i class='fa fa-wrench' aria-hidden='true'></i></a>
		<a id=".$row['id']." data-action='".$url."'  type='button' class='btnDelete' name='".$row["firstname"]."'><i class='fa fa-trash' aria-hidden='true'></i></a>
		<a getId='".$row['id']."' class='btnDetail'  data-toggle='modal' data-target='#DetailStudent'><i class='fa fa-info' aria-hidden='true'></i></a>
		</td>
		
		
      </tr>
      
    </tbody>";
    }
	


	echo "</table>";

 ?>
 <div id="modalAddStudent" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header"><button type="button" class="close" data-dismiss="modal">&times;
</button>
				<h4 class="modal-title">Add Student in table</h4>
			</div>
			<div class="modal-body">
			
			<form action="./index.php/?action=add_sv" id="formAddStudent" method="post" enctype="multipart/form-data">
					<div class="form-group"><label for="pwd">id</label><input type="text" name="id" class="form-control idOldView"  id="idCurent" placeholder="id"></div>
					<div class="form-group"><label for="pwd">Avatar</label><input type="file" name="avatar" class="form-control "  ></div>

					<div class="form-group"><label for="pwd">Email</label><input type="text" name="FirstName" class="form-control" id="firtName" placeholder="Firt Name input"></div>

					<div class="form-group"><label for="email">last Name:</label><input type="text" name="LastName" class="form-control" id="lastName" placeholder="Last name input now ">
					</div>
					<div class="form-group"><label for="email">Number Phone:</label><input type="text" name="NumberPhone" class="form-control" id="NumberPhone" placeholder="Number Phone ">
					</div>
					<div class="form-group"><label for="email">BirthDay</label><input data-toggle="datepicker" type="text" name="birthDay" class="form-control" id="birthDay" placeholder="import BirthDay">
					</div>
					
					<!--xử lý thông báo trùng id-->
				</form>

				<!--end Code insert element as php to dataBase-->
				<!--phân tích-->
			</div>
			
			<div class="modal-footer"><button type="button"  name="uploadclick" class="btn btn-default btn-add-student">ADD student</button>

				<button type="submit" class="btn btn-default" data-dismiss="modal">Close</button></div>
		</div>
	</div>
</div>
<div id="updateStudent" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Update Student</h4>
			</div>
		
			<div class="modal-body">

				<form enctype="multipart/form-data" action="./index.php/?action=update_sv" id="formUpdateStudent" method="post">
<div class="form-group"><input style="display: none" type="text" name="idUpdate" class="form-control idgetupdate"  id="idCurent" placeholder="id"></div>
					<div class="form-group"><label for="pwd">Avatar</label><input type="file" name="avatar" style="display:inline-block" >
                       <img src=""class="imgUpdate" style="width:60px;float:right">

					</div>
					<div class="form-group"><label for="pwd">Email:</label><input type="text" name="EmailNew" class="form-control" id="firtName" placeholder="Email import"></div>
				<div class="form-group"><label for="email">Name:</label><input type="text" name="NameNew" class="form-control" id="lastName" placeholder="Last name import now "></div>
				<div class="form-group"><label for="Number Phone">Number Phone:</label><input type="text" name="NumberPhoneUpdate" class="form-control" id="NumberPhone" placeholder="Number Phone import now "></div>
				<div  class="form-group"><label for="birthday">Birthday:</label><input type="text" name="birthDay"  data-toggle="datepicker" class="form-control" id="birthDay" placeholder="birthDay import now "></div>


					
					<!--xử lý thông báo trùng id-->
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" onClick='submitUpdateStudentForm()' name="uploadclick" class="btn btn-default handdingId ">Update student</button>
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>
	
<div id="DetailStudent" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Deatil Student</h4>
      </div>
      <div class="modal-body">
        <div id="results"></div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<div class="footer">
	
	<div class="pagination">
    <?php
    // PHẦN HIỂN THỊ PHÂN TRANG
    // BƯỚC 7: HIỂN THỊ PHÂN TRANG
    isset($totalPage)?$a=$totalPage:1;
    echo "<ul class='pagination'>";
$current_page=0;
$total_page=ceil($a/10);

    // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
    if($current_page > 1 && $total_page > 1) {
        echo '<li class="active"><a  href="./index.php?page='.( $current_page - 1 ) .'">Prev</a></li> ';
    }

    // Lặp khoảng giữa
    for( $i = 1 ; $i <= $total_page ; $i++ ) {
        // Nếu là trang hiện tại thì hiển thị thẻ span
        // ngược lại hiển thị thẻ a
        if($i == $current_page) {
            echo '<span>' . $i . '</span> | ';
        } else {
            echo '<li><a  href="./index.php?page=' . $i . '">' . $i . '</a></li>';
        }
    }

    // nếu current_page < $total_page và total_page > 1 mới hiển thị nút prev
    if($current_page < $total_page && $total_page > 1) {
        echo '<li><a href="./index.php?page=' . ( $current_page + 1 ) . '">Next</a> </li> ';
    }
    echo "</ul>"
    ?>

</div>
</div>
</body>
</html>