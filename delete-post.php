<?php
    include 'connect.php';
    session_start();
    $session_id=$_SESSION['session_id'];
    $sql="delete from blood_requests where session_id='$session_id'";
    if($conn->query($sql)===TRUE)
    {
        echo "<script>window.location.href='profile.php'</script>";
    }
    else{
        echo "Error deleting post".$conn->error;
    } 
?>