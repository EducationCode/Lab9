<?php include "connect.php"; ?>


<?php 
    $stmt = $pdo->prepare("INSERT INTO member VALUES(?, ?, ?, ?, ?, ?) ");
    $stmt->bindParam(1,$_POST["username"]);
    $stmt->bindParam(2,$_POST["password"]);
    $stmt->bindParam(3,$_POST["name"]);
    $stmt->bindParam(4,$_POST["address"]);
    $stmt->bindParam(5,$_POST["mobile"]);
    $stmt->bindParam(6,$_POST["email"]);
    $stmt->execute();
    
    $user = $_REQUEST["username"];
    #workshop 8 เพิ่มหน้าแสดงรายละเอียด
    header("location: member-detail.php?username=".$user);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
เพิ่มสมาชิกสำเสร็จ!!! <?= $user?>
</body>
</html>