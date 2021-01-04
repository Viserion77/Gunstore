<html>
	<head>
		<title>
			GUNSTORE
		</title>
		<meta charset="utf-8"/>
		<link rel="icon" href="resources/images/x-icon.png" type="image/x-icon" />
		<link rel="stylesheet" type="text/css" href="resources/styles/own_index.css">
		<link rel="stylesheet" type="text/css" href="resources/styles/own_global.css">
		<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
		<script src="resources/js_index.js"></script>
	</head>
	<body>
		<div class=principal>
			<div class=banner>
				<div id=ajustqua>
					<div id=quadrologin>
					<?php
						session_start();
						
						if(isset($_SESSION['nome']) && $_SESSION['tipo'] == "ADMIN"){
							header("location:crud_demo.php");
						}else if(isset($_SESSION['nome'])){
							header("location:home.php");
						}else{
					?>
					<form method=POST action=login_valida.php id="formId">
						<b>LOGIN:</b><input required name=login class=inputr><br>
						<b>SENHA:</b><input required type=password name=senha class=inputr><br>
						<input type=submit value=ENTRAR id=enviar>
					</form>
					<?php
						}
					?>
					</div>
				</div>
			</div>
			<div class=menuhorizontal>
				<div class="lateral lateral1"></div>
				<div class=botoespri>
					<div id=nomecadrastro>
						<b>CADASTRE-SE</b>
					</div>
				</div>
				<div class="lateral lateral2"></div>
			</div>
			<div id=quadrocadastro>
				<div id=coisa>
					<form action='cadastro_post.php' method='POST'  id="formID" enctype='multipart/form-data' name="f1">
					
						<div class=bmwlegal>Login:</div>
						<div class=legalbmw>
							<input required name=login>
						</div><br style="clear: both;">
						
						<div class=bmwlegal>Nome:</div>
						<div class=legalbmw>
							<input required name=nome>
						</div><br style="clear: both;">
						
						<div class=bmwlegal>Senha:</div>
						<div class=legalbmw id=nada>
							<input id=inputerro style="border-color:initial;" required type=password name=senha>
						</div><br style="clear: both;">
						
						<div class=bmwlegal>Confirmar senha:</div>
						<div class=legalbmw id=nada>
							<input id=inputerro2 style="border-color:initial;" required type=password name=senha1>
						</div><br style="clear: both;">
						
						<div class=bmwlegal>Email:</div>
						<div class=legalbmw>
							<input required type=email name=email>
						</div><br style="clear: both;">
						
						<div class=bmwlegal>Foto:</div>
						<div class=legalbmw>
							<input type=file name=foto>
						</div><br style="clear: both;">
												
						<input type=submit value=CADRASTRAR id=enviar2 onClick="validarSenha()"><br style="clear: both;">
						<input type=reset value=LIMPAR id=enviar2>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>					