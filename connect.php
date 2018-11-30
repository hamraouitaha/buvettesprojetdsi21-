<?php
//1- connexion 3al serveur local
 $serveurBD="localhost";
 $nomutilisateur="root";
 $modepasse="";
 $basededonne="buvettes";
 $idconnecxion=mysqli_connect($serveurBD,$nomutilisateur,$modepasse)
 or die("impossible de se coonect au serveur de base de donnée");
  mysqli_select_db($idconnecxion,$basededonne)or die ("cette base donne n'existe pas");
 ?>