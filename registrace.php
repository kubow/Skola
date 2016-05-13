<?php 
include_once("config.php"); //include the config
//if user did not click registration button show the registration field.
if(!(isset( $_POST['register']))) {
print $hlava;
<h1>Registrace noveho uzivatele</h1>
<form method="post">
	 <ul>
		 <li>
			 <label for="usn">Jmeno : </label>
			 <input type="text" id="usn" maxlength="30" required autofocus name="username" />
		 </li>
		
		 <li>
			 <label for="passwd">Heslo : </label>
			 <input type="password" id="passwd" maxlength="30" required name="password" />
		 </li>
			
			<li>
			 <label for="conpasswd">Potvrzeni : </label>
			 <input type="password" id="conpasswd" maxlength="30" required name="conpassword" />
		 </li>
		 <li class="buttons">
			 <input type="submit" name="register" value="Registrovat" />
				<input type="button" name="cancel" value="Storno" onclick="location.href='index.php'" />
		 </li>
		
	 </ul>
</form>
print $foot;

//if register button was clicked.
} else {
$usr = new Users; //create new instance of the class Users
$usr->storeFormValues( $_POST ); //store form values

//if the entered password is match with the confirm password then register him
if( $_POST['password'] == $_POST['conpassword'] ) {
echo $usr->register($_POST); 
} else {
//if not then say that he must enter the same password to the confirm box.
echo "Nesedi otrzeni hesel, prosim zadejte znovu"; 
}
}
?>
