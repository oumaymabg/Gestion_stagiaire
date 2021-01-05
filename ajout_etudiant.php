<?php

require_once('connexiondb.php');
if (isset($_POST['nom']))
{
	$nom = $_POST['nom'];
}else { echo "erreur1" ;}

if (isset($_POST['prenom']))
{
	$prenom = $_POST['prenom'];
}else { echo "erreur2" ;}

if (isset($_POST['CIN']))
{
	$cin = $_POST['CIN'];
}else { echo "erreur3" ;}

if (isset($_POST['email']))
{
	$email = $_POST['email'];
}else { echo "erreur4" ;}

if (isset($_POST['specialite']))
{
		$specialite = $_POST['specialite'];
}else { echo "erreur5" ;}

if (isset($_POST['universite']))
{
		$universite = $_POST['universite'];
}else { echo "erreur6" ;}


	$piece = "test";


 //Ouvrir une nouvelle connexion au serveur MySQL
   
    
     //préparer la   requête d'insertion SQL
    $sql="insert into ETUDIANT(NOM,PRENOM,CIN,EMAIL,ID_SPECIALITE,UNIVERSITE,PIECE) values('$nom','$prenom','$cin','$email','$specialite','$universite','$piece')"; 

  if ($db->exec($sql)) {
      echo "New record created successfully";
} else {  
      echo "Error: ";
} 
  header('Location: Etudiant.php');
?>