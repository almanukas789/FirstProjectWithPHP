<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forumas";

   //prisijungiam prie MySQL serverio
   $conn = new mysqli($servername, $username, $password, $dbname);
   
   if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


   $ID = $_GET['ID'];



   $sql="UPDATE temos SET paryskintas = 
   '0'  WHERE ID=" . $ID;
if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "" . $conn->error;
}

   //atsijungiame nuo MySQL serverio
   $conn->close();


?>
<?php
include("../auth.php");
require('../db.php');
?>
<!DOCTYPE html>
<html>
<title>Forumas admin panelė</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
	<meta http-equiv="content-type" content="text/html; charset=windows-1257" />
    <meta name="author" content="Almanas Alaburda">
    <meta charset="UTF-8">
    <link href="../Stiliai/admin.css" rel="stylesheet" type="text/css">
    <link rel="icon" href="../iconas.png" type="image/icon type">
<body>

<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:25%">
  <h3 class="w3-bar-item">Admin panelė</h3>
  <a href="vartotojai.php" class="w3-bar-item w3-button">Vartotojai</a>
  <a href="temos.php" class="w3-bar-item w3-button">Temos</a>
  <a href="zinutes.php" class="w3-bar-item w3-button">Administracijos žinutės</a>
  <a href="saskaitos.php" class="w3-bar-item w3-button">Sąskaitos</a>
  <a href="../index/index.php" class="w3-bar-item w3-button">Atgal</a>
</div>

<!-- Page Content -->
<div style="margin-left:25%">

<div class="w3-container w3-teal">
  <h1>Forumo admin panelė</h1>
</div>


<div class="w3-container">
<h2>Temai buvo nuimtas paryškinimas</h2>

</div>

</div>
      
</body>
</html>