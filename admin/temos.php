<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forumas";

include("../auth.php");
require('../db.php');
   //1. prisijungiam prie MySQL serverio
  $conn = new mysqli($servername, $username, $password, $dbname);
   
   if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
   }
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
<table class="w3-table-all">
    <thead>
      <tr class="w3-teal">
        <th>Pavadinimas</th>
        <th>Aprašymas</th>
        <th>Paryškintas</th>
        <th>Kūrėjas</th>
        <th>Konfiguracija</th>
        <th></th>
        <th></th>
      </tr>
    </thead>

<div class="w3-container">
<?php
 $sql = "SELECT * FROM temos";
 $result = $conn->query($sql);

 while ($row = $result->fetch_assoc())
 {
?>
    <tr>
      <td><?php PRINT $row['pavadinimas']?></td>
      <td><?php PRINT $row['aprasymas']?></td>
      <td><?php PRINT $row['paryskintas']?></td>
      <td><?php PRINT $row['kurejas']?></td>
       <td> 
       <?php PRINT "<a class='w3-button w3-white w3-border w3-border-red w3-round-large' href='temosdelete.php?ID=" . $row['ID'] . "' >Ištrinti</a>"?>

       <?php PRINT "<a class='w3-button w3-white w3-border w3-border-red w3-round-large' href='paryskinti.php?ID=" . $row['ID'] . "' >Paryškinti temą</a>"?>

       <?php PRINT "<a class='w3-button w3-white w3-border w3-border-red w3-round-large' href='atryskinti.php?ID=" . $row['ID'] . "' >Nuimti paryškinimą</a>"?>
 
       <?php PRINT "<a class='w3-button w3-white w3-border w3-border-red w3-round-large' href='komentarai.php?ID=" . $row['ID'] . "' >Komentarai</a>"?>
    </td>
    </tr>

<?php
 }
?>
 </table>



















</div>

</div>
      
</body>
</html>
<?php
   //4. atsijungiame nuo MySQL serverio
   $conn->close();

?>