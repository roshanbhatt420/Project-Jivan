<?php
include 'connect.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Request Form</title>
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
        width: 50%;
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
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }
    input[type=submit]:hover {
        background-color: #45a049;
    }
</style>
<body>
    <div class="form">
    <h1>Blood Request Form</h1>
    <form action="" method="post">
        <label for="full_name">Full Name:</label>
        <input type="text" id="full_name" name="full_name" required><br><br>

        <label for="contact_info">Contact Information:</label>
        <input type="text" id="contact_info" name="contact_info" required><br><br>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required><br><br>
        <label for="nepalistate">Select State:</label>
        <select id="nepalistate" name="nepalistate" required>
            <option value="Province 1">Province 1</option>
            <option value="Province 2">Province 2</option>
            <option value="Bagmati Province">Bagmati Province</option>
            <option value="Gandaki Province">Gandaki Province</option>
            <option value="Lumbini Province">Lumbini Province</option>
            <option value="Karnali Province">Karnali Province</option>
            <option value="Sudurpashchim Province">Sudurpashchim Province</option>
        </select><br><br>
        <label for="district">Select District:</label>
        <select id="district" name="district" required>
            <option value="Bhojpur">Bhojpur</option>
            <option value="Dhankuta">Dhankuta</option>
            <option value="Ilam">Ilam</option>
            <option value="Jhapa">Jhapa</option>
            <option value="Khotang">Khotang</option>
            <option value="Morang">Morang</option>
            <option value="Okhaldhunga">Okhaldhunga</option>
            <option value="Panchthar">Panchthar</option>
            <option value="Sankhuwasabha">Sankhuwasabha</option>
            <option value="Solukhumbu">Solukhumbu</option>
            <option value="Sunsari">Sunsari</option>
            <option value="Taplejung">Taplejung</option>
            <option value="Terhathum">Terhathum</option>
            <option value="Udayapur">Udayapur</option>
            <option value="Saptari">Saptari</option>
            <option value="Siraha">Siraha</option>
            <option value="Dhanusa">Dhanusa</option>
            <option value="Mahottari">Mahottari</option>
            <option value="Sarlahi">Sarlahi</option>
            <option value="Bara">Bara</option>
            <option value="Parsa">Parsa</option>
            <option value="Rautahat">Rautahat</option>
            <option value="Sindhuli">Sindhuli</option>
            <option value="Ramechhap">Ramechhap</option>
            <option value="Dolakha">Dolakha</option>
            <option value="Sindhupalchok">Sindhupalchok</option>
            <option value="Kavrepalanchok">Kavrepalanchok</option>
            <option value="Lalitpur">Lalitpur</option>
            <option value="Bhaktapur">Bhaktapur</option>
            <option value="Kathmandu">Kathmandu</option>
            <option value="Nuwakot">Nuwakot</option>
            <option value="Rasuwa">Rasuwa</option>
            <option value="Dhading">Dhading</option>
            <option value="Makwanpur">Makwanpur</option>
            <option value="Rautahat">Rautahat</option>
            <option value="Chitwan">Chitwan</option>
            <option value="Gorkha">Gorkha</option>
            <option value="Lamjung">Lamjung</option>
            <option value="Tanahun">Tanahun</option>
            <option value="Syangja">Syangja</option>
            <option value="Kaski">Kaski</option>
            <option value="Manang">Manang</option>
            <option value="Mustang">Mustang</option>
            <option value="Myagdi">Myagdi</option>
            <option value="Parbat">Parbat</option>
            <option value="Baglung">Baglung</option>
            <option value="Gulmi">Gulmi</option>
            <option value="Palpa">Palpa</option>

            <option value="Arghakhanchi">Arghakhanchi</option>
            <option value="Pyuthan">Pyuthan</option>
            <option value="Rolpa">Rolpa</option>
            <option value="Rukum">Rukum</option>
            <option value="Salyan">Salyan</option>
            <option value="Dang">Dang</option>

            <option value="Bardiya">Bardiya</option>
            <option value="Surkhet">Surkhet</option>
            <option value="Dailekh">Dailekh</option>
            <option value="Jajarkot">Jajarkot</option>
            <option value="Dolpa">Dolpa</option>
            <option value="Jumla">Jumla</option>
            <option value="Kalikot">Kalikot</option>
            <option value="Mugu">Mugu</option>
            <option value="Humla">Humla</option>
            <option value="Bajura">Bajura</option>
            <option value="Bajhang">Bajhang</option>
            <option value="Achham">Achham</option>
            <option value="Doti">Doti</option>
            <option value="Kailali">Kailali</option>
            <option value="Kanchanpur">Kanchanpur</option>
            <option value="Dadeldhura">Dadeldhura</option>
            <option value="Baitadi">Baitadi</option>
            <option value="Darchula">Darchula</option>
        </select><br><br>
        <label for="blood_type">Blood Type:</label>
        <select id="blood_type" name="blood_type" required>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select><br><br>

        <label for="urgency">Urgency:</label>
        <select id="urgency" name="urgency" required>
            <option value="Emergency">Emergency</option>
            <option value="High">High</option>
            <option value="Medium">Medium</option>
            <option value="Low">Low</option>
        </select><br><br>

        <label for="quantity_needed">Quantity Needed (units):</label>
        <input type="number" id="quantity_needed" name="quantity_needed" required><br><br>

        <label for="additional_details">Additional Details:</label><br>
        <textarea id="additional_details" name="additional_details" rows="4" cols="50"></textarea><br><br>

        <label for="date_needed">Date and Time Needed:</label>
        <input type="datetime-local" id="date_needed" name="date_needed" required><br><br>

        <label for="hospital_info">Hospital or Clinic Information:</label>
        <input type="text" id="hospital_info" name="hospital_info"><br><br>
        <lable for="hospital_location">Hospital Location:</label>
        <input type="text" id="hospital_location" name="hospital_location"><br><br>
        <label for="authorization_proof">Authorization Proof (if any):</label>
        <input type="text" id="authorization_proof" name="authorization_proof"><br><br>

        <input type="submit" name="submit" value="Submit Request">
    </form>
    </div>
    <?php
    if(isset($_POST['submit'])) {
        $session_id = $_SESSION['session_id'];
        $full_name = $_POST['full_name'];
        $district=$_POST['district'];
        $contact_info = $_POST['contact_info'];
        $location = $_POST['location'];
        $state=$_POST['nepalistate'];
        $blood_type = $_POST['blood_type'];
        $urgency = $_POST['urgency'];
        $quantity_needed = $_POST['quantity_needed'];
        $additional_details = $_POST['additional_details'];
        $date_needed = $_POST['date_needed'];
        $hospital_info = $_POST['hospital_info'];
        $hospital_location = $_POST['hospital_location'];
        $authorization_proof = $_POST['authorization_proof'];
        $sql="INSERT INTO blood_requests (full_name, contact_info, location, blood_type, urgency, quantity_needed, additional_details, date_needed, hospital_info, hospital_adderess, authorization_proof,state,session_id,district) VALUES ('$full_name', '$contact_info', '$location', '$blood_type', '$urgency', '$quantity_needed', '$additional_details', '$date_needed', '$hospital_info', '$hospital_location', '$authorization_proof','$state','$session_id','$district')";
        $result=mysqli_query($conn,$sql);
        if($result) {
            echo "<script>window.location.href='post.php';</script>";
        }
        else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    ?>
</body>
</html>
