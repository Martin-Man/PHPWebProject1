<?php

include 'pages/header.php';							//vlo�� hlavi�ku str�nky
include 'connect.php';								//vlo�� s�bor na spojenie s datab�zou

if (isset($_GET['link'])) include 'pages/'.$_GET["link"];	//vlo�� obsah po�adovanej str�nky (premenn� "link" vklad�me v adresnom riadku)
else include 'pages/home.php';						//alebo vlo�� defaultn� dom�cu str�nku

$conn->close();
include 'pages/footer.php';							//vlo�� p�ti�ku str�nky

?>