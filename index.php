<?php
session_start();
include("connection.php");
include("functions.php");
//include("thank_you.php");

$user_data = check_login($con);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //something was posted
    $user_id = $_SESSION['user_id'];
    $area = $_POST['area'];
    $city = $_POST['city'];
    $project_name = $_POST['project_name'];
    $project_description = $_POST['project_description'];

    $query = "INSERT INTO users (user_id, area, city, project_name, project_description) VALUES ('$user_id', '$area', '$city', '$project_name', '$project_description')";
    $result = mysqli_query($con, $query);

    if ($result) {
        header("Location: thank_you.php");
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
			
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>My website</title>
	<link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Admin Updates Form</title>
   <style>
      :root{
    --primary-bg-color:#333;
    --primary-text-color:#fff;
    --primary-hovor-color:#ff9900;
    --priamary-button-color:#4caf50;
}
        /* Add custom styles here */

        /* Form styling */
        form {
            width: 50%;
            margin: auto;
            text-align: center;
            background-color: #ccc; /* Gray background */
            padding: 20px;
            border-radius: 5px;
            margin: top 10px;
        }

        .form-container {
            display: block;
            flex-direction: row;
            align-items: center;
            justify-content: center;
        }

        label {
            float: right;
            width: 50%;
            text-align: right;
            margin-right: 10px;
            color: var(black); /* Adjust text color */
        }

        input[type="text"],
        textarea {
            flex: 1 1 70%; /* Flex properties for responsiveness */
            width:30%;
            padding: 10px;
            margin-left: 10px;
            border: none;
            border-radius: 5px;
            box-sizing: border-box;
            margin-top:10px;
            
        }

        input[type="submit"] {
            flex: 1 1 100%; /* Flex properties for responsiveness */
            margin-top: 10px; /* Adjust margin as needed */
            padding: 10px;
            background-color: var(--primary-hovor-color); /* Adjust color */
            color: var(--primary-text-color); /* Adjust text color */
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: var(--priamary-button-color); /* Adjust hover color */
        }
        .progress-container {
            border-radius: 5px;
            margin-top:10px;
            width: 100%; /* Set the width of the progress container */
            background-color: yellowgreen; /* Set the background color */
        }

        .progress-bar {
            width: 100%;
            height: 20px; /* Adjust height as needed */
            background-color: lightblue; /* Set the background color of the progress bar */
            border-radius: 5px; /* Optional: Add border radius for rounded corners */
        }

        .progress {
            height: 100%;
            background-color: green; /* Set the color of the progress */
            border-radius: 5px; /* Optional: Add border radius for rounded corners */
        }

        .pending {
            position: absolute; /* Position absolute for absolute positioning within the progress bar container */
            top: 50%; /* Align to the middle vertically */
            left: 50%; /* Align to the middle horizontally */
            transform: translate(-50%, -50%); /* Center the text */
            color: white; /* Set the color of the pending text */
        }
        #submit-button{
            display: inline-block;
            padding: 8px 16px;
            background-color: #007bff; /* Blue background color */
            color: #fff; /* White text color */
            text-decoration: none; /* Remove underline */
            border-radius: 4px; /* Rounded corners */
            border:none;
        }

        #submit-button:hover{
            background-color: #0056b3; /* Darker blue on hover */
        }


        
    </style>

</head>
<body>
  
<div class="header">
        <div class="overlay">
            <h1>WELCOME TO CDF</h1>
            <P>DISCOVER YOUR POTENTIAL</P>
           <!-- <button class="custom-button-header">Get Started</button> -->
        </div>
    </div>
    
   <!-- Progress Bar Container -->
<div class="progress-container">
    <!-- Progress Bar -->
    <div class="progress-bar">
        <!-- Progress Indicator -->
        <div class="progress" id="progress"></div>
    </div>
</div>

    </div>
	<div class="user_login_header">
         <a class='download-link' href="logout.php">logout</a>
         <a class='download-link' href="admin_updates.php">admin updates</a>
         <h1 class="h1_main">Storing Form data in Database</h1>
    </div>
    <div class="user_id">
	<br>
	Hello, <?php echo $user_data['user_name']; ?>
    </div>
    <hr class="hr">
    <hr class="hr">
         <form action="insert.php" method="post" id="project-form">
             
<p>
               <label for="firstName">First Name:</label>
               <input type="text" name="first_name" id="firstName">
            </p>
            <hr>
 
             
<p>
               <label for="lastName">Last Name:</label>
               <input type="text" name="last_name" id="lastName">
            </p>
            <hr>
 
             
<p>
               <label for="Gender">Gender:</label>
               <input type="text" name="gender" id="Gender">
            </p>
            <hr>
 
             
<p>
               <label for="Address">Address:</label>
               <input type="text" name="address" id="Address">
            </p>
            <hr>
 
             
<p>
               <label for="emailAddress">Email Address:</label>
               <input type="text" name="email" id="emailAddress">
            </p>
            <hr>
			            
<p>
               <label for="Gender">area:</label>
               <input type="text" name="area" id="area">
            </p>
            <hr>
			            
<p>
               <label for="project_name">project_name:</label>
               <input type="text" name="project_name" id="project_name">
            </p>
            <hr>
			            
<p>
               <label for="description">Description:</label>
               <textarea type="text" name="description" id="description" rows="5"></textarea>
            </p>
 
           <!-- <input type="submit" value="Submit" id="submit-button">-->
            <button id="submit-button">submit</button>
            
         </form>
      
</div>
</div>

<script src="script.js"></script>
</body>
</html>