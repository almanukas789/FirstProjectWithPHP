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


   $ID = $_GET['ID'];
   $temosid = $_GET['temosid'];



   $sql="UPDATE komentarai SET komentaras = '" . $zodis2 . "'WHERE ID=" . $ID;
if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "" . $conn->error;
}

   //atsijungiame nuo MySQL serverio
   $conn->close();


?>
<div class="thing">
  <h2>Komentaras buvo pakoreguotas!</h2>
  <p><a href='komentarai.php<?php PRINT "?ID=".$temosid."" ?>'>Atgal</a></p>
</div>


</body>
</html>