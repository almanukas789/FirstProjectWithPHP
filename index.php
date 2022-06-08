<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
	<meta http-equiv="content-type" content="text/html; charset=windows-1257" />
	<title>Forumas</title>
    <meta name="author" content="Almanas Alaburda">
    <meta charset="UTF-8">
<link rel="stylesheet" href="Stiliai/login.css" />
<link rel="icon" href="iconas.png" type="image/icon type">
</head>
<body>
<div class="box">
  <div class="inner">
    <span>Forumas</span>
  </div>
  <div class="inner">
    <span>Forumas</span>
  </div>
</div>
<?php
require('db.php');
session_start();

if (isset($_POST['username'])){

	$username = stripslashes($_REQUEST['username']);

	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
        $query = "SELECT * FROM vartotojai WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
  $row = $result->fetch_assoc();
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
      $_SESSION['role'] = $row['rolesid'];
	    header("Location: index/index.php");
         }else{
	echo "<div class='form'>
	<BR><BR><BR>
<h3>Klaidingai suvesti duomenys</h3>
<br/>Spausk čia <a href='index.php'>Prisijungti</a></div>
<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>";

	}
    }else{
?>
<BR><BR><BR>
</div class="login">
<div class="form">
<h1 class="centras">Prisijungti</h1>
<form class="centras" action="" method="post" name="login">
<input type="text" name="username" placeholder="Vartotojo vardas" required placeholder="Vartotojo vardas"
  oninvalid="this.setCustomValidity('Negalima palikti tuščio lauko')"
  oninput="this.setCustomValidity('')" />
<input type="password" name="password" placeholder="Slaptažodis" required placeholder="Slaptažodis"
  oninvalid="this.setCustomValidity('Negalima palikti tuščio lauko')"
  oninput="this.setCustomValidity('')" />
<input name="submit" type="submit" value="Prisijungti" />
</form>
<p class="centras">Neturi paskyros? <a href='registration.php'>Registracija čia</a></p>
</div>
    </div>
<?php } ?>
<BR><BR><BR><BR><BR><BR><BR><BR>
<script src="https://www.google.com/recaptcha/enterprise.js?render=6LfUtmkdAAAAAMnAUNMD6zhDva0etoncOW2ZXOfQ"></script>
<script>
grecaptcha.enterprise.ready(function() {
    grecaptcha.enterprise.execute('6LfUtmkdAAAAAMnAUNMD6zhDva0etoncOW2ZXOfQ', {action: 'login'}).then(function(token) {
       ...
    });
});
</script>
</body>
</html>