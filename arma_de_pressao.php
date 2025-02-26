<html>
	<head>
		<title>Arma de Pressão - GOLDGUNS</title>
		<meta charset="utf-8"/>
		<link rel="icon" href="resources/images/x-icon.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="resources/styles/own_arma_de_precao.css">
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
						$items = array("Carabinas", "Gas Ram", "Mola", "Multipmp", "PCP", "Pistola");
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
					$products = fetchProducts('arma de pressao', 'Carabinas');
					displayProducts($products);
					
					$products = fetchProducts('arma de pressao', 'Gas Ram');
					displayProducts($products);
					
					$products = fetchProducts('arma de pressao', 'Mola');
					displayProducts($products);
					
					$products = fetchProducts('arma de pressao', 'Multipmp');
					displayProducts($products);
					
					$products = fetchProducts('arma de pressao', 'PCP');
					displayProducts($products);
					
					$products = fetchProducts('arma de pressao', 'Pistola');
					displayProducts($products);
				?>
				<br style="clear: both;">
			</div>
			<div class=aside>
				<div class=asidebonitin></div>
				<div class=botipo2>
					<h3>
						ARMA DE PRESSÃO
					</h3>
					<p>
						bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla 
						bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla 
						bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla 
						bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla bla 
						bla bla bla bla bla bla 
					</p>
				</div>
				<div class=asidebonitin2></div>				
			</div>
			<br style="clear: both;">
		</div>
		<?php include 'components/footer.php'; ?>
	</body>
</html>
