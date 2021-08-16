<?php
	$conn = mysqli_connect("localhost", "habwikuzo", "Habwa@12");

	if ($conn){
		echo "connected successful!";
	}
	else{
		echo "connection error";
	}

	$sql = 'SELECT * FROM dropout form';
	$result = mysqli_query($conn, $sql);

	print_r($result)
?>