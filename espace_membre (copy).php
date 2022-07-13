<?php

session_start();

	$servername = "localhost";			
	$username = "root";
	$password = "jihed";
	$nom_database = "bd_trajets";

	$connection = new mysqli($servername, $username, $password, $nom_database);


	if(isset($_POST['formconnexion']))
	{
		$email = htmlspecialchars($_POST["email"]);
		$pass = sha1($_POST["pass"]);
		if(!empty($email) AND !empty($pass)) 

		{
	
		}
		else
		{
			$erreur = "Tous les champs doivent être complétés ! ";
		}
		
	}

	
	//echo $email;
	//echo $pass;
	

	


	
	

	$sql = "SELECT * FROM bd_conducteurs WHERE email='$email' AND mdp='$pass'";
	
	$result = mysqli_query($connection, $sql);
        
    
	$data = $result->num_rows;
	//echo $data;
	if ($data == 1) {
		$std_num=0;
   		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
			$nom= $row['nom'];        		
			session_start();
			$_SESSION['email'] = $row['email'];
			$_SESSION['nom'] = $row['nom'];
			$_SESSION['prenom'] = $row['prenom'];
			$_SESSION['age'] = $row['age'];
			$_SESSION['telephone'] = $row['telephone'];
			$_SESSION['marque_voiture'] = $row['marque_voiture'];
			$_SESSION['modele_voiture'] = $row['modele_voiture'];
			header('Location: membre.php');
			exit();
    		}
	} elseif ($data == 0) {
		echo "<p1>Compte non reconnu.</p1>"; 
		
		
	} else {
		echo "<p1>Probème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.</p1>";
	}
	
?>

<html>
<head>
<title>Espace membre</title>


		<title>Test</title> 		
		<meta charset="utf-8"> 
 		<link rel="stylesheet" type="text/css" href="css/principale1.css"/>
 		<link rel="stylesheet" type="text/css" href="css/log2.css"/>
 	</head> 
 
 		
		<h1>TN_COLIS</h1>
		
		<body>
		<p></p>
  		
		<form action="" method="post">
		<table>
			<tr>
				
				<td>
					<input type="text" name="email" placeholder="Votre E-mail" id="email"><br />
				</td>
			</tr>
			<tr>
				
				<td>
					<br />
					<input type="password" name="pass" placeholder="Votre Mot de passe" id="pass"><br />
				</td>
			</tr>
			<tr>
				
				<td align="center">	
					<br /> <br />
					<input type="submit" name="formconnexion" value="Connexion">
				</td>
			</tr>
		</table>
		
		
		</form>
		
		
		<?php
		if(isset($erreur))
		{
			echo '<font color="red">'.$erreur;
		}

		?>

		
		</body> 
		




</html>

