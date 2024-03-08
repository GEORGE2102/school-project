<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Admin Updates Form</title>
    <title>User Updates</title>
    <!-- Include your CSS stylesheets here -->
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>User Updates</h1>
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
                echo "</div>";
            }
        } else {
            echo "<p>No updates available.</p>";
        }
        ?>
    </div>
</body>
</html>
