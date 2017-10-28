<?php 

include_once('../dao/config/identifiantDAO.php');
/*Connexion et Gestion des Arrays*/
abstract class DAO extends PDO{
		public function __construct(){
			try{
			parent::__construct(Param::$dsn, Param::$login, Param::$mdp);
			}catch( PDOException $Exception ) {
				die("Erreur dans la configuration du serveur MySQL.");
			}
		}

	protected function cursorToObjectArray($curseur){
		$tab = $curseur->fetchAll(PDO::FETCH_CLASS, substr(get_class($this),0,-3));
		return $tab;
	}
	
	protected function cursorToObject($curseur){
		$curseur->setFetchMode(PDO::FETCH_CLASS, substr(get_class($this),0,-3));
		return $curseur->fetch(PDO::FETCH_CLASS);
	}
	protected function cursorToArrayNonObject($curseur){
		$tab = $curseur->fetchAll(PDO::FETCH_ASSOC);
		return $tab;
	}
}
 ?>