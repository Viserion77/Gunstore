<html>
	<head>
		<title>
			GUNSTORE
		</title>
		<meta charset="utf-8"/>
		<link rel="icon" href="resources/images/x-icon.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="resources/styles/own_home.css">
		<link rel="stylesheet" type="text/css" href="resources/styles/own_global.css">
		<script type="text/javascript" src="resources/js_home.js"></script>
		<style>
			* {margin: 0; padding: 0;}

			.trs {-webkit-transition:all ease-out 0.5s;
			 WIDTH: 100%;
				-moz-transition:all ease-out 0.5s;
				-o-transition:all ease-out 0.5s;
				-ms-transition:all ease-out 0.5s;
				transition:all ease-out 0.5s;}	
			#slider {position: relative; z-index: 1;}
			#slider a { position: absolute; top: 0; left: 0; opacity: 0;filter:alpha(opacity=0);}
			.ativo {opacity: 1!important; filter:alpha(opacity=100)!important;}
		</style>
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
					<a href="airsoft.php">
						<div class=botipo2>
							AIRSOFT
						</div>
					</a>
					<a href="arma_de_fogo.php">
						<div class=botipo2>
							ARMA DE FOGO
						</div>
					</a>
					<a href="arma_de_pressao.php">
						<div class=botipo2>
							ARMA DE PRESSÃO
						</div>
					</a>
					<a href="material_tatico.php">
						<div class=botipo2>
							MATERIAL TATICO
						</div>
					</a>
					<a href="sobre.php">
						<div class=botipo2>
							SOBRE
						</div>
					</a>
				</div>
				<div class=navbonitin2></div>
			</div>
			<div class=section>
				<?php
					include("conectar.php");
					$query = "select * from produto";
					$resultQuery = mysql_query($query);
					$contaid = 0;
					while($result = mysql_fetch_assoc($resultQuery)){
						$resultBanco[1] = $result['id'];	
						$contaid ++;
					}
					echo "<figure style='
    display: inline-block;
'><div id='slider'>";
					$ppk = 0;
					while($ppk <= 4){
						$escolhido = rand (1,$contaid);
						$sli = "select * from produto where id=$escolhido";
						$resultQuery = mysql_query($sli);
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
							echo "<a href='#' class='trs'>
									<div class=divproduto2 title=$resultBanco[3] ID=$resultBanco[3]>
										<div class=produtoimg2>
											<img src='assets/imagens/produto/$resultBanco[6]' class=cemporcento>
										</div>
										<div class=produtodesc2>
											<b>
												$resultBanco[3]
											</b><br>
											$estaaqui
											<br>
											Preço: R$ ".$resultBanco[5]."
										</div>
									</div><br style='clear: both;'>
								</a>";
						}
						$ppk ++;
					}
					echo "</div><figcaption></figcaption></figure><br style='clear: both;'><div id=mepediram>";
					$query = "select * from produto";
					$resultQuery = mysql_query($query);
					$contaid = 0;
					while($result = mysql_fetch_assoc($resultQuery)){
						$resultBanco[1] = $result['id'];	
						$contaid ++;
					}
					$ppk = 0;
					while($ppk <= 5){
						$escolhido = rand (1,$contaid);
						$sli = "select * from produto where id=$escolhido";
						$resultQuery = mysql_query($sli);
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
									<div class=divproduto title=$resultBanco[3] ID=$resultBanco[3]>
										<div class=produtoimg>
											<img src='assets/imagens/produto/$resultBanco[6]' class=cemporcento>
										</div>
										<div class=produtodesc>
											<b STYLE='MARGIN-TOP:-10PX;'>
												$resultBanco[3]
											</b><br>
											$estaaqui
											<br>
											Preço: R$ ".$resultBanco[5]."
										</div>
									</div>
								";
						}
						$ppk ++;
					}echo '</div>';
				?>
			</div>
			<div class=aside>
				<div class=asidebonitin></div>
					<div class=botipo2>
						<a href="airsoft.php">
							<H3>
								AIRSOFT
							</H3>
						</a>
							<ul>
								<a href="airsoft.php?#Espingarda111">
									<li>
										Espingarda
									</li>
								</a>
								<a href="airsoft.php?#Metralhadora111">
									<li>
										Metralhadora
									</li>
								</a>
								<a href="airsoft.php?#Pistola111">
									<li>
										Pistola
									</li>
								</a>
								<a href="airsoft.php?#Rifle111">
									<li>
										Rifle
									</li>
								</a>
								<a href="airsoft.php?#LANCAGRANADA111">
									<li>
										Lança Granada
									</li>
								</a>
								<a href="airsoft.php?#revolver111">
									<li>
										Revolver
									</li>
								</a>
							</ul>
					</div>
					<div class=botipo2>
						<h3>
							ARMA DE FOGO
						</h3>
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
					</div>
					<div class=botipo2>
						<h3>
							ARMA DE PRESSÃO
						</h3>
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
					</div>
					<div class=botipo2>
						<h3>
							MATERIAL TATICO
						</h3>
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
					</div>
					<div class=botipo2>
						<h3>
							SOBRE
						</h3>
						<ul>
							<li>
								GUNSTORE
							</li>
							<li>
								FAQ-PT
							</li>
							<li>
								FAQ-EN
							</li>
							<li>
								Endereço
							</li>
							<li>
								Contato
							</li>
						</ul>
					</div>
				<div class=asidebonitin2></div>				
			</div>
			<br style="clear: both;">
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
										FAQ-PT
									</li>
									<li>
										FAQ-EN
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