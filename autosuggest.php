<?php
    include "db_conn.php";
    if(isset($_POST['query'])){
        $q = $_POST['query'];
        $sql = "SELECT name FROM book_posted WHERE name LIKE '$q%' UNION SELECT name FROM book_posted WHERE name LIKE '%$q%' UNION SELECT author FROM book_posted WHERE author LIKE '$q%' LIMIT 5";
        $res = mysqli_query($conn,$sql);
        $rows = mysqli_fetch_all($res, MYSQLI_ASSOC);
        echo json_encode($rows);
    }
?>