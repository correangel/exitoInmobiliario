<?php 

	//$db = mysqli_connect('localhost', '55eabdbec82b', '55eabdbec82bconcepth', 'ExitoBD'); //---- DB Beta ----
	$db = mysqli_connect('localhost', 'root', 'root', 'ExitoBD');
	if(mysqli_connect_errno())
	{
		echo 'Failed to connect to MySQL: '.mysqli_connect_error();
	}

 ?>