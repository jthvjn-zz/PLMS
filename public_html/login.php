
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <title>PLMS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
<div class="container">
    <div id="header"><h1>Programming <br>Lab Management System</h1></div>
    <div class="box" >

        <div id="register"><?php  include_once "php/home_register.php"; ?></div>
        <div id="login"><?php  include_once "php/home_login.php"; ?></div>
    </div>

    <div id="footer"></div>

</div>

</body>
</html>