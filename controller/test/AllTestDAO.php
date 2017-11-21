<?php 

include_once('../model/modelAll.php');
include_once('../dao/DAOAll.php');
session_start();
$pseudoPOST = 'warten';
$userDao = new userDAO();
$req = $userDao->get_user();
$nombreUser = count($req);
echo $nombreUser;
echo "<br>";
$count_allusers=0;
for ($i=0; $i <count($req); $i++) {
	if($req[$i]->get_user_pseudo() == $pseudoPOST){
		echo("vous êtes connecter : " . $pseudoPOST);
		echo $_SESSION["pseudo"] = $pseudoPOST;
	}else{
		if($count_allusers == $nombreUser-1){
			echo "Nom d'utilisateur incorrect";
			$count_allusers = 0;
			break;
		}else{
			$count_allusers++;
		}
	}

}
?>