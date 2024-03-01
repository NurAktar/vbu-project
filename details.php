<?php
include_once "login_check.php";
if(isset($_GET['bookid'])){
    include_once "db_conn.php";
    $id = $_GET['bookid'];
    $sql = "SELECT * FROM book_posted WHERE id = $id";
    $res = mysqli_query($conn, $sql);
    if(!$row = mysqli_fetch_assoc($res)){
        header("Location: index.php");
    }
    else{
        $priceoff = round((100 - ($row['price']*100)/$row['mrp']),2);
        $posted_by = $row['posted_by'];
        //disable chat btn
        if($userid == $posted_by){
            $chatbtn = false;
        }
        else{
            $chatbtn = true;
        }
    }
}
else{
    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="details.css">
    <title>vbu-sellmybook</title>
</head>
<body>
    <nav class="navbar">
        <div class="left_nav">
            <!-- <button><svg style="color: #696969" height="27px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="22px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2 s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2 S29.104,22,28,22z" fill="#696969"></path></svg></button> -->
            <a href="index.php"><img class="logo" src="images/navbarlogo.png" alt="not loading"></a>
        </div>
        <div id="profile" class="profile">
        <?php if($display){ echo "<a class='welcome' href='signin.php'>Login</a>"; } else{ echo "<span class='welcome'>".$uname_log."</span>"; } ?>
            <img class="avatar" onclick="menu()" <?php if($display){?> src="images/blank-profile-picture-973460__340.png" <?php } else{ ?> src="images/avatar.jpg" <?php } ?> alt="notloaded"/>
            <ul id="signup_box" class="drop-content">
                <?php
                if($display){?>
                    <li>
                        <a href="signin.php">Login</a>
                    </li>
                    <li>
                        <a href="signup.php">SignUp</a>
                    </li>
                    <li>
                        <a href="aboutus.php">About us</a>
                    </li><?php
                }
                else{?>
                    <li>
                        <a href="createpost.php">Create Post</a>
                    </li>
                    <li>
                        <a href="message.php">Messages</a>
                    </li>
                    <li>
                        <a href="">My Posts</a>
                    </li>
                    <li>
                        <a href="aboutus.php">About us</a>
                    </li>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                <?php }
                ?>
            </ul>
        </div>
    </nav>
    <div id="contact_details">
        <div class="C_body">
            <div class="C_header">
                <h1>Seller Contacts</h1>
                <img src="images/cross.png" onclick="close_d()" alt="X">
            </div>
            <div class="inner_cText">
                <p>Whatsapp: <?php echo $row['whatsapp']; ?></p>
                <img onclick="whatsapp_c()" src="images/copy.png" alt="Copy">
            </div>
            <div class="inner_cText">
                <p>Phone: <?php echo $row['contact']; ?></p>
                <img onclick="phone_c()" src="images/copy.png" alt="Copy">
            </div>
            <div class="inner_cText">
                <p>Email Id: <?php echo $row['email']; ?></p>
                <img onclick="email_c()" src="images/copy.png" alt="Copy">
            </div>
        </div>
        <span id="copied">Copied to Clipboard!</span>
    </div>
    <div id="imageview" class="imageview">
        <div class="innerImageview">
            <img onclick="closebtn()" id="closebtn" src="images/close.png" alt="close"/>
            <img src="<?php echo 'uploads/'.$row['image']; ?>" alt="notloaded"/>
        </div>
    </div>
    <div class="body">
        <div class="details_con">
            <div class="imageBox">
                <img onclick="closebtn()" src="<?php echo 'uploads/'.$row['image']; ?>" alt="">
            </div>
            <div class="details_box">
                <h2><?php echo $row['name']; ?></h2>
                <span>by <?php echo $row['author']; ?></span>
                <div class="price">
                    <h2>Price: ₹<?php echo $row['price']; ?></h2>
                    <span class="mrp">MRP: ₹<?php echo $row['mrp']; ?></span>
                    <span class="priceoff"><?php echo $priceoff; ?>%</span>
                </div>
                <div class="purchase">
                    <input id="contact" onclick="show_c()" type="button" value="Contact">
                    <input id="chat" <?php if($chatbtn){ if(!$display){ echo "onclick='message($id)'";}else{ echo "onclick='login_page()'";}}else{echo "disabled";} ?> type="button" value="Message">
                </div>
                <div class="details">
                    <span>Book Details: </span>
                    <p>Author: <?php echo $row['author']; ?> </p>
                    <p>Publisher: <?php echo $row['publisher']; ?></p>
                    <p>Publishing Date: <?php echo $row['pubdate']; ?></p>
                    <p>Edition: <?php echo $row['edition']; ?>th</p>
                    <p>Number of Pages: <?php echo $row['pagenumber']; ?></p>
                    <p>Language: <?php echo $row['lang']; ?></p>
                </div>
                <div class="details">
                    <!-- class condition removed for now -->
                    <span>Book Condition:</span>
                    <p>Purchasing Date: <?php echo $row['date']; ?></p>
                    <p>Used: <?php echo $row['used']; ?></p>
                    <p>Rating condition: <?php echo $row['rate']; ?>/10</p>
                </div>
                <div class="details">
                    <span>Seller Details:</span>
                    <p>Location: <?php echo $row['address']; ?></p>
                </div>
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
    let copied = document.getElementById("copied");
    let c_details = document.getElementById("contact_details");
    function close_d(){
        c_details.style.display = "none";
    }
    function whatsapp_c(){
        var text = "<?php echo $row['whatsapp']; ?>";
        navigator.clipboard.writeText(text);
        copied.style.visibility = "visible";
        c_hide();
    }
    function phone_c(){
        var text = "<?php echo $row['contact']; ?>";
        navigator.clipboard.writeText(text);
        copied.style.visibility = "visible";
        c_hide();
    }
    function email_c(){
        var text = "<?php echo $row['email']; ?>";
        navigator.clipboard.writeText(text);
        copied.style.visibility = "visible";
        c_hide();
    }
    function c_hide(){
        setTimeout(()=>{
            copied.style.visibility = "hidden";
        },2000)
    }
    function show_c(){
        c_details.style.display = "flex";
    }

    function login_page(){
        window.open("signin.php","_self");
    }

    function message(id){
        window.open("setmsg.php?bookid="+id,"_self");
    }
</script>
</html>