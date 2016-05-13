<?php 
include_once("config.php"); //include the settings/configuration
//if user did not click the login button show the login form
$db = new db( DB_DSN, DB_USERNAME, DB_PASSWORD );
?>

<?php if( !(isset( $_POST['login'] ) ) ) { ?>


<?php 
	echo $head;
	echo '<h1>Sprava uctu</h1>';
	echo '<p>Zvolte si prosim nastvení, které chcete zkontrolovat nebo zmenit z nabidky nize...</p>';
	echo '<select><option value="sprava_uct.php">sprava uzivatelskeho uctu</option><option value="sprava_zna.php">sprava znalosti dostupnosti</option><option value="zprava_cas.php">sprava casove dostupnosti</option></select>';
	$result = $db->select("obor", "", "", "nazev");
	// For debug purposes run /*print_r($result);*/
	echo '<h1>Nabidka vice jak xxx oboru</h1>';
	$result = $db->select("lektori", "", "", "*");
	foreach($result as $typ => $hodnota){ 
		echo '<p>' . $hodnota[zkr] . '</p>';
	}
	echo $foot;
?>

<?php 
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
