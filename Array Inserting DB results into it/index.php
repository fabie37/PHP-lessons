<?php
	include_once 'dbh.php'
?>

<!doctype html>
<html class="no-js" lang="">
    <head>

    </head>
    
    <body>
		<?php
			$sql    = "SELECT * FROM data";
			$result = mysqli_query($conn, $sql);
			$datas  = array();

			if (mysqli_num_rows($result) != 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					$datas[] = $row;
					echo $row['text']." ";
				}
			}

			//print_r($datas);

			echo "<br>";

			foreach ($datas[0] as $data) {
				echo $data." ";
			}

			echo "<br>";

			foreach ($datas as $data) {
				echo $data['text']." ";
			}
?>
    </body>
</html>