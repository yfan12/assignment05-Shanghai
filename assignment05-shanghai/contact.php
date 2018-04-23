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

		<div class= "container">

	       <div class="box">
	<h2>Want to get in touch? Fill out the survey and get the latest news about coffee</h2>

	    <form method="post" action="submit.php">
			<label>Age</label>
			<input type="text" class="form-control" name="age"><br>

			<label>Job</label>
			<input type="text" class="form-control" name="job"><br>
			
			<label>Favourite Coffee</label>
	        <input type="text" class="form-control" name="favourite"><br>

	        <label>Number of times of drinking coffee per week</label>
	        <input type="text" class="form-control" name="frequency"><br>

	        <label>Email</label>
	        <input type="text" class="form-control" name="email"><br>

			<label>Message</label>

	        <textarea rows="5" class="form-control" name="message"></textarea><br><br>

			<div class="form-group">
		        <button type="submit" class="btn btn-primary" id="sendMessageButton">Send</button>
		    </div>
		</form>
	</div>
		</div>

<?php include('inc/footer.inc');?>

</body>
</html>
