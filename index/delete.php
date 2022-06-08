<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=windows-1257" />
	<title>Forumas</title>
    <meta name="author" content="Almanas Alaburda">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Stiliai/stiliustemos.css">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
    <link rel="icon" href="../iconas.png" type="image/icon type">
</head>

<body>
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


   $sql2="DELETE FROM komentarai WHERE temosid= '" . $ID . "'";
   if ($conn->query($sql2) === TRUE) {
    echo "";
  } else {
    echo "KOMENTARO: " . $conn->error;
  }
   $sql="DELETE FROM temos WHERE ID= '" . $ID . "'";


if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "TEMOS: " . $conn->error;
}

   //atsijungiame nuo MySQL serverio
   $conn->close();


?>

<div class="thing">
  <h2>Tema buvo ištrinta kartu su komentarais</h2>
  <p><a href='index.php'>Atgal</a></p>
</div>
</body>
</html>