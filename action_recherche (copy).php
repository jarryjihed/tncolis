<?php
session_start();
include_once 'menu_membre.php';

?>

<!DOCTYPE html>
<html>
<head></head> 


<div> <?php 
	
	
	
	
	$departs = $_POST["depart"];
	$arrives = $_POST["arrive"];
	$dates = $_POST["date"];
	$formats = $_POST["format"];
	$poidss = $_POST["poids"];
	$email = $_SESSION['email'];
	
	echo "<p>$departs -- $arrives <br> Date de trajet : $dates <br> <br></p>";
	
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

