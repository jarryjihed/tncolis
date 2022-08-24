<html>
<head>



		<title>TN_COLIS</title> 		
		<meta charset="utf-8"> 
 		<link rel="stylesheet" href="css/reset.css"/>
		<link rel="stylesheet" href="css/main.css"/>
 		
</head> 
 
 		

<body>
	<header>
		<nav class="wrapper">
			<ul>
				<li><a href="membre.php">Expédier ou recevoir un colis</a></li>   			
				<li><a href="recherche_livreur.php">Chercher un livreur</a></li>
				    		 	
				<li><a href="profil.php"><?php echo ucwords($_SESSION['prenom']); ?> <?php echo ucwords($_SESSION['nom']); ?></a>
					<ul class="sub-menu">
						<li><a href="profil.php">Profil</a></li>
						<li><a href="consulter_le_livreur.php">Consulter le livreur</a></li>
						<li><a href="action_changer_mode.php">Passer en mode livreur</a></li>	
						<li><a href="membre.php">Contact</a></li>
						<li><a href="membre.php">Envoyer vos remarques</a></li>
						<li><a href="deconnexion.php">Déconnexion</a></li>			
					</ul>
				</li>
				
			
				
  			</ul>
		</nav>
	</header>
	
</body>

<h1>TN_COLIS</h1> 
</html>






		
	
