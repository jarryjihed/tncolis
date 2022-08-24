<?php
session_start();

	include_once 'Dataaccess.php';

	
	$email = $_SESSION['email'];
		
	if(!empty($email)) 
	{
		$sql = "SELECT * FROM data_livreurs WHERE email='$email'";
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
				$_SESSION['telephone'] = $row['telephone'];
				$_SESSION['ville'] = $row['ville'];
				$_SESSION['marque'] = $row['marque'];
				$_SESSION['modele'] = $row['modele'];		
				$_SESSION['immatriculation'] = $row['immatriculation'];
				$_SESSION['couleur'] = $row['couleur'];
				header("Location: membre_mode_livreur.php?nom=".$_SESSION['nom']);
			}
		}
		else
		{
				echo "<script>alert(\"la variable est nulle\")</script>";				
				header("Location: membre.php?nom=".$_SESSION['nom']);
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
/* ?>

<html>
<head>



		<title>TN_COLIS</title>		
		<meta charset="utf-8"> 
 		<link rel="stylesheet" type="text/css" href="css/principale1.css"/>
 		<link rel="stylesheet" type="text/css" href="css/log4.css"/>
 	</head> 
 
 		
		<h1>TN_COLIS</h1>
		<h2>Mode Livreur</h2>
		<body>

		<ul>
			<li><a href="membre.php">Expédier ou recevoir un colis</a></li>    			
			<li><a href="index_mode_livreur.php">Passer en mode livreur</a></li>
			<li><a href="consulter_le_livreur.php">Consulter le livreur</a></li>
			<li><a href="profil.php"><?php echo ucwords($_SESSION['prenom']); ?> <?php echo ucwords($_SESSION['nom']); ?></a></li>
			<li><a href="deconnexion.php">Déconnexion</a></li>
			
				
  		</ul>

		
		<div>
  		
		<form action="" method="post">
		<table>
			<tr>
				
				<td align="center">
					<input type="text" name="email" placeholder="<?php echo $email; ?>"  ><br />
				</td>
			</tr>
			<tr>
				
				<td align="center">
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
			<tr>
				
				<td align="center">
					<br /> <br />	
					<a href="inscription_livreur.php">Dévenir un livreur TN_COLIS</a>
					<br /> <br />	
					<a href="inscription.html">Mot de passe oublié</a>
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
		</body> 
		




</html>
*/
