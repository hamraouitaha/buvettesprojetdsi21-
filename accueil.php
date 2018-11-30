<?php
include_once 'connect.php';
	$sql="SELECT  M.date,  p1.drapeau, p1.pays ,M.scoreA,M.scoreB, p2.pays,p2.drapeau
FROM `match1` M , `equipe` p1, `equipe`  p2
WHERE M.eqA=p1.idE AND M.eqB=p2.idE ";	
	echo '
	<html>
	<head>
	<lin rel="stylesheet" type="text/css" href="accueil.css">
	</head>
	<body>
	<table>
	<tr>
		<td colspan="6">
		<p>Liste de match</td>
	</tr>
	<tr>
		<td >date match</td>
		<td>drapeaux du pays</td>
		<td >Nom des équipe A</td>
		<td >résultat</td>
		<td>Nom des équipe B</td>
		<td>drapeaux du pays</td>
		
	</tr>';
 		$m=mysqli_query($idconnecxion,$sql);
		while($t=mysqli_fetch_row($m)){
		echo"<tr>
                   <td>$t[0]</td>
                   <td><img src=\"$t[1]\"></td>
				   <td id=\"p1\">$t[2]</td>
				   <td> ";
				   if (($t[3]==NULL)&&($t[4]==NULL))
				   {
					   echo"Preview </td>
					   <td>$t[5]</td>
				   <td><img src=\"$t[6]\"></td>
				 
</tr>";
				   }
				   else 
				   {
					   echo" $t[3] - $t[4]</td>
					   <td id=\"p2\">$t[5]</td>
				   <td><img src=\"$t[6]\"></td>
				 
</tr>";
				   }
				  
				  
	}
	echo "</table>
	</body>
	</html>";
	//3-et pour mettre fin a la connection 
	@mysqli_close($idconnecxion);
?>