<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - Blood Donation Website</title>
  <link rel="stylesheet" href="styles.css">
</head>
<style>
  main {
    padding: 20px;
    background-color: #c0392b;
  }
  .registration-form {
    margin: 0 auto;
    max-width: 800px;
    padding: 20px;
    background-color: #f9f9f9;
    border-radius: 5px;
  }
  .registration-form h1 {
    text-align: center;
    margin-bottom: 20px;
  }
  .registration-form fieldset {
    margin-bottom: 20px;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
  }
  .registration-form fieldset legend {
    font-size: 20px;
    font-weight: bold;
  }
  .registration-form label {
    display: block;
    margin-bottom: 5px;
  }
  .registration-form input[type="text"],
  .registration-form input[type="email"],
  .registration-form input[type="tel"],
  .registration-form input[type="password"],
  .registration-form input[type="date"],
  .registration-form select,
  .registration-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 5px;
  }
  .registration-form input[type="radio"] {
    margin-right: 5px;
  }
  .registration-form button {
    padding: 10px 20px;
    background-color: #ff0000;
    color: white;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  footer {
    background-color: \#b18f8c;
    color: white;
    text-align: center;
    padding: 10px 0;
    bottom: 0;
    width: 100%;
  }
  footer a {
    color: white;
    text-decoration: none;
    
  }
  footer a:hover {
    text-decoration: underline;
  }
  footer .container {
    display: flex;
    justify-content: space-between;
  }
  footer .quick-links {
    margin-left: 20px;
  }
  footer .contact-info {
    margin-right: 20px;
  }
  footer .social-media {
    margin-right: 20px;
  }
  @media (max-width: 768px) {
    footer .container {
      flex-direction: column;
    }
    footer .quick-links {
      margin-left: 0;
    }
    footer .contact-info {
      margin-right: 0;
    }
    footer .social-media {
      margin-right: 0;
    }
  }

</style>
<body>

  <main>
    <section class="registration-form">
      <div class="container">
        <h1>Register</h1>
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
            <label for="district">choose District:</label>
            <select id="district" name="district" required>
              <option value="">Select District</option>
              <option value="Achham">Achham</option>
              <option value="Arghakhanchi">Arghakhanchi</option>
              <option value="Baglung">Baglung</option>
              <option value="Baitadi">Baitadi</option>
              <option value="Bajhang">Bajhang</option>
              <option value="Bajura">Bajura</option>
              <option value="Banke">Banke</option>
              <option value="Bara">Bara</option>
              <option value="Bardiya">Bardiya</option>
              <option value="Bhaktapur">Bhaktapur</option>
              <option value="Bhojpur">Bhojpur</option>
              <option value="Chitwan">Chitwan</option>
              <option value="Dadeldhura">Dadeldhura</option>
              <option value="Dailekh">Dailekh</option>
              <option value="Dang">Dang</option>
              <option value="Darchula">Darchula</option>
              <option value="Dhading">Dhading</option>
              <option value="Dhankuta">Dhankuta</option>
              <option value="Dhanusa">Dhanusa</option>
              <option value="Dolakha">Dolakha</option>
              <option value="Dolpa">Dolpa</option>
              <option value="Doti">Doti</option>
              <option value="Gorkha">Gorkha</option>
              <option value="Gulmi">Gulmi</option>
              <option value="Humla">Humla</option>
              <option value="Ilam">Ilam</option>
              <option value="Jajarkot">Jajarkot</option>
              <option value="Jhapa">Jhapa</option>
              <option value="Jumla">Jumla</option>
              <option value="Kailali">Kailali</option>
              <option value="Kalikot">Kalikot</option>
              <option value="Kanchanpur">Kanchanpur</option>
              <option value="Kapilvastu">Kapilvastu</option>
              <option value="Kaski">Kaski</option>
              <option value="Kathmandu">Kathmandu</option>
              <option value="Kavrepalanchok">Kavrepalanchok</option>
              <option value="Khotang">Khotang</option>
              <option value="Lalitpur">Lalitpur</option>
              <option value="Lamjung">Lamjung</option>
              <option value="Mahottari">Mahottari</option>
              <option value="Makwanpur">Makwanpur</option>
              <option value="Manang">Manang</option>
              <option value="Morang">Morang</option>
              <option value="Mugu">Mugu</option>
              <option value="Mustang">Mustang</option>
              <option value="Myagdi">Myagdi</option>
              <option value="Nawalparasi">Nawalparasi</option>
              <option value="Nuwakot">Nuwakot</option>
              <option value="Okhaldhunga">Okhaldhunga</option>
              <option value="Palpa">Palpa</option>
              <option value="Panchthar">Panchthar</option>
              <option value="Parbat">Parbat</option>
              <option value="Parsa">Parsa</option>
              <option value="Pyuthan">Pyuthan</option>
              <option value="Ramechhap">Ramechhap</option>
              <option value="Rasuwa">Rasuwa</option>
              <option value="Rautahat">Rautahat</option>
              <option value="Rolpa">Rolpa</option>
              <option value="Rukum">Rukum</option>
              <option value="Rupandehi">Rupandehi</option>
              <option value="Salyan">Salyan</option>
              <option value="Sankhuwasabha">Sankhuwasabha</option>
              <option value="Saptari">Saptari</option>
              <option value="Sarlahi">Sarlahi</option>
              <option value="Sindhuli">Sindhuli</option>
              <option value="Sindhupalchok">Sindhupalchok</option>
              <option value="Siraha">Siraha</option>
              <option value="Solukhumbu">Solukhumbu</option>
              <option value="Sunsari">Sunsari</option>  
              <option value="Surkhet">Surkhet</option>
              <option value="Syangja">Syangja</option>
              <option value="Tanahu">Tanahu</option>
              <option value="Taplejung">Taplejung</option>
              <option value="Terhathum">Terhathum</option>
              <option value="Udayapur">Udayapur</option>
            </select>
            
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

          <button type="submit" name="submit">Register</button>
        </form>
      </div>
    </section>
  </main>
  <?php
  include 'connect.php';
  if(isset($_POST['submit']))
  {
      $fullName = $_POST['fullName'];
      $dob = $_POST['dob'];
      $gender=$_POST['gender'];
      $bloodType = $_POST['bloodType'];
      $contactNumber = $_POST['contactNumber'];
      $email = $_POST['email'];
      $streetAddress = $_POST['streetAddress'];
      $city = $_POST['city'];
      $district = $_POST['district'];
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
      $photo = $_FILES['photo']['name'];
      $photo_temp = $_FILES['photo']['tmp_name'];
      $folder="roshan/".$photo;
      move_uploaded_file($photo_temp,$folder);
      $username = $_POST['username'];
      $password = $_POST['password'];
      $session_id=md5(rand(999,9999999999));
      $min_age_date = date('Y-m-d', strtotime('-18 years'));
      if($dob>=$min_age_date){
          echo "<script>alert('You must be 18 years or older to register')</script>";
          exit();
      }
      else if($password!=$_POST['confirmPassword'])
      {
          echo "<script>alert('Password does not match')</script>";
      }
      else
      {
      $sql="select * from blooddonors where email='$email' OR username='$username'";
      $result=mysqli_query($conn,$sql);
      $row=mysqli_num_rows($result);
      if($row>0)
      {
          echo "<script>alert('User already exists')</script>";
      }
      else
      {
          $sql="insert into blooddonors(full_name, dob, gender, blood_type, contact_number, email, street_address, city, state, postal_code, country, 
    emergency_contact_name, emergency_contact_number, relationship, health_conditions, travel_history, recent_illness, 
    referral_source, comments, profile_photo, username, password_hash,district, session_id) values('$fullName', '$dob', '$gender', '$bloodType', '$contactNumber', '$email', '$streetAddress', '$city', '$state', '$postalCode', '$country', '$emergencyContactName', '$emergencyContactNumber', '$relationship', '$healthConditions', '$travelHistory', '$recentIllness', '$referralSource', '$comments', '$photo', '$username', '$password','$district', '$session_id')";
          $result=mysqli_query($conn,$sql);
          if($result)
          {
            $_SESSION['session_id']=$session_id;
            echo "<script>window.location.href='home.php?session_id=$session_id&registered'</script>";
          }
          else
          {
              echo "<script>alert('User registration failed')</script>";
          }
      }
  }
  }

  ?>

  <footer>
    <div class="container">
      <div class="quick-links">
        <a href="">Privacy Policy</a> | <a href="">Terms of Service</a>
      </div>
      <div class="contact-info">
        <p>Contact Us: (123) 456-7890 | info@blooddonate.com</p>
      </div>
      <div class="social-media">
        <a href=""><img src="images.png" alt="Facebook"></a>
        <a href=""><img src="images.png" alt="Twitter"></a>
    
      </div>
    </div>
  </footer>

</body>
</html>
