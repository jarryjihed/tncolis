<?php
session_start();


?>


<html>
<head> 
	<title>Test1</title> 		
	<meta charset="utf-8"> 
	<link rel="stylesheet" type="text/css" href="css/principale1.css"/>
	<link rel="stylesheet" type="text/css" href="css/style_inscription3.css"/>
</head> 
<h1>TN_COLIS</h1>
		
<body>
		
	<ul>
    			<li><a href="membre.php">Expédier ou recevoir un colis</a></li>    			
			<li><a href="index_mode_livreur.php">Passer en mode livreur</a></li>
			<li><a href="profil.php"><?php echo ucwords($_SESSION['prenom']); ?> <?php echo ucwords($_SESSION['nom']); ?></a></li>
			<li><a href="deconnexion.php">Déconnexion</a></li>
		</ul>
</body>
	<p> <?php
		
		$nom = $_POST["nom"];
		$prenom = $_POST["prenom"];
		$age = $_POST["age"];
		$email = $_SESSION['email'];
		$telephone = $_POST["telephone"];
		$ville = $_POST["ville"];

		$servername = "localhost";			
		$username = "root";
		$password = "jihed";
		$nom_database = "data_colis";

		$connection = new mysqli($servername, $username, $password, $nom_database);

		
	
		$sql="UPDATE liste_membres SET nom='$nom', prenom='$prenom' WHERE email='$email'";

		$result = mysqli_query($connection, $sql);
		
	    
		$result1 = mysqli_query($connection, "SELECT * FROM liste_membres WHERE nom='$nom'");

		$num_ligne = mysqli_num_rows($result1);
	
	
		if ($num_ligne > 0)
		{
			echo "Modification OK.";	
			exit(0);
		} else {
			echo "Erreur d'inscription.";
		}
				    
	?> </p>

</html> 

