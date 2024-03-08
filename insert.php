<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	
	<?php
	include("functions.php");
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "login_sample_db";
	
	if (!$con = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname)) {
		die("failed to connect!");
	}

	// Taking all values from the form data(input)
	$first_name = mysqli_real_escape_string($con, $_REQUEST['first_name']);
	$last_name = mysqli_real_escape_string($con, $_REQUEST['last_name']);
	$gender = mysqli_real_escape_string($con, $_REQUEST['gender']);
	$address = mysqli_real_escape_string($con, $_REQUEST['address']);
	$email = mysqli_real_escape_string($con, $_REQUEST['email']);
	$area = mysqli_real_escape_string($con, $_REQUEST['area']);
	$project_name = mysqli_real_escape_string($con, $_REQUEST['project_name']);
	$description = mysqli_real_escape_string($con, $_REQUEST['description']);

	// Performing insert query execution
	$user_id = random_num(20);

	$query = "INSERT INTO project_form (first_name, last_name, gender, address, email, area, project_name, description) 
	          VALUES ('$first_name', '$last_name', '$gender', '$address', '$email', '$area', '$project_name', '$description')";
	
	if (mysqli_query($con, $query)) {
		header("Location: index.php");
		echo("sent!");
		//echo "<h3>Data stored in the database successfully."
			//. " Please browse your localhost phpMyAdmin"
			//. " to view the updated data</h3>";
	} else {
		echo "ERROR: Oops! Something went wrong. "
			. mysqli_error($con);
	}

	// Close connection
	mysqli_close($con);
	?>
	
</body>

</html>
