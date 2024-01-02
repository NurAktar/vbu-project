<?php
include_once "login_check.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="postpage.css">
    <title>vbu-sellmybook</title>
</head>
<body>
    <nav class="navbar">
        <div class="left_nav">
            <a href="index.php"><img class="logo" src="navbarlogo.png" alt="not loading"></a>
        </div>
        <div id="profile" class="profile">
            <img class="avatar" onclick="menu()" <?php if($display){?> src="images/blank-profile-picture-973460__340.png" <?php } else{ ?> src="images/avatar.jpg" <?php } ?> alt="notloaded"/>
            <ul id="signup_box" class="drop-content">
                <li>
                    <a href="index.php">Home page</a>
                </li>
                <li>
                    <a href="">Messages</a>
                </li>
                <li>
                    <a href="">My Posts</a>
                </li>
                <li>
                    <a href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="loadingpost">
        <img src="images/spinner.gif" alt="gif">
        <span>
            Saving to Database
        </span>
        <p></p>
    </div>
    <div class="header">
        <h1>Create Post</h1>
    </div>
    <div class="display_outer">
        <div class="display_inner">
            <div id="backdiv" class="p_container">
                <div class="drag-drop">
                    <div id="selectedheader">
                        <h2>Selected image:</h2>
                        <div id="selected"></div>
                    </div>
                    <h2 id="dragheader">Drag and Drop image here</h2>
                    <span>OR</span>
                    <button onclick="file_browse()">Add Files</button>
                    <input id="i_image" type="file" accept=".jpg,.jpeg,.webp,.png,images/*" hidden>
                    <p>Supported Files</p>
                    <p>jpg, png</p>
                    <br>
                    <span>
                        remove.bg before upload <a target="_blank" href="https://www.remove.bg">here</a>
                    </span>
                </div>
                <div class="bookdetails">
                    <h1>Fill in the details</h1>
                    <label for="">Name of the book</label>
                    <input id="i_name" placeholder="Enter name of book" type="text">
                    <label for="">Author Name</label>
                    <input id="i_author" placeholder="Enter Author name" type="text">
                    <label for="">Subject</label>
                    <input id="i_subject" placeholder="Enter Subject" type="text">
                    <label for="">Purchase date</label>
                    <input id="i_date" placeholder="Approx date" type="date">
                    <label for="">MRP label</label>
                    <input id="i_mrp" placeholder="e.g. 559" type="number">
                    <label for="">Set price</label>
                    <input id="i_price" placeholder="Enter selling price" type="number">
                    <button onclick="nextdiv()">Proceed</button>
                </div>
            </div>
            <div id="nextdiv" class="p_container">
                <div class="bookdetails">
                    <h1>More details</h1>
                    <label for="">Publisher</label>
                    <input id="i_publisher" placeholder="Publisher name" type="text">
                    <label for="">Publishing Date</label>
                    <input id="i_pubdate" placeholder="select date" type="date">
                    <label for="">Edition</label>
                    <input id="i_edition" placeholder="e.g. 19th" type="number">
                    <label for="">Number of Pages</label>
                    <input id="i_pagenumber" placeholder="e.g. 492" type="number">
                    <label for="">Language</label>
                    <input id="i_lang" placeholder="e.g. English" type="text">
                    <br>
                    <h1>Book Condition</h1>
                    <label for="">How long you used it</label>
                    <input id="i_used" placeholder="e.g. 5months" type="text">
                    <label for="">Rate Book Condition</label>
                    <input id="i_rate" placeholder="e.g. 8/10" type="number">
                </div>
                <div class="bookdetails">
                    <h1>Your details</h1>
                    <label for="">Email id</label>
                    <input id="i_email" placeholder="Enter Email Id" type="email">
                    <label for="">Whatsapp</label>
                    <input id="i_whatsapp" placeholder="Enter Whatsapp no." type="number">
                    <label for="">Contact Number</label>
                    <input id="i_contact" placeholder="Enter contact number" type="number">
                    <label for="">Location</label>
                    <textarea id="i_address" cols="30" rows="10" placeholder="e.g. Take the book at near depertment of dcss."></textarea>
                    <button onclick="submit()">Submit</button>
                    <a onclick="backdiv()">Go previous page?</a>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <img src="images/vbu_logo_white.png" alt="notloaded">
        <div>
            <h5>Project by Sk Nur Aktar</h5>
            <p>Old Book selling website for VBU.</p>
        </div>
    </footer>
</body>
<script src="script.js"></script>
<script src="createpost.js"></script>
</html>