<?php
session_start();
include_once 'menu_membre.php';
	

?>
<html>
<head> <link rel="stylesheet" href="css/style.css"/> </head> 
 
<body>
	<form name="myForm" action=" " onsubmit="return validateForm()" method="post">
				
		<div>
			
			<table>
				<tr>
					<td>
						<input type="text" name="numero" placeholder="Numéro de téléphone">
					</td>
				</tr>
				
				<tr>
				
					<td align="center">	
					<br /> <br />
						<input type="submit" name="rechercher" value="Rechercher">
					</td>
			</tr>
			

		</table>
						

<?php


	include_once 'Dataaccess.php';

	if(isset($_POST['rechercher']))
	{
		$numero = htmlspecialchars($_POST["numero"]);
		
		if(!empty($numero)) 

		{
					
			$sql = "SELECT * FROM data_livreurs WHERE telephone='$numero'";
			$result = mysqli_query($connection, $sql);
			$userexist = $result->num_rows;
			
			if ($userexist == 1) {
				$std_num=0;
				while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {

				/*echo "<table><tr><th>Nom</th><th>Prenom</th><th>Email</th><th>Ville</th><th>Marque de véhicule</th><th>Immatriculation</th></tr>";*/
				echo "<tr><br /><br /><td>".$row['prenom']." ".$row['nom']."</td></tr>
					<tr><br /><br /><td>".$row['email']."</td></tr>
					<tr><br /><br /><td>".$row['ville']."</td></tr>
					<tr><br /><br /><td>".$row['marque']." -- ".$row['modele']."</td></tr>
					<tr><br /><br /><td>".$row['immatriculation']."</td></tr>";
					
					echo "</table>";
					}	
			}
			else
			{
				$erreur = "<br />Livreur inconnu ! ";
			}
		}
		else
		{
			$erreur = "<br />Merci de saissir le numéro de livreur";
		}
		
	}

			



?>
					
		
		<?php
		if(isset($erreur))
		{
			echo '<font color="red">'.$erreur;
		}

		?>

</div>
		
		</form>
		
		
		</body> 
		




</html>
