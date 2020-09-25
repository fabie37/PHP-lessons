<?php
	session_start();
?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        
    </head>
    <body>

    	<ul>
    		<li><a href="index.php">HOME</a></li>
    		<li><a href="contact.php">CONTACT</a></li>
    	</ul>

    	<?php
    		$_SESSION['username'] = "Fabie37";
    		echo $_SESSION['username'];

    		if (!isset($_SESSION['username'])) {
    			echo "You are not logged in";
    		} else {
    			echo "You are logged in!";
    		}
    	?>
        
    </body>
</html>