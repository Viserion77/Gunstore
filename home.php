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
		<?php include 'components/header.php'; ?>
		<div class=principal>
			<div class=banner>
			</div>
			<?php include 'components/menu.php'; ?>
			<div class=nav>
				<div class=navbonitin></div>
				<div class=botoesleft>
					<?php
						$items = array("AIRSOFT", "ARMA DE FOGO", "ARMA DE PRESSÃO", "MATERIAL TATICO", "SOBRE");
						foreach ($items as $item) {
							echo "<a href='$item.php'>
									<div class=botipo2>
										$item
									</div>
								</a>";
						}
					?>
				</div>
				<div class=navbonitin2></div>
			</div>
			<div class=section>
				<?php
					include 'components/product.php';
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
						<?php
							$items = array("Espingarda", "Metralhadora", "Pistola", "Rifle", "Lança Granada", "Revolver");
							foreach ($items as $item) {
								echo "<a href='airsoft.php?#$item'>
										<li>
											$item
										</li>
									</a>";
							}
						?>
					</div>
					<div class=botipo2>
						<h3>
							ARMA DE FOGO
						</h3>
						<?php
							$items = array("Espingarda", "Metralhadora", "Pistola", "Rifle", "Lança Granada", "Revolver");
							foreach ($items as $item) {
								echo "<a href='arma_de_fogo.php?#$item'>
										<li>
											$item
										</li>
									</a>";
							}
						?>
					</div>
					<div class=botipo2>
						<h3>
							ARMA DE PRESSÃO
						</h3>
						<?php
							$items = array("Carabinas", "Gas Ram", "Mola", "Multipmp", "PCP", "Pistola");
							foreach ($items as $item) {
								echo "<a href='arma_de_pressao.php?#$item'>
										<li>
											$item
										</li>
									</a>";
							}
						?>
					</div>
					<div class=botipo2>
						<h3>
							MATERIAL TATICO
						</h3>
						<?php
							$items = array("Balacravas", "Bolsas Mochilas", "Chaveiros", "Cinto", "Coletes Capas");
							foreach ($items as $item) {
								echo "<a href='material_tatico.php?#$item'>
										<li>
											$item
										</li>
									</a>";
							}
						?>
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
		<?php include 'components/footer.php'; ?>
	</body>
</html>
