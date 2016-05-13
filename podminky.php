<?php 
include_once("config.php"); //include the settings/configuration
//if user did not click the login button show the login form
$db = new db( DB_DSN, DB_USERNAME, DB_PASSWORD );
?>


<?php if( !(isset( $_POST['login'] ) ) ) { ?>

<?php 
	print $head;
	echo '<h1>Podminky uzivani sluzeb</h1>';
	echo '<h2>vseoecne</h2>';
	echo '<p>blablaba</p>';
	echo '<h2>ostatni</h2>';
	echo '<p>blablaba</p>';
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
