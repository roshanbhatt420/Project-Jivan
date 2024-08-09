<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>blood donation</title>
    
    <link rel="stylesheet" href="signstyles.css">
</head>
<body>
    <div class="container">
        <h2>Login As:</h2>
        <button class="btn btn-service" onclick="redirectToLogin('log_in')">Log In</button>
        <button class="btn btn-client" onclick="redirectToLogin('register')">Register</button>
        <button class="btn btn-back" onclick="goBack()">Back</button>
    </div>
    <script>
        function redirectToLogin(userType) 
        {
            if (userType === 'log_in') {
                window.location.href = 'login.php';
            } else if (userType === 'register') {
                window.location.href = 'sign_up.php';
            }
        }
        function goBack() {
            window.history.back();
        }
    </script>
</body>
</html>
