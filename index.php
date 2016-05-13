<?php 
include_once("config.php"); //include the settings/configuration
$db = new db( DB_DSN, DB_USERNAME, DB_PASSWORD );
//if user did not click the login button show the login form
if(!(isset( $_POST['login']))) { 
	echo $hlava;
	echo '<h1>Vyberte si, co Vás zajímá...</h1>';
	$vysledek = $db->select("obor", "", "", "nazev");
	// For debug purposes run /*print_r($result);*/
	echo '<select name="obory">'; 
	foreach($vysledek as $typ => $hodnota){ 
		echo '<option value="' . $hodnota[nazev] . '">' . $hodnota[nazev] . '</option>';
	}
	echo'</select>';
	echo '<h1>Nabidka vice jak 20 oboru</h1>';
	echo '<p>Tato stranka se pokousi zpristupnit a spojit dohromady lidi nabizejici sve znalosti a lidi touzici se tyto znalosti naucit.</p>';
	echo '<p>Vyberem polozek z horniho boxu dojde k vyhledani odpovidajicich polozek.</p>';
	echo '<h1>Sdileni znalosti - mapa dostpnych lektoru</h1>';
	echo '<p>Zde oddil umoznujici vyber mapy...</p>';
	echo '';
	print_r($PHPSESSID);
	echo $pata; 
//else look at the database and see if user entered correct details
} else {
	$usr = new Users;
	$usr->storeFormValues( $_POST );
	//if our function userLogin() returns true then the user is valid, display welcome else say it's incorrect.
	if( $usr->userLogin() ) {
		echo $head;
		echo '<h1>dobry den</h1>';
		echo '<p></p>';
		echo $foot; 
	} else {
		echo $head;
		echo '<p>Nespravne uzivatelske jeno nebo heslo...</p>';
		echo $foot; 
	}
}
?>
