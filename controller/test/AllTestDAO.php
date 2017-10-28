<?php 

include_once('../model/modelAll.php');
include_once('../dao/DAOAll.php');
session_start();
$pseudoPOST = 'warten';
$userDao = new userDAO();
$req = $userDao->get_user();
for ($i=0; $i <count($req); $i++) {
	if($req[$i]->get_user_pseudo() == $pseudoPOST){
		echo("vous êtes connecter : " . $pseudoPOST);	
	}else{

	}
}


?>