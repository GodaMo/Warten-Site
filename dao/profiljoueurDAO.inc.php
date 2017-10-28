<?php 


include_once '../dao/config/DAO.php';

class profiljoueurDAO extends DAO {
	private $_profiljoueur_id = "profiljoueur_id as _profiljoueur_id";
	private $_profiljoueur_jeux = "profiljoueur_jeux as _profiljoueur_jeux";
	private $_profiljoueur_plateforme = "profiljoueur_plateforme as _profiljoueur_plateforme";
	private $_profiljoueur_tempsjeux = "profiljoueur_tempsjeux as _profiljoueur_tempsjeux";
	private $_profiljoueur_preferences = "profiljoueur_preferences as _profiljoueur_preferences";

	public function get_profiljoueur(){ 
		$req = $this-> prepare("SELECT $this->_profiljoueur_id, $this->_profiljoueur_jeux, $this->_profiljoueur_plateforme, $this->_profiljoueur_tempsjeux, $this->_profiljoueur_preferences FROM profiljoueur " ); 
		$req->execute(); 
		return $this->cursorToObjectArray($req);
	}

	public function get_profiljoueur_By_PK(){ 
		$req = $this-> prepare("SELECT FROM profiljoueur  WHERE  $this->_profiljoueur_id, $this->_profiljoueur_jeux, $this->_profiljoueur_plateforme, $this->_profiljoueur_tempsjeux, $this->_profiljoueur_preferences $this->_profiljoueur_id = :X_profiljoueur_id");
		$req->BindParam(":X_profiljoueur_id",$profiljoueur_id);
		$req->exectute(); 
		return $this->cursorToObject($req);
	}
}

?>