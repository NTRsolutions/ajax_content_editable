<?php

$connect = mysqli_connect("localhost", "imon", "p@ssw0rd", "ajax_content_editable");
$id = $_POST["id"];
$text = $_POST["text"];
$column_name = $_POST["column_name"];
$sql = "UPDATE tbl_sample SET ". $column_name ."=".$text."' WHERE id='".$id."'";
if(mysqli_query($connect, $sql)){
	echo 'Data Updated';
}

?>