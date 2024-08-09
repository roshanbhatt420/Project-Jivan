<?php
include 'connect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editprofile</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #c0392b;
    }
    .editprofile {
        width: 50%;
        margin: 0 auto;
    }
    fieldset {
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 20px;
        margin-bottom: 10px;
        background-color: #f1f1f1;
    }
    legend {
        padding: 5px 10px;
        background-color: #4CAF50;
        color: white;
        border-radius: 4px;
    }
    label {
        display: block;
        margin-top: 10px;
    }
    input, select, textarea {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    input[type=radio] {
        display: inline;
        width: auto;
    }
    input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    input[type=submit]:hover {
        background-color: #45a049;
    }
    input[type=checkbox] {
        display: inline;
        width: auto;
    }
    a {
        color: #4CAF50;
    }
    a:hover {
        color: #45a049;
    }
    button {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    button:hover {
        background-color: #45a049;
    }
    select {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }
    .container {
        width: 50%;
        margin: 0 auto;
    }
</style>
<body>
    <section class="editprofile">
    <form action="" method="POST" enctype="multipart/form-data">
          <fieldset>
            <legend>Personal Information</legend>
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" required>
            
            <label for="dob">Date of Birth:</label>
            <input type="date" id="dob" name="dob" required>
            
            <label>Gender:</label>
            <input type="radio" id="male" name="gender" value="male" required>
            <label for="male">Male</label>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label>
            
            <label for="bloodType">Blood Type:</label>
            <select id="bloodType" name="bloodType" required>
              <option value="">Select Blood Type</option>
              <option value="A+">A+</option>
              <option value="A-">A-</option>
              <option value="B+">B+</option>
              <option value="B-">B-</option>
              <option value="AB+">AB+</option>
              <option value="AB-">AB-</option>
              <option value="O+">O+</option>
              <option value="O-">O-</option>
            </select>
            
            <label for="contactNumber">Contact Number:</label>
            <input type="tel" id="contactNumber" name="contactNumber" required>
            
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" required>
          </fieldset>
          <fieldset>
            <legend>Address Information</legend>
            <label for="streetAddress">Street Address:</label>
            <input type="text" id="streetAddress" name="streetAddress" required>
            
            <label for="city">City:</label>
            <input type="text" id="city" name="city" required>
            
            <label for="state">State/Province:</label>
            <select id="state" name="state" required>
              <option value="">Select State/Province</option>
              <option value="Bagmati">Bagmati</option>
              <option value="Gandaki">Gandaki</option>
              <option value="Karnali">Karnali</option>
              <option value="Lumbini">Lumbini</option>
              <option value="Province 1">Province 1</option>
              <option value="Province 2">Madhesh Pradesh</option>
            </select>
            
            <label for="postalCode">Postal/Zip Code:</label>
            <input type="text" id="postalCode" name="postalCode" required>
            
            <label for="country">Country:</label>
            <select id="country" name="country" required>
              <option value="">Select Country</option>
              <option value=""> Nepal</option>
            </select>
          </fieldset>

          <fieldset>
            <legend>Emergency Contact Information</legend>
            <label for="emergencyContactName">Emergency Contact Name:</label>
            <input type="text" id="emergencyContactName" name="emergencyContactName" required>
            
            <label for="emergencyContactNumber">Emergency Contact Number:</label>
            <input type="tel" id="emergencyContactNumber" name="emergencyContactNumber" required>
            
            <label for="relationship">Relationship:</label>
            <input type="text" id="relationship" name="relationship" required>
          </fieldset>
          <fieldset>
            <legend>Health and Eligibility Information</legend>
            <label for="healthConditions">Health Conditions:</label>
            <textarea id="healthConditions" name="healthConditions" rows="4"></textarea>
            
            <label for="travelHistory">Travel History:</label>
            <textarea id="travelHistory" name="travelHistory" rows="4"></textarea>
            
            <label for="recentIllness">Recent Illness or Surgery:</label>
            <input type="radio" id="yes" name="recentIllness" value="Yes">
            <label for="yes">Yes</label>
            <input type="radio" id="no" name="recentIllness" value="No" checked>
            <label for="no">No</label>
          </fieldset>
          <fieldset>
            <legend>Additional Information</legend>
            <label for="referralSource">How Did You Hear About Us?</label>
            <select id="referralSource" name="referralSource">
              <option value="">Select Option</option>
              <option value="Social Media">Social Media</option>
              <option value="Friend/Family">Friend/Family</option>
              <option value="Advertisement">Advertisement</option>
              <option value="Other">Other</option>
            </select>
            <label for="comments">Comments/Questions:</label>
            <textarea id="comments" name="comments" rows="4"></textarea>
          </fieldset>
          <fieldset>
            <legend>Profile Photo</legend>
            <label for="photo">Upload Profile Photo:</label>
            <input type="file" id="photo" name="photo" accept="image/*">
          </fieldset>
          <fieldset>
            <legend>Account Information</legend>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            
            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>
          </fieldset>
          <fieldset>
            <legend>Consent and Agreement</legend>
            <input type="checkbox" id="terms" name="terms" required>
            <label for="terms">I agree to the <a href="#">Terms and Conditions</a></label>
            
            <input type="checkbox" id="privacy" name="privacy" required>
            <label for="privacy">I agree to the <a href="#">Privacy Policy</a></label>
          </fieldset>

          <button type="submit" name="submit">Update</button>
        </form>
    </section>
    <?php
    if(isset($_POST['submit'])) {
        $session_id = $_SESSION['session_id'];
        $fullName = $_POST['fullName'];
        $dob = $_POST['dob'];
        $gender = $_POST['gender'];
        $bloodType = $_POST['bloodType'];
        $contactNumber = $_POST['contactNumber'];
        $email = $_POST['email'];
        $streetAddress = $_POST['streetAddress'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $postalCode = $_POST['postalCode'];
        $country = $_POST['country'];
        $emergencyContactName = $_POST['emergencyContactName'];
        $emergencyContactNumber = $_POST['emergencyContactNumber'];
        $relationship = $_POST['relationship'];
        $healthConditions = $_POST['healthConditions'];
        $travelHistory = $_POST['travelHistory'];
        $recentIllness = $_POST['recentIllness'];
        $referralSource = $_POST['referralSource'];
        $comments = $_POST['comments'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $confirmPassword = $_POST['confirmPassword'];
        $terms = $_POST['terms'];
        $privacy = $_POST['privacy'];
        $photo = $_FILES['photo']['name'];
        $photo_temp = $_FILES['photo']['tmp_name'];
        $photo_size = $_FILES['photo']['size'];
        $folder='roshan/';
        $photo_path = $folder.$photo;
        $photo_db_path = 'roshan/'.$photo;
        if($password == $confirmPassword) {
            if($photo_size > 0) {
                move_uploaded_file($photo_temp, $photo_path);
            }
            $sql = "update blooddonors set full_name='$fullName', dob='$dob',gender='$gender',blood_type='$bloodType',contact_number='$contactNumber',email='$email',street_address='$streetAddress',city='$city',state='$state',postal_code='$postalCode',country='$country',emergency_contact_name='$emergencyContactName',emergency_contact_number='$emergencyContactNumber',relationship='$relationship',health_conditions='$healthConditions',travel_history='$travelHistory',recent_illness='$recentIllness',referral_source='$referralSource',comments='$comments',username='$username',password_hash='$password',profile_photo='$photo_db_path' where session_id='$session_id'";
            $result = mysqli_query($conn, $sql);
            if($result) {
                echo "<script>window.location.href='profile.php';</script>";
            }
            else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }
    ?>
</body>
</html>