<html>
	<head>
		<title>
			Airsoft - GUNSTORE
		</title>
		<meta charset="utf-8"/>
		<link rel="icon" href="resources/images/x-icon.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="resources/styles/own_airsoft.css">
		<link rel="stylesheet" type="text/css" href="resources/styles/own_global.css">
		
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
					<a href="#Espingarda" >
						<div class=botipo2>
							Espingarda
						</div>
					</a>
					<a href="#Metralhadora" >
						<div class=botipo2>
							Metralhadora
						</div>
					</a>
					<a href="#Pistola" >
						<div class=botipo2>
							Pistola
						</div>
					</a>
					<a href="#Rifle" >
						<div class=botipo2>
							Rifle
						</div>
					</a>
					<a href="#Lança Granada" >
						<div class=botipo2>
							Lança Granada
						</div>
					</a>
					<a href="#revolver" >
						<div class=botipo2>
							Revolver
						</div>
					</a>
				</div>
				<div class=navbonitin2></div>
			</div>
			<div class=section>
				<div class=nomedapag>
					<h1>
						AIRSOFT
					</h1>
				</div>
				<?PHP
				
					include("conectar.php");
					$query = "select * from produto WHERE modelo='airsoft' AND tipo='PISTOLA'";
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
							<div class=divproduto title=Pistola ID=Pistola>
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
					
					$query = "select * from produto WHERE modelo='airsoft' AND tipo='ESPINGARDA'";
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
					
					$query = "select * from produto WHERE modelo='airsoft' AND tipo='metralhadora'";
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
					
					$query = "select * from produto WHERE modelo='airsoft' AND tipo='rifle'";
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
							<div class=divproduto title=Rifle ID=Rifle>
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
					
					$query = "select * from produto WHERE modelo='airsoft' AND tipo='lanca granada'";
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
							<div class=divproduto title='Lança Granada' ID='Lança Granada'>
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
					
					$query = "select * from produto WHERE modelo='airsoft' AND tipo='Revolver'";
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
							<div class=divproduto title=Revolver id=revolver> 
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
					
					
					$query = "select * from produto WHERE modelo='airsoft'";
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
						
						if($resultBanco[3] != 'PISTOLA' and $resultBanco[3] != 'ESPINGARDA' and $resultBanco[3] != 'METRALHADORA' and $resultBanco[3] != 'REVOLVER' and $resultBanco[3] != 'RIFLE' and $resultBanco[3] != 'LANCA GRANADA'){
							echo "
							<div class=divproduto> 
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
					}
				?>
				<br style="clear: both;">
			</div>
			<div class=aside>
				<div class=asidebonitin></div>
				<div class=botipo2>
					<h3>
						AIRSOFT
					</h3>
					<p>
						O Airsoft é um esporte de ação que simula situações de combate.
						Para isso utiliza armas de de pressão que disparam bolinhas de plástico (bbs) de 6 mm de diâmetro. 
						As bbs são rígidas e sem tinta, por isso a honra dos jogadores é fundamental para o desenvolvimento do esporte,
						já que ele deverá acusar que foi atingido e sair do jogo. 
						No Brasil o airsoft é regulamentado pelo Exército Brasileiro e a ponta laranja é exigida em todos os equipamentos.
						<br>
						As armas são réplicas externas de armas de fogo reais, porém, seu mecanismo interno em nada se assemelha com as mesmas, 
						sendo impossível qualquer conversão das armas de airsoft para o uso com munição real.
						<br>
						O airsoft é um jogo cujo pilar principal é a HONRA dos jogadores. Assim, quando um jogador for atingido,
						imediatamente ele acusa o acerto e sai do jogo. A honestidade dos jogadores é então,
						fundamental para o desenrolar do esporte e sua popularização pelo mundo. Sem ela, o airsoft não sobrevive.
					</p>
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
									<a href="airsoft.php#Espingarda">Espingarda</a>
									</li>
									<li>
										<a href="airsoft.php#Metralhadora">Metralhadora</a>
									</li>
									<li>
										<a href="airsoft.php#Pistola">Pistola</a>
									</li>
									<li>
										<a href="airsoft.php#Rifle">Rifle</a>
									</li>
									<li>
										<a href="airsoft.php#Lança Granada">Lança Granada</a>
									</li>
									<li>
										<a href="airsoft.php#Revolver">Revolver</a>
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
										<a href="arma_de_fogo.php#Espingarda">Espingarda</a>
									</li>
									<li>
										<a href="arma_de_fogo.php#Metralhadora">Metralhadora</a>
									</li>
									<li>
										<a href="arma_de_fogo.php#Pistola">Pistola</a>
									</li>
									<li>
										<a href="arma_de_fogo.php#Rifle">Rifle</a>
									</li>
									<li>
										<a href="arma_de_fogo.php#Lança Granada">Lança Granada</a>
									</li>
									<li>
										<a href="arma_de_fogo.php#Revolver">Revolver</a>
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
										<a href="arma_de_pressao.php#Carabinas">carabinas</a>
									</li>
									<li>
										<a href="arma_de_pressao.php#Gas Ram">Gas Ram</a>
									</li>
									<li>
										<a href="arma_de_pressao.php#Mola">Mola</a>
									</li>
									<li>
										<a href="arma_de_pressao.php#Multipmp">Multipmp</a>
									</li>
									<li>
										<a href="arma_de_pressao.php#PCP">PCP</a>
									</li>
									<li>
										<a href="arma_de_pressao.php#Pistola">Pistola</a>
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
										<a href="material_tatico.php#Balacravas">Balacravas</a>
									</li>
									<li>
										<a href="material_tatico.php#Bolsas Mochilas">Bolsas Mochilas</a>
									</li>
									<li>
										<a href="material_tatico.php#Chaveiros">Chaveiros</a>
									</li>
									<li>
										<a href="material_tatico.php#Cinto">Cinto</a>
									</li>
									<li>
										<a href="material_tatico.php#Coletes Capas">Coletes Capas</a>
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
										<a href="sobre.php">GUNSTORE</a>
									</li>
									<li>
										<a href="sobre.php">Endereço</a>
									</li>
									<li>
										<a href="sobre.php">Contato</a>
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