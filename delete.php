<?php  
$connect = mysqli_connect("localhost", "imon", "p@ssw0rd", "ajax_content_editable");
 $sql = "DELETE FROM tbl_sample WHERE id = '".$_POST["id"]."'";  
 if(mysqli_query($connect, $sql))  
 {  
      echo 'Data Deleted';  
 }  
 ?>