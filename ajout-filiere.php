<?php

require_once('connexiondb.php');

if (isset($_POST['format_court']))
{
	$court = $_POST['format_court'];
}
if (isset($_POST['format_long']))
{
	$long = $_POST['format_long'];
}


// la requete sql de spécialite (format court , long)
 //$requete="insert into SPECIALITE(SPEC_COURT,SPEC_LONG) values('test','testhh')"; 
$sql="insert into `specialite`(SPEC_COURT,SPEC_LONG) values('$court','$long')";
if ($db->exec($sql)) {
      echo "New record created successfully";
} else {
      echo "Error: ";
} 
 header('Location: specialite.php');
?>