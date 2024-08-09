<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f5f6f7;
    margin: 0;
    padding: 0;
}

.container {
    width: 55%;
    margin: 20px auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.profile-header {
    text-align: center;
    margin-bottom: 30px;
}

.profile-header img {
    border-radius: 50%;
    border: 3px solid #e74c3c;
    width: 150px;
    height: 150px;
}

.profile-header h1 {
    margin: 15px 0;
    color: #e74c3c;
    font-size: 1.8em;
}

.profile-info {
    line-height: 1.8;
    color: #2c3e50;
}

.profile-info b {
    color: #e74c3c;
}

.profile-info p {
    margin: 8px 0;
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
    font-size: 18px;
    color: #e74c3c;
    text-decoration: none;
}

.login-link:hover {
    text-decoration: underline;
}

.yourposts,
.requeststoyou {
    margin: 20px auto;
    padding: 20px;
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    width: 50%;
    max-width: 800px;
    word-break: break-all;
}

h2 {
    color: #e74c3c;
    font-size: 1.5em;
}

hr {
    border: 0;
    height: 1px;
    background: #e0e0e0;
    margin: 20px 0;
}

.post {
    margin-bottom: 20px;
    padding: 15px;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    background-color: #f9f9f9;
}

.post h2 {
    font-size: 1.2em;
    margin: 0;
    color: #333;
}

.post p {
    margin: 10px 0;
}

.post a {
    color: #3498db;
    text-decoration: none;
}

.post a:hover {
    text-decoration: underline;
}

.edit, .logout {
    display: inline-block;
    margin: 10px;
    padding: 10px 20px;
    border-radius: 8px;
    background-color: #e0e0e0;
    color: #333;
    text-decoration: none;
}

.edit {
    background-color: #3498db;
    color: #ffffff;
}

.logout {
    background-color: #e74c3c;
    color: #ffffff;
}

.edit:hover, .logout:hover {
    background-color: #333;
    color: #ffffff;
}

.outsection {
    text-align: center;
    margin-top: 20px;
    width: 90%;
    margin: 0 auto;
    background-color: #ffffff;
    border-radius: 8px;
    padding: 15px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

    </style>
</head>
<body>
    <div class="container">
        <?php
        session_start();
        include 'connect.php';

        if (!isset($_SESSION['session_id'])) {
            echo "<div class='alert'>You need to login first</div>";
            echo "<a href='login.php' class='login-link'>Sign Up / Sign In</a>";
        } else {
            $session_id = $_SESSION['session_id'];
            $sql = "SELECT * FROM blooddonors WHERE session_id='$session_id'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            if($row) {
                echo "<div class='profile-header'>";
                echo "<img src='".$row['profile_photo']."' alt='Profile Photo'>";
                echo "<h1>Welcome to your Profile, ".$row['full_name']."</h1>";
                echo "</div>";
                echo "<div class='profile-info'>";
                echo "<p><b>User ID:</b> ".$row['username']."</p>";
                echo "<p><b>Full Name:</b> ".$row['full_name']."</p>";
                echo "<p><b>Email:</b> ".$row['email']."</p>";
                echo "<p><b>Date of Birth:</b> ".$row['dob']."</p>";
                echo "<p><b>Gender:</b> ".$row['gender']."</p>";
                echo "<p><b>Blood Group:</b> ".$row['blood_type']."</p>";
                echo "<p><b>Phone Number:</b> ".$row['contact_number']."</p>";
                echo "<p><b>Address:</b> ".$row['street_address'].", ".$row['postal_code'].", ".$row['city'].", ".$row['state'].", Nepal</p>";
                echo "<p><b>District:</b> ".$row['district']."</p>";
                echo "<p><b>Emergency Contact:</b> ".$row['emergency_contact_name']."</p>";
                echo "<p><b>Emergency Contact Number:</b> ".$row['emergency_contact_number']."</p>";
                echo "<p><b>Relationship:</b> ".$row['relationship']."</p>";
                echo "<p><b>Health Condition:</b> ".$row['health_conditions']."</p>";
                echo "<p><b>Travel History:</b> ".$row['travel_history']."</p>";
                echo "<p><b>Recent Illness:</b> ".$row['recent_illness']."</p>";
                echo "</div>";
                echo "<h2> YOUR POSTS</h2>";
                echo "<hr>";
                echo "<div class='yourposts'>";
                $sql1 = "SELECT * FROM blood_requests WHERE session_id='$session_id'";  
                $result = mysqli_query($conn, $sql1);
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='post'>";
                        echo "<h2>Name:".$row['full_name']."</h2>";
                        echo "<p><b>Contact Information: </b>".$row['contact_info']."</p>";
                        echo "<p> <b>Location: </b>".$row['location']."</p>";
                        echo "<p><b>Blood Type: </b>".$row['blood_type']."</p>";
                        echo "<p> <b>Urgency</b>".$row['urgency']."</p>";
                        echo "<p><b>Units:</b>".$row['quantity_needed']."</p>";
                        echo "<p> <b>Additional Details: </b>".$row['additional_details']."</p>";
                        echo "<p> <b>Date and Time: </b>".$row['date_needed']."</p>";
                        echo "<p> <b>Hospital Information:  </b>".$row['hospital_info']."</p>";
                        echo "<p><b> Hospital Adderess: </b>".$row['hospital_adderess']."</p>";
                        echo "<p><b>Authrization Proof: </b>".$row['authorization_proof']."</p>";
                        echo "<p><b>State: </b>".$row['state']."</p>";
                        echo "<p><b>Posted On: </b> ".$row['created_at']."</p>";
                        echo "<P><b><a href='edit-post.php?id=".$row['id']."'>Edit</a></b></p>";
                        echo "<P><b><a href='delete-post.php?id=".$row['id']."'>Delete</a></b></p>";
                        echo "</div>";
        
                    }
                } else {
                    echo "<p>No posts found</p>";
                }
                echo "</div>";
                echo "<div class='requeststoyou'>";
                $sql2 = "SELECT * FROM blood_requests WHERE district='".$row['district']."' AND blood_type='".$row['blood_type']."'";
                $result = mysqli_query($conn, $sql2);
                if (mysqli_num_rows($result) > 0) {
                    while($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='post'>";
                        echo "<h2>Name: ".$row['full_name']."</h2>";
                        echo "<p><b>Contact Information: </b>".$row['contact_info']."</p>";
                        echo "<p> <b>Location: </b>".$row['location']."</p>";
                        echo "<p><b>Blood Type: </b>".$row['blood_type']."</p>";
                        echo "<p> <b>Urgency</b>".$row['urgency']."</p>";
                        echo "<p><b>Units:</b>".$row['quantity_needed']."</p>";
                        echo "<p> <b>Additional Details: </b>".$row['additional_details']."</p>";
                        echo "<p> <b>Date and Time: </b>".$row['date_needed']."</p>";
                        echo "<p> <b>Hospital Information:  </b>".$row['hospital_info']."</p>";
                        echo "<p><b> Hospital Adderess: </b>".$row['hospital_adderess']."</p>";
                        echo "<p><b>Authrization Proof: </b>".$row['authorization_proof']."</p>";
                        echo "<p><b>State: </b>".$row['state']."</p>";
                        echo "<p><b>Posted On: </b> ".$row['created_at']."</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>No Requests found</p>";
                }
                echo  "</div>";
            } else 
            {
                echo "<p>No data found</p>";
            }
        }
    
        ?>
    </div>
</body>
</html>
