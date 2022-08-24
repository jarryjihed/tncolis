<?php
session_start();


?>

<!DOCTYPE html>
<html>
<head> 
	<title>TN_COLIS</title>			
	<meta charset="utf-8"> 
	<link rel="stylesheet" type="text/css" href="css/principale1.css"/>
	<link rel="stylesheet" type="text/css" href="css/style_action2.css"/>
</head> 
 
 		
		<h1>TN_COLIS</h1>
		<body>
		
  		<ul>
    			<li><a href="recherche.php">Voir les annonces</a></li>
    			<li><a href="****">Proposer un trajet</a></li>
			<li><a href="membre.php">Expédier ou recevoir un colis</a></li>
    			<li><a href="profil.php"><?php echo ucwords($_SESSION['prenom']); ?> <?php echo ucwords($_SESSION['nom']); ?></a></li>
			<li><a href="deconnexion.php">Déconnexion</a></li>
			
				
  		</ul>


<div> <?php 
	
	
	
	
	
	
	
	include_once 'Dataaccess.php';
	
	if(isset($_POST['($row['prenom'])']))
	{
		$email = htmlspecialchars($_POST["email"]);
		$pass = sha1($_POST["pass"]);
		if(!empty($email) AND !empty($pass)) 

		{
			$sql = "SELECT * FROM liste_membres WHERE email='$email' AND mdp='$pass'";
			$result = mysqli_query($connection, $sql);
			$userexist = $result->num_rows;
			if($userexist == 1)
			{
				$std_num=0;
   				while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
					$nom= $row['nom'];        		
					
					$_SESSION['email'] = $row['email'];
					$_SESSION['nom'] = $row['nom'];
					$_SESSION['prenom'] = $row['prenom'];
					$_SESSION['age'] = $row['age'];
					$_SESSION['telephone'] = $row['telephone'];
					$_SESSION['ville'] = $row['ville'];
					header("Location: membre.php?nom=".$_SESSION['nom']);
				}
			}
			else
			{
				$erreur = "Mauvais mail ou mot de passe ! ";
			}
		}
		else
		{
			$erreur = "Tous les champs doivent être complétés ! ";
		}
		
	}	
	
			
			echo ".($row['prenom']).";
			
		
	
	
?> </div>
	
</body>
</html> 

