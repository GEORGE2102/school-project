<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
<a class="download-link" href="home.html">Home</a>
<div id="box">
    <form method="post">
        <div style="font-size: 20px; margin-bottom: 20px; color: white;">Login</div>

        <input id="text" type="text" name="user_name" placeholder="Username"><br>
        <input id="text" type="password" name="password" placeholder="Password"><br>

        <input id="button"  type="submit" value="Login"><br>

        <a id="signup-link" href="signup.php">Click to Signup</a>
    </form>
</div>

</body>
</html>
