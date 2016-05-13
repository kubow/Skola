<?php 
include_once("config.php"); //include the settings/configuration
//if user did not click the login button show the login form
$db = new db( DB_DSN, DB_USERNAME, DB_PASSWORD );
?>


<?php if( !(isset( $_POST['login'] ) ) ) { ?>

<?php 
	echo $hlava;
	echo '<h1>O Nás</h1>'; 
	echo '<p> System vtvoren za pomoci volne dostuonych prostredku</p>';
	echo '<h2>Autor struktury</h2>'; 
	echo '<p> Kube Kubow</p>';
	echo '<h2>Design</h2>'; 
	echo '<p> Vsichni, kteri se podileli na testovani</p>';
	echo '<p> Vsichni, kteri vrati zpetnou vazbu...:)</p>';
	echo $pata;
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
