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
								Airsoft is legal in brazil?
							</b></h3>
						</div>
						<div id=faq1 class=faqresposta
						id="usereditonclick" style="display:none"
						>
							Yes, airsoft was legalized and considered airgun, by order-006 d-log, issued on 27 november 2007 and published in february of that year by dfpc (controlled products inspection board), the brazilian army . Today, the trade of airguns is governed by order 02 of the co-log. The camouflage airsoft is the first store completely legalized nationwide.<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq1').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						
						<div class=faqpergunta
						onclick="document.getElementById('faq2').style.display='block'"
						>
							<h3><b>
								What is sfpc? And dfpc?
							</b></h3>
						</div>
						<div id=faq2 class=faqresposta
						id="usereditonclick" style="display:none"
						>
						
Sfpc = controlled products sector supervision. Are brazilian army of the posts responsible for regional control of products controlled by the army as weapons, ammunition, explosives, chemicals and also airsoft. In theory, every major city has its sfpc office.
<br>
							<br>

Dfpc = controlled products inspection board. It is the central agency that regulates all activities of sfpcs, based at the headquarters of the army in brasilia. It is also responsible for the import authorization expeditions and the regulations concerning the controlled products.
							<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq2').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						
						<div class=faqpergunta
						onclick="document.getElementById('faq3').style.display='block'"
						>
							<h3><b>
I need to have cr (certificate of registration) to buy?
							</b></h3>
						</div>
						<div id=faq3 class=faqresposta
						id="usereditonclick" style="display:none"
						>
							According to the ordinance-02, the cr is only necessary to purchase airguns for gas of action. For electrical weapons or manual (by spring action), buyers should only prove age (18 years) at the time of purchase and send rg, cpf and residence certificate.
 
<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq3').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						
						<div class=faqpergunta
						onclick="document.getElementById('faq4').style.display='block'"
						>
							<h3><b>
The weapons must record in sigma, or sinarm?							</b></h3>
						</div>
						<div id=faq4 class=faqresposta
						id="usereditonclick" style="display:none"
						>

According to the r-105, the pressure of weapons (including the airsoft) do not require registration, but the store is responsible for making the output arms control, recording each serial number to your buyer in a physical file.
							<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq4').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						
						<div class=faqpergunta
						onclick="document.getElementById('faq5').style.display='block'"
						>
							<h3><b>

I have to be over 18 to buy the site?
							</b></h3>
						</div>
						<div id=faq5 class=faqresposta
						id="usereditonclick" style="display:none"
						>

You must be over 18 to buy the products of related menus to arms pressure and airsoft! However, products such as uniforms, boots, accessories, knives, etc. Can be purchased by any registered user. Shipments of airguns will only be released after submission of certified copies of id and cpf and proof of address, by post or via e-mail.
							<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq5').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						<div class=faqpergunta
						onclick="document.getElementById('faq6').style.display='block'"
						>
							<h3><b>
What does hop up?							</b></h3>
						</div>
						<div id=faq6 class=faqresposta
						id="usereditonclick" style="display:none"
						>
						

Hop-up is a system developed in japan consisting of a small rubber inside the gun system that causes a rotation in the bb during shooting. Thus, the bb suffers less air resistance action, reaching a better accuracy and range! In all models sold in this site the hop-up is present and is also adjustable and can make more or less wind action!
						
						<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq6').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						<div class=faqpergunta
						onclick="document.getElementById('faq7').style.display='block'"
						>
							<h3><b>

What do the terms gbb, springer, aeg, aep?
							</b></h3>
						</div>
						<div id=faq7 class=faqresposta
						id="usereditonclick" style="display:none"
						>
						
						Gbb = blowback gas to is a designation for gas weapons (usually handguns) that have the blowback system. Blowback is the system of dual action arms (semi-automatic) every shot the rail gun recoils with the expansion of the gas already leaving it ready for the next shot. These weapons produce? Stride? Characteristic that provides a great feeling of shooting! Springer are spring guns, work through repetition, that is, they must be manually armed with every shot. They have the advantage of being economical by not requiring gas for its operation. They are usually guns, sniper rifles and shotguns.<br>
						<br>

Aeg = airsoft electric gun to st. Rifles and electric guns, running through an electric motor coupled to the air piston. They are automatic weapons that fire multiple shots per minute. They operate with a battery that can be recharged in making normally.

						<br>
						<br>

Aep = airsoft electric pistol to are tasers. They have mixed operation between aegs and gbb. It has blowback system, but this does not produce the hit that gas weapons produce. Those looking for realism not often opts for a pea as the charger of these weapons is greatly reduced in size so that there is space for the battery, which is installed in the "grip" of the gun and in addition, in most models a buzzing nuisance the electric motor is heard every shot.
					
					
						<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq7').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						<div class=faqpergunta
						onclick="document.getElementById('faq8').style.display='block'"
						>
							<h3><b>

What's in the box weapons?
							</b></h3>
						</div>
						<div id=faq8 class=faqresposta
						id="usereditonclick" style="display:none"
						>

It depends on each model and manufacturer. Carefully read the product descriptions to find out which items come with your airsoft.
							
						
						<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq8').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						<div class=faqpergunta
						onclick="document.getElementById('faq9').style.display='block'"
						>
							<h3><b>

Can i walk with these guns on the street?
							</b></h3>
						</div>
						<div id=faq9 class=faqresposta
						id="usereditonclick" style="display:none"
						>
						

The ostensible transport is prohibited by order 02, as well as being extremely dangerous. To transport your airsoft for games or training, the gun must always be in cash, in a case or a backpack (never transport the waist, much less the show!). It is important to mention that there are cases in the literature by police around the world of people who were killed by police as they carried airsoft guns! In most of these cases the police officer who shot was never found guilty of cheating, it is understood that he was doing his duty when he considered a risk for him and people on the street that citizen running down the street with a gun in his hand.
						
						<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq9').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						<div class=faqpergunta
						onclick="document.getElementById('faq10').style.display='block'"
						>
							<h3><b>
What if i stopped at a blitz, what do i do?							</b></h3>
						</div>
						<div id=faq10 class=faqresposta
						id="usereditonclick" style="display:none"
						>
						
				
Always be accompanied by invoice! The invoice is the only document that proves the legality of the gun! Then, other documents such as a copy of ordinance-02 (which can be found on our website), will also be very useful in case of a police approach, blitz, or the like. The traffic guide is not required for pressure guns, but there are still discussions on dfpc about your need, or not, in the case of airsoft by gas action. Remember that not all police know of the existence of decree-02, so if approached be polite, calm and argue clearly. You have nothing to hide!
		
						<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq10').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						<div class=faqpergunta
						onclick="document.getElementById('faq11').style.display='block'"
						>
							<h3><b>

Where can i play airsoft? There are teams in my city?
							</b></h3>
						</div>
						<div id=faq11 class=faqresposta
						id="usereditonclick" style="display:none"
						>

The best places to hold meetings are private properties relatively far from urban centers, where you can have maximum privacy and security. You must avoid organizing events near residential or commercial areas, because the abnormal movement can scare the neighbors and lead to problems or misunderstandings with local authorities.
<br>

If you want to join an airsoft team in your city we can help you, as far as possible. Customers who wish to make friendships with other clients will have our support, just ask. Visit also the blog nation airsoft and join the largest community of practitioners of brazil.

						
						
						<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq11').style.display='none'"
							></div>
						</div>
						<hr color=black>
						<div class=faqpergunta
						onclick="document.getElementById('faq12').style.display='block'"
						>
							<h3><b>

How can i purchase a firearm?
							</b></h3>
						</div>
						<div id=faq12 class=faqresposta
						id="usereditonclick" style="display:none"
						>
						
There are 2 ways for ordinary people to buy a gun legalized in brazil:<br>

1.	through the federal police: this is the way for those seeking a weapon for defense. The requirements are:
<br>
- be over 25 years<br>

- do not have a criminal record
<br>

- have fixed residence
<br>

- own occupation lawful gainful
<br>

- ensure technical and psychological
<br>

- declare in writing the actual need, exposing facts and circumstances justifying the request.
<br>
For the application, install a file containing the documents listed in the link below:<br>
Http://www.pf.gov.br/servicos/armas/aquisicao-de-arma-de-fogo<br>
The first step is to psychological test and shooting test. The list of psychologists and shooting instructors accredited in each state is the links below. Many of them also act as brokers and can help you put together the process.
Http://www.pf.gov.br/servicos/armas/psicologos-credenciados<br>
Http://www.pf.gov.br/servicos/armas/instrutores-de-armamento-e-tiro-credenciados/instrutores-armamento-tiro-credenciados<br><br>
2.	through the army - this is the way for those seeking to be a collector, or sniper hunter. The requirements are very similar:<br>
- be over 25 years<br>
- do not have a criminal record<br>
- have fixed residence<br>
- own occupation lawful gainful<br>- ensure technical and psychological<br>
- being affiliated with a federation or club tyre and / or registered hunting in the army.<br>
This is the surest way to get the right to buy a gun. In almost all clubs, just be affiliated they will offer the service to take care of all the paperwork for you.
						
						<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq12').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						
						<div class=faqpergunta
						onclick="document.getElementById('faq13').style.display='block'"
						>
							<h3><b>
Can i pay in installments?							</b></h3>
						</div>
						<div id=faq13 class=faqresposta
						id="usereditonclick" style="display:none"
						>
						

Yes, we work with several credit cards and you can make the payment in up to 12x, and up to 6x is interest! All directly through the site. The system is a completely safe, versatile and reliable payment option. We do not work with installment payment by invoice or check.
						
						
						<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq13').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						<div class=faqpergunta
						onclick="document.getElementById('faq14').style.display='block'"
						>
							<h3><b>
How will the shipment of goods?							</b></h3>
						</div>
						<div id=faq14 class=faqresposta
						id="usereditonclick" style="display:none"
						>

The sending of weapons will be made by the carriers services, accompanied by traffic guide when a gas action. Shipments are made daily with the exception of fridays, and from there, the delivery time varies from 3 to 15 days, depending on the chosen shipping method and the destination city.
													
						
						<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq14').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						<div class=faqpergunta
						onclick="document.getElementById('faq15').style.display='block'"
						>
							<h3><b>

What is the difference between registration and gun license?
							</b></h3>
						</div>
						<div id=faq15 class=faqresposta
						id="usereditonclick" style="display:none"
						>
						
The weapon registration allows the owner to keep guns in your home or workplace, provided that the owner or legal representative of the establishment or company. The gun license entitles the owner to drive municiada weapon.						
						
						<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq15').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						<div class=faqpergunta
						onclick="document.getElementById('faq16').style.display='block'"
						>
							<h3><b>
							
What is the difference between registration and gun license?

							</b></h3>
						</div>
						<div id=faq16 class=faqresposta
						id="usereditonclick" style="display:none"
						>

The weapon registration is required, and its validity is three years.

						
						
						<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq16').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						<div class=faqpergunta
						onclick="document.getElementById('faq17').style.display='block'"
						>
							<h3><b>
How to prevent accidents with children?
						</b></h3>
						</div>
						<div id=faq17 class=faqresposta
						id="usereditonclick" style="display:none"
						>
Leave your gun and ammunition always place out of reach of children. Educate your children to, if they find a gun, do not touch it and immediately call an adult. The acquisition of a dependent of registration granted by the competent authority. Its use requires training and emotional balance. Keep your gun in a safe place and out of reach of children. For more information visit: http://dpf.gov.br/servicos/armas
It has another color to make their identification d weapon class? Or c can remove the tip that identifies, without any penalty or judicial penalty for such an act?

					
						
						
						<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq17').style.display='none'"
							></div>
						</div>
						<hr color=black>
						
						<div class=faqpergunta
						onclick="document.getElementById('faq18').style.display='block'"
						>
							<h3><b>

How many weapons can be acquired?
							</b></h3>
						</div>
						<div id=faq18 class=faqresposta
						id="usereditonclick" style="display:none"
						>

You can have up to six weapons: two permitted caliber short, two long smooth-bore and two long rayed of soul.

						
						
						<div style="border: solid 15px;width: 0px;height: 0px;border-color: transparent transparent black transparent;"		
							onclick="document.getElementById('faq18').style.display='none'"
							></div>
						</div>
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