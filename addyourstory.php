<?php
include 'connect.php'; 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #c0392b;
    }
    h1 {
        text-align: center;
    }
    form {
        width: 50%;
        margin: 0 auto;
    }
    .form {
        width: 90%;
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        margin: 0 auto;
        height: 100%;
        background-color: #f1f1f1;
    }
    label {
        display: block;
        margin-top: 10px;
    }
    input, select {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        border-radius: 2rem;
    }
    textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
    }
    input[type=submit]:hover {
        background-color: #45a049;
    }
    input[type=file] {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type=file]:hover {
        background-color: #f1f1f1;
    }
    textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    textarea:hover {
        background-color: #f1f1f1;
    }
    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }

</style>
<body>
    <?php
    if (isset($_SESSION['session_id'])) {
        echo "<h1>Add Your Story</h1>";
        echo "<form action='' method='POST' enctype='multipart/form-data'>"; // Changed action to ''
        echo "<div class='form'>";
        echo "<label for='title'>Title</label>";
        echo "<input type='text' name='title' placeholder='Enter title' required>";
        echo "<label for='photo'>Photo</label>";
        echo "<input type='file' name='photo' accept='image/*' required>";
        echo "<label for='story'>Story</label>";
        echo "<textarea name='story' rows='25' cols='50' placeholder='Enter your story' required></textarea>";
        echo "<label for='author'>Author</label>";
        echo "<input type='text' name='author' placeholder='Enter author' required>";
        echo "<input type='submit' name='submit' value='Submit'>";
        echo "</div>";
        echo "</form>";
        if (isset($_POST['submit'])) {
            $title = $_POST['title'];
            $author = $_POST['author'];
            $photo = $_FILES['photo']['name'];
            $photo_temp = $_FILES['photo']['tmp_name'];
            $folder = "roshan/" . $photo;
            if (move_uploaded_file($photo_temp, $folder)) {
                $story = mysqli_real_escape_string($conn, $_POST['story']);
                $session_id = $_SESSION['session_id'];
                $sql = "INSERT INTO stories (id,title, photo, story, sessio_id,author) VALUES ('','$title', '$folder', '$story', '$session_id','$author')";
                $result = mysqli_query($conn, $sql);

                if ($result) {
                    echo "<script>window.location.href='stories.php';</script>";
                } else {
                    echo "Failed to add story: " . mysqli_error($conn);
                }
            } else {
                echo "Failed to upload photo";
            }
        }
    } else {
        echo "You need to log in to add your story";
    }
    ?>
</body>
</html>
