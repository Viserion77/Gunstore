<html>
	<head>
		<title>GOLDGUNS</title>
		<meta charset="utf-8"/>
		<link rel="icon" href="resources/images/x-icon.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="resources/styles/own_sobre.css">
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
			<div class=banner></div>
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
					<div class=botipo2>
						<h3>
							Endereço
						</h3>
						<div id=divmapa>
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d221.00788673411458!2d-48.55892379098809!3d-27.58961714891156!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x952737f5f883c3d5%3A0x89e362241cf001af!2sR.+Alm.+Lamego%2C+950+-+Centro%2C+Florian%C3%B3polis+-+SC%2C+88015-600!5e0!3m2!1spt-BR!2sbr!4v1470395675816" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
						<div id=divendereco>
							R. Alm. Lamego
							<br>
							Nº  950
							<br>
							Centro
							<br>
							Florianópolis
							<br>
							Santa Catrina
							<br>
							Brasil
							<br>
							<small>
								88015-600
							</small>
							<br>
							<small style=padding:5px;>
								<small>
									<small>
										<small>
											Endereço Fictisio
										</small>
									</small>
								</small>
							</small>
						</div>
					</div>
				</div>
				<div class=navbonitin2></div>
			</div>
			<div class=section>
				<div id=conteudosobre>
					<h1>
						GOLDGUNS
					</h1>
					<div id=maeteudo>
						<h3>
							Sobre a GOLDGUNS
						</h3>
						<div class="divfotindaloja floatr">
							<img src="resources/images/background.jpg" class=cemporcento>
						</div>
						<p>
							É UMA EMPRESA LEGAL Bla bla bla. Enche Linguiça, bla alb. Bla bla bla. Enche Linguiça, bla alb.
							Bla bla bla. Enche Linguiça, bla alb. Bla bla bla. Enche Linguiça, bla alb. 
							Bla bBla bla bla. Enche Linguiça, bla alb. Bla bla bla. Enche Linguiça, bla alb.
							Bla bla bla. Enche Linguiça, bla alb. Bla bla bla. Enche Linguiça, bla alb. 
							Bla bBla bla bla. Enche Linguiça, bla alb. Bla bla bla. Enche Linguiça, bla alb.
							Bla bla bla. Enche Linguiça, bla alb. Bla bla bla. Enche Linguiça, bla alb. 
							Bla bBla bla bla. Enche Linguiça, bla alb. Bla bla bla. Enche Linguiça, bla alb.
							Bla bla bla. Enche Linguiça, bla alb. Bla bla bla. Enche Linguiça, bla alb. 
							Bla bla bla. EnBla bla bla. Enche Linguiça, bla alb.
						</p>
						<br style="clear: both;">
					</div>
					<div class=filhoteudo>
						<h3>
							Sobre nossos prudutos
						</h3>
						<div class="divfotindaloja floatL">
							<img src="resources/images/background5.jpg" class=cemporcento>
						</div>
						<p>
							SAO PRODUTOS D OTIMA QUALIDADE Bla bla bla. Enche Linguiça, bla alb. Bla bla bla. Enche Linguiça, bla alb.
							Bla bla bla. Enche Linguiça, bla alb. Bla bla bla. Enche Linguiça, bla alb. 
							Bla bBla bla bla. Enche Linguiça, bla alb. Bla bla bla. Enche Linguiça, bla alb.
							Bla bla bla. Enche Linguiça, bla alb. Bla bla bla. Enche Linguiça, bla alb. 
							Bla bBla bla bla. Enche Linguiça, bla alb. Bla bla bla. Enche Linguiça, bla alb.
							Bla bla bla. Enche Linguiça, bla alb. Bla bla bla. Enche Linguiça, bla alb. 
							Bla bBla bla bla. Enche Linguiça, bla alb. Bla bla bla. Enche Linguiça, bla alb.
							Bla bla bla. Enche Linguiça, bla alb. Bla bla bla. Enche Linguiça, bla alb. 
							Bla bla bla. EnBla bla bla. Enche Linguiça, bla alb.
						</p>
						<br style="clear: both;">
					</div>
					<div class=filhoteudo>
						<h3>
							Sobre nossa loja
						</h3>
						<div class="divfotindaloja floatr">
							<img src="resources/images/background4.jpg" class=cemporcento>
						</div>
						<p>
							É UMA OTIMA LOJA PQ ELA É GRANDE E TEM ARMAS DENTRO E Bla bla bla. Enche Linguiça, bla alb. Bla bla bla. Enche Linguiça, bla alb.
							Bla bla bla. Enche Linguiça, bla alb. Bla bla bla. Enche Linguiça, bla alb. 
							Bla bBla bla bla. Enche Linguiça, bla alb. Bla bla bla. Enche Linguiça, bla alb.
							Bla bla bla. Enche Linguiça, bla alb. Bla bla bla. Enche Linguiça, bla alb. 
							Bla bBla bla bla. Enche Linguiça, bla alb. Bla bla bla. Enche Linguiça, bla alb.
							Bla bla bla. Enche Linguiça, bla alb. Bla bla bla. Enche Linguiça, bla alb. 
							Bla bBla bla bla. Enche Linguiça, bla alb. Bla bla bla. Enche Linguiça, bla alb.
							Bla bla bla. Enche Linguiça, bla alb. Bla bla bla. Enche Linguiça, bla alb. 
							Bla bla bla. EnBla bla bla. Enche Linguiça, bla alb.
						</p>
						<br style="clear: both;">
					</div>
				</div>
			</div>
			<div class=aside>
				<div class=asidebonitin></div>
				<div id=botipo3>
					<div id=diccontato>
						<a href=faq_pt.php><h3>
							FAQ-PT
						</h3></a>
						<a href=faq_en.php><h3>
							FAQ-EN
						</h3></a>
						<br>
						<h3>
							Contato
						</h3>
						<b>
							Fones: 
						</b>
						<br>
						<small>
							(55 11) 1111-1111
						</small>
						<br>
						<small>
							(55 22) 2222-2222
						</small>
						<br>
						<small>
							(55 33) 3333-3333
						</small>
						<br>
						<br>
						<b>
							Email Para Contato:
						</b>
						<br>
						<small>
							goldgunscontato@dominio.hue
						</small>
						<br>
						<b>
							Email Para Reserva: 
						</b>
						<br>
						<small>
							goldgunsreserva@dominio.hue
						</small>
						<br>
						<b>
							Email Para Reclamações: 
						</b>
						<br>
						<small>
							naoadiantareclamar@dominio.he3
						</small>
					</div>
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