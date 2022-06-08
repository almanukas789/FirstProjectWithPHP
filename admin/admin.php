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
<h2>INFORMACIJA</h2>
<p>
Čia yra admin panelė kur tik su role: admin turi prieiga.
</p>
<p>
Šioje panelėje galima redaguoti turimus vartotojų kreditus, pakeisti role, ištrinti netinkamas arba nepadorias temas, taip pat ir komentarus ištrinti.
</p>

</div>

</div>
      
</body>
</html>
