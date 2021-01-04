<?php
	include("conectar.php");
	
	ini_set( 'display_errors' , 'On' );
	error_reporting( E_ALL | E_STRICT ); 
	
	// Recupera os dados dos campos
	
	$id    = (isset($_POST['id']) ? $_POST['id'] : "");
	$login = $_POST['login'];
	$nome = $_POST['nome'];
	$senha = $_POST['senha'];
	$email = $_POST['email'];
	$foto = $_FILES['foto'];
	
	$error = false;
	
	// Se a foto estiver sido selecionada
	if (!empty($foto["name"])) {
		// Verifica se o arquivo é uma imagem
		if( !preg_match( '/^image\/(jpeg|jpeg|png|gif|bmp)$/' , $foto[ 'type' ] ) ){
			//Isso não é uma imagem.
			$error = true;
		} 
		// Se não houver nenhum erro
		if (!$error) {
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
			// Gera um nome único para a imagem
			$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
			// Caminho de onde ficará a imagem
			$caminho_imagem = "assets/imagens/usuario/" . $nome_imagem;
			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($foto["tmp_name"], $caminho_imagem);
			// Insere os dados no banco
			if($id == ""){
				$query = "insert into usuario(login,nome,senha,email,foto,tipo) values('$login','$nome','$senha','$email','$nome_imagem','NORMAL')";
				}else{
				$query = "update usuario set login='$login',nome='$nome',senha='$senha',email='$email',foto='$nome_imagem' where id=$id";
			}
		}
		}else{
		if($id == ""){
			$query = "insert into usuario(login,nome,senha,email,tipo) values('$login','$nome','$senha','$email','NORMAL')";
			}else{
			$query = "update usuario set login='$login',nome='$nome',senha='$senha',email='$email' where id=$id";
		}
	}
	mysql_query($query);
	// Se os dados forem inseridos com sucesso
	
	session_start();
	session_destroy();
	
	$login = $_POST['login'];
	$senha = $_POST['senha'];
	$query = "SELECT * FROM usuario WHERE id=$id";
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
		header("location:cadastro_form.php?id=".$_SESSION['id']);
	}else{
		echo "1";
		//header("location:erro.php?");
	}
?>