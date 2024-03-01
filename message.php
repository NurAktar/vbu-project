<?php
include_once "login_check.php";
if($userid == ""){
    header("Location:signin.php");
}
include_once "db_conn.php";
$bookid = "";
$sql = "SELECT u_table FROM user_reg WHERE email='$userid'";
$res = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($res);
$u_table = $row['u_table'];
if(isset($_SESSION['chat_point'])){
    $bookid = $_SESSION['chat_point'];
}
else{
    $sql = "SELECT bookid FROM $u_table ORDER BY id desc LIMIT 1";
    $res = mysqli_query($conn,$sql);
    if(mysqli_num_rows($res) > 0){
        $row = mysqli_fetch_assoc($res);
        $bookid = $row['bookid'];
    }
    else{
        header("location:emptyinbox.php");
    }
}
$people_list = array();
$sql = "SELECT * FROM $u_table ORDER BY id desc";
$res = mysqli_query($conn,$sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="message.css">
    <title>Chatting</title>
</head>
<body>
    <div class="img_viewer">
        <img src="" alt="img">
        <span>click anywhere to close.</span>
    </div>
    <div class="container">
        <div id="people" class="people">
            <img class="menu_close" onclick="close_menu()" src="close.svg" alt="x">
            <div class="self"><img src="images/avatar.jpg" alt="pfp"><span><?php echo $uname_log; ?></span></div>
            <?php
            while($row = mysqli_fetch_assoc($res)){
                array_push($people_list,$row['m_table']);
            ?>
            <div <?php echo 'onclick="load_chat('."'".$row['m_table']."',"."'".$row['selling']."',"."'".$row['book_name']."',"."'".$row['bookid']."',"."'".$row['image']."'".')"'; ?> class="msg"><img <?php echo "src = 'uploads/".$row['image']."'"; ?> alt="pfp"><span><?php echo $row['user_name']; ?></span></div>
            <?php
            }
            mysqli_data_seek($res,0);
            $row = mysqli_fetch_assoc($res);
            ?>
            <a href="index.php" class="return_btn">Return to web</a>
        </div>
        <div class="chatArea">
            <div class="nav">
                <img onclick="open_menu()" class="menu" id="menu" src="menu-hamburger-red.svg" alt="menu">
                <img onclick="view_book_img(event)" id="chat_heading_img" <?php echo "src = 'uploads/".$row['image']."'"; ?> alt="user_image">
                <span id="chat_heading"><?php echo $row['book_name']; $first_m_table = $row['m_table']; $selling = $row['selling']; $sql = "SELECT * FROM $first_m_table";    $res = mysqli_query($conn,$sql); ?></span>
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
                <input id="message" autocomplete="off" placeholder="Type your message" type="text" onkeypress="enter(event)">
                <button onclick="send_msg()">Send <img src="images/wsend.png" alt="a"/> </button>
            </div>
        </div>
    </div>
</body>
<script>
    var g_m_table = ""; //g var for m_table
    var g_selling = "";
    var g_user_name = "";

    let messageScroll = document.getElementById("messageScroll");
    messageScroll.scrollTop = messageScroll.scrollHeight;
    const people = document.getElementById("people");
    function open_menu(){
        people.classList.add("menu_opened");
    }
    function close_menu(){
        people.classList.remove("menu_opened");
    }

    function selected_div(select_user){
        var div = <?php echo json_encode($people_list) ?>;
        const len = div.length;
        var i_num = 0;
        for( i=0; i < len; i++) {
            if ( div[i] == select_user )
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
    msg = document.getElementById("message");

    //on press enter
    function enter(e){
        if(e.key == "Enter"){
            send_msg();
        }
        
    }
    function load_chat(m_table,selling,book_name,bookid,img_src){
        var form_data = new FormData();
        form_data.append('m_table',m_table);
        form_data.append('selling',selling);
        var ajax_request = new XMLHttpRequest();
        ajax_request.open('POST','handle_msg.php');
        ajax_request.send(form_data);
        document.getElementById("chat_heading").innerText = book_name;
        document.getElementById("chat_heading_img").src = 'uploads/'+img_src;
        ajax_request.onreadystatechange = function(){
            if(ajax_request.readyState == 4 && ajax_request.status == 200){
                var response = ajax_request.responseText;
                if(response == ""){
                    response = "<span style='color:white;text-align:center;'>You have not started chatting yet!!</span>";
                }
                document.getElementById('messageScroll').innerHTML = response;
                messageScroll.scrollTop = messageScroll.scrollHeight;
            }
        }
        selected_div(m_table);
        g_m_table = m_table;
        g_selling = selling;
        // g_user_name = user_name;
        msg.value = "";
        close_menu();
        document.getElementById("message").focus();
        g_seen = "1";
    }
    <?php
        $sql = "SELECT * FROM $u_table WHERE bookid='$bookid' ORDER BY id desc";
        $res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($res); 
        echo 'load_chat("'.$row['m_table'].'","'.$row['selling'].'","'.$row['book_name'].'","'.$row['bookid'].'","'.$row['image'].'");';
        ?>
    
    function send_msg(){
        text = msg.value;
        if(text == ""){
            return 0;
        }
        var form_data = new FormData();
        form_data.append('text',text);
        form_data.append('m_table',g_m_table);
        form_data.append('selling',g_selling);
        // form_data.append('user_name',g_user_name);
        var ajax_request = new XMLHttpRequest();
        ajax_request.open('POST','send_msg.php');
        ajax_request.send(form_data);
        ajax_request.onreadystatechange = function(){
            if(ajax_request.readyState == 4 && ajax_request.status == 200){
                // var response = ajax_request.responseText;
                // document.getElementById('messageScroll').innerHTML += response;
                messageScroll.scrollTop = messageScroll.scrollHeight;
            }
        }
        msg.value = "";
        document.getElementById("message").focus();
    }

    img_viewer = document.querySelector(".img_viewer");
    function view_book_img(e){
        src = document.getElementById("chat_heading_img").src;
        img_viewer.querySelector("img").src = src;
        img_viewer.style.display = "flex";
    }

    img_viewer.addEventListener("click", ()=>{
        img_viewer.style.display = "none";
    });

    var g_ping = "1";

    function ping_msg_db(){
        var lasttime ="";
        all_p = messageScroll.querySelectorAll("p");
        try {
            lasttime = all_p[all_p.length-1].innerText;
        } catch (error) {};
        if(lasttime == ""){
            setTimeout(ping_msg_db,1000);
        }
        else if(lasttime != ""){
            // console.log(lasttime);
            var form_ping = new FormData();
            form_ping.append('lasttime', lasttime);
            form_ping.append('selling', g_selling);
            form_ping.append('m_table', g_m_table);
            var ajax_request = new XMLHttpRequest();
            ajax_request.open('POST','ping_msg_db.php');
            ajax_request.send(form_ping);
            ajax_request.onreadystatechange = function(){
                if(ajax_request.readyState == 4 && ajax_request.status == 200){
                    // console.log(ajax_request.responseText);
                    g_ping = ajax_request.responseText;
                    update_chat();
                }
            }
        }
    
    }
    var g_seen = "1";
    function seen_update(){
        if(g_seen == "1"){
            // console.log("300");
            var form_seen = new FormData();
            form_seen.append('m_table',g_m_table);
            form_seen.append('selling',g_selling);
            var ajax_request = new XMLHttpRequest();
            ajax_request.open('POST','seen_update.php');
            ajax_request.send(form_seen);
            ajax_request.onreadystatechange = function(){
                if(ajax_request.readyState == 4 && ajax_request.status == 200){
                    scrollable = messageScroll.clientHeight;
                    if((messageScroll.scrollHeight - messageScroll.scrollTop - scrollable) < 5){
                        var response = ajax_request.responseText;
                        if(response == "1"){
                            all_d = messageScroll.querySelectorAll("div");
                            last_d = all_d[all_d.length-2];
                            check = last_d.classList.contains("m_right");
                            if(check){
                                last_d.innerHTML += '<span>seen ✔</span>';
                                messageScroll.scrollTop = messageScroll.scrollHeight;
                                g_seen = "0";
                            }
                        }
                    }
                    else{
                        var response = ajax_request.responseText;
                        if(response == "1"){
                            all_d = messageScroll.querySelectorAll("div");
                            last_d = all_d[all_d.length-2];
                            check = last_d.classList.contains("m_right");
                            if(check){
                                last_d.innerHTML += '<span>seen ✔</span>';
                                g_seen = "0";
                            }
                        }
                    }
                }
            }
        }
    }

    function update_chat(){
        // ping_msg_db();
        if(g_ping == "1"){
            var form_data = new FormData();
            form_data.append('m_table',g_m_table);
            form_data.append('selling',g_selling);
            var ajax_request = new XMLHttpRequest();
            ajax_request.open('POST','handle_msg.php');
            ajax_request.send(form_data);
            ajax_request.onreadystatechange = function(){
                if(ajax_request.readyState == 4 && ajax_request.status == 200){
                    scrollable = messageScroll.clientHeight;
                    if((messageScroll.scrollHeight - messageScroll.scrollTop - scrollable) < 5){
                        var response = ajax_request.responseText;
                        document.getElementById('messageScroll').innerHTML = response;
                        messageScroll.scrollTop = messageScroll.scrollHeight;
                    }
                    else{
                        var response = ajax_request.responseText;
                        document.getElementById('messageScroll').innerHTML = response;
                    }
                    g_seen = "1";
                    seen_update();
                    setTimeout(ping_msg_db, 1000);
                }
            }
        }
        else{
            seen_update();
            setTimeout(ping_msg_db, 1000);
        }
    }
    //starting realtime update here.
    function realtime_chat(){
        ping_msg_db();
    }
    realtime_chat();
</script>
</html>