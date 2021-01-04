<html>
	<head>
		<title>
			GUNSTORE
		</title>
		<meta charset="utf-8"/>
		<link rel="icon" href="resources/images/x-icon.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="resources/styles/own_crud_demo.css">
		<link rel="stylesheet" type="text/css" href="resources/styles/own_global.css">
	</head>
	<body>
		<div class=cabecalho title=cabeçalho>
			<div class=milcentoesetenta>
				<div class=usuario>
					<b>
						<?php

						session_start();
						if(isset($_SESSION['nome']) && $_SESSION['tipo'] == "ADMIN"){
							echo "<div class=saudacao><img width=15 height=15 src='assets/imagens/usuario/".$_SESSION['foto']."'>";
							echo " ADMIN ".$_SESSION['nome']."</div>";
							echo "<div class=logoff><a href='cadastro_form.php?id=".$_SESSION['id']."'>ALTERAR </a><a href='deslogar.php'> LOGOFF</a></div>"; 
						}else if(isset($_SESSION['nome'])){
							header("location:erro.php");
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
			<section id=sectionhtml5>
				<h1>
					<center><font color=white face=impact>CRUD DEMO</font></center>	
				</h1>
				<div class=table>
					<div class=tablename>
						Usuarios
					</div>
					<div class=javabuto>
						<a href="crud_demo/usuario/crud_demo_user.php">
							<div class=tableedit>
								VIEW
							</div>
						</a>
						<br style="clear: both;">
					</div>
					<br style="clear: both;">
				</div>
				<div class=table>
					<div class=tablename>
						Descrições
					</div>
					<div class=javabuto>
						<a href="crud_demo/descricao/crud_demo_descricao.php">
							<div class=tableedit>
								VIEW
							</div>
						</a>
						<br style="clear: both;">
					</div>
					<br style="clear: both;">
				</div>
				<div class=table>
					<div class=tablename>
						Produtos
					</div>
					<div class=javabuto>
						<a href="crud_demo/produto/crud_demo_produto.php">
							<div class=tableedit>
								VIEW
							</div>
						</a>
						<br style="clear: both;">
					</div>
					<br style="clear: both;">
				</div>
			</section>
		</div>
		<div id=rodape style="fixed:botton;">
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
					</table>
				</div>
				<br style="clear: both;">
			</div>
			</section>
		</div>
	</body>
</html>