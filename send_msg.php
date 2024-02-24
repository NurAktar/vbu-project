<?php

function format_time($time){
    $time = strtotime($time);
    return date("d-M-Y, h:i:sa",$time);
}

if(isset($_POST['selling']) && isset($_POST['m_table']) && $_POST['text']){
    include_once "db_conn.php";
    $message = $_POST['text'];
    // $user_name = $_POST['user_name'];
    $selling = $_POST['selling'];
    $m_table = $_POST['m_table'];

    $sql = "INSERT INTO $m_table (message, selling) VALUES('$message','$selling')";
    mysqli_query($conn,$sql);
}
?>