<?php 
$hlava = '<!doctype html>
<html> 
<head>
      <title>Internetova skola</title>
      <meta charset="utf-16">
      <link rel="stylesheet" type="text/css" href="css/mozek.css" /> 
</head> 
<body>
      <header>
	      <div id="logo">
		      <div id="personal"><a href="prihlaseni.php">Prihlasit</a></div>
		      <div id="personal"><a href="registrace.php">Registrovat</a></div>
	      </div>
	      <ul class="menu">
		  <li><a href="index.php">Domu</a></li>
		  <li><a href="nabidka.php">Hledani</a></li>
		  <li><a href="podminky.php">Podminky</a></li>
		  <li><a href="kontakty.php">Kontakty</a></li>
	      </ul>
	      <div class="clear"></div>
      </header>
      <section id="obal">
	      <div id="mezi">';
$pata = '     </div>
      </section>
      <footer>
	      copyright...
      </footer> 
</body>
</html>';
//set off all error for security purposes
error_reporting(0);
 /*** make it or break it ***/
error_reporting(E_ALL);

//define some contstant
	define( "DB_DSN", "mysql:host=localhost;dbname=lektori" ); 
	//this constant will be use as our connectionstring/dsn

	define( "DB_USERNAME", "root" ); //username of the database
	define( "DB_PASSWORD", "Kabwkabw" ); //password of the database
	define( "CLS_PATH", "class" ); //the class path of our project

//include the classes
include_once(CLS_PATH . "/uziv.php"); //registrace, prihlaseni atd
include_once(CLS_PATH . "/db.php"); //dotazy v databazi
include_once(CLS_PATH . "/stranky.php"); //strankovani vysledku
include_once(CLS_PATH . "/sezeni.php"); //funkce pro sezeni
?>
