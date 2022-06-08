<?php
include("../auth.php");
require('../db.php');
?>
<!DOCTYPE html> 
<html>
<head>
<meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
	<meta http-equiv="content-type" content="text/html; charset=windows-1257" />
	<title>Forumas</title>
    <meta name="author" content="Almanas Alaburda">
    <meta charset="UTF-8">
    <link href="../Stiliai/style.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="../iconas.png" type="image/icon type">
    <script>
$(window).load(function() {
		//  Animuotas puslapio krovimas
		$(".se-pre-con").fadeOut("slow");;
	});
</script>
</head>
<body>
<div class="se-pre-con"></div>
    
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forumas";


$paieska = $_GET['ieskoti'];
?>

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


<?php

   //1. prisijungiam prie MySQL serverio
  $conn = new mysqli($servername, $username, $password, $dbname);
   
   if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


  $sql = "SELECT * FROM temos WHERE paryskintas='0' AND pavadinimas LIKE '%$paieska%' OR kurejas LIKE '%$paieska%' OR aprasymas LIKE '%$paieska%'";
	$result = $conn->query($sql);

  $sql2 = "SELECT * FROM temos WHERE paryskintas='1'";
	$result2 = $conn->query($sql2);



?>
<div class="row">
  <div class="leftcolumn">
    <br><br>
  <h2><a href="kurtitema.php" class="tema">Prideti naują temą</a></h2>
  <br><br>

  
<?php
//paryskintos temos
 while ($row = $result2->fetch_assoc())
 {
?>
  <div class="temos">
    <div class="card2">
    <h4 class="delete"><img src='../Nuotraukos/goldenstar.png' class='delete'></h4>
    <h4 class="delete2"><img src='../Nuotraukos/goldenstar.png' class='delete2'></h4>
      <h2 class="centras"><?php PRINT $row['pavadinimas']  ?></h2>
      <hr>
      <h5 class="kaire">Tema sukurė: <?php PRINT $row['kurejas'] ?></h5>
      <p><strong>Aprašymas: </strong><?php PRINT $row['aprasymas'] ?></p>
      
	  <h2 class="centras"><?php PRINT "<a href='../Komentarai/komentarai.php?ID=" . $row['ID'] . "' class='linkas'>Atidaryti temą</a> "?></h2> 
    <?php
      if ($_SESSION['username'] == $row['kurejas'])
      {
      ?>
      <h4 class="delete">
        <?php PRINT "<a href='delete.php?ID=" . $row['ID'] . "' >
        <img src='../Nuotraukos/istrinti.png' class='delete'> </a>
    <a href='redaguoti.php?ID=" . $row['ID'] . "'>
    <img src='../Nuotraukos/editing.png' class='delete'> </a>
   
    

    ";  
    ?></h4> 
      <?php
      }
      
      ?> 
      <br>
      <br>
  </div>
    </div>
 


<?php
 }





?>
<?php

   while ($row = $result->fetch_assoc())
      {
        if($row['paryskintas']=='0')
        {
?>
  <div class="temos">
    <div class="card">
      <h2 class="centras"><?php PRINT $row['pavadinimas']  ?></h2>
      <hr>
      <h5 class="kaire">Tema sukurė: <?php PRINT $row['kurejas'] ?></h5>
      <p><strong>Aprašymas: </strong><?php PRINT $row['aprasymas'] ?></p>
      
	  <h2 class="centras"><?php PRINT "<a href='../Komentarai/komentarai.php?ID=" . $row['ID'] . "' class='linkas'>Atidaryti temą</a> "?></h2> 
    <?php
      if ($_SESSION['username'] == $row['kurejas'])
      {
      ?>
      <h4 class="delete">
        <?php PRINT "<a href='delete.php?ID=" . $row['ID'] . "' >
        <img src='../Nuotraukos/istrinti.png' class='delete'> </a>
    <a href='redaguoti.php?ID=" . $row['ID'] . "'>
    <img src='../Nuotraukos/editing.png' class='delete'> </a>
    <a href='paryskinti.php?ID=" . $row['ID'] . "'>
    <img src='../Nuotraukos/star.png' class='delete'> </a>
    

    ";  
    ?></h4> 
      <?php
      }
      
      ?> 
      <br>
      <br>
  </div>
    </div>
 
<?php
    }
      }
    ?>
     </div>
  
  
  <div class="rightcolumn">
  <div class="card">
  <form>
  <input class="ieskoti2" type="text" name="ieskoti" placeholder="<?php PRINT $paieska ?>">
</form>
<FORM ACTION="index.php" METHOD="POST">
      <INPUT TYPE="SUBMIT" NAME="OK", VALUE="Atgal">
   </FORM>
    </div>
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
       <FORM ACTION="kreditai.php" METHOD="POST">
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
    <div class="card2">
    <h3>Paryškintos temos</h3>
    <hr>
<?php
$sql2 = "SELECT * FROM temos WHERE paryskintas='1' LIMIT 5";
$result2 = $conn->query($sql2);

    while ($row = $result2->fetch_assoc())
      {
        ?>
        <p><strong><?php PRINT "<a href='../Komentarai/komentarai.php?ID=" . $row['ID'] . "' class='naujos'>".$row['pavadinimas']."</a> "?></strong></p>
      
    <?php
      }
    ?>
    </div>
    <div class="card">
    <h3>Naujausios Temos</h3>
    <hr>
<?php
$sql2 = "SELECT * FROM temos WHERE paryskintas='0' ORDER BY ID DESC LIMIT 3";
$result2 = $conn->query($sql2);

    while ($row = $result2->fetch_assoc())
      {
        ?>
        <p><strong><?php PRINT "<a href='../Komentarai/komentarai.php?ID=" . $row['ID'] . "' class='naujos'>".$row['pavadinimas']."</a> "?></strong></p>
      
    <?php
      }
    ?>
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
    
    <?php
   //4. atsijungiame nuo MySQL serverio
   $conn->close();

?>
<script>
var modal = document.getElementById("myModal");


var btn = document.getElementById("myBtn");


var span = document.getElementsByClassName("close")[0];

 
btn.onclick = function() {
  modal.style.display = "block";
}


span.onclick = function() {
  modal.style.display = "none";
}


window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
    </script>
</body>
</html>