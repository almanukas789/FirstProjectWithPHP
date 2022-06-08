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
   $temosid = $_GET['temosid'];


   $sql="SELECT * FROM komentarai WHERE ID = $ID";
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
   <br>
   <br>
   <br>
   <br>
<div class="mazasdiv">
   <FORM ACTION="koregavimoupdatekomentaras.php?temosid=<?php PRINT $temosid?>& ID=<?php PRINT $ID?>" METHOD="POST">
      Komentaras: <INPUT TYPE="TEXT" NAME="komentaras" VALUE="<?php PRINT $row['komentaras']?>"> </BR>
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