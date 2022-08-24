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
    			<li><a href="recherche.php">Voir les demandes</a></li>
    		 	<li><a href="profil.php"><?php echo ucwords($_SESSION['prenom']); ?> <?php echo ucwords($_SESSION['nom']); ?></a></li>
			<li><a href="deconnexion.php">Déconnexion</a></li>
			
				
  		</ul>


<div> <?php 
	
	
	
	$formats = $_POST["format"];
	$poidss = $_POST["poids"];
	$departs = $_POST["depart"];
	$arrives = $_POST["arrive"];
	$dates = $_POST["date"];
	$email = $_SESSION['email'];
	
	echo "<p>$departs -- $arrives <br> Date de livraison : $dates <br> <br></p>";
	
	include_once 'Dataaccess.php';

		
	$sql="SELECT * FROM details_colis, liste_membres WHERE details_colis.email=liste_membres.email AND depart='$departs' and arrive='$arrives' and date_livraison='$dates' and poids='$poidss'";


	

	$result = mysqli_query($connection, $sql);
        
    
	$num_ligne = $result->num_rows;
		//echo $num_ligne;
		//echo "<br>";
	echo "<table><tr><th>Nom d'objet</th><th>Détails</th><th>Format</th><th>Informations Complementaires</th><th>Tarif</th><th>L'expediteur</th></tr>";
	if ($num_ligne > 0) {
		$std_num=0;
   		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {

			
			echo "<tr>
				<td>".$row['nom_objet']."</td>				
				<td>".$row['details']."</td>
				<td>".ucwords($row['format'])."</td>
				<td>".$row['informationscomplementaires']."</td>
				<td>".$row['informationscomplementaires']."</td>
				<td>".ucwords($row['prenom'])."  ".ucwords($row['nom'])." </br> ".$row['telephone']."</td>
				</tr>";
			
		}	
		echo "</table>";		
	
        		
    		
	} else {
		echo "Pas de trajet proposé";
	}
	
	
?> </div>
	
</body>
</html> 

