<?php
// Include database connection
include("connection.php");

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get announcement data from form
    $announcement_title = $_POST['announcement_title'];
    $announcement_content = $_POST['announcement_content'];

    // Prepare SQL statement to insert announcement into database
    $query = "INSERT INTO announcements (announcement_title, announcement_content) VALUES ('$announcement_title', '$announcement_content')";

    // Execute SQL query
    if (mysqli_query($con, $query)) {
        // Announcement posted successfully
        header("Location: news_feed.php"); // Redirect to news feed page
        exit();
    } else {
        // Error posting announcement
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
}
?>
