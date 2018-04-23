<?php  
$connect = mysqli_connect('localhost', 'Friends', 'coffee', 'testing');
$sql = "INSERT INTO tbl_sample(age, job, favourite, frequency, email) VALUES
('".$_POST["age"]."', '".$_POST["job"]."', '".$_POST["favourite"]."', '".$_POST["frequency"]."', '".$_POST["email"]."')";  
if(mysqli_query($connect, $sql))  
{  
     echo 'Data Inserted';  
}  
 ?>