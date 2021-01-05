<?php

require_once('connexiondb.php');

if (isset($_POST['titre']))
{
	$titre = $_POST['titre'];
}
if (isset($_POST['departement']))
{
	$departement = $_POST['departement'];
}
if (isset($_POST['description']))
{
	$description = $_POST['description'];
}
if (isset($_POST['date_deb']))
{
	$date_deb = $_POST['date_deb'];
}
if (isset($_POST['date_fin']))
{
	$date_fin = $_POST['date_fin'];
}


// la requete sql de spécialite (format court , long)
 $sql="insert into SUJET(TITRE_SUJET,DESCRIPTIONS,DEPARTEMENT,DATE_DEBUT,DATE_FIN) values('$titre','$description','$departement','$date_deb','$date_fin')"; 

 if ($db->exec($sql)) {
      echo "New record created successfully";
} else {
      echo "Error: ";
} 
 header('Location: sujet.php');
?>