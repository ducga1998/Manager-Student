<?php
               foreach($GetPostConfessionUser as$index){
                   if($index["view"]==1){
                
                     echo '<div class="media">
    
    <div class="media-body">
    <img style="width:30px;margin:3px;"   src="./view/images/img.jpg" alt=".." class="img-circle profile_img">
      <h5 class="mt-0" style="display:inline-block">'.$index["UserName"].'</h5><h5 class="mt-0" style="display:inline-block;margin-left:40px">'.$index["Category"].'<i></i></h5>
      <h4>'.$index["Content"].'</h4>
      <button class="btn-browse btn-success" >Accept</button>
    </div>
  </div>';
                   }
               
  
                 
               }
                                
                                ?>
