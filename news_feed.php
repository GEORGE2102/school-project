<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Announcements</title>
    <style>

.section-with-background {
    background-size: cover;
    background-position: center;
    padding: 100px 0;
}

.container-with-background{
    background-image: url('images/woman-on-phone.png');
    max-width: 100%;
    margin: 0 auto;
    padding: 0 15px;
}

.content {
    width: 945px;
    height: 294px;
    max-width: 100%;
    margin: 0 auto;
    text-align: center;
    color: #fff;
}

.content h2 {
    margin-top:0;
    font-size: 32px;
    color:red;
    
}


/* Responsive Design */
@media screen and (max-width: 768px) {
    .content {
        padding: 0 20px; /* Adjust padding for smaller screens */
    }

    .content h2 {
        font-size: 28px; /* Decrease font size for smaller screens */
    }

    .content p {
        font-size: 16px; /* Decrease font size for smaller screens */
        margin-bottom: 20px; /* Adjust margin for smaller screens */
    }

    button {
        font-size: 14px; /* Decrease font size for smaller screens */
    }
}

       
        /* CSS styles for announcements */
        .announcement {
            margin-top:50px;
            margin-bottom: 20px;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .announcement h3 {
            color: #333;
        }

        .announcement p {
            color: #666;
        }

        .announcement-date {
            color: #999;
            font-style: italic;
        }
        .news-feed {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.post {
    display: flex;
    margin-bottom: 20px;
}

.post-image {
    flex: 0 0 200px; /* Fixed width for the image */
    margin-right: 20px;
}

.post-content {
    flex: 1;
}

.post-content h2 {
    color: #333;
}

.post-content p {
    color: #666;
}
/* styles.css */

/* Style the news-feed container */
.news-feed{
    display: flex;
    flex-direction:center;
    justify-content:space-between;
    padding: 20px;
    border: 1px solid #ccc;
    border-radius:8px;
    background-image: url('images/woman-on-phone.png');
    background-size: cover;
    background-position: center;
    padding: 100px 0;
}
.news-feed .video{
    flex:1;
    margin-right:20px;

}
.news-feed .text{
    flex:2;
    color:white;

}
/* responsive style  */
@media (max-width:768px) {
    .news-feed{
        flex-direction:column;
    }
    .news-ffed .video{
        margin-right:0;
        margin-bottom:20px;
    }
    
}

/* Style each news post */
.post {
    display: flex;
    margin-bottom: 20px;
    background-color: #f9f9f9;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

/* Style the post image container */
.post-image {
    flex: 0 0 200px; /* Fixed width for the image */
    overflow: hidden;
    border-top-left-radius: 8px;
    border-bottom-left-radius: 8px;
}

/* Style the post image */
.post-image img {
    width: 100%;
    height: auto;
    object-fit: cover;
}

/* Style the post content container */
.post-content {
    flex: 1;
    padding: 20px;
}

/* Style the post title */
.post-content h2 {
    color: #333;
    margin-top: 0;
}

/* Style the post content */
.post-content p {
    color: #666;
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
                  <a class="nav-link" href="news_feed.php">News</a>
                  <a class="nav-link" href="contact.html">Contact</a>
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
    <div class="section-with-background">
        <div class="container-with-background">
            <div class="content">
                <h2>Announcements</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <!-- PHP code for displaying announcements -->
        <?php
        // Include database connection
        include("connection.php");

        // Query to retrieve announcements from the announcements table
        $query = "SELECT * FROM announcements ORDER BY announcement_date DESC";
        $result = mysqli_query($con, $query);

        // Check if announcements exist
        if ($result && mysqli_num_rows($result) > 0) {
            // Loop through each announcement and display them
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<div class='announcement'>";
                echo "<h3>" . $row['announcement_title'] . "</h3>";
                echo "<p>" . $row['announcement_content'] . "</p>";
                echo "<p class='announcement-date'>Posted on: " . $row['announcement_date'] . "</p>";
                echo "</div>";
            }
        } else {
            echo "No announcements available.";
        }
        ?>

    </div>
<div class="news-feed">
    <div class="video">
        <!-- my embeded youtube video code-->
        <iframe width="718" height="404" src="https://www.youtube.com/embed/-5Q54WZqvvA" title="Constituency Development Funds: A Case Study Of Livingstone In Zambia" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

    </div>
    <div class="text">
            <h2>Constituency Development Funds: A Case Study Of Livingstone In Zambia</h2>
    </div>
    <div class="video">
        <!-- my embeded youtube video code-->
        <iframe width="718" height="404" src="https://www.youtube.com/embed/OrIZKK77Vjs" title="Matero CDF disbursed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="text">
            <h2>Matero CDF disbursed</h2>
    </div>
    <div class="video">
        <!-- my embeded youtube video code-->
        <iframe width="718" height="404" src="https://www.youtube.com/embed/BtUE6TM6xIE" title="Mwense Youth utilizes CDF" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
    <div class="text">
            <h2>Mwense Youth utilizes CDF</h2>
    </div>
</div>
</body>
</html>
