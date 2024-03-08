<?php
// Include the database connection
include("connection.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize inputs
    $first_name = mysqli_real_escape_string($con, $_POST['first_name']);
    $last_name = mysqli_real_escape_string($con, $_POST['last_name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $phone = mysqli_real_escape_string($con, $_POST['phone']);
    $message = mysqli_real_escape_string($con, $_POST['message']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);

    // Insert the data into the database
    $query = "INSERT INTO contact_form (first_name, last_name, email, phone, message, gender) 
              VALUES ('$first_name', '$last_name', '$email', '$phone', '$message', '$gender')";
    $result = mysqli_query($con, $query);

    if ($result) {
        //echo "Thank you! Your message has been submitted successfully.";
        header("Location: thank_you.php");

    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($con);
    }
}
?>
