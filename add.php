<?php

if(isset($_POST['login'])){
	require 'db.php';
	if(mb_strlen($_POST['pass']) >= 6){
		if(addUser($_POST['login'], $_POST['pass'], $_POST['name'], $_POST['age'])){
			echo "<h2>Successfully added!</h2>";
			?>
				<a href="autho.php">Log in</a>
			<?php
		}
	}
	else{
		echo "<h2>password must be 6 or more characters!</h2>";
		?>
				<a href="regis.php">Back to register</a>
			<?php
	}
	
}

?>