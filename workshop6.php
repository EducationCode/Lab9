<?php include "connect.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
<script>
function confirmDelete(username){
    var ans = confirm("ต้องการลบข้อมูล "+ username);
    if(ans == true)
        document.location = "delete.php?username=" + username;
}
</script>
</head>
<body>

<?php
    $stmt = $pdo->prepare("SELECT * FROM member");
    $stmt->execute();
?>
<?php while($row = $stmt->fetch()):?>
    <div>
        ชื่อสมาชิก : <?=$row["name"]?><br>
        ที่อยู่ : <?=$row["address"]?><br>
        อีเมล : <?=$row["email"]?><br>
        <img src='img/<?=$row["username"]?>.jpg' width= '100'><br>
        <a href='delete.php?username=<?=$row["username"]?>' onclick='confirmDelete(<?=$row["username"]?>)'> ลบ </a>
        <hr>
        
    </div>
<?php endwhile; ?>



</body>
</html>