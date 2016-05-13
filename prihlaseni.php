<?php 
include_once("config.php"); //include the settings/configuration
//if user did not click the login button show the login form
if(!(isset( $_POST['login']))) { 
	print $hlava;		 
	echo '<h1>Prihlaseni</h1>';
	echo '<form method="post" action="">';
	echo '<ul><li>';
	echo '<label for="usn">Jmeno : </label>';
	echo '<input type="text" maxlength="30" required autofocus name="username"/>';
	echo '</li><li>';
	echo '<label for="passwd">Heslo : </label>';
	echo '<input type="password" maxlength="30" required name="password" />';
	echo '</li>	 <li class="buttons">';
	echo '<input type="submit" name="login" value="Prihlasit" />';
	echo '<input type="button" name="storno" value="Storno" onclick="location.href='index.php'" />';
	echo '</li></ul></form>';
	print $foot;
//else look at the database and see if he entered the correct details
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
