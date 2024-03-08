<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <title>Admin Updates</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Include your CSS stylesheets here -->
    <link rel="stylesheet" href="styles.css">
    <style>
        /* styles.css */

/* Container styles */
body{
    background-color: #f4f2f3;
}
.container {
    max-width: 1000px;
    height:400px;
    margin: 0 auto;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-top:100px;
    overflow-y: auto; /* Add vertical scrolling for overflow content */
    padding: 10px; /* Add padding to provide space between the container's content and edges */
    border: 1px solid #ccc; /* Add a border for visual separation */
    border-radius: 5px; /* Add rounded corners for visual appeal */
    box-shadow: 0px 4px 8px rgba(0,0,0,0.1)

}

/* Heading styles */
h1 {
    text-align: center;
    margin-bottom: 20px;
    
}

/* Form styles */
form {
    text-align: center;
}

label {
    font-weight: bold;
}

textarea {
    width: 100%;
    max-width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    background-color: lightblue;
}

input[type="submit"] {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

input[type="submit"]:hover {
    background-color: #0056b3;
}

/* Inline CSS styles for the download link */
.download-link {
    display: inline-block;
    padding: 8px 16px;
    background-color: #007bff; /* Blue background color */
    color: #fff; /* White text color */
    text-decoration: none; /* Remove underline */
    border-radius: 4px; /* Rounded corners */
}

.download-link:hover {
    background-color: #0056b3; /* Darker blue on hover */
}


    </style>
</head>
<body>
<nav class="navbar bg-body-tertiary fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="home.html">CDF</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">CDF</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login.php">login user</a>
            <a class="nav-link" href="signup.php">signup</a>
            <a class="nav-link" href="#news">News</a>
            <a class="nav-link" href="#contact">Contact</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Adminlogin.php">admin login</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex mt-3" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </div>
</nav>

<div class="container">
        <h1>Admin Updates</h1>
        <!-- Form for admin to post updates 
        <form action="post_update.php" method="post">
            <label for="update_content">Update Content:</label><br>
            <textarea id="update_content" name="update_content" rows="4" cols="50"></textarea><br><br>
            <input type="submit" value="Post Update">
        </form>
-->

        <!-- Display existing updates -->

<?php
// Include database connection
include("connection.php");

// Query to retrieve updates from the admin_updates table
$query = "SELECT * FROM admin_updates ORDER BY update_time DESC";
$result = mysqli_query($con, $query);

// Check if updates exist
if (mysqli_num_rows($result) > 0) {
    // Loop through each update and display them
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='update'>";
        echo "<p class='update-content'>" . $row['update_content'] . "</p>";
        echo "<p class='update-time'>" . $row['update_time'] . "</p>";
        echo "<hr>";
        // Display styled download link for PDF file
        echo "<a class='download-link' href='uploads/" . $row['pdf_file'] . "' download>Download PDF</a>";
        echo "</div>";
    }
} else {
    echo "No updates available.";
}
?>
 </div>
</body>
</html>
