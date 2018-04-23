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


<?php include('inc/html-top.inc');?>

<body class = "content">

			<header>
			<div class="container">
				<div class = "primary">
					<a href="home.php"><img src="images/icon.png" alt="Coffee Icon"></a>
				</div>
				
					    <ul>
					        <li><a>Menu</a>
						      <ul>
							      <li><a href="home.php">Home</a></li>
								  <li><a href="coffee.php">Kinds of Coffee</a></li>
								  <li><a href="login.php">Log-in</a></li>
								  <li><a href="contact.php">Take a survey</a></li>
								  <li><a href="https://en.wikipedia.org/wiki/Coffee">Go to wifipedia!</a></li>
							  </ul>
						    </li>
					    </ul>

			</div>
		</header>

		<div class="container"> <!--container to keep the content from the margins-->

		<div class="thanks">
			
			<h2>Thank you ! Your info has been written to our database!</h3><br><br>

			<a href="home.php"><h3>Click to return to the homepage.</h3></a>

		</div>

		</div>
		
<?php include('inc/footer.inc');?>

</body>

</html>


<?php
	// 4. Step 4 is unnecessary here because we didn't 
	//	  get data that needs to be released
	//mysqli_free_result($result);
	// 5. Close database connection
	mysqli_close($connection);
?>