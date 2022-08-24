<?php
session_start();
include_once 'menu_membre.php';

?>
<html>
<head>
	<link rel="stylesheet" href="css/style1.0.css"/>
</head> 
<body>
 		
	<form name="myForm" action="editer.php" onsubmit="return validateForm()" method="post">
			
				
		<div>
			
			<table>
				<tr>
					<td>
						<?php echo ucwords($_SESSION['nom']); ?> <?php echo ucwords($_SESSION['prenom']); ?>
					</td>
				</tr>
				<tr>
					<td>
						<br />						
						<?php echo ucwords($_SESSION['date_naissance']); ?>
					</td>
				</tr>
				<tr>
					<td>
						<br />
						<?php echo ucwords($_SESSION['email']); ?>
					</td>
				</tr>
				<tr>
					<td>
						<br />
						<?php echo ucwords($_SESSION['telephone']); ?>
					</td>
				</tr>
				
				<tr>
					<td>
						<br />
						<?php echo ucwords($_SESSION['ville']); ?>	
					</td>
				</tr>
				<tr>
					<td>
						<br />						
						
					</td>
				</tr>
				<tr>
				
					<td>	
					<br /> <br />
						<input type="submit" name="editer" value="Editer">
					</td>
				</tr>
				<tr>
					<td>
						<br />					
						<?php 
						echo "Mes demandes: <br><br>" ;
						$email = $_SESSION['email'];
	
						include_once 'Dataaccess.php';

		
						$sql="SELECT * FROM details_colis WHERE email='$email'";
						$result = mysqli_query($connection, $sql);
		
					    
						$num_ligne = $result->num_rows;
							//echo $num_ligne;
							//echo "<br>";
						echo "<table><tr><th>Nom d'objet</th><th>Détails</th><th>Format</th><th>Informations Complementaires</th><th>Ville</th><th>Date de livraison</th></tr>";
						if ($num_ligne > 0) {
							$std_num=0;
					   		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {

			
								echo "<tr>
									<td>".$row['nom_objet']."</td>				
									<td>".$row['details']."</td>
									<td>".$row['format']."</td>
									<td>".$row['informationscomplementaires']."</td>
									<td>".$row['depart']." -- ".$row['arrive']."</td>
									<td>".$row['date_livraison']."</td>
									</tr>";
			
							}	
							echo "</table>";		
	
				
					    		
						} else {
							echo "Néant";
						}
	
	
					?>
					</td>
				</tr>	
				<tr>
					<td>
						<br />						
						
					</td>
				</tr>	
				<tr>
					<td>
						<br />						
						
					</td>
				</tr>	
				
			</table>
		</div>
		
		</form>

</body> 
</html>
