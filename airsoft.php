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
		<?php include 'components/header.php'; ?>
		<div class=principal>
			<div class=banner>
			</div>
			<?php include 'components/menu.php'; ?>
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
				<?php
					include 'components/product.php';
					$products = fetchProducts('airsoft', 'PISTOLA');
					displayProducts($products);
					
					$products = fetchProducts('airsoft', 'ESPINGARDA');
					displayProducts($products);
					
					$products = fetchProducts('airsoft', 'metralhadora');
					displayProducts($products);
					
					$products = fetchProducts('airsoft', 'rifle');
					displayProducts($products);
					
					$products = fetchProducts('airsoft', 'lanca granada');
					displayProducts($products);
					
					$products = fetchProducts('airsoft', 'Revolver');
					displayProducts($products);
					
					$products = fetchProducts('airsoft', '');
					displayProducts($products);
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
		<?php include 'components/footer.php'; ?>
	</body>
</html>
