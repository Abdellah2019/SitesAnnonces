<?php
setcookie('lang','fra',time()+3600,'/','',false,true);
echo 'Valeur de cookie :'.$_COOKIE['lang'].'<br>';
echo realpath('cookie.php').'<br>';
echo uniqid();
// ================FICHIER LOG ========================================
$data=$_SERVER['REMOTE_ADDR']."\t".date('Y-m-d H:i:s')."\t".$_SERVER['SERVER_NAME']."\n";
$file=fopen("logs.txt","a+");
fputs($file,$data);
fclose($file);
//=====================================================================
function ajout_vue(){
	//require_once 
	$fichier=dirname(__DIR__).DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'compteur.txt';
	if(file_exists($fichier)){
		$compteur=(int)file_get_contents($fichier);
		$compteur++;
		file_put_contents($fichier, $compteur);
	}
	else{
		file_put_contents($fichier,'1');
	}


}
ajout_vue();

?>


