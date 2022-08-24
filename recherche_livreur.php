<?php
session_start();

include_once 'menu_membre.php';
?>


<html>
<head>
		<link rel="stylesheet" href="css/style1.0.css"/>
</head> 
<body>
		<form name="myForm" action="action_recherche_livreur.php" onsubmit="return validateForm()" method="post">
					
				
		<div>
			
			<table>
				
				
				
				<tr>
					<td>
						<br />
						<select name="depart">
							<option value="---" selected>Ville de départ</option>
							<option value="Ariana">Ariana</option>
							<option value="Beja">Beja</option>
							<option value="Ben Arous">Ben Arous</option>
							<option value="Bizerte">Bizerte</option>
							<option value="Gabes">Gabes</option>	
							<option value="Gafsa">Gafsa</option>
							<option value="Jendouba">Jendouba</option>
							<option value="Kairouan">Kairouan</option>
							<option value="Kasserine">Kasserine</option>
							<option value="Kebili">Kebili</option>
							<option value="La Manouba">La Manouba</option>
							<option value="Le Kef">Le Kef</option>
							<option value="Mahdia">Mahdia</option>
							<option value="Médenine">Médenine</option>
							<option value="Monastir">Monastir</option>
							<option value="Nabeul">Nabeul</option>
							<option value="Sfax">Sfax</option>
							<option value="Sidi Bouzid">Sidi Bouzid</option>
							<option value="Siliana">Siliana</option>
							<option value="Sousse">Sousse</option>
							<option value="Tataouine">Tataouine</option>
							<option value="Tozeur">Tozeur</option>
							<option value="Tunis">Tunis</option>
							<option value="Zaghouan">Zaghouan</option>
							</select><br>		
					</td>
				</tr>
				<tr>
					<td>
						<br />						
						<select name="arrive">
							<option value="---" selected>Ville d'arrivée</option>
							<option value="Ariana">Ariana</option>
							<option value="Beja">Beja</option>
							<option value="Ben Arous">Ben Arous</option>
							<option value="Bizerte">Bizerte</option>
							<option value="Gabes">Gabes</option>	
							<option value="Gafsa">Gafsa</option>
							<option value="Jendouba">Jendouba</option>
							<option value="Kairouan">Kairouan</option>
							<option value="Kasserine">Kasserine</option>
							<option value="Kebili">Kebili</option>
							<option value="La Manouba">La Manouba</option>
							<option value="Le Kef">Le Kef</option>
							<option value="Mahdia">Mahdia</option>
							<option value="Médenine">Médenine</option>
							<option value="Monastir">Monastir</option>
							<option value="Nabeul">Nabeul</option>
							<option value="Sfax">Sfax</option>
							<option value="Sidi Bouzid">Sidi Bouzid</option>
							<option value="Siliana">Siliana</option>
							<option value="Sousse">Sousse</option>
							<option value="Tataouine">Tataouine</option>
							<option value="Tozeur">Tozeur</option>
							<option value="Tunis">Tunis</option>
							<option value="Zaghouan">Zaghouan</option>
							</select><br>	
					</td>
				</tr>

				<tr>
					<td>
						<br />					
						<input type="date" name="date" min="2022-06-07" placeholder="Livraison souhaitée"><br>
					</td>
				</tr>	
				<tr>
					<td>
						<br />
						<select name="format">
							<option value="---" selected>Format</option>
							<option value="m">Taille: M 230*130*120mm</option>
							<option value="l">Taille: L 290*210*150mm</option>
							<option value="xl">Taille: XL 400*275*195mm</option>
							<option value="xxl">Taille: XXL 500*375*250mm</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<br />
						<select name="poids">
							<option value="---" selected>Poids</option>
							<option value="05">0 à 5 kg</option>
							<option value="510">5 à 10 kg</option>
							<option value="1015">10 à 15 kg</option>
							<option value="1520">15 à 20 kg</option>
						</select>
					</td>
				</tr>
				<tr>
				
					<td align="center">	
					<br /> <br />
						<input type="submit" name="envoyer" value="Rechercher">
					</td>
			</tr>
			</table>
		</div>
		
</body> 
		




</html>
