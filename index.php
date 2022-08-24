<?php
session_start();

	include_once 'Dataaccess.php';

	if(isset($_POST['formconnexion']))
	{
		$email = htmlspecialchars($_POST["email"]);
		$pass = sha1($_POST["pass"]);
		
		if(!empty($email) AND !empty($pass)) 

		{
			$sql = "SELECT * FROM data_membres WHERE email='$email' AND password='$pass'";
			$result = mysqli_query($connection, $sql);
			$userexist = $result->num_rows;
			
			

			if($userexist == 1)
			{
				$std_num=0;
   				while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {
					$nom= $row['nom'];        		
					
					$_SESSION['email'] = $row['email'];
					$_SESSION['nom'] = $row['nom'];
					$_SESSION['date_naissance'] = $row['date_naissance'];
					$_SESSION['prenom'] = $row['prenom'];
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

/*	
	//echo $email;
	//echo $pass;
	

	


	
	

        
    
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
*/	
?>

<html>
<head>



		<title>TN_COLIS</title>		
		<meta charset="utf-8"> 
		<link rel="stylesheet" href="css/reset.css"/>
 		<link rel="stylesheet" href="css/style1.0.css"/>
		<link rel="stylesheet" href="css/main.css"/>
 	</head> 
 
 		
		<h1>TN_COLIS</h1>
		
		<body>
		<div>
  		
		<form action="" method="post">
		<table>
			<tr>
				
				<td align="center">
					<input type="text" name="email" placeholder="Adresse e-mail" id="email"><br />
				</td>
			</tr>
			<tr>
				
				<td align="center">
					<br />
					<input type="password" name="pass" placeholder="Mot de passe" id="pass"><br />
				</td>
			</tr>
			<tr>
				
				<td align="center">	
					<br /> <br />
					<input type="submit" name="formconnexion" value="Connexion">
				</td>
			</tr>
			<tr>
				
				<td align="center">
					<br /> <br />	
					<a href="inscription.php">Pas de compte ? Inscrivez-vous</a>
					<br /> <br />	
					<a href="inscription.php">Mot de passe oublié</a>
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
		</div>


		<div10>
  		<table>
			<tr>
				<td id="header1">C’est très facile <br/></td>
				<td id="header2">Que vous soyez expéditeur ou destinataire, déposez une annonce décrivant le colis à envoyer.<br/></td>
			</tr>
			<tr>
				<td id="header1">En temps réel </td>
				<td id="header2">TN_COLIS connecte les annonceurs avec les particuliers & transporteurs qui font le trajet. Mettez-vous d’accord sur les modalités du transport.<br /></td>
			</tr>
			<tr>
				<td id="header1">100% sécurisé</td>
				<td id="header2">Un accord est trouvé ? Fixez un rendez-vous avec le transporteur. Partagez avec nous votre expérience avec ce livreur sur le plateforme TN_COLIS.<br /></td>
			</tr>
			
		</table>
		</div10>

		<div11>
  		<table>
			<tr>
				<td id="header3">Envoyer avec TN_COLIS, <br /> </td>
			</tr>
			<tr>
				<td id="header4"><br />comment ça marche ?</td>
			</tr>
		</table>
		</div11>

		<div12>
  		<table>
			<tr>
				<td id="header5">Envoi de colis, transport et déménagement.<br />Pas cher, écologique et 100% assuré.<br /> </td>
			</tr>
			
		</table>
		</div12>
</body> 
</html>

