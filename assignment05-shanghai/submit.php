<?php
	// 1. Create a database connection
	$dbhost = "localhost";
	$dbuser = "urcscon3_shangh5";
	$dbpass = "coffee5";
	$dbname = "urcscon3_shanghai5";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	
	// You really should escape all strings
	
	$age = Trim(stripslashes($_POST['age'])); 
	$job = Trim(stripslashes($_POST['job'])); 
	$favourite = Trim(stripslashes($_POST['favourite'])); 
	$frequency = Trim(stripslashes($_POST['frequency']));
	$email = Trim(stripslashes($_POST['email']));  
	
	// 2. Perform database query
	$query  = "INSERT INTO tbl_sample (age, job, favourite, frequency, email) VALUES ('$age','$job','$favourite','$frequency','$email')";
	$result = mysqli_query($connection, $query);
?>


<!DOCTYPE html>
<?php include('includes/html-top.inc');?>

<body>

<div class="container"> <!--container to keep the content from the margins-->

	<header>
		<h1>Beijing &mdash; Assignment 05</h1>
		<p class="subtitle">Survey</p>
		
	</header>

	<?php include('includes/nav.inc');?>

<div class="box">
	
	<h3>Thank you ! Your info has been written to our database!</h3><br><br>

	<a href="home.php">Click to return to the homepage.</a>

</div>

<?php include ('includes/footer.inc');?>

</div>
</body>

</html>


<?php
	// 4. Step 4 is unnecessary here because we didn't 
	//	  get data that needs to be released
	//mysqli_free_result($result);
	// 5. Close database connection
	mysqli_close($connection);
?>