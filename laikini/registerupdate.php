<html>
<head>
	<meta http-equiv="content-type" content="text/html; charset=windows-1257" />
	<title>Forumas</title>
    <meta name="author" content="Almanas Alaburda">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="Stiliai/stiliustemos.css">
    <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1.0"/>
</head>

<body>







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

$sql = "SELECT username FROM users WHERE username =  '" . $_POST["vardas"] . "'";  
$result = $conn->query($sql);

if ($result->num_rows > 0){
    //tikrinimas ar uzimtas vartotojas
    ?>
    <div class="thing">
  <h2>Vartotojas jau užimtas</h2>
  <p><a href='index.php'>Atgal</a></p>
</div>

    <?php
}
else {
  echo "";
//italpinami nauji duomenys
  $sql2 = "INSERT INTO vartotojai (vardas, username, password)
   VALUES ('" . $_POST["vardas"] . "', '" . $_POST["username"] . "', '" . $_POST["password"] . "')"; 

    if ($conn->query($sql2) === TRUE)
    {
        ?>
        <div class="thing">
      <h2>Nauja paskyra sukurta!</h2>
      <p><a href='index.php?username="<?php $_POST["username"]?>"'>Atgal</a></p>
    </div>
    
        <?php
    }
    else
    {
        echo "Error";
    }

}



  //$sql="INSERT INTO studentai (vardas, miestas, amzius) VALUES ('" . $_POST["vardas"] . "', '" . $_POST["miestas"] . "', '" . $_POST["amzius"] . "')";
$sql="INSERT INTO vartotojai (vardas, username,password)
VALUES ('" . $_POST["vardas"] . "', '" . $_POST["password"] . "')";
if ($conn->query($sql) === TRUE) {
  echo "";
} else {
  echo "" . $sql . "<br>" . $conn->error;
}

   //atsijungiame nuo MySQL serverio
   $conn->close();


?>
</body>
</html>