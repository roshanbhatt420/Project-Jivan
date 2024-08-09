<?php
 session_start();
include 'connect.php';
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
        background-color: red;
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
        align-items: center;
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
    .navbar ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
    }
    .navbar ul li {
        margin: 0 10px;
    }
    .navbar ul li a {
        color: #fff;
        text-decoration: none;
    }
    .navbar ul li a:hover {
        text-decoration: underline;
    }
    .requestsnearyou {
        width: 50%;
         margin: 20px auto;
    }
    .request {
        padding: 20px;
        background-color: #fff;
        border-radius: 1rem;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    select {
        padding: 10px;
        margin: 10px;
    }
    input[type="submit"] {
        padding: 10px;
        margin: 10px;
        background-color: #c0392b;
        width: 100%;
        color: #fff;
        border: none;
        border-radius: 5px;
    }
    input[type="submit"]:hover {
        background-color: #a93226;
    }
</style>
<body>

    <section class="requestsnearyou">
        <div class="request">
            <h1>Requests Near You</h1>
            <hr>
            <form action="" method="POST">
            <label for="nepalidistrict">District:</label>
            <select name="district" id="">
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
            </select><br>
            <label for="bloodgroup">Blood Group:</label>
            <select name="bloodgroup" id="">
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            </select>
            <br>
            <input type="submit" name="submit" value="Search">
            </form>
            <a href="home.php"><P style="background-color:green; text-align:center; color:white; border-radius: 12px; text-decoration: none; ">Home</P></a>

            <?php
            if(isset($_POST['submit'])) {
                $district = $_POST['district'];
                $bloodgroup = $_POST['bloodgroup'];
                echo $district;
                $sql = "SELECT * FROM blood_requests where district='$district'";
                $result = $conn->query($sql);
                if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<div class='post'>";
                        echo "<p><b>Name:</b> " . $row['full_name'] . "</p>";
                        echo "<p><b>Contact Information:</b> " . $row['contact_info'] . "</p>";
                        echo "<p><b>Blood Group:</b> " . $row['blood_type'] . "</p>";
                        echo "<p><b>Location:</b> " . $row['location'] . "</p>";
                        echo "<p><b>Uerjency:</b> " . $row['urgency'] . "</p>";
                        echo "<p><b>additional Information:</b> " . $row['additional_details'] . "</p>";
                        echo "<p><b> Needed ON:</b> " . $row['date_needed'] . "</p>";
                        echo "<p><b>Posted On:</b> " . $row['created_at'] . "</p>";
                        


                        echo "</div>";
                    }
                } else {
                    echo "<div class='alert'>No requests found.</div>";
                }
            }
        
            ?>
        </div>
    </section>
</body>
</html>