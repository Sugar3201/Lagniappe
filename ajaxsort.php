<?php

include "config.php";

$imageids_arr = array();

if(isset($_POST['imageids'])){
   $imageids_arr = $_POST['imageids'];
}

if(count($imageids_arr) > 0){
   // Update sort position of images
   $position = 1;
   foreach($imageids_arr as $id){
      mysqli_query($con,"UPDATE images_list SET sort=".$position." WHERE id=".$id);
      $position ++;
   }
   echo 1;
   exit;
}else{
   echo 0;
   exit;
}