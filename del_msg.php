<?php
include_once "login_check.php";
$buyer_email = "";
if(isset($_SESSION['userid'])){
    $buyer_email = $_SESSION['userid'];
    include_once "db_conn.php";
    if(isset($_GET['bookid']) && isset($_GET['m_table'])){
        $m_table = $_GET['m_table'];
        $bookid = $_GET['bookid'];

        $sql = "SELECT posted_by FROM book_posted WHERE id='$bookid'";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res);
        $seller_email = $row['posted_by'];

        $sql = "SELECT u_table FROM user_reg WHERE email='$buyer_email'";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res);
        $buyer_u_table = $row['u_table'];

        $sql = "SELECT u_table FROM user_reg WHERE email='$seller_email'";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res);
        $seller_u_table = $row['u_table'];

        $sql = "DELETE FROM $buyer_u_table WHERE m_table='$m_table'";
        $res = mysqli_query($conn,$sql);
        $sql = "DELETE FROM $seller_u_table WHERE m_table='$m_table'";
        $res = mysqli_query($conn,$sql);
        $sql = "DROP TABLE $m_table";
        $res = mysqli_query($conn,$sql);
        unset($_SESSION['chat_point']);
        header("Location:message.php");
    }
}
?>