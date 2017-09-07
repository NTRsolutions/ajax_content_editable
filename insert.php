<?php

$connect = mysqli_connect("localhost", "imon", "p@ssw0rd", "ajax_content_editable");
$sql = "INSERT INTO tbl_sample(first_name, last_name) VALUES('".$_POST["first_name"]. "','".$_POST["last_name"]."')";
if(mysqli_query($connect,$sql)){
	echo "DATA INSERTED!";
}