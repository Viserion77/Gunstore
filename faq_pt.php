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
						FAQ-PT
					</h1>
					<div class=faqa1>
						<div class=faqpergunta
						onclick="document.getElementById('faq1').style.display='block'"
						>
							<h3><b>
								O airsoft é legalizado no brasil?
							</b></h3>
						</div>
						<div id=faq1 class=faqresposta
						id="usereditonclick" style="display:none"
						>
							Sim, o airsoft foi legalizado, e considerado arma de pressão, pela portaria-006 do d-log, expedida em 27 de novembro de 2007 e publicada em fevereiro desse mesmo ano pelo dfpc (diretoria de fiscalização de produtos controlados), do exército brasileiro. Hoje em dia, o comércio das armas de pressão é regulamentado pela portaria 02 do co-log de . A camuflagem airsoft é a primeira loja completamente legalizada em todo território nacional.
							<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq1').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						
						<div class=faqpergunta
						onclick="document.getElementById('faq2').style.display='block'"
						>
							<h3><b>
								O que é sfpc? E dfpc?
							</b></h3>
						</div>
						<div id=faq2 class=faqresposta
						id="usereditonclick" style="display:none"
						>
							Sfpc = setor de fiscalização de produtos controlados. São postos do exercito brasileiro responsáveis pelo controle regional dos produtos controlados pelo exército como armas, munições, explosivos, produtos químicos e, também, do airsoft. Em tese, toda grande cidade tem o seu escritório do sfpc.
							<br>
							<br>
							Dfpc = diretoria de fiscalização de produtos controlados. É órgão central que regula todas as atividades dos sfpcs, sediado no quartel general do exército, em brasília. É responsável, também, pelas expedições de autorização de importação e pelas regulamentações a respeito dos produtos controlados.
							<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq2').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						
						<div class=faqpergunta
						onclick="document.getElementById('faq3').style.display='block'"
						>
							<h3><b>
								Eu preciso ter cr (certificado de registro) para comprar?
							</b></h3>
						</div>
						<div id=faq3 class=faqresposta
						id="usereditonclick" style="display:none"
						>
							De acordo com a portaria-02, o cr é necessário apenas para comprar armas de pressão por ação de gás. Para as armas elétricas ou manuais (por ação de mola), os compradores devem apenas comprovar maioridade (18 anos) no ato da compra e enviar rg, cpf e comprovante de residência.
							<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq3').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						
						<div class=faqpergunta
						onclick="document.getElementById('faq4').style.display='block'"
						>
							<h3><b>
								As armas precisam de registro no sigma, ou no sinarm?
							</b></h3>
						</div>
						<div id=faq4 class=faqresposta
						id="usereditonclick" style="display:none"
						>
							De acordo com o r-105, as armas de pressão (inclusive as de airsoft) não necessitam de registro, porém a loja fica responsável por fazer o controle de saída das armas, registrando cada número de série ao seu comprador em um arquivo físico.
							<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq4').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						
						<div class=faqpergunta
						onclick="document.getElementById('faq5').style.display='block'"
						>
							<h3><b>
								Tenho que ser maior de 18 anos para comprar no site?
							</b></h3>
						</div>
						<div id=faq5 class=faqresposta
						id="usereditonclick" style="display:none"
						>
							Você deve ser maior de 18 anos para comprar os produtos dos menus relacionado às armas de pressão e airsoft! Porém, produtos como uniformes, botas, acessórios, facas, etc podem ser comprados por qualquer usuário cadastrado. Os envios das armas de pressão só serão liberados após envio de cópias autenticadas do rg e cpf e comprovante de endereço, pelos correios ou via e-mail.
							<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq5').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						<div class=faqpergunta
						onclick="document.getElementById('faq6').style.display='block'"
						>
							<h3><b>
							O que significa hop up?
							</b></h3>
						</div>
						<div id=faq6 class=faqresposta
						id="usereditonclick" style="display:none"
						>
						
						Hop-up é um sistema desenvolvido no japão que consiste em uma pequena borracha no interior do sistema da arma que provoca uma rotação na bb durante o disparo. Dessa forma, a bb sofre menos ação da resistência do ar, atingindo uma melhor precisão e alcance! Em todos os modelos vendidos neste site o hop-up está presente e além disso é regulável, podendo compensar mais ou menos a ação do vento!
						
						<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq6').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						<div class=faqpergunta
						onclick="document.getElementById('faq7').style.display='block'"
						>
							<h3><b>
							O que significam os termos gbb, springer, aeg, aep?
							</b></h3>
						</div>
						<div id=faq7 class=faqresposta
						id="usereditonclick" style="display:none"
						>
						
						Gbb = gás blowback à é uma denominação para armas a gás (geralmente pistolas) que possuem o sistema blowback. Blowback é o sistema das armas de ação dupla (semi-automáticas) a cada tiro o trilho da arma recua com a expansão do gás já deixando-a pronta para o próximo tiro. Essas armas produzem um ?Tranco? Característico que proporciona uma ótima sensação de tiro! Springer são armas de mola, funcionam por repetição, ou seja, devem ser armadas manualmente a cada disparo. Têm a vantagem de serem econômicas por não necessitarem de gás para seu funcionamento. São, normalmente pistolas, rifles sniper e escopetas.
						<br>
						<br>
						Aeg = airsoft eletric gun à são os rifles e metralhadoras elétricos, que funcionam através de um motor elétrico acoplado ao pistão de ar. São armas automáticas que disparam vários tiros por minuto. Funcionam com uma bateria que pode ser recarregada na tomada normalmente.
						<br>
						<br>
						Aep = airsoft eletric pistol à são as pistolas elétricas. Possuem o funcionamento misto entre as aegs e as gbb. Tem sistema blowback, porém este não produz o tranco que as armas a gás produzem. Quem procura realismo muitas vezes não opta por uma aep, pois o carregador dessas armas é bastante reduzido em seu tamanho para que haja espaço para a bateria, que é instalada no "grip" da arma e além disso, na maioria dos modelos um incômodo zumbido de motor elétrico é ouvido a cada disparo.
					
					
						<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq7').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						<div class=faqpergunta
						onclick="document.getElementById('faq8').style.display='block'"
						>
							<h3><b>
							O que vem na caixa das armas?
							</b></h3>
						</div>
						<div id=faq8 class=faqresposta
						id="usereditonclick" style="display:none"
						>
						Depende de cada modelo e fabricante. Leia com atenção as descrições do produto para saber quais items acompanham sua airsoft.
							
						
						<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq8').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						<div class=faqpergunta
						onclick="document.getElementById('faq9').style.display='block'"
						>
							<h3><b>
							Posso andar com essas armas na rua?
							</b></h3>
						</div>
						<div id=faq9 class=faqresposta
						id="usereditonclick" style="display:none"
						>
						
						O transporte ostensivo é proibido pela portaria 02, além de ser extremamente perigoso. Para transportar sua airsoft para os jogos ou treinos, a arma deve estar sempre na caixa, em um case ou em uma mochila, (jamais transporte na cintura, nem muito menos à mostra!). É importante comentar que existem casos na literatura policial pelo mundo afora de pessoas que foram mortas por policiais enquanto portavam armas de airsoft! Na maioria desses casos o policial que atirou jamais foi considerado culpado pelo engano, é entendido que ele estava cumprindo seu dever quando considerou um risco para ele e para as pessoas na rua aquele cidadão correndo pela rua com a arma na mão.
						
						<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq9').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						<div class=faqpergunta
						onclick="document.getElementById('faq10').style.display='block'"
						>
							<h3><b>
							E se eu for parado em uma blitz, o que eu faço?
							</b></h3>
						</div>
						<div id=faq10 class=faqresposta
						id="usereditonclick" style="display:none"
						>
						
						Esteja sempre acompanhado da nota fiscal! A nota fiscal é o único documento que comprova a legalidade da arma! Aí, outros documentos, como uma cópia da portaria-02 (que pode ser encontrada em nosso site), também serão muito úteis no caso de uma abordagem policial, blitz, ou coisas do tipo. A guia de tráfego não é obrigatória para armas de pressão, porém ainda há discussões no dfpc sobre a sua necessidade, ou não, no caso do airsoft por ação de gás. Lembre-se que nem todo policial sabe da existência da portaria-02, portanto, caso seja abordado seja educado, tenha calma e argumente claramente. Você não tem nada a esconder!
						
						<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq10').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						<div class=faqpergunta
						onclick="document.getElementById('faq11').style.display='block'"
						>
							<h3><b>
							Onde posso jogar airsoft? Existem equipes em minha cidade?
							</b></h3>
						</div>
						<div id=faq11 class=faqresposta
						id="usereditonclick" style="display:none"
						>
						Os melhores locais para promover encontros são propriedades particulares relativamente afastadas de centros urbanos, onde é possível ter o máximo de privacidade e segurança. É necessário evitar organizar eventos próximos a áreas residenciais ou comerciais, pois a movimentação anormal pode assustar os vizinhos e gerar problemas ou mal entendidos com as autoridades locais.
Se você deseja ingressar em uma equipe de airsoft em sua cidade nós podemos te ajudar, na medida do possível. Clientes que desejam fazer amizades com outros clientes terão nosso apoio, basta solicitar. Visite, também o blog nação airsoft e faça parte da maior comunidade de praticantes do brasil. 

						
						
						<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq11').style.display='none'"
							></div>
						</div>
						<hr color=black>
						<div class=faqpergunta
						onclick="document.getElementById('faq12').style.display='block'"
						>
							<h3><b>
							Como eu posso comprar uma arma de fogo?
							</b></h3>
						</div>
						<div id=faq12 class=faqresposta
						id="usereditonclick" style="display:none"
						>
						
						Existem 2 formas para um cidadão comum comprar uma arma legalizada no brasil:<br>
1.	através da polícia federal: este é o caminho para quem busca uma arma para defesa. Os requisitos são:<br>
- ser maior de 25 anos<br>
- não possuir antecedentes criminais<br>
- possuir residência fixa<br>
- possuir ocupação lícita remunerada<br>
- comprovar capacidade técnica e psicológica<br>
- declarar por escrito a efetiva necessidade, expondo fatos e circunstâncias que justifiquem o pedido.<br>
Para o pedido, é necessário montar um processo contendo os documentos listados no link abaixo:<br>
Http://www.pf.gov.br/servicos/armas/aquisicao-de-arma-de-fogo<br>
O primeiro passo é fazer o teste psicológico e o teste de tiro. A lista de psicólogos e instrutores de tiro credenciados em cada estado está nos links abaixo. Muitos deles também atuam como despachantes e podem te ajudar a montar o processo.<br>
Http://www.pf.gov.br/servicos/armas/psicologos-credenciados<br>
Http://www.pf.gov.br/servicos/armas/instrutores-de-armamento-e-tiro-credenciados/instrutores-armamento-tiro-credenciados<br><br>
2.	através do exército - este é o caminho para quem busca ser um colecionador, atirador ou caçador. Os requisitos são muito parecidos: <br>
- ser maior de 25 anos<br>
- não possuir antecedentes criminais<br>
- possuir residência fixa<br>
- possuir ocupação lícita remunerada<br>
- comprovar capacidade técnica e psicológica<br>
- estar filiado a uma federação ou clube de tiro e/ou caça cadastrado no exército.<br>
Esse é o caminho mais garantido para conseguir o seu direito de comprar uma arma. Na quase totalidade dos clubes, basta estar filiado que eles vão oferecer o serviço de cuidar de toda a burocracia para você.

						
						<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq12').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						
						<div class=faqpergunta
						onclick="document.getElementById('faq13').style.display='block'"
						>
							<h3><b>
							Posso pagar parcelado?
							</b></h3>
						</div>
						<div id=faq13 class=faqresposta
						id="usereditonclick" style="display:none"
						>
						
						Sim, trabalhamos com vários cartões de crédito e você pode fazer o pagamento em até 12x, sendo que até 6x é sem juros! Tudo diretamente pelo site. O sistema é uma opção de pagamento completamente segura, versátil e confiável. Não trabalhamos com parcelamento por boleto ou cheque.
						
						
						<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq13').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						<div class=faqpergunta
						onclick="document.getElementById('faq14').style.display='block'"
						>
							<h3><b>
							Como será o envio das mercadorias?
							</b></h3>
						</div>
						<div id=faq14 class=faqresposta
						id="usereditonclick" style="display:none"
						>
						O envio das armas será feito via serviços de transportadoras , acompanhada de guia de tráfego quando por ação de gás. Os envios são feitos diariamente com excessão das sextas feiras e, a partir daí, o prazo de entrega varia de 3 a 15 dias, dependo da forma de envio escolhida e da cidade de destino.
													
						
						<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq14').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						<div class=faqpergunta
						onclick="document.getElementById('faq15').style.display='block'"
						>
							<h3><b>
							Qual é a diferença entre registro e porte de arma?
							</b></h3>
						</div>
						<div id=faq15 class=faqresposta
						id="usereditonclick" style="display:none"
						>
						
						O registro de arma autoriza o proprietário a manter armas em sua residência ou local de trabalho, desde que seja o titular ou o responsável legal do estabelecimento ou empresa. O porte de arma autoriza o proprietário a conduzir a arma municiada.
						
						
						<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq15').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						<div class=faqpergunta
						onclick="document.getElementById('faq16').style.display='block'"
						>
							<h3><b>
							Onde posso efetuar meu registro?
							</b></h3>
						</div>
						<div id=faq16 class=faqresposta
						id="usereditonclick" style="display:none"
						>
						Nas delegacias da polícia federal. Informações no site http://dpf.gov.br
						
						
						<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq16').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						<div class=faqpergunta
						onclick="document.getElementById('faq17').style.display='block'"
						>
							<h3><b>
							Quantas armas podem ser adquiridas?
							</b></h3>
						</div>
						<div id=faq17 class=faqresposta
						id="usereditonclick" style="display:none"
						>
						Você pode possuir até seis armas: duas curtas de calibre permitido, duas longas de alma lisa e duas longas de alma raiada.
					
						
						
						<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq17').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						<div class=faqpergunta
						onclick="document.getElementById('faq18').style.display='block'"
						>
							<h3><b>
							Como evitar acidentes com crianças?
							</b></h3>
						</div>
						<div id=faq18 class=faqresposta
						id="usereditonclick" style="display:none"
						>
						Deixe a sua arma e munições sempre em local fora do alcance das crianças. Oriente seus filhos para, no caso de encontrarem uma arma, não tocarem nela e chamarem imediatamente um adulto. A aquisição de uma depende de registro concedido por autoridade competente. Sua utilização exige treinamento e equilíbrio emocional. Guarde sua arma em local seguro e fora do alcance das crianças. Para maiores informações acesse: http://dpf.gov.br/servicos/armas
Tem uma outra cor respectiva para fazer a identificação d classe da arma? Ou c posso retirar a ponta que identifica, sem levar alguma multa ou punição judicial por tal ato?

						
						
						<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq18').style.display='none'"
							></div>
						</div>
						
					</div>
					<br style="clear: both;">
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