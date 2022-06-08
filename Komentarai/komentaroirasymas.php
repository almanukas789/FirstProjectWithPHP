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
<?php
//include auth.php file on all secure pages
include("../auth.php");
require('../db.php');
?>

<body>
<?php  $ID = $_GET['ID']; ?>







<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forumas";


$blogi=("kurva blet asilas loxas pideras pyderas cigonas urodas bl kūrva čigonas nx naxui sliuha sliūha šliūha kekse kekše kekšė 
kalė kale kalės pydare pyderastas loxe loxelis lxs lx asilo kurvelė kurvutė pizdutė vagina pizda pyzda pz pize pizė pizutė pizute 
kandonas piderastas pyderastas pimpis pimpalas pympalas bybys bybis bibis bibi ciuhykis ciuhinkis ciūhykis ciųhykis piz3 pizda 
bl3t l0xas cig0nas negras negrai nigeris niggeris nigger nigge nigga l0xas l0xelis l0x l0xs bybį narkašas alhoholikas alchokolikas 
debilas debilelis debilėlis debylas debillas debyllas ddebilas lloxas ccigonas cigoonas sudas šūdas šudas krv kūrva lopas lopelis 
lopų lopelių lopu lopeliu šūdinai sudinai šudinai sūdinai");
$blogizodziai=explode(" ", $blogi);
$zodis=explode(" " , $_POST['komentaras']);
(int)$kiekis=0;




for ($i=0 ; $i<count($zodis) ; $i++)
{
  for ($j=0 ; $j<count($blogizodziai) ; $j++)
  {
    if ( $zodis[$i]==$blogizodziai[$j])
    {
      $zodis[$i] ="";
      for ($z=0 ; $z<strlen($blogizodziai[$j]) ; $z++)
      {
        $zodis[$i] .="*";
      }
      
    }
  }


}

$zodis2=implode(" ", $zodis);


   //prisijungiam prie MySQL serverio
   $conn = new mysqli($servername, $username, $password, $dbname);
   
   if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

  
$data = date("Y-m-d H:i:s");

if ($kiekis == 0)
{
  ?>
<div class="thing">
  <h2>Komentaras buvo pridėtas!</h2>
  <p><a href='komentarai.php<?php PRINT "?ID=".$ID.""?>'>Atgal</a></p>
</div>

<?php

  //$sql="INSERT INTO studentai (vardas, miestas, amzius) VALUES ('" . $_POST["vardas"] . "', '" . $_POST["miestas"] . "', '" . $_POST["amzius"] . "')";
$sql="INSERT INTO komentarai (komentaras, temosid,vartotojas,data)
VALUES ('" . $zodis2 . "', '" . $ID . "', '".$_SESSION['username']."','". $data ."')";
if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "" . $sql . "<br>" . $conn->error;
}
}
else
{
?>
<div class="thing">
  <h2>Komentaras nebuvo pridėtas nes yra blogų žodžių</h2>
  <p><a href='komentarai.php<?php PRINT "?ID=".$ID.""?>'>Atgal</a></p>
</div>

<?php
}

   //atsijungiame nuo MySQL serverio
   $conn->close();


?>
</body>
</html>
