<?php
    include 'connect.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #ecf0f1;
        margin: 0;
        padding: 0;
    }
    .container {
        width: 80%;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 1rem;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .post {
        margin-bottom: 20px;
        padding: 20px;
        background-color: #fff;
        border-radius: 1rem;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        word-break: break-all;
    }
    .post p {
        margin: 10px 0;
    }
    .post b {
        color: #c0392b;
    }
    .post img {
        border-radius: 8px;
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
    h1
    {
        text-align: center;
        color: #c0392b;
    }
    .a {
        display: flex;
        justify-content: center;
    }
    .a li {
        list-style: none;
        margin: 0 10px;
    }
    .a li a {
        color: black;
        text-decoration: none;
        background-color: whitesmoke;
        padding: 10px 20px;
        border-radius: 5px;

    }
    .a li a:hover {
        background-color: aquamarine;
    }
    .nav {
        margin-bottom: 20px;
    }
    .posts {
        width: 80%;
        margin: 20px auto;
    }
    .post {
        margin-bottom: 20px;
        padding: 20px;
        background-color: #fff;
        border-radius: 1rem;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .post p {
        margin: 10px 0;
    }
    .post b {
        color: #c0392b;
    }
    .post img {
        border-radius: 8px;
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
    h1 {
        text-align: center;
        color: #c0392b;
    } 
</style>
<body>
    <h1>जीवन</h1>
    <section class="nav">
        <div>
            <nav class="navbar">
                <ul class="a">
                    <li><a href="home.php">Home</a></li>
                    <li><a href="bloodrequestsnearme.php">Requests Near Me</a></li>
                    <li><a href="need.php">I Need Blood</a></li>
                </ul>
            </nav>
        </div>
    </section>
    <section class="posts">
        <div class="container"> 
            <?php
            $sql = "SELECT * FROM blood_requests ORDER BY date_needed DESC";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='post'>";
                    echo "<P><b>Name:</b> " . $row['full_name'] . "</p>";
                    echo "<p><b>Urgency:</b>" . $row['urgency'] . "</p>";
                    echo "<p><b>Units:</b> " . $row['quantity_needed'] . "</p>";
                    echo "<p><b>Blood Type:</b> " . $row['blood_type'] . "</p>";
                    echo "<p><b>Date and Time:</b> " . $row['date_needed'] . "</p>";
                    echo "<p><b>Hospital Information:</b> " . $row['hospital_info'] . "</p>";
                    echo "<p><b>Hospital Address:</b> " . $row['hospital_adderess'] . "</p>";
                    echo "<P><b>Contact Information:</b> " . $row['contact_info'] . "</p>";
                    echo "<p><b>Additional Details:</b> " . $row['additional_details'] . "</p>";
                    echo "</div>";
                }
            }
            else {
                echo "<p>No posts found.</p>";
            }
            ?>
        </div>
    </sectio>
            
    
</body>
</html>