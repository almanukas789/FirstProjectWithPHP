<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=windows-1257" />
	<title>Forumas</title>
    <meta name="author" content="Almanas Alaburda">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../Stiliai/style.css">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link rel="icon" href="../iconas.png" type="image/icon type">
    <script>
$(window).load(function() {
		//  Animuotas puslapio krovimas
		$(".se-pre-con").fadeOut("slow");;
	});
</script>
</head>
<?php
//include auth.php file on all secure pages
include("../auth.php");
require('../db.php');
?>
<body>
<!-- -----------------Frontas----------------------------------------->
<div class="se-pre-con"></div>
<div class="header">
<div class="box">
  <div class="inner">
    <span>Forumas</span>
  </div>
  <div class="inner">
    <span>Forumas</span>
  </div>
</div>
</div>

<div class="row">
  <div class="leftcolumn">
  <div class="card">
  <h2 class="centras"><a href="../index/index.php" class="tema">Atgal</a></h2>
</div>

<!-- ---------------------------------------------------------->

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

 
   $sql2="SELECT * FROM temos WHERE ID= '" . $ID . "'";
   $result2 = $conn->query($sql2);
   while ($row = $result2->fetch_assoc())
   {
     ?>
<div class="card">
<h2 class="centras"><?php PRINT $row['pavadinimas']  ?></h2>
<hr>
<h4 class="centras"><?php PRINT $row['aprasymas']  ?></h4>




<h4>Temos kurėjas:<?php PRINT $row['kurejas']  ?></h4>
   </div>
<?php
   }
   $sql="SELECT * FROM komentarai WHERE temosid= '" . $ID . "'";
   $result = $conn->query($sql);


   while ($row = $result->fetch_assoc())
   {
?>
<!-- ---------------------PHP SELECT CODAS------------------------------------->

<div class="card">
<p class="floatasr">Komentavo: <?php PRINT $row['vartotojas']  ?></p>
      <h2><?php PRINT $row['komentaras']  ?></h2>
      <p class="floatasr"><?php PRINT $row['data']  ?></p>
      

      <?php
      if ($_SESSION['username']==$row['vartotojas'] || $_SESSION['role'] == '2')
      {
      ?>
      <h4 class="delete"><?php PRINT "<a href='deletekomen.php?temosid=".$ID."&ID=" . $row['ID'] . "' ><img src='../Nuotraukos/istrinti.png' class='delete'>
    </a><a href='redaguotikomen.php?temosid=".$ID."&ID=" . $row['ID'] . "'><img src='../Nuotraukos/editing.png' class='delete'> </a>";     ?></h4> 
    <?php
   }
?>
    <br><br><br>
    </div>






<!-- ---------------------------------------------------------->
<?php
   }



?>
<!-- ----------------------HTML CODAS------------------------------------>
<div class="card">
  <h2 class="centras"><a href="addcom.php<?php PRINT "?ID=".$ID.""?>" class="tema">Pridėti komentarą</a></h2>
</div>
</div>

<div class="rightcolumn">
<div class="card">
      <h3>Prisijunges kaip: <?php PRINT $_SESSION['username']  ?> </h3>
      <?php
$sql3 = "SELECT * FROM vartotojai WHERE username= '". $_SESSION['username']."'";
$result3 = $conn->query($sql3);
    while ($row = $result3->fetch_assoc())
    {
?>
  <h3>
     Kreditai: <?php PRINT $row['kreditai']  ?>
  </h3>



<?php
    }
    ?>
          <?php
$sql3 = "SELECT * FROM vartotojai WHERE username= '". $_SESSION['username']."' AND rolesid='2'";
$result3 = $conn->query($sql3);

    while ($row = $result3->fetch_assoc())
    {
?>
  <FORM ACTION="../admin/admin.php" METHOD="POST">
      <INPUT TYPE="SUBMIT" NAME="OK", VALUE="Admin Panelė">
   </FORM>




<?php
    }
    ?>
       <FORM ACTION="../index/kreditai.php" METHOD="POST">
      <INPUT TYPE="SUBMIT" NAME="OK", VALUE="Pirkti kreditų">
   </FORM>
   <FORM ACTION="../logout.php" METHOD="POST">
      <INPUT TYPE="SUBMIT" NAME="OK", VALUE="Atsijungti">
   </FORM>
   <div class="card3">
    <p>Svarbios žinutės nuo administracijos</p>
    <hr>
<?php
$sql2 = "SELECT * FROM adminzinute";
$result2 = $conn->query($sql2);

    while ($row = $result2->fetch_assoc())
      {
        ?>
        <p><strong><?php PRINT $row['zinute'] ?></strong></p>
      
    <?php
      }
    ?>
    </div>

    </div>
    
    <div class="card">
    <h3>Informacija</h3>
      <p>Forumas buvo sukurtas Kauno kolegijos studento Almano Alaburdos </p>
      <p>Studijų kryptis : Programų sistemos </p>
      <p>Email: almanas.ala203@go.kauko.lt</p>
    </div>
  </div>
  </div>

<div class="footer">
  <h2>Forumas Almanas Alaburda PS0/1</h2>
</div>






<!-- ---------------------------------------------------------->
</body>
</html>
<?php
   //atsijungiame nuo MySQL serverio
   $conn->close();
?>