<?php
if(isset($_GET['name']) && isset($_GET['submit'])){
    echo "received!";
    include 'db_conn.php';

    $sql = "SELECT data FROM dummy";
    $res = mysqli_query($conn,$sql);
    while ($row = mysqli_fetch_assoc($res)) {
        echo $row['data'];
    };
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>test sql</title>
</head>
<body>
    <form action="" method="get">
        <input name="name" type="text">
        <input name="roll" type="text">
        <input name="submit" type="submit" value="submit">
    </form>
</body>
</html>