<?php
include "config.php";
?>
<!doctype html>
<html >
  <head>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> 
    <style>
    #sortable { 
      list-style-type: none; 
      margin: 0; 
      padding: 0; 
      width: 90%; 
    }
    #sortable li { 
      margin: 3px 3px 3px 0; 
      padding: 1px; 
      float: left; 
      border: 0;
      background: none;
    }
    #sortable li img{
      width: 180px;
      height: 140px;
    }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.2/jquery.ui.touch-punch.min.js"></script>
  </head>
  <body>

    <div style='width: 100%;'>
      <!-- List Images -->
      <ul id="sortable" >
      <?php
      // Fetch images
      $fetch_images = mysqli_query($con,"SELECT * FROM images_list ORDER BY sort ASC");

      while($row = mysqli_fetch_assoc($fetch_images)){
        $id = $row['id']; 
        $name = $row['name'];
        $location = $row['location'];

        echo '<li class="ui-state-default" data-id="'.$id.'" >
          <img src="'.$location.'" title="'.$name.'" >
        </li>';
      }

      ?>
      </ul>
    </div>
    <div style="clear: both; margin-top: 20px;">
      <input type='button' value='Submit' id='submit'>
    </div>

  </body>
</html>