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
<?php
require('db.php');

if (isset($_REQUEST['username'])){
 
	$username = stripslashes($_REQUEST['username']);

	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
	$query2 = "SELECT * FROM vartotojai WHERE username='$username'";
	$result2 = mysqli_query($con,$query2) or die(mysql_error());
	$rows = mysqli_num_rows($result2);
  $query3 = "SELECT * FROM vartotojai WHERE email='$email'";
	$result3 = mysqli_query($con,$query3) or die(mysql_error());
	$rows2 = mysqli_num_rows($result3);
	if($_REQUEST['password']==$_REQUEST['password2'])
	{
     if($rows==0 && $rows2==0)
     
	 {


        $query = "INSERT into vartotojai (username, password, email, trn_date, kreditai,rolesid)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date','100','1')";
        $result = mysqli_query($con,$query);
        if($result && $rows==0){
            echo "<div class='form'>
<h3>Užsiregistravai sėkmingai!.</h3>
<br/>Atgal<a href='index.php'> Prisijungimas</a></div>
<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>";
        }
	}
		else {
			echo "<div class='form'>
<h3>Toks Vartotojas jau egzistuoja.</h3>
<br/>Atgal<a href='registration.php'> Registracija</a></div>
<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>";
		}
	}else{
		echo "<div class='form'>
<h3>Slaptažodžiai nesutampa.</h3>
<br/>Atgal<a href='registration.php'> Registracija</a></div>
<BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR><BR>";
	}
    }else{
?>
<div class="box">
  <div class="inner">
    <span>Forumas</span>
  </div>
  <div class="inner">
    <span>Forumas</span>
  </div>
</div>
<BR><BR><BR>
<div class="form">
<h1 class="centras">Registracija</h1>
<form class="centras" name="registration" action="" method="post">
<input type="text" name="username" placeholder="Vartotojo vardas" required placeholder="Vartotojo vardas"
  oninvalid="this.setCustomValidity('Negalima palikti tuščio lauko')"
  oninput="this.setCustomValidity('')" />
<input type="email" name="email" placeholder="E-mail" required placeholder="E-mail"
  oninvalid="this.setCustomValidity('Negalima palikti tuščio lauko, arba nėra @ ženklo!')"
  oninput="this.setCustomValidity('')" />
<input type="password" name="password" placeholder="Slaptažodis" required placeholder="Slaptažodis"
  oninvalid="this.setCustomValidity('Negalima palikti tuščio lauko')"
  oninput="this.setCustomValidity('')" />
<input type="password" name="password2" placeholder="Pakartoti slaptažodį" required placeholder="Pakartoti slaptažodį"
  oninvalid="this.setCustomValidity('Negalima palikti tuščio lauko')"
  oninput="this.setCustomValidity('')" />
<input type="submit" name="submit" value="Register" />
</form>
<script>
grecaptcha.enterprise.ready(function() {
    grecaptcha.enterprise.execute('6LfUtmkdAAAAAMnAUNMD6zhDva0etoncOW2ZXOfQ', {action: 'login'}).then(function(token) {
       ...
    });
});
</script>


</div>
<?php } ?>
<BR><BR><BR><BR><BR><BR><BR><BR>
</body>
</html>