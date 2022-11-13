<?php
session_start();
//remove all session variables
//Empty the trash
//setcookie('etat','deconnexion',time()+360,'/','',false,true);
//destroy the session 
$_SESSION=array();
session_destroy();
header('Location:../connexion/connexion.php');

?>