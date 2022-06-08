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
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forumas";

  $conn = new mysqli($servername, $username, $password, $dbname);
   
   if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

   $ID = $_GET['ID'];


   $sql="SELECT * FROM vartotojai WHERE ID = $ID";
   $result = $conn->query($sql);
   
   
   if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
  
?>



</HEAD>

<FORM ACTION="kreditaiupdate.php?ID=<?php PRINT $ID?>" METHOD="POST">
      Kreditai: <INPUT TYPE="TEXT" NAME="kreditai" VALUE="<?php PRINT $row['kreditai']?>"> </BR>
      <INPUT TYPE="SUBMIT" NAME="OK", VALUE="Keisti kreditų kiekį">
   </FORM>
</HTML>

<?php
}
} else {
  echo "0 results";
}
   $conn->close();
?>

</div>

</div>
      
</body>
</html>
