<html>

<head>
<title>Recherche des membres</title>
</head>

<body style="text-align: center">

<form method="POST" action="">
		<table border="0" width="50%">
		<tr>
			<td colspan="4">
			<p align="center"><font color=\"#00FFFF\">Recherche des membres</font></td>
		</tr>
		<tr>
			<td>
			<p align="center">Age Minimal</td>
			<td>
			<p align="center"><input type="text" name="T1" size="20"></td>
			<td>
			<p align="center">Age Maximum</td>
			<td>
			<p align="center"><input type="text" name="T2" size="20"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
			<p align="right">Nom</td>
			<td colspan="2">
			<p align="center"><input name="T3" size="20" style="float: left"></td>
		</tr>
		<tr>
			<td colspan="2" align="center">
			<p align="right">Nombre minimal</td>
			<td colspan="2">
			<p align="center"><input name="T4" size="20" style="float: left"></td>
		</tr>
		<tr>
		<td colspan="2" align="center">
			<p align="right">Responsable</td>
			<td colspan="2">
			<td width="33%"><input type="radio" value="V1" name="R1"> </td>
		</tr>
		<tr>
			<td colspan="4">
			<p align="center"><input type="submit" value="Recherche des membres" name="B1"></td>
		</tr>
	</table>
</form>

</body>

</html>
<?php
//1_Connexion au serveur et choisir la BD
include_once 'connect.php';
//2-nejbdou el contenu des champs
$age_min=$_POST['T1'] ;
$age_max=$_POST['T2'] ;
$nom=$_POST['T3'] ;
$Nombre_minimal=$_POST['T4'] ;
$Responsable=$_POST['R1'] ;
$sql="SELECT   v.nomV, v.age, b.responsablen ,count(*)
    FROM `volontaire`v,`buvette`b ,`est_present`e
        WHERE V.age>=$age_min AND V.age<=$age_max AND B.idB=v.idv AND e.idv>=$Nombre_minimal AND e.idv=v.idv ";

		$res=mysqli_query($idconnecxion,$sql); 
 while ($t = mysqli_fetch_array($res))
	
{
	if($Responsable == 'Oui')
	{
		$sql1="SELECT `responsable` FROM `buvette` WHERE  idV = $t[3]";
		$rest=mysqli_query($idconnecxion,$sql1) or die(mysqli_error($sql1)); 
		if(mysql_num_rows($rest) > 0)
		{
			echo 'nom: '.$t[1].'<br>';
						
			echo 'age: '.$t[2].'<br>';
			
			echo 'Responsable: '.$t[5].'<br>';			
			echo 	"</tr>";
		}
		
	}
	else
	{
	echo 	"<tr>";
				
	echo 'nom: '.$t[1].'<br>';
				
	echo 'age: '.$t[2].'<br>';
				
	echo 	"</tr>";
	}
}
                     
//3-fermer la connexion
mysqli_close($idconnecxion);
?>