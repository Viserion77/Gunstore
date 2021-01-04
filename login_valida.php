<?php
	include ("conectar.php");
	$login= $_POST['login'];
	$senha= $_POST['senha'];

	$query = "SELECT * FROM usuario WHERE login='$login' AND senha='$senha'";
	
	echo "$query";
	
	$resultQuery = mysql_query($query);

if(mysql_num_rows($resultQuery) > 0 ){
		
		while($result = mysql_fetch_assoc($resultQuery)){
			$resultBanco[1] = $result['id'];
			$resultBanco[2] = utf8_encode($result['login']);
			$resultBanco[3] = utf8_encode($result['nome']);
			$resultBanco[4] = utf8_encode($result['senha']);
			$resultBanco[5] = utf8_encode($result['email']);
			$resultBanco[6] = $result['tipo'];
			$resultBanco[7] = $result['foto'];
		}
		session_start();
		$_SESSION['id'] = $resultBanco[1];
		$_SESSION['login'] = $resultBanco[2];
		$_SESSION['nome'] = $resultBanco[3];
		$_SESSION['senha'] = $resultBanco[4];
		$_SESSION['email'] = $resultBanco[5];
		$_SESSION['tipo'] = $resultBanco[6];
		if($resultBanco[7] != ""){
		$_SESSION['foto'] = $resultBanco[7];
		}else{
		$_SESSION['foto'] = "USER.jpg";
		}
		
		switch($resultBanco[6]){
			case "ADMIN":
				header("location:crud_demo.php");
				break;
			case "NORMAL":
				header("location:home.php");
				break;
			default:
				header("location:erro.php");
				break;
		}
	}else{
		header("location:erro.php?id=1");
	}
?>
