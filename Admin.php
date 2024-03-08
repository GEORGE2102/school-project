<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USER DATA</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="admin.css">

   
</head>
<body>
    <div class="admin_header">
    <h2>WELCOME ADMIN</h2>
    </div>
    <a id="signup-link" href="Adminlogin.php">logout</a>
    <a id="signup-link" href="admin_updates_form.php">admin updates form</a>
    <a id="signup-link" href="announcements.php">announcements</a>
    <a href="Adminsignup.php">Click to Signup</a>
<?php
// including the database connection
include("connection.php");
include("functions.php");

//$user_data = check_login($con);

// querry to retrieve data from the database
$query = "SELECT * FROM project_form";
$result = mysqli_query($con, $query);

// check if there are any rows returned 
if(mysqli_num_rows($result) > 0 ){
    // starting html output
    echo "<div class='table-container'>";
    echo "<table>";

    // displaying table headers
    echo "<tr><th>User ID</th><th>First Name</th><th>Last Name</th><th>Gender</th><th>Address</th><th>Area</th><th>Project Name</th><th>Description</th></tr>";

    // looping through each row of the results set 
    while($row = mysqli_fetch_assoc($result)){
        // output for each row
        echo "<tr>";
        echo "<td>". $row['id'] . "</td>";
        echo "<td>". $row['first_name'] ."</td>";
        echo "<td>". $row['last_name'] . "</td>";
        echo "<td>". $row['gender'] . "</td>";
        echo "<td>". $row['address'] . "</td>";
        echo "<td>". $row['area'] . "</td>";
        echo "<td>". $row['project_name'] . "</td>";
        echo "<td>". $row['description'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
} else{
    echo "No data found in the database";
}

// closing connection from the database
mysqli_close($con);
?>
</body>
</html>
