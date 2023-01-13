<?php

	$bd = "obras";
	$user = "root";
	$pass = "";


	$conn = mysqli_connect("localhost",$user,$pass);
	$selectbd = mysqli_select_db($conn,$bd);

    //$conn = new PDO('mysql:host=localhost;dbname=obras', $user, $pass);

	/*if($conn){
		echo "conexão feita";
	}else{
		echo "conexão falhou";
	}
*/
?>