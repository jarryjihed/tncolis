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
				<li><a href="recherche.php">Voir les demandes</a></li>
				<li><a href="membre.php">Publier un trajet</a></li>  		 	
				<li><a href=" "><?php echo ucwords($_SESSION['prenom']); ?> <?php echo ucwords($_SESSION['nom']); ?></a>
					<ul class="sub-menu">
						<li><a href="profil.php">Profil</a></li>
						<li><a href="deconnexion.php">Déconnexion</a></li>
						<li><a href="membre.php">Passer en mode expéditeur</a></li>				
					</ul>
				</li>
				
			
				
  			</ul>
		</nav>
	</header>
	
</body>

<h1>TN_COLIS</h1> 
</html>
