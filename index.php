<?php
$npage = null;
$searching = false;
include_once "login_check.php";
include_once "db_conn.php";

if (isset($_GET['npage'])) {
    $id = $_GET['npage'];
    $sql = "SELECT * FROM book_posted WHERE id < $id ORDER BY id DESC LIMIT 12";
    $res = mysqli_query($conn, $sql);
}
elseif (isset($_GET['search'])) {
    $query = $_GET['search'];
    $sql = "SELECT * FROM book_posted WHERE name LIKE '$query%' UNION SELECT * FROM book_posted WHERE name LIKE '%$query%' UNION SELECT * FROM book_posted WHERE author LIKE '$query%' LIMIT 12";
    // $sql = "SELECT name FROM book_posted WHERE name LIKE '$q%' UNION SELECT name FROM book_posted WHERE name LIKE '%$q%' UNION SELECT author FROM book_posted WHERE author LIKE '$q%' LIMIT 5";
    $res = mysqli_query($conn, $sql);
    $searching = true;
}
else{
    $sql = "SELECT * FROM book_posted ORDER BY id DESC LIMIT 12";
    $res = mysqli_query($conn, $sql);}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>vbu-sellmybook</title>
    <style rel="prefetch" as="style">
        .splash{
        font-family:ubuntu;z-index:11;display:flex;flex-direction:column;color:#000;font-weight:600;font-size:1.7rem;justify-content: center;align-items:center;position:fixed;width:100vw;height:100vh;background:#fff;transition: 0.7s;
        }
        .splash img{
        height:120px;
        }
    </style>
    <script rel="prefetch" type="text/javascript">
        function loaded(){
        document.body.style="overflow-y:scroll;";
        document.querySelector(".splash").style.opacity=0;
        setTimeout(function () {
            document.querySelector(".splash").style="display:none;"
        }, 700);
        }
        window.onload=loaded;
    </script>
</head>
<body>
<div class="splash">
<!-- <img src="images/load.gif"> -->
<video muted loop id="myVideo" autoplay style="height:200px">
    <source src="loading-motion-3585810-3162487.mp4" type="video/mp4">
</video>
<p>LOADING...</p>
</div>

    <nav class="navbar">
        <div class="left_nav">
            <!-- <button><svg style="color: #696969" height="27px" id="Layer_1" version="1.1" viewBox="0 0 32 32" width="22px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2 s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2 S29.104,22,28,22z" fill="#696969"></path></svg></button> -->
            <a href="index.php"><img class="logo" src="navbarlogo.png" alt="not loading"></a>
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
                        <a href="#">Messages</a>
                    </li>
                    <li>
                        <a href="#">My Posts</a>
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
    <div class="body">
        <div class="searchbar_body">
            <div class="search_container">
                <input autocomplete="off" id="searchq" placeholder="Search book name/author..." class="searchbar" type="text">
                <input class="searchbar_btn" value="SEARCH" onclick="searched()" type="button"></input>
            </div>
            <ul id="search_result"></ul>
        </div>
        
        <div class="container">
            <div class="heading">
                <h1>Recent post:</h1>
            </div>
            <!-- fetching cards -->
            <?php
            while ($row = mysqli_fetch_assoc($res)) {?>
                <div class="card">
                    <span class="sub"><?php echo $row['subject']; ?></span>
                    <img src="<?php echo 'uploads/'.$row['image']; ?>" alt="notloaded">
                    <div class="details">
                        <h5><?php echo $row['name']; ?></h5>
                        <p>Writer: <?php echo $row['author']; ?><br>Publishing Date: <?php echo $row['pubdate']; ?><br><?php echo $row['edition']; ?>th Edition.</p>
                        <div class="innerbox">
                            <a href="details.php?bookid=<?php echo $row['id']; ?>">Details</a>
                            <div class="pricebox">
                                <span>Price: ₹<?php echo $row['price']; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            <?php 
                $npage = $row['id'];
            } ?>
            <?php if($npage == null){
            echo "<span class='nocontent'>No More Content!</span>";
            } ?>
        </div>
    </div>
    <!-- <button>Load more</button> -->
    <div class="pagebar">
        <?php if($npage != null && $searching == false) { echo '<a href=index.php?npage='.$npage.'>Load More</a>'; }?> 
    </div>

    <!-- <section style="height: 600px;"></section> -->
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
<script src="searchbar.js"></script>
</html>