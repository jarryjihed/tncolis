<!DOCTYPE html>
<html> 
 	<head> 
		<title>Test</title> 		
		<meta charset="utf-8"> 
		<link rel="stylesheet" type="text/css" href="css/principale1.css"/>
 		<link rel="stylesheet" type="text/css" href="css/style_inscription3.css"/>
 	</head> 
		<h1>TN_COLIS</h1>
		
		
		
		
		
		<script> 
			var date=new Date(dd-mm-yyyy);
			
			var jour=date.getDate();
			var mois=date.getMonth()+1;
			var an=date.getFullYear();
			
			document.write(date);
			
			
		</script>
		<script>
		function validateForm() {
			var x = document.forms["myForm"]["nom"].value;
			if (x == null || x == ""){
  				alert("Tous les champs doivent être complétés ! : Erreur Nom");
  				return false;
 			}
			var y = document.forms["myForm"]["prenom"].value;
			if (y == null || y == ""){
  				alert("Tous les champs doivent être complétés ! : Erreur Prénom");
  				return false;
 			}
			var z=document.forms["myForm"]["email"].value;
			var atpos=z.indexOf("@");
			var dotpos=z.lastIndexOf(".");
			if (atpos<1 || dotpos<atpos+2 || dotpos+2>=z.length){
				alert("Erreur E-mail");
				return false;
			}
			var w1 = document.forms["myForm"]["mdp"].value;
			var w2 = document.forms["myForm"]["cmdp"].value;
			if (w1 != w2) {
  				alert("Vos mots de passe ne correspendent pas! Erreur Mot de passe");
  				return false;
 			}
		}
		
		</script>
		<form name="myForm" action="action_inscription.php" onsubmit="return validateForm()" method="post">
				
				
		<div>
			<table>
				
				<tr>
					<td><br /><p1><?php echo "Informations personnelles "; ?></p1></td>
					
				</tr>

				<tr>
					<td>
						<input type="text" name="nom" placeholder="Nom"><br>
					</td>
				</tr>
				<tr>
					<td>
						<input type="text" name="prenom" placeholder="Prénom"><br>
					</td>
				</tr>			
				<tr>
					<td>
						<input type="text" name="email" placeholder="E-mail"><br>
					</td>
				</tr>
				
				<tr>
					<td>
						<input type="text" name="telephone" placeholder="Téléphone"><br>
					</td>
				</tr>
				<tr>
					<td>
						<select name="ville">
							<option value="---" selected>Ville</option>
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
						<input type="password" name="mdp" minlength="8" placeholder="Mot de Passe"><br>
					</td>
				</tr>
				<tr>
					<td>
						<input type="password" name="cmdp" minlength="8" placeholder="Confirmation de mot de passe"><br>
					</td>
				</tr>
				<tr>
					<td><br /><p1><?php echo "Véhiculé "; ?></p1></td>
					
				</tr>
				<tr>
					<td>
						<select name="marque">
							<option value="---" selected>Marque</option>
							<option value="Audi">Ariana</option>
							<option value="BMW">Beja</option>
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
						<input type="text" name="modele" placeholder="Modele"><br>
					</td>
				</tr>	
				<tr>
					<td>
						<input type="text" name="immatriculation" placeholder="Immatriculation"><br>
					</td>
				</tr>
				<tr>
					<td>
						<select name="couleur">
							<option value="---" selected>Couleur</option>
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
					<td align="center">
						<br /> <br />						
						<input type="submit" value="Je m'inscris">
					</td>
				</tr>	
			</table>
		</div>
		
		</form>
		</body> 
</html> 
