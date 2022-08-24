<?php
session_start();
include_once 'menu_membre.php';

?>
<!DOCTYPE html>
<html>
<head> <link rel="stylesheet" href="css/style.css"/> </head>
<body>



<p> <?php 
	
	
	$nom_objet = $_POST["nom_objet"];
	$details = $_POST["details"];
	$format = $_POST["format"];
	$poids = $_POST["poids"];
	$depart = $_POST["depart"];
	$arrive = $_POST["arrive"];
	$date = $_POST["date"];
	$informationscomplementaires = $_POST["informationscomplementaires"];
	$email = $_SESSION['email'];

	
	include_once 'Dataaccess.php';

		
	$sql="INSERT INTO details_colis VALUES ('$nom_objet', '$details', '$format', '$poids', '$depart', '$arrive', '$informationscomplementaires', '$date', '$email')";

	$result = mysqli_query($connection, $sql);
        
    
	$result1 = mysqli_query($connection, "SELECT * FROM details_colis WHERE nom_objet='$nom_objet'");

	$num_ligne = mysqli_num_rows($result1);
	
		
	if ($num_ligne > 0){
		$erreur = "Votre demande pour l'objet $nom_objet est crée. <br><br> Un transporteur prendra contact avec vous rapidement. <br><br><br> <a href='membre.php'>Créer une nouvelle demande</a>";
	}
	else {
		$erreur = "Erreur.";
	}
	
	
?> </p>
	
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

