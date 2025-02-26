<html>
	<head>
		<title>Material Tatico - GOLDGUNS</title>
		<meta charset="utf-8"/>
		<link rel="icon" href="resources/images/x-icon.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="resources/styles/own_material_tatico.css">
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
					<a href= >
						<div class=botipo2>
							Balacravas
						</div>
					</a>
					<a href= >
						<div class=botipo2>
							Bolsas Mochilas
						</div>
					</a>
					<a href= >
						<div class=botipo2>
							Chaveiros
						</div>
					</a>
					<a href= >
						<div class=botipo2>
							Cinto
						</div>
					</a>
					<a href= >
						<div class=botipo2>
							Coletes Capas
						</div>
					</a>
				</div>
				<div class=navbonitin2></div>
			</div>
			<div class=section>
				<?php
					include 'components/product.php';
					$products = fetchProducts('MATIRIAL TATICO', 'CINTO');
					displayProducts($products);
					
					$products = fetchProducts('MATIRIAL TATICO', 'CHAVEIROS');
					displayProducts($products);
					
					$products = fetchProducts('MATIRIAL TATICO', 'BOLSAS MOCHILAS');
					displayProducts($products);
					
					$products = fetchProducts('MATIRIAL TATICO', 'COLETES CAPAS');
					displayProducts($products);
					
					$products = fetchProducts('MATIRIAL TATICO', 'BALACRAVAS');
					displayProducts($products);
				?>
				<br style="clear: both;">
			</div>
			<div class=aside>
				<div class=asidebonitin></div>
				<div class=botipo2>
					<h3>
						MATERIAL TATICO
					</h3>
					<p>
						bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla 
					</p>
				</div>
				<div class=asidebonitin2></div>				
			</div>
			<br style="clear: both;">
		</div>
		<?php include 'components/footer.php'; ?>
	</body>
</html>
