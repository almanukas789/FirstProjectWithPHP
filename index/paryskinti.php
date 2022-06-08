<?php
include("../auth.php");
require('../db.php');
?>
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


   $sql="SELECT * FROM vartotojai WHERE kreditai>=100 AND  username= '" . $_SESSION['username'] . "'";
 
 $result = $conn->query($sql);
 $rows = mysqli_num_rows($result);
 if($rows !=0 )
 {
 while ($row = $result->fetch_assoc())
      {
        $sql1="UPDATE temos , vartotojai SET paryskintas='1', kreditai= kreditai - 100  WHERE temos.ID= '" . $ID . "' AND vartotojai.username='".$_SESSION['username']."'" ;
       ?>
<div class="thing">
  <h2>Tema buvo sėkmingai paryškinta</h2>
  <p><a href='index.php'>Atgal</a></p>
</div>

<?php
if ($conn->query($sql1) === TRUE) {
    echo "";
  } else {
    echo "" . $conn->error;
  }
      }
    }else
    {
        ?>
        <div class="thing">
  <h2>Neturite pakankamai kreditų</h2>
  <p><a href='index.php'>Atgal</a></p>
</div>
<?php
    }


   //atsijungiame nuo MySQL serverio
   $conn->close();


?>

</body>
</html>