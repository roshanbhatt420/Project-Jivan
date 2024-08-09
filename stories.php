<?php
include 'connect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Stories</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #ecf0f1;
        margin: 0;
        padding: 0;
    }
    .nav {
        background-color: #c0392b;
        color: #fff;
        padding: 10px 0;
    }
    .navbar {
        display: flex;
        justify-content: space-between;
        width: 80%;
        margin: 0 auto;
    }
    .a {
        list-style-type: none;
        display: flex;
    }
    .a li {
        margin-right: 20px;
    }
    .a li a {
        color:black;
        text-decoration: none;
        height: 100%;
        padding: 10px;
        background-color: #fff;
        border-radius: 3rem;
    }
    .a li a:hover {
        background-color: aquamarine;

    }
    .experience {
        width: 50%;
        margin: 1rem auto;
        padding: 20px;
    }
    .post {
        margin: 20px 0;
        background-color: #fff;
        padding: 20px;
        border-radius: 1rem;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .post p {
        margin: 10px 0;
        word-wrap: break-word;
    }
    .post b {
        color: #c0392b;
    }
    .post img {
        border-radius: 8px;
        width: 100%;


    }
    .alert {
        padding: 15px;
        background-color: #f8d7da;
        color: #721c24;
        border: 1px solid #f5c6cb;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    .login-link {
        display: block;
        text-align: center;
        margin-top: 20px;
    }
    .navbar {
        background-color: #c0392b;
        color: #fff;
        padding: 10px 0;
    }
    .navbar ul {
        list-style-type: none;
        display: flex;
    }
    .navbar ul li {
        margin-right: 20px;
    }
    .navbar ul li a {
        color: #;
        text-decoration: none;
    }
    footer {
        background-color: #c0392b;
        color: #fff;
        text-align: center;
        padding: 10px 0;
        position: fixed;
        height: 10px;
        bottom: 0;
        width: 100%;
    }
</style>
<body>
<section class="nav">
    <div>
        <nav class="navbar">
            <ul class="a">
                <li><a href="home.php">Home</a></li>
                <li><a href="addyourstory.php">Add Your Story</a></li>
            </ul>
        </nav>
    </div>
</section>
<section class="experience">
    <div class="storie">
        <h1>
            Stories Of Blood Donors and Recipients
        </h1>
        <?php
        $sql = "SELECT * FROM stories";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<div class="post">';
                echo '<img src="' . $row['photo'] . '" alt="' . $row['title'] . '">';
                echo '<h2>' . $row['title'] . '</h2>';
                echo '<p>' . $row['story'] . '</p>';
                echo '<p><b>Author:</b> ' . $row['author'] . '</p>';
                echo '<p><i onclick="myFunction(this)" class="fa fa-thumbs-up"></i> 0</p>';
                echo  '<script> </script>';
                echo '</div>';

            }

        } else {
            echo '<p>No stories found.</p>';
        }
        ?>
    </div>
</section>
<footer>
    <p>&copy; 2024 Jivan</p>
</footer>
</body>
</html>