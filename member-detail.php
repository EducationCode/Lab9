<?php include "connect.php" ; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $stmt = $pdo->prepare("SELECT * FROM member WHERE username = ?");
    $stmt->bindParam(1, $_REQUEST["username"]);
    $stmt->execute();
    $row = $stmt->fetch();
?>

<div style="margin:50px; padding: 10px; font-size: 20px;">
    รหัสผู้ใช้ : <?=$row["username"]?><br>
    ชื่อสมาชิก : <?=$row["name"]?><br>
    ที่อยู่ : <?=$row["address"]?><br>
    เบอร์โทรศัพท์ : <?=$row["mobile"]?><br>
    อีเมล : <?=$row["email"]?><br>

</div>



</body>
</html>