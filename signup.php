<?php
if(isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['submit'])){
    $username = $_POST['username'];
    $emai = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if($password == $cpassword){
        include "db_conn.php";
        echo "may be email already exist!";
        $my_post = 'my_post_'.time();
        $sql = "INSERT INTO user_reg(username, email, password, my_post) VALUES('$username', '$emai', '$cpassword', '$my_post')";
        $res = mysqli_query($conn,$sql);
        if($res){
            // create mypost
            $sql = "CREATE TABLE `$my_post` (
                `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                `image` varchar(255) NOT NULL,
                `name` varchar(255) NOT NULL,
                `author` varchar(255) NOT NULL,
                `subject` varchar(255) NOT NULL,
                `date` date NOT NULL,
                `mrp` int(10) NOT NULL,
                `price` int(10) NOT NULL,
                `publisher` varchar(255) NOT NULL,
                `pubdate` date NOT NULL,
                `edition` int(5) NOT NULL,
                `pagenumber` int(10) NOT NULL,
                `lang` varchar(50) NOT NULL,
                `used` varchar(255) NOT NULL,
                `rate` int(3) NOT NULL,
                `email` varchar(255) NOT NULL,
                `whatsapp` varchar(255) NOT NULL,
                `contact` int(10) NOT NULL,
                `address` varchar(500) NOT NULL,
                `time` timestamp  DEFAULT CURRENT_TIMESTAMP NOT NULL
                )";
            mysqli_query($conn,$sql);
            header("Location: signin.php");
        }
        else{
            die();
        }
    }
    else{
        header("Location: signup.php?wrongpass=true");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Signup</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="bg_img">
        <nav class="navbar">
            <div class="left_nav">
                <!-- <button><svg style="color: #696969" height="27px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="22px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2 s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2 S29.104,22,28,22z" fill="#696969"></path></svg></button> -->
                <a href="index.php"><img class="logo" src="navbarlogo.png" alt="not loading"></a>
            </div>
            <div id="profile" class="profile">
                <img  class="avatar" onclick="menu()" src="images/blank-profile-picture-973460__340.png" alt="notloaded"/>
                <ul id="signup_box" class="drop-content">
                    <li>
                        <a href="signin.php">Login</a>
                    </li>
                    <li>
                        <a class="dropselected">SignUp</a>
                    </li>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="aboutus.php">About us</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="signup_body">
            <div style="align-items: flex-end;" class="signup_box">
                <h2>SignUp</h2>
                <form id="signup_form" action="" method="post">
                    <label>username</label>
                    <input name="username" required placeholder="Enter Name" type="text">
                    <label>Email Id</label>
                    <input name="email" required placeholder="Enter email" type="email">
                    <label>Create password</label>
                    <input name="password" required placeholder="Enter Password" type="password">
                    <label>Confirm password</label>
                    <input name="cpassword" id="cpwd" onkeyup="chkpwd()" required placeholder="Confirm Password" type="password">
                    <input name="submit" type="submit" value="Create">
                </form>
            </div>
            <img src="images/bg2.jpg" alt="not loaded"/>
        </div>
    </div>
    <footer>
        <img src="images/vbu_logo_white.png" alt="notloaded">
        <div>
            <h5>Project by Sk Nur Aktar</h5>
            <h5>Supervised by Dr. Kakali Datta.</h5>
            <p>Old Book selling website for Visva-Bharati University.</p>
        </div>
    </footer>
</body>
<script src="script.js"></script>
<script>
let url = window.location.href.split('?wrongpass=')[1];
if(url == 'true'){
    alert("incorrect password!");
}
// else{
//     window.history.pushState('Signup', 'Signup', '/signup.php');
// }
let password = document.querySelectorAll("input[type=password]");
let cinput = document.getElementById("cpwd");
function chkpwd(){
    if(password[0].value != password[1].value){
        cinput.style.color = "red";
    }
    else{
        cinput.style.color = "green";
    }
}
</script>
</html>