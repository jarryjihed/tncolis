<?php
session_start();
include_once 'menu_membre.php';
include_once 'Dataaccess.php';
	$email = $_SESSION['email'];
	$sql = "SELECT * FROM data_livreurs WHERE email='$email'";
	$result = mysqli_query($connection, $sql);
	$userexist = $result->num_rows;


	if ($userexist > 0) {
		header("Location: membre_mode_livreur.php?nom=".$_SESSION['nom']);
	}
	else {
		$erreur = "Vous n'avez pas le statut livreur.";
	}
?>
<!DOCTYPE html>
<html>
<head> <link rel="stylesheet" href="css/style.css"/> </head>
<body></body>
<div>
	<?php
         if(isset($erreur))
         {
            echo '<font color="red">'.$erreur."</font>";
         }
         ?>
</div>
</html> 

