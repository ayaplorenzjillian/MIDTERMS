<?php
include_once 'config/config.php';
include_once 'classes/class.user.php';

$user = new User();
if($user->get_session()){
	header("location: index.php");
}
if(isset($_REQUEST['submit'])){
	extract($_REQUEST);
	$login = $user->check_login($useremail,$password);
	if($login){
		header("location: index.php");
	}else{
		?>
        <div id='error_notif'>Wrong email or password.</div>
        <?php
	}
	
}
?>
<!DOCTYPE html>
<html>
<head>
<title>HU7K</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Assistant&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?<?php echo time();?>">
</head>
<body>
<img src="logo.gif" class= "logo">
<form action="login.php"  method="post">
<div id="login-block">
	<center><h3 class="PL">PLEASE LOGIN</h3><center>
	<form method="POST" action="" name="login">
	<div>
	<label>Username</label>
		<input type="email" class="input" required name="useremail" placeholder="Valid E-mail"/>
	</div>
	<div>
	<label>Password</label>
		<input type="password" class="input" required name="password" placeholder="Password"/>
	</div>
	<div>
		<input type="submit" name="submit" value="Submit"/>
	</div>
	</form>
</div>
</body>
</html> 
    