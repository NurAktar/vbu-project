<?php
session_start();
if(isset($_SESSION['userid'])){
    header("Location:index.php");
}
if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['submit'])){
    include "db_conn.php";
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT password,username FROM user_reg WHERE email='$email'";
    $res = mysqli_query($conn,$sql);
    $row = mysqli_fetch_assoc($res);
    if($row['password'] != $password){
        header("Location:signin.php?wronginput=true");
    }
    else{
        //set session:
        $_SESSION['userid'] = $email;
        $_SESSION['uname_log'] = $row['username'];
        header("Location:index.php");
    }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <title>Login</title>
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
                        <a class="dropselected">Login</a>
                    </li>
                    <li>
                        <a href="signup.php">SignUp</a>
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
            <img src="images/bg1.jpg" alt="not loaded"/>
            <div class="signup_box">
                <h2>Login</h2>
                <form action="" method="post">
                    <label>Email Id</label>
                    <input name="email" required placeholder="Enter email" type="email">
                    <label>Password</label>
                    <input name="password" required placeholder="Enter Password" type="password">
                    <a href="signup.php">create one?</a>
                    <input name="submit" type="submit" value="Submit">
                </form>
            </div>
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
    let url = window.location.href.split('?wronginput=')[1];
    if(url == 'true'){
        alert("incorrect input!");
    }
</script>
</html>