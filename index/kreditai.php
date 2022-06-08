<HTML>
<?php
include("../auth.php");
require('../db.php');
?>
<HEAD>
<TITLE>Kreditai</TITLE>
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

</HEAD>
<body>
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
<br><br>
<h2 class="centras">Kreditai</h2>
<h3 class="centras">100 kreditų = 10€</h3>
<div class="mazasdiv">
 <FORM ACTION="saskaita.php" METHOD="POST">
      Vartotojo vardas: <?php PRINT $_SESSION['username']?> <BR></BR>
      Vardas Pavardė: <INPUT TYPE="TEXT" NAME="pavarde" VALUE="" required placeholder="Pavardė"
  oninvalid="this.setCustomValidity('Negalima palikti tuščio lauko')"
  oninput="this.setCustomValidity('')"> </BR>
  Adresas: <INPUT TYPE="TEXT" NAME="adresas" VALUE="" required placeholder="Adresas"
  oninvalid="this.setCustomValidity('Negalima palikti tuščio lauko')"
  oninput="this.setCustomValidity('')"> </BR>
  <label for="mokejimas">Mokėjimo būdas:</label>
  <select id="mokejimas" name="mokejimas">
    <option value="Grynais" name="mokejimas">Grynais</option>
    <option value="Bankinis" name="mokejimas">Bankiniu pervedimu</option>
  </select>
  <label for="kiekis">Kreditų kiekis:</label>
  <select id="kiekis" name="kiekis">
    <option value="100" name="kiekis">100</option>
    <option value="200" name="kiekis">200</option>
    <option value="300" name="kiekis">300</option>
    <option value="400" name="kiekis">400</option>
    <option value="500" name="kiekis">500</option>
    <option value="1000" name="kiekis">1000</option>
  </select>
      <INPUT TYPE="SUBMIT" NAME="OK", VALUE="Pirkti">
   </FORM>
</div>

   <div class="footer">
  <h2>Forumas Almanas Alaburda PS0/1</h2>
</div>
   </BODY>
</HTML>