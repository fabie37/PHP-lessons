<!doctype html>
<html class="no-js" lang="">
    <head>

        <title></title>

    </head>
    <body>

    	<?php

    		/*Indexed
    		$data = array("Fab", "Dave", "Alli");
    		echo $data[0];

    		//Associative
    		$data = array("first" => "Fabrizio", "last" => "Catinella", "age" => "18");

    		//Multidimensional
    		$data = array(array("fab","cat"), "alli", "camp") */

    		/*1 Associative

    		$data2["first"] = "Alli";
    		$data2["last"] = "camp";
    		$data2["age"] = "18";

    		$data = array(
    				"first" => array("Fab","Gian"), 
    				"last" => "Catinella", 
    				"age" => 18);

    		echo $data['first'][1]."<br>";
    		print_r($data); */

    		//Multi di
    		$data = array(
    			array(1,2,3), 
    			"john", 
    			"jane"
    		);

    		//print_r($data);
    		echo $data[0][1];

    	?>

    </body>
</html>  