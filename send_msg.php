<?php

function format_time($time){
    $time = strtotime($time);
    return date("d-M-Y, h:ia",$time);
}

if(isset($_POST['selling']) && isset($_POST['m_table']) && $_POST['text']){
    include_once "db_conn.php";
    $message = $_POST['text'];
    // $user_name = $_POST['user_name'];
    $selling = $_POST['selling'];
    $m_table = $_POST['m_table'];

    $sql = "INSERT INTO $m_table (message, selling) VALUES('$message','$selling')";
    mysqli_query($conn,$sql);
    $sql = "SELECT * FROM $m_table ORDER BY id desc LIMIT 1";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res); ?>
    <div class="m_right">
        <div><?php echo $row['message']; ?></div>
        <p><?php echo format_time($row['time']); ?></p>
    </div> 
    <?php
}
?>