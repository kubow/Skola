<?php 
include_once("config.php"); //include the settings/configuration
$db = new db( DB_DSN, DB_USERNAME, DB_PASSWORD );
//if user did not click the login button show the login form
if(!(isset( $_POST['login']))) { 
	print $hlava;
	echo '<h1>Nabidka lektoru dle zvolenych kriterii</h1>';
	$result = $db->select("obor", "", "", "nazev");
	// For debug purposes run /*print_r($result);*/
	echo '<select name="obory">'; 
	foreach($result as $typ => $hodnota){ 
		echo '<option value="' . $hodnota[nazev] . '">' . $hodnota[nazev] . '</option>';
	}
	echo'</select>';
	echo '<h1>Seznam uzivatelu v databazi</h1>';
	$vysledek = $db->select("lektori", "", "", "*");
	/*print_r($result);*/
	foreach($vysledek as $typ => $hodnota){ 
		echo '<div id="polozka">' . $hodnota[zkr] . '</div>';
	}
	print $pata;
//else look at the database and see if user entered correct details
} else {
$usr = new Users;
$usr->storeFormValues( $_POST );

//if our function userLogin() returns true then the user is valid, display welcome else say it's incorrect.
if( $usr->userLogin() ) {
echo "Welcome"; 
} else {
echo "Incorrect Username/Password"; 
}
}
?>
