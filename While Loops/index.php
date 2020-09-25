<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        
        <?php 
        
        	//While

        	$x = 1;

        	while ($x < 5) {
        		echo  $x."<br>";
        		$x++;
        	}

        	//Do While

        	$y = 10;

        	do {
        		echo  $y."<br>";
        		$y++;
        	} 
        	while  ($y < 15);


        	//For

        	for ($z = 0; $z <= 10; $z++) {
        		echo "Hi<br>";
        	}

        	//Foreach

        	$names = array("Fab","Alli","Dave");

        	foreach ($names as $name) {
        		echo "My name is ".$name."<br>";
        	}


        ?>
    </body>
</html>