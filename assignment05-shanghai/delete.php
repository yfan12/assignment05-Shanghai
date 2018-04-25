<?php  
	$connect = mysqli_connect('localhost', 'urcscon3_shangh5', 'coffee5', 'urcscon3_shanghai5');
	$sql = "DELETE FROM tbl_sample WHERE id = '".$_POST["id"]."'";  
	if(mysqli_query($connect, $sql))  
	{  
		echo 'Data Deleted';  
	}  
 ?>