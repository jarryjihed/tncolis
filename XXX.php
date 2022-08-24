<?php
session_start();


?>


<html>
<head>



		<title>TN_COLIS</title> 		
		<meta charset="utf-8"> 
 		<link rel="stylesheet" type="text/css" href="css/principale1.css"/>
 		<link rel="stylesheet" type="text/css" href="css/index4.css"/>
 	</head> 
 
 		
		<h1>TN_COLIS</h1>
		<body>
		
  		<ul>
    			<li><a href="membre.php">Expédier ou recevoir un colis</a></li>    			
			<li><a href="index_mode_livreur.php">Passer en mode livreur</a></li>
			<li><a href="profil.php"><?php echo ucwords($_SESSION['prenom']); ?> <?php echo ucwords($_SESSION['nom']); ?></a></li>
			<li><a href="deconnexion.php">Déconnexion</a></li>
			
			
				
  		</ul>
		
		
		
		
		<form name="myForm" action="actionediter.php" onsubmit="return validateForm()" method="post">
			
				
		<div>
			
		<table>
			<tr>
				
				<td>
					<input type="text" name="nom" placeholder="Nom" id="nom"><br />
				</td>
			</tr>
			<tr>
				
				<td>
					<input type="text" name="prenom" placeholder="Prenom" id="prenom"><br />
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="age" placeholder="Age"><br>
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="email" placeholder="<?php echo $_SESSION['email']; ?>" disabled="disabled"><br>
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="telephone" placeholder="Telephone"><br>
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
				<td align="center">
				<br /> <br />						
					<input type="submit" value="Valider">
				</td>
			</tr>	


			
		</table>
		</div>
		</form>
<div>  </div>
		</body> 
		




</html>
