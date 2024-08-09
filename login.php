<?php
session_start();
include 'connect.php';

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Login</title> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <style> 
     
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
*{
margin: 0;
padding: 0;
box-sizing: border-box;
font-family: 'Poppins',sans-serif;
}
body{
background: #c0392b;
overflow: hidden;
}
::selection{
background: rgba(26,188,156,0.3);
}
.container{
max-width: 440px;
padding: 0 20px;
margin: 170px auto;
}
.wrapper{
width: 100%;
background: #fff;
border-radius: 3rem;
box-shadow: 0px 4px 10px 1px solid;
box-shadow: 20rem #fff;
}
.wrapper .title{
height: 90px;
background: #c0392b;
border-radius: 2rem 2rem 0 0;
color: #fff;
font-size: 30px;
font-weight: 600;
display: flex;
align-items: center;
justify-content: center;
}
.wrapper form{
padding: 30px 25px 25px 25px;
}
.wrapper form .row{
height: 45px;
margin-bottom: 15px;
position: relative;
}
.wrapper form .row input{
height: 100%;
width: 100%;
outline: none;
padding-left: 60px;
border-radius: 5px;
border: 1px solid lightgrey;
font-size: 16px;
transition: all 0.3s ease;
}
form .row input:focus{
border-color: #c0392b;
box-shadow: inset 0px 0px 2px 2px rgba(26,188,156,0.25);
}
form .row input::placeholder{
color: #999;
}
.wrapper form .row i{
position: absolute;
width: 47px;
height: 100%;
color: #fff;
font-size: 18px;
background: #c0392b;
border: 1px solid #16a085;
border-radius: 5px 0 0 5px;
display: flex;
align-items: center;
justify-content: center;
}
.wrapper form .pass{
margin: -8px 0 20px 0;
}
.wrapper form .pass a{
color: #c0392b;
font-size: 17px;
text-decoration: none;
}
.wrapper form .pass a:hover{
text-decoration: underline;
}
.wrapper form .button input{
color: #fff;
font-size: 20px;
font-weight: 500;
padding-left: 0px;
background: #c0392b;
border: 1px solid #16a085;
cursor: pointer;
}
form .button input:hover{
background:#bddbe9;
}
.wrapper form .signup-link{
text-align: center;
margin-top: 20px;
font-size: 17px;
}
.wrapper form .signup-link a{
color: #16a085;
text-decoration: none;
}
form .signup-link a:hover{
text-decoration: underline;
}
     </style>
  

  </head>
  <body>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>जीवन</span></div>
        <form action="" method="post">
          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email " name="email" required>
          </div>
          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" required>
          </div>
          <div class="pass"><a href="#">Forgot password?</a></div>
          <div class="row button">
            <input type="submit" name="submit" value="Login">
          </div>
          <div class="signup-link">Not a member? <a href="sign_up.php">Register Now</a></div>
        </form>
      </div>
    </div>
    <?php
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "SELECT * FROM blooddonors WHERE email='$email'  AND password_hash='$password'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $_SESSION['session_id'] = $row['session_id'];
            echo "<script>window.location.href='home.php'</script>";
        } else {
            echo "<div class='alert'>Invalid email or password.</div>";
        }
    }
    ?>
  </body>
</html>