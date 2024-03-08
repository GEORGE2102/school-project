
<?php
// Include database connection
include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a file is uploaded
    if (isset($_FILES["pdf_file"])) {
        $file_name = $_FILES["pdf_file"]["name"];
        $file_tmp = $_FILES["pdf_file"]["tmp_name"];

        // Move uploaded file to a permanent location
        move_uploaded_file($file_tmp, "uploads/" . $file_name);

        // Get other form data
        $update_content = $_POST["update_content"];

        // Insert data into the database
        $query = "INSERT INTO admin_updates (update_content, pdf_file) VALUES ('$update_content', '$file_name')";
        $result = mysqli_query($con, $query);

        if ($result) {
            echo "Update posted successfully";
        } else {
            echo "Error posting update: " . mysqli_error($con);
        }
    } else {
        echo "No file uploaded";
    }
}
?>
