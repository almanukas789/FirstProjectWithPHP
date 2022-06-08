<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=windows-1257" />
	<title>Forumas</title>
    <meta name="author" content="Almanas Alaburda">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Stiliai/saskaitosstilius.css">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
    <link rel="icon" href="../iconas.png" type="image/icon type">

</head>
<?php
include("../auth.php");
require('../db.php');
?>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forumas";
$vartotojas=$_SESSION["username"];


   //prisijungiam prie MySQL serverio
   $conn = new mysqli($servername, $username, $password, $dbname);
   
   if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$data = date("Y-m-d");

$sql="INSERT INTO saskaitos (vardas, pavarde , adresas, mokejimas,kiekis,data,statusas)
VALUES ('" . $_SESSION['username'] . "', '" . $_POST["pavarde"] . "', '" . $_POST['adresas'] . "','".$_POST['mokejimas']."','".$_POST['kiekis']."','$data','Nesumokėta')";
if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "" . $sql . "<br>" . $conn->error;
}

   //atsijungiame nuo MySQL serverio
   $conn->close();


?>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<h1></h1><h1></h1><h1></h1><h1></h1><h1></h1><h1></h1><h1></h1><h1></h1><h1></h1><h1></h1><h1></h1><h1></h1>
<div class="deze">
<div>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:12pt;"><strong>SĄSKAITOS FAKTŪRA</strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:12pt;"><strong>NR. 421</strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; line-height:108%; font-size:12pt;"><strong>DATA: <?php PRINT "$data" ?></strong></p>
    <p style="margin-top:0pt; margin-bottom:8pt; text-align:center; line-height:108%; font-size:12pt;"><strong>&nbsp;</strong></p>
</div>
<p><br style="clear:both; mso-break-type:section-break;"></p>
<div>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:12pt;"><strong>PARDAVĖJAS &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</strong><strong>PIRKĖJAS</strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:12pt;">UAB &bdquo;Forumas&ldquo; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<?php PRINT $_POST['pavarde'] ?></p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:12pt;">LT32 1234 4321 4321 4321, AB SWED bankas &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Mokejimo būdas: <?php PRINT $_POST['mokejimas'] ?></p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:12pt;">Adresas: Forumo g. 123, Kaunas &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Adresas: <?php PRINT $_POST['adresas'] ?></p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:12pt;"><br></p>
</div>
<p><br style="clear:both; mso-break-type:section-break;"></p>
<div>
    <p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:12pt;">&nbsp;</p>
    <table cellpadding="0" cellspacing="0" style="border-collapse:collapse;">
        <tbody>
            <tr>
                <td style="width:20.45pt; border-style:solid; border-width:1.5pt; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;"><strong>Eil. Nr.</strong></p>
                </td>
                <td style="width:195.7pt; border-style:solid; border-width:1.5pt; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;"><strong>Prekės, paslaugos pavadinimas</strong></p>
                </td>
                <td style="width:83.45pt; border-style:solid; border-width:1.5pt; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;"><strong>Kiekis</strong></p>
                </td>
                <td style="width:52.1pt; border-style:solid; border-width:1.5pt; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;"><strong>Kaina vnt.</strong></p>
                </td>
                <td style="width:60.8pt; border-style:solid; border-width:1.5pt; padding-right:4.65pt; padding-left:4.65pt; vertical-align:middle;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;"><strong>Suma</strong></p>
                </td>
            </tr>
            <tr>
                <td style="width:20.45pt; border-style:solid; border-width:1.5pt 0.75pt 0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">1</p>
                </td>
                <td style="width:195.7pt; border-style:solid; border-width:1.5pt 0.75pt 0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">&ldquo;Forumo svetainės&rdquo; kreditai</p>
                </td>
                <td style="width:83.45pt; border-style:solid; border-width:1.5pt 0.75pt 0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;"><?php PRINT $_POST['kiekis'] ?></p>
                </td>
                <td style="width:52.1pt; border-style:solid; border-width:1.5pt 0.75pt 0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;">0.10</p>
                </td>
                <?php 
                $kiekis = (int)$_POST['kiekis'];
                $kaina = $kiekis/10;

                ?>
                <td style="width:60.8pt; border-style:solid; border-width:1.5pt 0.75pt 0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:center; font-size:12pt;"><?php PRINT "$kaina" ?></p>
                </td>
            </tr>
            <tr>
                <td style="width:20.45pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">&nbsp;</p>
                </td>
                <td style="width:195.7pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">&nbsp;</p>
                </td>
                <td style="width:83.45pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">&nbsp;</p>
                </td>
                <td style="width:52.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">&nbsp;</p>
                </td>
                <td style="width:60.8pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;">&nbsp;</p>
                </td>
            </tr>
            <tr>
                <td colspan="4" style="width:384.1pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:middle;">
                    <p style="margin-top:0pt; margin-bottom:0pt; text-align:right; font-size:12pt;"><strong>Viso:</strong></p>
                </td>
                <td style="width:60.8pt; border-style:solid; border-width:0.75pt; padding-right:5.03pt; padding-left:5.03pt; vertical-align:top;">
                    <p style="margin-top:0pt; margin-bottom:0pt; font-size:12pt;"><?php PRINT "$kaina" ?></p>
                </td>
            </tr>
        </tbody>
    </table>
    <p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:12pt;">&nbsp;</p>
    <p style="margin-top:0pt; margin-bottom:8pt; line-height:108%; font-size:12pt;">&nbsp;</p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:12pt;">&nbsp;</p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:12pt;"><strong>Sąskaitą i&scaron;ra&scaron;ė:</strong></p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:12pt;">Svetainės &bdquo;Forumo&ldquo; administracija</p>
    <p style="margin-top:0pt; margin-bottom:0pt; line-height:108%; font-size:12pt;">&nbsp;</p>
</div>
</div>
<h3>Saskaitos faktūra</h3>
<h3>Kreditus gausite po apmokėjimo</h3>



<p><a href='index.php'>Atgal</a></p>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

</body>
</html>