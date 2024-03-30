<?php
if(isset($_POST['bookid']) && isset($_POST['my_post']) && isset($_POST['submit'])){
    include_once "db_conn.php";
    $bookid = $_POST['bookid'];
    $my_post = $_POST['my_post'];
    $name = $_POST['name'];
    $author = $_POST['author'];
    $subject = $_POST['subject'];
    $date = $_POST['date'];
    $mrp = $_POST['mrp'];
    $price = $_POST['price'];
    $publisher = $_POST['publisher'];
    $pubdate = $_POST['pubdate'];
    $edition = $_POST['edition'];
    $pagenumber = $_POST['pagenumber'];
    $lang = $_POST['lang'];
    $used = $_POST['used'];
    $rate = $_POST['rate'];
    $email = $_POST['email'];
    $whatsapp = $_POST['whatsapp'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $time = $_POST['time'];

    $sql = "UPDATE book_posted SET name='$name', author='$author', subject='$subject', date='$date', mrp='$mrp', price='$price', publisher='$publisher', pubdate='$pubdate', edition='$edition', pagenumber='$pagenumber', lang='$lang', used='$used', rate='$rate', email='$email', whatsapp='$whatsapp', contact='$contact', address='$address' WHERE time='$time'";
    $res = mysqli_query($conn, $sql);
    $sql = "UPDATE `$my_post` SET name='$name', author='$author', subject='$subject', date='$date', mrp='$mrp', price='$price', publisher='$publisher', pubdate='$pubdate', edition='$edition', pagenumber='$pagenumber', lang='$lang', used='$used', rate='$rate', email='$email', whatsapp='$whatsapp', contact='$contact', address='$address' WHERE time='$time'";
    $res = mysqli_query($conn, $sql);
    header("Location:editpost.php?bookid=".$bookid);
}
?>