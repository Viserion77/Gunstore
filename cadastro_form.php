<?php
include("conectar.php");
if(isset($_GET['id'])){
$query = "select * from usuario where id=".$_GET['id'];

$resultQuery = mysql_query($query);
while($result = mysql_fetch_assoc($resultQuery)){
	$resultBanco[1] = $result['id'];
	$resultBanco[2] = utf8_encode($result['login']);
	$resultBanco[3] = utf8_encode($result['nome']);
	$resultBanco[4] = utf8_encode($result['senha']);
	$resultBanco[5] = utf8_encode($result['email']);
	$resultBanco[6] = utf8_encode($result['tipo']);
	$resultBanco[7] = utf8_encode($result['foto']);
}
$id = $resultBanco[1];
$login = utf8_decode($resultBanco[2]);
$nome = utf8_decode($resultBanco[3]);
$senha = utf8_decode($resultBanco[4]);
$email = utf8_decode($resultBanco[5]);
$tipo = utf8_decode($resultBanco[6]);
$foto = utf8_decode($resultBanco[7]);
$titulo = "ALTERANDO";
$titulo2 = "ALTERAR";
}else{
$id = "";
$login = "";
$nome = "";
$senha = "";
$email = "";
$tipo = "";
$foto = "";
$titulo = "CADASTRANDO";
$titulo2 = "CADASTRAR";
}

?>
<html>
	<head>
		<title>
			GUNSTORE
		</title>
		<meta charset="utf-8"/>
		<link rel="icon" href="resources/images/x-icon.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="resources/styles/own_index.css">
		<link rel="stylesheet" type="text/css" href="resources/styles/own_global.css">
		<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="resources/js_index.js"></script>
	</head>
	<body>
		<div class=cabecalho>
			<div class=milcentoesetenta>
				<div class=usuario>
					<b>
						<?php

						session_start();
						if(isset($_SESSION['nome']) && $_SESSION['tipo'] == "ADMIN"){
							echo "<div class=saudacao><img width=15 height=15 src='assets/imagens/usuario/".$_SESSION['foto']."'>";
							echo " ADMIN ".$_SESSION['nome']."</div>";
							echo "<div class=logoff><a href='crud_demo.php' style='margin-right:25px;'>CRUD DEMO </a><a href='deslogar.php'> LOGOFF</a></div>"; 
						}else if(isset($_SESSION['nome'])){
							echo "<div class=saudacao><img width=25 height=25 src='assets/imagens/usuario/".$_SESSION['foto']."'>";
							echo " ".$_SESSION['nome']."</div>";
							echo "<div class=logoff><a href='deslogar.php'> LOGOFF</a></div>";
						}else{
							header("location:erro.php");
							exit();
						}

						?>
					</b>
				</div>
			</div>
		</div>
		<div class=principal>
			<div class=banner>
				<div id=ajustqua>
					<div id=quadrologindois>
					<?php
						if(isset($_SESSION['nome'])){
							echo "<img width=55 height=55 src='assets/imagens/usuario/".$_SESSION['foto']."'><br>";
							echo "Nome: <b>".$_SESSION['nome']."</b><br>";
							echo "Login: <b>".$_SESSION['login']."</b><br>";
							echo "E-mail: <b>".$_SESSION['email']."</b><br>";
						}else{
							header("location:erro.php");
						}
					?>
					</div>
				</div>
			</div>
			<div class=menuhorizontal>
				<div class="lateral lateral1"></div>
				<div class=botoespri>
					<a href="home.php">
						<div class=botipo1>
							HOME
						</div>
					</a>
					<a href="airsoft.php">
						<div class=botipo1>
							AIRSOFT
						</div>
					</a>
					<a href="arma_de_fogo.php">
						<div class=botipo1>
							ARMA DE FOGO
						</div>
					</a>
					<a href="arma_de_pressao.php">
						<div class=botipo1>
							ARMA DE PRESSÃO
						</div>
					</a>
					<a href="material_tatico.php">
						<div class=botipo1>
							MATERIAL TATICO
						</div>
					</a>
					<a href="sobre.php">
						<div class=botipo1>
							SOBRE
						</div>
					</a>
				</div>
				<div class="lateral lateral2"></div>
			</div>
			<div id=quadrocadastro>
					<div id=nomecadrastro>
						<b>
						<?php
							echo $titulo;
						?>
						</b>
					</div>
				<div id=coisa>
					<form action='cadastro_up.php' method='post'  id="formID" enctype='multipart/form-data' name="f1">
						<div class=bmwlegal>ID:</div>
						<div class=legalbmw>
							<input name=id readonly value='<?php echo $id;?>'>
						</div><br style="clear: both;">
						
						<div class=bmwlegal>Login:</div>
						<div class=legalbmw>
							<input required name=login value='<?php echo $login;?>'>
						</div><br style="clear: both;">
						
						<div class=bmwlegal>Nome:</div>
						<div class=legalbmw>
							<input required name=nome value='<?php echo $nome;?>'>
						</div><br style="clear: both;">
						
						<div class=bmwlegal>Senha:</div>
						<div class=legalbmw id=nada>
							<input id=inputerro value='<?php echo $senha;?>' style="border-color:initial;" required type=password name=senha>
						</div><br style="clear: both;">
						
						<div class=bmwlegal>Confirmar senha:</div>
						<div class=legalbmw id=nada>
							<input id=inputerro2 style="border-color:initial;" required type=password name=senha1>
						</div><br style="clear: both;">
						
						<div class=bmwlegal>Email:</div>
						<div class=legalbmw>
							<input required type=email name=email value='<?php echo $email;?>'>
						</div><br style="clear: both;">
						
						<div class=bmwlegal>Foto:</div>
						<div class=legalbmw>
							<input type=file name=foto>
						</div><br style="clear: both;">
												
						<input type=submit value=<?php echo $titulo2;?> id=enviar2 onClick="validarSenha()"><br style="clear: both;">
					</form>
				</div>
			</div>
		</div>
		<div class=rodape>
			<h3>GUNSTORE</h3>
			<div class=contiudorodape>
				<div class=quadrotable>
					<table>
						<tr>
							<th>
								<a href="airsoft.php">
									Airsoft
								</a>
							</th>
						</tr>
						<tr>
							<td>
								<ul>
									<li>
										Espingarda
									</li>
									<li>
										Metralhadora
									</li>
									<li>
										Pistola
									</li>
									<li>
										Rifle
									</li>
									<li>
										Lança Granada
									</li>
									<li>
										Revolver
									</li>
								</ul>
							</td>
						</tr>
					</table>
				</div>
				<div class=quadrotable>
					<table>
						<tr>
							<th>
								<a href="arma_de_fogo.php">
									Arma de Fogo
								</a>
							</th>
						</tr>
						<tr>
							<td>
								<ul>
									<li>
										Espingarda
									</li>
									<li>
										Metralhadora
									</li>
									<li>
										Pistola
									</li>
									<li>
										Rifle
									</li>
									<li>
										Lança Granada
									</li>
									<li>
										Revolver
									</li>
								</ul>
							</td>
						</tr>
					</table>
				</div>
				<div class=quadrotable>
					<table>
						<tr>
							<th>
								<a href="arma_de_pressao.php">
									Arma de Pressão
								</a>
							</th>
						</tr>
						<tr>
							<td>
								<ul>
									<li>
										Carabinas
									</li>
									<li>
										Gas Ram
									</li>
									<li>
										Mola
									</li>
									<li>
										Multipmp
									</li>
									<li>
										PCP
									</li>
									<li>
										Pistola
									</li>
								</ul>
							</td>
						</tr>
					</table>
				</div>
				<div class=quadrotable>
					<table>
						<tr>
							<th>
								<a href="material_tatico.php">
									Material Tatico
								</a>
							</th>
						</tr>
						<tr>
							<td>
								<ul>
									<li>
										Balacravas
									</li>
									<li>
										Bolsas Mochilas
									</li>
									<li>
										Chaveiros
									</li>
									<li>
										Cinto
									</li>
									<li>
										Coletes Capas
									</li>
								</ul>
							</td>
						</tr>
					</table>
				</div>
				<div class=quadrotable>
					<table>
						<tr>
							<th>
								<a href="sobre.php">
									Sobre
								</a>
							</th>
						</tr>
						<tr>
							<td>
								<ul>
									<li>
										GUNSTORE
									</li>
									<li>
										Endereço
									</li>
									<li>
										Contato
									</li>
								</ul>
							</td>
						</tr>
					</table>
				</div>
				<br style="clear: both;">
			</div>
		</div>
	</body>
</html>					