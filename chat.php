<?php
include_once "login_check.php";
include_once "db_conn.php";
$bookid = $_SESSION['chat_point']; //work tobe done!
$sql = "SELECT u_table FROM user_reg WHERE email='$userid'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);
$u_table = $row['u_table'];
$people_list = array();
$sql = "SELECT * FROM $u_table ORDER BY id desc";
$res = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="chat.css">
    <title>Chatting</title>
</head>
<body>
    <div class="container">
        <div id="people" class="people">
            <img class="menu_close" onclick="close_menu()" src="close.svg" alt="x">
            <div class="self"><img src="images/avatar.jpg" alt="pfp"><span><?php echo $uname_log; ?></span></div>
            <?php
            while($row = mysqli_fetch_assoc($res)){
                array_push($people_list,$row['bookid']);
            ?>
            <div <?php echo 'onclick="load_chat('."'".$row['m_table']."',"."'".$row['selling']."',"."'".$row['user_name']."',"."'".$row['bookid']."'".')"'; ?> class="msg"><img src="images/blank-profile-picture-973460__340.png" alt="pfp"><span><?php echo $row['user_name']; ?></span></div>
            <?php
            }
            mysqli_data_seek($res,0);
            $row = mysqli_fetch_assoc($res);
            ?>
        </div>
        <div class="chatArea">
            <div class="nav">
                <img onclick="open_menu()" class="menu" id="menu" src="menu-hamburger-red.svg" alt="menu">
                <img src="images/blank-profile-picture-973460__340.png" alt="user_image">
                <span id="chat_heading"><?php echo $row['user_name']; $first_m_table = $row['m_table']; $selling = $row['selling']; $sql = "SELECT * FROM $first_m_table";    $res = mysqli_query($conn,$sql); ?></span>
            </div>
            <div id="messageScroll" class="messageScroll">
                <!-- <div class="m_left">
                    <div>Hi</div>
                    <p>12/23/2022</p>
                </div>

                <div class="m_right">
                    <div>who?</div>
                    <p>12/23/2022</p>
                </div> -->

            </div>
            <div class="typeArea">
                <div class="typeInsert">+</div>
                <input id="message" autocomplete="off" placeholder="Type your message" type="text">
                <button>Send</button>
            </div>
        </div>
    </div>
</body>
<script>
    let messageScroll = document.getElementById("messageScroll");
    messageScroll.scrollTop = messageScroll.scrollHeight;
    const people = document.getElementById("people");
    function open_menu(){
        people.classList.add("menu_opened");
    }
    function close_menu(){
        people.classList.remove("menu_opened");
    }

    function selected_div(bookid){
        var div = <?php echo json_encode($people_list) ?>;
        const len = div.length;
        var i_num = 0;
        var bookid = bookid;
        for( i=0; i < len; i++) {
            if ( div[i] == bookid )
                i_num = i;
        }
        all_div = document.querySelectorAll(".msg");
        for(i=0;i<len;i++){
            all_div[i].classList.remove("active_pep");
        }
        got_div = document.querySelectorAll(".msg")[i_num];
        got_div.classList.add("active_pep");
    }
    // selected_div(<?php echo json_encode($bookid) ?>);
    
    function load_chat(m_table,selling,user_name,bookid){
        var form_data = new FormData();
        form_data.append('m_table',m_table);
        form_data.append('selling',selling);
        var ajax_request = new XMLHttpRequest();
        ajax_request.open('POST','handle_msg.php');
        ajax_request.send(form_data);
        document.getElementById("chat_heading").innerText = user_name;
        ajax_request.onreadystatechange = function(){
            if(ajax_request.readyState == 4 && ajax_request.status == 200){
                var response = ajax_request.responseText;
                document.getElementById('messageScroll').innerHTML = response;
            }
        }
        bookid = bookid;
        selected_div(bookid);
    }
    <?php
        $sql = "SELECT * FROM $u_table WHERE bookid='$bookid'";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        echo 'load_chat("'.$row['m_table'].'","'.$row['selling'].'","'.$row['user_name'].'","'.$row['bookid'].'");';
        ?>
</script>
</html>