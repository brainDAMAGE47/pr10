<!doctype html>
<html lang="en">
<head>  
   <style>
       input{
           position: relative;
           padding: 15px 30px;
           border: 1px bold;
           margin: 10px 20px;
           font-family: 'Montserrat', sans-serif;
           text-transform: uppercase;
           letter-spacing: 2px;
       }
   </style>
</head>
<?php session_start(); ?>
<body>
<form action="reg.php" method="post">
    <label>first_name
        <input type="first_name" name="first_name">
    </label>
    <label>last_name
        <input type="last_name" name="last_name">
    </label>
    <label>login
        <input type="login" name="login">
    </label>
    <label>password
        <input type="password" name="password">
    </label>
    <input type="submit" value="send">
</form>
</body>
</html>