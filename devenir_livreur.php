<?php
session_start();


?>


<html>
<head>
<title>Espace membre</title>


		<title>Test</title> 		
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
		
		
		
		
		<form name="myForm" action="action_devenir_livreur.php" onsubmit="return validateForm()" method="post">
		
				
		<div>
			<table>
				<tr>
					<td><br /><p1><?php echo "Informations personnelles "; ?></p1></td>
					
				</tr>				
				<tr>
					<td><br /><?php echo "Nom & Prénom: "; ?></td>
					<td><br /><?php echo ucwords($_SESSION['nom']); ?> <?php echo ucwords($_SESSION['prenom']); ?></td>
				</tr>
				<tr>
					<td><br /><?php echo "Date de naissance: "; ?></td>
					<td><br /><?php echo ucwords($_SESSION['age'])." ans"; ?></td>
				</tr>
				<tr>
					<td><br /><?php echo "Email: "; ?></td>
					<td><br /><?php echo ucwords($_SESSION['email']); ?></td>
				</tr>
				<tr>
					<td><br /><?php echo "Numéro de téléphone: "; ?></td>
					<td><br /><?php echo ucwords($_SESSION['telephone']); ?></td>
				</tr>
				
				<tr>
					<td><br /><?php echo "Ville: "; ?></td>
					<td><br /><?php echo ucwords($_SESSION['ville']); ?></td>
				</tr>
				<tr>
					<td><br /><a href="  "><p2><?php echo "Modifier les informations personnelles "; ?></p2></a></td>
					
				</tr>
				<tr>
					<td><br /><br /><br /><br /></td>
					<td><br /><br /><br /><br /></td>
				</tr>
				<tr>
					<td><br /><p1><?php echo "Véhiculé "; ?></p1></td>
					
				</tr>

				<tr>
					<td><br /><?php echo "Marque: "; ?></td>
					<td><br /><?php echo ucwords($_SESSION['nom']); ?></td>
				</tr>
				<tr>
					<td><br /><?php echo "Modèle: "; ?></td>
					<td><br /><?php echo ucwords($_SESSION['age'])." ans"; ?></td>
				</tr>
				<tr>
					<td><br /><?php echo "Immatriculation: "; ?></td>
					<td><br /><?php echo ucwords($_SESSION['email']); ?></td>
				</tr>
				<tr>
					<td><br /><?php echo "Couleur: "; ?></td>
					<td><br /><?php echo ucwords($_SESSION['email']); ?></td>
				</tr>
				<tr>
					<td><br /><a href="  "><p2><?php echo "Modifier les infos "; ?></p2></a></td>
					
				</tr>
				<tr>
				
					<td><br /> <br /><input type="submit" name="editer" value="Valider"></td>
				</tr>
				
				
			</table>
		</div>
		
		</form>

		</body> 
</html>
