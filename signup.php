<?php 
session_start();

include("connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    // Something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

        // Save to database
        $user_id = random_num(20);
        $query = "INSERT INTO users (user_id, user_name, password) VALUES ('$user_id', '$user_name', '$password')";
        
        if (mysqli_query($con, $query)) {
            // Redirect to the login page after successful signup
            header("Location: login.php");
            exit; // Stop further execution
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($con);
        }

    } else {
        echo "Please enter some valid information!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="style.css">
    <style>
	 :root{
    --primary-bg-color:#333;
    --primary-text-color:#fff;
    --primary-hovor-color:#ff9900;
    --priamary-button-color:#4caf50;
}
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        #box {
            background-color: #ccc;
            width: 800px;
            margin: 100px auto;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
        }

        #text {
            width: calc(100% - 10px); /* Adjusted width */
            height: 25px;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
            margin-bottom: 10px;
            box-sizing: border-box; /* Ensure padding is included in the width */
        }

        #button {
    display: inline-block;
    padding: 8px 16px;
    background-color: #007bff; /* Blue background color */
    color: #fff; /* White text color */
    text-decoration: none; /* Remove underline */
    border-radius: 4px; /* Rounded corners */
}

#button:hover {
    background-color: #0056b3; /* Darker blue on hover */
}

#signup-link{
    margin-top:5px;
    display: inline-block;
    padding: 8px 16px;
    background-color: #007bff; /* Blue background color */
    color: #fff; /* White text color */
    text-decoration: none; /* Remove underline */
    border-radius: 4px; /* Rounded corners */
}
#signup-link:hover{
    background-color: #0056b3; /* Darker blue on hover */
}


    </style>
</head>
<body>
<a id="signup-link" href="home.html">Home</a>
<div id="box">
    <form method="post">
        <div style="font-size: 20px; margin-bottom: 20px; color: white;">Signup</div>

        <input id="text" type="text" name="user_name" placeholder="Username"><br>
        <input id="text" type="password" name="password" placeholder="Password"><br>

        <input id="button" type="submit" value="Signup"><br>

        <a id="signup-link" href="login.php">Click to Login</a>
    </form>
</div>

</body>
</html>
