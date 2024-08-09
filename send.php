<?php
function send_password($email,$token)
{
    $to=$email;
    $subject="Password reset link";
    $message="Click on the link below to reset your password\n\n";
    $message.="http://localhost/jiivan/resetpassword.php?token=$token";
    $headers="From:
}
include 'connect.php';
$email=$_POST['email'];
$token=bin2hex(random_bytes(16));
$token_hash=hash("sha256",$token);
$expiry=date("Y-m-d H:i:s",time()+60*30);
$sql="update blooddonors set reset_hash='$token_hash',reset_expire='$expiry' where email='$email'";
if($conn->query($sql)===TRUE)
{
    send_password($email,$token);
    echo "Password reset link sent to your email";

}
else{
    echo "Error generating token".$conn->error;
}
?>