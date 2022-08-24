<?php
session_start();


?>

<!DOCTYPE html>
<html>
<head> 
	<title>Test1</title> 		
	<meta charset="utf-8"> 
	<link rel="stylesheet" type="text/css" href="css/prin.css"/>
	<link rel="stylesheet" type="text/css" href="css/style_action1.css"/>
</head>
<h1> EN ROUTE </h1> 
<h2><?php echo $_SESSION['nom']; ?><br /><?php echo $_SESSION['nom']; ?><?php echo $_SESSION['email']; ?></h2>
<body>
<ul>
    			<li><a href="http://localhost">Rechercher</a></li>
    			<li><a href="#">Proposer un trajet</a></li>
    			<li><a href="#">S'identifier</a></li>
    			<li><a href="#">Créer votre compte</a></li>
    			<li><a href="#">Contact</a></li>
  		</ul>
<p1> <?php 
	
	
	$nom_objet = $_POST["nom_objet"];
	$details = $_POST["details"];
	$format = $_POST["format"];
	$poids = $_POST["poids"];
	$depart = $_POST["depart"];
	$arrive = $_POST["arrive"];
	$date = $_POST["date"];
	$informationscomplementaires = $_POST["informationscomplementaires"];


	echo "Recherche: $places place $depart - $destination $date";
	
	
	
	
?> </p1>

<p2> <?php 
	
	
	$depart = $_POST["depart"];
	$destination = $_POST["destination"];
	$date = $_POST["date"];
	$places = $_POST["places"];

	
	include_once 'Dataaccess.php';

	$sql="SELECT * FROM trajets_proposes WHERE depart='$depart' and destination='$destination' and date='$date' and places>='$places'";

	$result = mysqli_query($connection, $sql);
        
    
	$num_ligne = $result->num_rows;
		//echo $num_ligne;
		//echo "<br>";

	if ($num_ligne > 0) {
		$std_num=0;
   		while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)) {

			echo "<table><tr><th>a</th><th>b</th><th>c</th><th>d</th></tr>";
			echo "<tr>
				<td>".$row['depart']."</td>
				<td>".$row['destination']."</td>
				<td>".$row['places']."<br>".$row['date']."</td>
				<td><a href=\"log.html\">Afficher le numéro de conducteur</a></td>
				</tr>";
			
		}	
		echo "</table>";		
	
        		
    		
	} else {
		echo "Pas de trajet proposé";
	}
	//echo $array[1];
            
?> </p2>
	
</body>
</html> 

