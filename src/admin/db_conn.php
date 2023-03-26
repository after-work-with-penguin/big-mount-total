<?php
    //header("Access-Control-Allow-Headers: X-Requested-With, X-Prototype-Version");
    
	$servername = "127.0.0.1";
	$username = "dst_user";
	$password = "dst_pw";
    $dbname = "dstdb";
    $dbport = 3306;

	$conn = mysqli_connect($servername, $username, $password, $dbname, $dbport);

	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
    }
?>