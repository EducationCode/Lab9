<?php include "connect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action ="insert-mem.php" method="POST">
    username: <input type="text" name="username" ><br>
    password: <input type="password" name="password"><br>
    name: <input type="text" name="name"><br>
    address: <br><textarea name="address" row="3" cols="40"></textarea><br>
    mobile: <input type="text" name="mobile"><br>
    email: <input type= "email" name="email"><br><br>
    <input type="submit" value="เพิ่มสมาชิก">
</form>


</body>
</html>