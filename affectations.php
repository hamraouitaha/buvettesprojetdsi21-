<html>

<head>
<title>Affectations</title>
<script language="javascript" src="control.js"></script>
</head>

<body>

<form method="POST" action="" name="f">
		<table border="0" width="50%">
		<tr>
			<td width="229" colspan="2" align="right">
			<p align="right">Match</td>
			<td width="53%" colspan="2"><select size="1" name="D1">
			<option value="Choix Match">Choix Match</option>
			<?php 
				include_once 'connect.php';
				$sql = "SELECT   p1.pays , p2.pays
				FROM `match` M , `equipe` p1, `equipe`  p2
				WHERE M.eqA=p1.idE AND M.eqB=p2.idE";
				$res = mysqli_query($idconnecxion,$sql);
				while($data=mysqli_fetch_row($res)) {
					echo '<option>'.$data[0]."-".$data[1].'</option><br/>';
				} 
			?>
			</select></td>
		</tr>
		<tr>
			<td width="229" colspan="2" align="right">
			<p align="right">Buvette</td>
			<td width="53%" colspan="2">
			<select size="1" name="D2">
			<option value="Choix Buvette">Choix Buvette</option>
			            				<?php 
							
        $sql = "SELECT nomB FROM `buvette`";
            $res = mysqli_query($idconnecxion,$sql);
        while($data=mysqli_fetch_array($res)) {
   echo '<option>'.$data["nomB"].'</option><br/>';
} 

?>
			</select></td>
		</tr>
		<tr>
			<td width="33%" align="center"><input type="radio" value="V1" name="R1" onclick="verif1()">Affecter Un 
			Responsable</td>
			<td width="33%" colspan="2" align="center">
			<input type="radio" value="V2" name="R1" onclick="verif2()">Affecter Un Volontaire</td>
			<td width="33%" align="center"><input type="radio" value="V3" name="R1" onclick="verif3()">Buvette 
			Ouverte</td>
		</tr>
		
		<tr id="responsable"  style="display:none">
			<td width="229" colspan="2" align="right">
			<p align="right">Responsable</td>
			<td width="53%" colspan="2"><select size="1" name="D3">
			<option value="Choix Responsable">Choix Responsable</option>
					<?php 
                    
        $sql = "SELECT DISTINCT nomV FROM `buvette` B ,`volontaire` V WHERE B.responsable=V.idV";
            $res = mysqli_query($idconnecxion,$sql);
        while($data=mysqli_fetch_array($res)) {
   echo '<option>'.$data["nomV"].'</option><br/>';
} 
?>
			</select></td>
		</tr>
		<tr id="volontaire" style="display:none">
			<td width="229" colspan="2" align="right">
			<p align="right">Volontaire</td>
			<td width="53%" colspan="2">
			<select size="1" name="D4">
			<option value="Choix Volontaire">Choix Volontaire</option>
              				<?php 
						
        $sql = "SELECT nomV FROM `volontaire`";
            $res = mysqli_query($idconnecxion,$sql);
        while($data=mysqli_fetch_array($res)) {
   echo '<option>'.$data["nomV"].'</option><br/>';
} 
?>			
</select></td>
		</tr>
		<tr>
			<td colspan="4" align="center"><input type="submit" value="Envoyer" name="B1"></td>
		</tr>
	</table>	
</form>

</body>

</html>
