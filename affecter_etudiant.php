<?php

require_once('connexiondb.php');
if (isset($_POST['AllNames']))
{
	$nom = $_POST['AllNames'];
}
if (isset($_POST['Allsujet']))
{
	$sujet = $_POST['Allsujet'] ;
}


	
	// select etudiant
$requeteSpec="SELECT * FROM `ETUDIANT` WHERE ID_ETUDIANT = '".$nom."'"; //$nom = id_etud 
//echo $requeteSpec ;

$resultat = $db->query($requeteSpec);
$etudiant = $resultat->fetch();

//echo $etudiant["EMAIL"] ;
//select sujet
$requeteSpec1="SELECT * FROM `SUJET` WHERE ID_SUJET = '".$sujet."'";
//echo $requeteSpec1 ;

$resultat1 = $db->query($requeteSpec1);
$sujet = $resultat1->fetch();

//loading stagiaire
$ID_ETUD = $nom;
$ID_SUJ  = $sujet["ID_SUJET"] ;
$TITRE   = $sujet["TITRE_SUJET"] ;
$NOM     = $etudiant["NOM"];
$PRENOM  = $etudiant["PRENOM"] ;
$DEPARTEMENT = $sujet["DEPARTEMENT"];
$DATE_DEBUT  = $sujet["DATE_DEBUT"] ;
$DATE_FIN  = $sujet["DATE_FIN"] ;

//insert

echo $sql="insert into STAGIAIRE(ID_ETUDIANT,ID_SUJET,TITRE,NOM,PRENOM,DEPARTEMENT,DATE_DEBUT,DATE_FIN) values('$ID_ETUD','$ID_SUJ','$TITRE','$NOM','$PRENOM','$DEPARTEMENT','$DATE_DEBUT','$DATE_FIN')"; 
if ($db->exec($sql)) {
     echo "New record created successfully";
     header('Location: accueil.php');
} else {  
      echo "Error: ";
} 
  
?>
