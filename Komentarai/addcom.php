<HTML>
<HEAD>
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
<?php  $ID = $_GET['ID']; ?>
<div class="mazasdiv">
 <FORM ACTION="komentaroirasymas.php<?php PRINT "?ID=".$ID.""?>" METHOD="POST">
      Komentaras <INPUT TYPE="TEXT" NAME="komentaras" VALUE="" required required placeholder="Komentaras"
  oninvalid="this.setCustomValidity('Negalima palikti tuščio lauko')"
  oninput="this.setCustomValidity('')"> </BR>
      <INPUT TYPE="SUBMIT" NAME="OK", VALUE="Pridėti komentarą">
   </FORM>
</div>
   <div class="footer">
  <h2>Forumas Almanas Alaburda PS0/1</h2>
</div>
   </BODY>
</HTML>