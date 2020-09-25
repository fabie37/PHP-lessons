<?php

	$name     = "localhost";
	$uid      = "root";
	$pwd      = "";
	$database = "arraytest";

	$conn = mysqli_connect($name, $uid, $pwd, $database);

	if (!$conn) {
		die("Connection failed: ".mysqli_connect_error());
	}

