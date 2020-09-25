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
        
    <form>

    	<input type="text" name="num1" placeholder="Number 1">
    	<input type="text" name="num2" placeholder="Number 2">
    	
    	<select name="operator">
    		<option>None</option>
    		<option>Add</option>
    		<option>Subtract</option>
    		<option>Multiply</option>
    		<option>Divide</option>
    	</select>
    	<br>
    	<button type="submit" name="submit" value="submit">Calculate</button>

    </form>

    <p>The answer is:</p>
    <?php 

    	if (isset($_GET['submit'])) {
    		$result1 = $_GET['num1'];
    		$result2 = $_GET['num2'];
    		$operator = $_GET['operator'];

    		switch ($operator) {
    				case 'None':
    					echo "Select a method";
    				break;

    				case "Add":
    					echo $result1 + $result2;
    				break;

    				case "Subtract":
    					echo $result1 - $result2;
    				break;

    				case "Multiply":
    					echo $result1 * $result2;
    				break;

    				case "Divide":
    					echo $result1 / $result2;
    				break;
    		}
    	}

    ?>


        <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
        <script>
            window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
            ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
        </script>
        <script src="https://www.google-analytics.com/analytics.js" async defer></script>
    </body>
</html>