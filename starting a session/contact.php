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
    		
    		echo $_SESSION['username'];
    	?>
        
    </body>
</html>