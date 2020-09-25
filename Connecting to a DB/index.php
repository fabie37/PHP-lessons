<?php
	//include_once 'includes/dbh.inc.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>

    	<form action="includes/signup.inc.php" method="POST">
    		<input type="text" name="first" placeholder="Firstname">
    		<br>
    		<input type="text" name="last" placeholder="Lastname">
    		<br>
    		<input type="text" name="email" placeholder="E-mail">
    		<br>
    		<input type="text" name="uid" placeholder="Username">
    		<br>
    		<input type="password" name="pwd" placeholder="Password">
    		<br>
    		<button type="submit" name="submit">Sign Up</button>
    	</form>

    	<?php

    		/*
    		Inserting a specific case
    		$sql          = "INSERT INTO users (user_first, user_last, user_email, user_uid, user_pwd) 
							VALUES ('Alli', 'Camp', 'allicamp@gmail.com', 'Alli123', 'tester1')";
    		mysqli_query($conn, $sql);
    		

    		This is for getting data from a DB
    		$sql          = "SELECT * FROM users;";
    		$result       = mysqli_query($conn, $sql);
    		$resultCheck  = mysqli_num_rows($result);

    		if ($resultCheck > 0) {
    			while ($row = mysqli_fetch_assoc($result)) {
    				echo $row['user_uid']."<br>";
    			}
    		} else {
    			echo "Error connecting to DB";
    		} */

    	?>
        
    </body>
</html> 