<?php
include_once "login_check.php";
$buyer_email = "";
if(isset($_SESSION['userid'])){
    $buyer_email = $_SESSION['userid'];
    $buyer_uname = $_SESSION['uname_log'];
    include_once "db_conn.php";
    if(isset($_GET['bookid'])){
        $bookid = $_GET['bookid'];
        $sql = "SELECT posted_by,name FROM book_posted WHERE id='$bookid'";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res);
        $seller_email = $row['posted_by'];
        $book_name = $row['name'];

        $sql = "SELECT u_table FROM user_reg WHERE email='$buyer_email'";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res);
        $buyer_u_table = $row['u_table'];

        $sql = "SELECT u_table FROM user_reg WHERE email='$seller_email'";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res);
        $seller_u_table = $row['u_table'];

        $sql = "SELECT bookid FROM $buyer_u_table WHERE bookid='$bookid'";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res);
        if($bookid == $row['bookid']){
            echo "chat already exist!";
            $_SESSION['chat_point'] = '$bookid';
            header("Location:chat.php");
        }
        else{
            $m_table = "m_".time();
            $sql = "CREATE TABLE `$m_table` (
                `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                `user_name` varchar(255) NOT NULL,
                `message` varchar(750) NOT NULL,
                `seen` BOOLEAN DEFAULT false,
                `time` timestamp DEFAULT CURRENT_TIMESTAMP NOT NULL,
                `selling` BOOLEAN NOT NULL
            )";
            mysqli_query($conn,$sql);
            $sql = "INSERT INTO `$buyer_u_table` (user_name, bookid, m_table, selling) VALUES('$book_name', '$bookid', '$m_table', false)";
            mysqli_query($conn,$sql);
            $sql = "INSERT INTO `$seller_u_table` (user_name, bookid, m_table, selling) VALUES('$buyer_uname', '$bookid', '$m_table', true)";
            mysqli_query($conn,$sql);
            echo "done!";
            $_SESSION['chat_point'] = '$bookid';
            header("Location:chat.php");
        }
    }
}
?>