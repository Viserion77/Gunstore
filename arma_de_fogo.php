<html>
	<head>
		<title>Arma de Fogo - GOLDGUNS</title>
		<meta charset="utf-8"/>
		<link rel="icon" href="resources/images/x-icon.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="resources/styles/own_arma_de_fogo.css">
		<link rel="stylesheet" type="text/css" href="resources/styles/own_global.css">
	</head>
	<body>
		<div class=cabecalho>
			<div class=milcentoesetenta>
				<div class=usuario>
					<b>
						<?php
						include("conectar.php");	
						session_start();
						if(isset($_SESSION['nome']) && $_SESSION['tipo'] == "ADMIN"){
							echo "<div class=saudacao><img width=15 height=15 src='assets/imagens/usuario/".$_SESSION['foto']."'>";
							echo " ADMIN ".$_SESSION['nome']."</div>";
							echo "<div class=logoff><a href='crud_demo.php' style='margin-right:25px;'>CRUD DEMO </a><a href='cadastro_form.php?id=".$_SESSION['id']."'>ALTERAR </a><a href='deslogar.php'> LOGOFF</a></div>"; 
						}else if(isset($_SESSION['nome'])){
							echo "<div class=saudacao><img width=25 height=25 src='assets/imagens/usuario/".$_SESSION['foto']."'>";
							echo " ".$_SESSION['nome']."</div>";
							echo "<div class=logoff><a href='cadastro_form.php?id=".$_SESSION['id']."'>ALTERAR </a><a href='deslogar.php'> LOGOFF</a></div>";
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
			<div class=nav>
				<div class=navbonitin></div>
				<div class=botoesleft>
					<a href= >
						<div class=botipo2>
							Espingarda
						</div>
					</a>
					<a href= >
						<div class=botipo2>
							Metralhadora
						</div>
					</a>
					<a href= >
						<div class=botipo2>
							Pistola
						</div>
					</a>
					<a href= >
						<div class=botipo2>
							Rifle
						</div>
					</a>
					<a href= >
						<div class=botipo2>
							Lança Granada
						</div>
					</a>
					<a href= >
						<div class=botipo2>
							Revolver
						</div>
					</a>
				</div>
				<div class=navbonitin2></div>
			</div>
			<div class=section>
			
					<?PHP
					$query = "select * from produto WHERE modelo='ARMA DE FOGO' AND tipo='ESPINGARDA'";
					$resultQuery = mysql_query($query);
					
					while($result = mysql_fetch_assoc($resultQuery)){
						$resultBanco[1] = $result['id'];
						$resultBanco[2] = utf8_encode($result['id_descricao']);
						
						
						$chamades = "select * from descricao WHERE id='$resultBanco[2]'";
						$resultdes = mysql_query($chamades);
						while($descricao = mysql_fetch_assoc($resultdes)){
							$estaaqui = $descricao['texto'];
						}
						
						
						$resultBanco[3] = utf8_encode($result['tipo']);
						$resultBanco[4] = utf8_encode($result['modelo']);
						$resultBanco[5] = utf8_encode($result['preco']);
						if(utf8_encode($result['foto']) != ""){
							$resultBanco[6] = utf8_encode($result['foto']);
						}else{
							$resultBanco[6] = "arma.jpg";
						}
						
							echo "
							<div class=divproduto title=Espingarda id=Espingarda>
								<div class=produtoimg>
									<img src='assets/imagens/produto/$resultBanco[6]' class=cemporcento>
								</div>
								<div class=produtodesc>
									<b STYLE='MARGIN-TOP:-10PX;'>
										$resultBanco[3]
									</b><br>
										$estaaqui
									<br>
									Preço: R$ $resultBanco[5]
								</div>
							</div>";
						
					}
					$query = "select * from produto WHERE modelo='ARMA DE FOGO' AND tipo='Revolver'";
					$resultQuery = mysql_query($query);
					
					while($result = mysql_fetch_assoc($resultQuery)){
						$resultBanco[1] = $result['id'];
						$resultBanco[2] = utf8_encode($result['id_descricao']);
						
						
						$chamades = "select * from descricao WHERE id='$resultBanco[2]'";
						$resultdes = mysql_query($chamades);
						while($descricao = mysql_fetch_assoc($resultdes)){
							$estaaqui = $descricao['texto'];
						}
						
						
						$resultBanco[3] = utf8_encode($result['tipo']);
						$resultBanco[4] = utf8_encode($result['modelo']);
						$resultBanco[5] = utf8_encode($result['preco']);
						if(utf8_encode($result['foto']) != ""){
							$resultBanco[6] = utf8_encode($result['foto']);
						}else{
							$resultBanco[6] = "arma.jpg";
						}
						
							echo "
							<div class=divproduto title=Revolver id=Revolver>
								<div class=produtoimg>
									<img src='assets/imagens/produto/$resultBanco[6]' class=cemporcento>
								</div>
								<div class=produtodesc>
									<b STYLE='MARGIN-TOP:-10PX;'>
										$resultBanco[3]
									</b><br>
										$estaaqui
									<br>
									Preço: R$ $resultBanco[5]
								</div>
							</div>";
						
					}
					$query = "select * from produto WHERE modelo='ARMA DE FOGO' AND tipo='LanCa Granada'";
					$resultQuery = mysql_query($query);
					
					while($result = mysql_fetch_assoc($resultQuery)){
						$resultBanco[1] = $result['id'];
						$resultBanco[2] = utf8_encode($result['id_descricao']);
						
						
						$chamades = "select * from descricao WHERE id='$resultBanco[2]'";
						$resultdes = mysql_query($chamades);
						while($descricao = mysql_fetch_assoc($resultdes)){
							$estaaqui = $descricao['texto'];
						}
						
						
						$resultBanco[3] = utf8_encode($result['tipo']);
						$resultBanco[4] = utf8_encode($result['modelo']);
						$resultBanco[5] = utf8_encode($result['preco']);
						if(utf8_encode($result['foto']) != ""){
							$resultBanco[6] = utf8_encode($result['foto']);
						}else{
							$resultBanco[6] = "arma.jpg";
						}
						
							echo "
							<div class=divproduto title='Lança Granada' id='Lança Granada'>
								<div class=produtoimg>
									<img src='assets/imagens/produto/$resultBanco[6]' class=cemporcento>
								</div>
								<div class=produtodesc>
									<b STYLE='MARGIN-TOP:-10PX;'>
										$resultBanco[3]
									</b><br>
										$estaaqui
									<br>
									Preço: R$ $resultBanco[5]
								</div>
							</div>";
						
					}
					$query = "select * from produto WHERE modelo='ARMA DE FOGO' AND tipo='Rifle'";
					$resultQuery = mysql_query($query);
					
					while($result = mysql_fetch_assoc($resultQuery)){
						$resultBanco[1] = $result['id'];
						$resultBanco[2] = utf8_encode($result['id_descricao']);
						
						
						$chamades = "select * from descricao WHERE id='$resultBanco[2]'";
						$resultdes = mysql_query($chamades);
						while($descricao = mysql_fetch_assoc($resultdes)){
							$estaaqui = $descricao['texto'];
						}
						
						
						$resultBanco[3] = utf8_encode($result['tipo']);
						$resultBanco[4] = utf8_encode($result['modelo']);
						$resultBanco[5] = utf8_encode($result['preco']);
						if(utf8_encode($result['foto']) != ""){
							$resultBanco[6] = utf8_encode($result['foto']);
						}else{
							$resultBanco[6] = "arma.jpg";
						}
						
							echo "
							<div class=divproduto title=Rifle id=Rifle>
								<div class=produtoimg>
									<img src='assets/imagens/produto/$resultBanco[6]' class=cemporcento>
								</div>
								<div class=produtodesc>
									<b STYLE='MARGIN-TOP:-10PX;'>
										$resultBanco[3]
									</b><br>
										$estaaqui
									<br>
									Preço: R$ $resultBanco[5]
								</div>
							</div>";
						
					}
					$query = "select * from produto WHERE modelo='ARMA DE FOGO' AND tipo='Pistola'";
					$resultQuery = mysql_query($query);
					
					while($result = mysql_fetch_assoc($resultQuery)){
						$resultBanco[1] = $result['id'];
						$resultBanco[2] = utf8_encode($result['id_descricao']);
						
						
						$chamades = "select * from descricao WHERE id='$resultBanco[2]'";
						$resultdes = mysql_query($chamades);
						while($descricao = mysql_fetch_assoc($resultdes)){
							$estaaqui = $descricao['texto'];
						}
						
						
						$resultBanco[3] = utf8_encode($result['tipo']);
						$resultBanco[4] = utf8_encode($result['modelo']);
						$resultBanco[5] = utf8_encode($result['preco']);
						if(utf8_encode($result['foto']) != ""){
							$resultBanco[6] = utf8_encode($result['foto']);
						}else{
							$resultBanco[6] = "arma.jpg";
						}
						
							echo "
							<div class=divproduto title=Pistola id=Pistola>
								<div class=produtoimg>
									<img src='assets/imagens/produto/$resultBanco[6]' class=cemporcento>
								</div>
								<div class=produtodesc>
									<b STYLE='MARGIN-TOP:-10PX;'>
										$resultBanco[3]
									</b><br>
										$estaaqui
									<br>
									Preço: R$ $resultBanco[5]
								</div>
							</div>";
						
					}
					$query = "select * from produto WHERE modelo='ARMA DE FOGO' AND tipo='Metralhadora'";
					$resultQuery = mysql_query($query);
					
					while($result = mysql_fetch_assoc($resultQuery)){
						$resultBanco[1] = $result['id'];
						$resultBanco[2] = utf8_encode($result['id_descricao']);
						
						
						$chamades = "select * from descricao WHERE id='$resultBanco[2]'";
						$resultdes = mysql_query($chamades);
						while($descricao = mysql_fetch_assoc($resultdes)){
							$estaaqui = $descricao['texto'];
						}
						
						
						$resultBanco[3] = utf8_encode($result['tipo']);
						$resultBanco[4] = utf8_encode($result['modelo']);
						$resultBanco[5] = utf8_encode($result['preco']);
						if(utf8_encode($result['foto']) != ""){
							$resultBanco[6] = utf8_encode($result['foto']);
						}else{
							$resultBanco[6] = "arma.jpg";
						}
						
							echo "
							<div class=divproduto title=Metralhadora id=Metralhadora>
								<div class=produtoimg>
									<img src='assets/imagens/produto/$resultBanco[6]' class=cemporcento>
								</div>
								<div class=produtodesc>
									<b STYLE='MARGIN-TOP:-10PX;'>
										$resultBanco[3]
									</b><br>
										$estaaqui
									<br>
									Preço: R$ $resultBanco[5]
								</div>
							</div>";
						
					}
					?>
				
				<br style="clear: both;">
			</div>
			<div class=aside>
				<div class=asidebonitin></div>
				<div class=botipo2>
					<h3>
						ARMA DE FOGO
					</h3>
					<p>
						bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla 
					</p>
				</div>
				<div class=asidebonitin2></div>				
			</div>
			<br style="clear: both;">
		</div>
		<div class=rodape>
			<h3>GOLDGUNS</h3>
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
										GOLDGUNS
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
	</html>