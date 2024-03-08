<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Announcement Form</title>
    <style>
        /* CSS styles for the announcement form */
        .announcement-form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            box-shadow: 0px 4px 8px rgba(0,0,0,0.1)
        }
        .announcement-form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        .announcement-form input[type="text"],
        .announcement-form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .announcement-form textarea {
            height: 100px;
        }
        .announcement-form input[type="submit"] {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .announcement-form input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="announcement-form">
        <h2>Post Announcement</h2>
        <form action="post_announcement.php" method="post">
            <label for="announcement_title">Title:</label>
            <input type="text" id="announcement_title" name="announcement_title" required>

            <label for="announcement_content">Content:</label>
            <textarea id="announcement_content" name="announcement_content" required></textarea>

            <input type="submit" value="Post Announcement">
        </form>
    </div>
</body>
</html>
