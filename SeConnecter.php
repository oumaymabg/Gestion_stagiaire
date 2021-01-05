<?php
	require_once('connexiondb.php');
	session_start();
	
	$LOGIN=$_POST['LOGIN'];
	$PWD=$_POST['PWD'];
	
	
	$requete="select * from users where UTILISATEUR=? and PASS=MD5(?)";
		
	$param=array($LOGIN,$PWD);	
	$resultat = $db->prepare($requete);		
	$resultat->execute($param);	
	
	if($user=$resultat->fetch()){
		$_SESSION['login'] ='is_login';
          header("Location:accueil.php");
          
 		}else{
		 $_SESSION['erreurLogin']='<strong>Erreur!</strong> Login ou mot de passe incorrect!!!';
         header("Location:login.php");
    } 
	
?>