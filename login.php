<?php 
session_start();
		
	if(isset($_POST['Submit'])){
		$logins = array('zakia@yahoo.com' => '1234','afrin@yahoo.com' => '5678','jeme@yahoo.com' => '9101');
		
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			$_SESSION['UserData']['Username'] = $logins[$Username];
			header("location:index.php");
			exit;
		} else {
			$msg = "<span style='color:red'>Login failed.Please enter a valid Username or Password.</span>";
		}
	}
?>
<?php include "inc/header.php"; ?>
  <?php if(isset($msg)){?>
  <tr>
    <td colspan = "2" align = "center" valign = "top"><?php echo $msg;?></td>
  </tr>
  <?php } ?>
<div class = "head"><h2>Login</h2></div>

<form action = "" method = "post" name = "Login_Form">
<div class = "imgcontainer">
  <img src = "img/login.jpg" alt = "Avatar" class = "avatar">
</div>
<h4>Username : zakia@yahoo.com <br/>Password : 1234<br/></h4>
<div class = "container">
  <label for = "uname"><b>Username</b></label>
  <input type = "text" name = "Username" value = "" placeholder = "Enter Username" required><br/><br/>
  <label for = "psw"><b>Password</b></label><br/>
  <input type = "password" name = "Password" value = "" placeholder = "Enter Password" required><br/><br/>
  <button><input type = "submit" name = "Submit" value = "Login"></button>
</form>

<?php include "inc/footer.php"; ?>