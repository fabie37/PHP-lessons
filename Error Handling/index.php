<!doctype html>
<html class="no-js" lang="">
    <head>
        
    </head>
    <body>
        <h2>Signup</h2>

        <form action="includes/signup.inc.php" method="POST">
        	<?php
        		if (!isset($_GET['first'])) {
        			echo '<input type="text" name="first" placeholder="Firstname">';
        		} else {
        			$first = $_GET['first'];
        			echo '<input type="text" name="first" placeholder="Firstname" value="'.$first.'">';
        		}
        	?>
        	<input type="text" name="last" placeholder="Lastname">
        	<br>
        	<input type="text" name="email" placeholder="E-mail">
        	<br>
        	<input type="text" name="uid" placeholder="Username">
        	<br>
        	<input type="password" name="pwd" placeholder="Password">
        	<br>
        	<button type="submit" name="submit">Sign up</button>
        	<br>	
        </form>

        <?php
        	/*$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

        	if (strpos($fullUrl, "signup=empty") == true) {
        		echo "You did not fill in all fields!";
        		exit();
        	}
        	elseif (strpos($fullUrl, "signup=char") == true) {
        		echo "You used invalid chars!";
        		exit();
        	}
        	elseif (strpos($fullUrl, "signup=email") == true) {
        		echo "You used invalid email!";
        		exit();
        	}
        	elseif (strpos($fullUrl, "signup=success") == true) {
        		echo "success!";
        		exit();
        	}*/

        	if (!isset($_GET['signup'])) {
        		exit();
        	} else {
        		$signupCheck = $_GET['signup'];

        		if ($signupCheck == "empty") {
        			echo "You did not fill in all fields!";
        			exit();
        		} 
        		elseif ($signupCheck == "char") {
        			echo "You used invalid chars!";
        			exit();
        		}
        		elseif ($signupCheck == "email") {
        			echo "You used invalid email!";
        			exit();
        		}
        		elseif ($signupCheck == "success") {
        			echo "success!";
        			exit();
        		}
        	} 


        ?>

    </body>
</html>