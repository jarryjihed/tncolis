<?php
		
	$nom = $_POST["nom"];
	$prenom = $_POST["prenom"];
	$age = $_POST["age"];
	$email = $_POST["email"];
	$telephone = $_POST["telephone"];
	$mdp = sha1($_POST["mdp"]);
	$ville = $_POST["ville"];
			
	$servername = "localhost";			
	$username = "root";
	$password = "jihed";
	$nom_database = "data_colis";

	$connection = new mysqli($servername, $username, $password, $nom_database);


	
	$sql="INSERT INTO liste_membres VALUES ('$nom', '$prenom', '$age', '$email', '$telephone', '$mdp', '$ville')";

	$result = mysqli_query($connection, $sql);
		
	    
	$result1 = mysqli_query($connection, "SELECT * FROM liste_membres WHERE email='$email'");

	$num_ligne = mysqli_num_rows($result1);
	
	
	if ($num_ligne > 0)
	{
		$to='jihed.jarry@gmail.com';
		$subject = 'le sujet';
		$message = 'Bonjour !';
		$headers = 'From: webmaster@example.com' . "\r\n" .
			'Reply-To: webmaster@example.com' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();

		mail($to, $subject, $message, $headers);

		$envoye = mail($to, $subject, $message, $headers);
		if ($envoye) {
			$erreur = "<br />Email envoyé.";
		} else {
			$erreur = "<br />Email refusé.";
		}	
		$erreur = "Votre compte a bien été créé ! <a href=\"index.php\">Me connecter</a>";	
		//exit(0);
	} else {
		$erreur = "Erreur d'inscription.";
	}
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
		<li><a href="http://localhost">Rechercher</a></li>
 		<li><a href="****">Proposer un trajet</a></li>
		<li><a href="http://localhost">S'identifier</a></li>
		<li><a href="inscripion.html">Créer votre compte</a></li>
		<li><a href="#">Contact</a></li>
	</ul>
</body>
<div>
	<?php
         if(isset($erreur))
         {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
</div>
</html> 

