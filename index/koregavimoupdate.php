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

$blogi=("kurva blet asilas loxas pideras pyderas cigonas urodas bl kūrva čigonas nx naxui sliuha sliūha šliūha kekse kekše kekšė 
kalė kale kalės pydare pyderastas loxe loxelis lxs lx asilo kurvelė kurvutė pizdutė vagina pizda pyzda pz pize pizė pizutė pizute 
kandonas piderastas pyderastas pimpis pimpalas pympalas bybys bybis bibis bibi ciuhykis ciuhinkis ciūhykis ciųhykis piz3 pizda 
bl3t l0xas cig0nas negras negrai nigeris niggeris nigger nigge nigga l0xas l0xelis l0x l0xs bybį narkašas alhoholikas alchokolikas 
debilas debilelis debilėlis debylas debillas debyllas ddebilas lloxas ccigonas cigoonas sudas šūdas šudas krv kūrva lopas lopelis 
lopų lopelių lopu lopeliu šūdinai sudinai šudinai sūdinai");
$blogizodziai=explode(" ", $blogi);
$zodis=explode(" " , $_POST['pavadinimas']);
$zodis2=explode(" " , $_POST['aprasymas']);
(int)$kiekis=0;
(int)$kiekis2=0;




for ($i=0 ; $i<count($zodis) ; $i++)
{
  for ($j=0 ; $j<count($blogizodziai) ; $j++)
  {
    if ( $zodis[$i]==$blogizodziai[$j])
    {
      $kiekis=$kiekis+1;
    }
  }


}

for ($z=0 ; $z<count($zodis2) ; $z++)
{
  for ($x=0 ; $x<count($blogizodziai) ; $x++)
  {
    if ( $zodis2[$z]==$blogizodziai[$x])
    {
      $kiekis2=$kiekis2+1;
    }
  }


}
   //prisijungiam prie MySQL serverio
   $conn = new mysqli($servername, $username, $password, $dbname);
   
   if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


   $ID = $_GET['ID'];

   if ($kiekis == 0 && $kiekis2 == 0)
   {
     ?>
 <div class="thing">
  <h2>Tema sekmingai buvo pakoreguota!</h2>
  <p><a href='index.php'>Atgal</a></p>
</div>
   
   <?php

   $sql="UPDATE temos SET pavadinimas = 
   '" . $_POST["pavadinimas"] . "', aprasymas = '" . $_POST["aprasymas"] . "'  WHERE ID=" . $ID;
if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "" . $conn->error;
}
   }
   else
{
?>
<div class="thing">
  <h2>Tema nebuvo pakoreguota, nes yra blogų žodžių</h2>
  <p><a href='index.php'>Atgal</a></p>
</div>

<?php
}


   //atsijungiame nuo MySQL serverio
   $conn->close();


?>


</body>
</html>