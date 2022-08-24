<?php
		
	$nom = ucwords($_POST["nom"]);
	$prenom = ucwords($_POST["prenom"]);
	$date_naissance = $_POST["date_naissance"];
	$ville = $_POST["ville"];
	$telephone = $_POST["telephone"];
	$email = $_POST["email"];
	$mdp = sha1($_POST["mdp"]);
	
			
	include_once 'Dataaccess.php';


	$result = mysqli_query($connection, "SELECT * FROM data_membres WHERE email='$email'");
	$num_ligne = mysqli_num_rows($result);
	
	
	if ($num_ligne == 0)
	{
		$sql="INSERT INTO data_membres VALUES ('$nom', '$prenom', '$date_naissance', '$ville', '$telephone', '$email', '$mdp')";

		$result1 = mysqli_query($connection, $sql);

		$erreur = "Votre compte a bien été créé ! <br><br> <a href='http://localhost'>Connexion</a>";	
		
	}
	elseif ($num_ligne > 0)
	{
		$erreur = "L'adresse e-mail est déjà utilisée. <br> Vous avez indiqué que vous êtes un nouveau client, mais un compte existe déjà avec l'adresse email $email <br><br><br><br> Avez-vous déjà un compte sur notre site? <br><br> <a href='http://localhost'>Connexion</a> <br><br> Vous avez oublié votre mot de passe ? <br><br><br><br> Vous avez toujours besoin d'aide ? <br><br> Contactez le service clientèle "  ;	
		
	} else {
		$erreur = "Erreur d'inscription.";
	}
?>


<html>
<head> 
	<title>TN_COLIS</title> 		
	<meta charset="utf-8"> 
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<link rel="stylesheet" href="css/reset.css"/>
	<link rel="stylesheet" href="css/main.css"/>
</head> 
<h1>TN_COLIS</h1>
		
<body>
		
	
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

