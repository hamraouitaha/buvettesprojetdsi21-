<?php
//Inclusion du fichier contenant la connexion à la base
include_once "connect.php";
 //2- choix de la base
 @mysqli_select_db($idconnecxion,$basededonne)or die ("cette base donne n'existe pas");
  //3- récupération du contenu des champs
    $nom = $_REQUEST['T1'];
	$prenom = $_REQUEST['T2'];
	$Email = $_REQUEST['T3'];
	$Sexe = $_REQUEST['R1'];
	$ModeDePasse = $_REQUEST['T4'];
	$Age = $_REQUEST['T5'];
 
 function afficher_formulaire ($nom_formulaire, $action, $methode)
 {
 echo "
 <form method=\"$methode\" action=\"$action\"  name = \"$nom_formulaire\">
	
	<div align=\"center\">
	<table border=\"0\" width=\"85%\">
		<tr>
			<td colspan=\"4\">
			<p align=\"center\"><font color=\"#00FFFF\">Recherche des membres</font></td>
		</tr>
		<tr>
			<td width=\"34%\" align=\"right\">Age Minimal</td>
			<td width=\"16%\" align=\"right\">
			<p align=\"center\"><input name=\"T1\" size=\"20\" style=\"float: right\"></td>
			<td width=\"10%\">
			<p align=\"center\">Age Maximum</td>
			<td width=\"37%\">
			<p align=\"center\"><input name=\"T2\" size=\"20\" style=\"float: left\"></td>
		</tr>
		<tr>
			<td colspan=\"2\">
			<p align=\"right\">Nom</td>
			<td colspan=\"2\">
			<p align=\"center\"><input name=\"T3\" size=\"20\" style=\"float: left\"></td>
		</tr>
		<tr>
			<td colspan=\"2\">
			<p align=\"right\">Nombre minimal</td>
			<td colspan=\"2\">
			<p align=\"center\"><input name=\"T4\" size=\"20\" style=\"float: left\"></td>
		</tr>
		<tr>
			<td colspan=\"2\">
			<p align=\"right\">Responsable </td>
			<td colspan=\"2\">
			<p align=\"left\"><input type=\"text\" name=\"T5\" size=\"20\"></td>
		</tr>
		<tr>
			<td colspan=\"4\">
			<p align=\"center\"><input type=\"submit\"value=\"Envoyer\"name=\"B1\"></td>
		</tr>
	</table>
	</div>
	<p>&nbsp;</p>
</form>";
}
 

 ?>