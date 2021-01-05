<?php

require_once('connexiondb.php');
$key=$_GET['key'];

	$sql="   SELECT * FROM `ETUDIANT` WHERE `NOM` LIKE '".$key."%' ";
$res=$db->query($sql);
$msg=json_encode($res->fetchAll());
echo $msg;
?>