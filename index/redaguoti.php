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


   $sql="SELECT * FROM temos WHERE ID = $ID";
   $result = $conn->query($sql);
   
   
   if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    
  
?>


<HTML>
<HEAD>
<TITLE>Forumas</TITLE>
<meta name="author" content="Almanas Alaburda">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Stiliai/style.css">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
    <link rel="icon" href="../iconas.png" type="image/icon type">
</HEAD>
<BODY>
<div class="mazasdiv">
   <FORM ACTION="koregavimoupdate.php?ID=<?php PRINT $ID?>" METHOD="POST">
      Iveskite temą: <INPUT TYPE="TEXT" NAME="pavadinimas" VALUE="<?php PRINT $row['pavadinimas']?>"> </BR>
      Iveskite aprašymą: <INPUT TYPE="TEXT" NAME="aprasymas" VALUE="<?php PRINT $row['aprasymas']?>"> </BR>
      <INPUT TYPE="SUBMIT" NAME="OK", VALUE="Koreguoti">
   </FORM>
  </div>
</BODY>
</HTML>

<?php
}
} else {
  echo "0 results";
}
   $conn->close();
?>