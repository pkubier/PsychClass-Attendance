<?php 
include "db.php";
?>
<title>
Social Psych
</title>
<div class="container">
 
 <form method='post' action='downloadsocial.php'>
  <input type='submit' value='Export' name='Export'>
<!--<p style="text-align:center; font-weight:bold; font-size:22px; margin:24px 0 0 0;"><a href="delete11178.php" style="color:#1cb027; text-decoration:none;">Delete Data</a></p>-->
  
 
  <table border='1' style='border-collapse:collapse;'>
    <tr>
     <th>id</th>
     <th>name</th>
     <th>seatrow</th>
     <th>seatcolumn</th>
     <th>timestamp</th>
    </tr>
    <?php 
     $query = "SELECT * FROM SOCIALPSYCH ORDER BY id asc";
     $result = mysqli_query($con,$query);
     $user_arr = array();
     while($row = mysqli_fetch_array($result)){
      $id = $row['id'];
      $name = $row['name'];
      $seatrow = $row['seatrow'];
      $seatcolumn = $row['seatcolumn'];
      $timestamp = $row['timestamp'];
      $user_arr[] = array($id,$name,$seatrow,$seatcolumn,$timestamp);
   ?>
      <tr>
       <td><?php echo $id; ?></td>
       <td><?php echo $name; ?></td>
       <td><?php echo $seatrow; ?></td>
       <td><?php echo $seatcolumn; ?></td>
       <td><?php echo $timestamp; ?></td>
      </tr>
   <?php
    }
   ?>
   </table>
   <?php 
    $serialize_user_arr = serialize($user_arr);
   ?>
  <textarea name='export_data' style='display: none;'><?php echo $serialize_user_arr; ?></textarea>
 </form>
</div>