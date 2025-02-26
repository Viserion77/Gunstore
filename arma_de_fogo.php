<html>
	<head>
		<title>Arma de Fogo - GOLDGUNS</title>
		<meta charset="utf-8"/>
		<link rel="icon" href="resources/images/x-icon.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="resources/styles/own_arma_de_fogo.css">
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
					<?php
						$items = array("Espingarda", "Metralhadora", "Pistola", "Rifle", "Lança Granada", "Revolver");
						foreach ($items as $item) {
							echo "<a href='#$item' >
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
					$products = fetchProducts('ARMA DE FOGO', 'ESPINGARDA');
					displayProducts($products);
					
					$products = fetchProducts('ARMA DE FOGO', 'Revolver');
					displayProducts($products);
					
					$products = fetchProducts('ARMA DE FOGO', 'LanCa Granada');
					displayProducts($products);
					
					$products = fetchProducts('ARMA DE FOGO', 'Rifle');
					displayProducts($products);
					
					$products = fetchProducts('ARMA DE FOGO', 'Pistola');
					displayProducts($products);
					
					$products = fetchProducts('ARMA DE FOGO', 'Metralhadora');
					displayProducts($products);
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
		<?php include 'components/footer.php'; ?>
	</body>
</html>
