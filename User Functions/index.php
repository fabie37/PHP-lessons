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

    		function newCalc($c) {

    			$newnumb = $c * 0.75;
    			echo "Here is 75% of what you wrote: ".$newnumb."<br>";

    		}

    		$x = 95;
    		newCalc($x);

    		$a = 10;
    		newCalc($a);

    	?>

    </body>
</html>