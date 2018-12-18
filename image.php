<?php 
session_start();
$head = "Beautiful Image!";

if(!isset($_SESSION['UserData']['Username'])){
	header("location:login.php");
	exit;
}
?>

<?php include "inc/header.php"; ?>

<div class = "w3-container w3-teal">
    <div class = "display">
        <div><a href = "index.php"><h2>My Homepage</h2></a></div>
        <div><h2>View Image</h2></div>
        <div><a href = "logout.php"><h2>Log Out</h2></a></div>
    </div>
</div>
<div style = "text-align: center;">
    <div><h4><?php echo $head;?></h4></div>
    <img src = "img/back.jpg" alt = "Car" style = "width:853px; text-align:center;">
</div>
<div class = "w3-container">
  <p align = "justify">It is the default webpage that loads when you visit a web address that only contains a domain name. The home page is located in the root directory of a website. Most web server allow the home page to have one of several different filenames. A meta description is a summary of up to 155-160 characters in length that describes the content of a web page.</p>
</div>

<div class = "w3-container w3-teal" style = "text-align: center;">
  <p>CopyRight &copy; 2018.This site is created by Zakia Afrin Jeme. All Rights Reserved.</p>
</div>

<?php include "inc/footer.php"; ?>