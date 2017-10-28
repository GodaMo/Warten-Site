<?php 


include_once '../dao/config/DAO.php';

class profiljoueurDAO extends DAO {
	private $_profiljoueur_id = "profiljoueur_id as _profiljoueur_id";
	private $_profiljoueur_jeux = "profiljoueur_jeux as _profiljoueur_jeux";
	private $_profiljoueur_plateforme = "profiljoueur_plateforme as _profiljoueur_plateforme";
	private $_profiljoueur_tempsjeux = "profiljoueur_tempsjeux as _profiljoueur_tempsjeux";
	private $_profiljoueur_preferences = "profiljoueur_preferences as _profiljoueur_preferences";

	public function get_profiljoueur(){ 
		$req = $this-> prepare("SELECT $this->_profiljoueurjoueur_id, $this->_profiljoueur_jeux, $this->_profiljoueur_plateforme, $this->_profiljoueur_tempsjeux, $this->_profiljoueur_preferences FROM profiljoueur " ); 
		$req->execute(); 
		return $this->cursorToObjectArray($req);
	}
	public function get_profiljoueur_by_id($id){
		$req = $this-> prepare("SELECT * FROM profiljoueur WHERE profiljoueur_id=$id");
		$req->execute();
		return $this->cursorToArrayNonObject($req);
	}
	public function delete_profiljoueur($id){ 
		$req = $this-> prepare("DELETE  FROM profiljoueur  WHERE  profiljoueur_id = $id");
		$req->execute();
		return $req;
	}
	public function update_profiljoueur($profiljoueur){ 
		$req = $this-> prepare("UPDATE  profiljoueur  SET profiljoueur_id = :X_id,profiljoueur_jeux= :X_profiljoueur_jeux,profiljoueur_plateforme = :X_profiljoueur_plateforme, profiljoueur_tempsjeux = :X_profiljoueur_tempsjeux,profiljoueur_preferences = :X_profiljoueur_preferences WHERE  profiljoueur_id = :X_id");
		$req->bindValue(':X_id', $profiljoueur->get_profiljoueur_id());
		$req->bindValue(':X_profiljoueur_jeux',$profiljoueur->get_profiljoueur_jeux());
		$req->bindValue(':X_profiljoueur_plateforme',$profiljoueur->get_profiljoueur_plateforme());
		$req->bindValue(':X_profiljoueur_tempsjeux',$profiljoueur->get_profiljoueur_tempsjeux());
		$req->bindValue(':X_profiljoueur_preferences',$profiljoueur->get_profiljoueur_preferences());
		$req->execute();
		return $this->cursorToObject($req);
	}
	public function insert_profiljoueur($profiljoueur){ 
		$req = $this-> prepare("INSERT INTO  profiljoueur (profiljoueur_id,profiljoueur_jeux, profiljoueur_plateforme, profiljoueur_tempsjeux,profiljoueur_preferences,profiljoueur_profiljoueurjoueurPK) VALUES (:X_id, :X_profiljoueur_jeux, :X_profiljoueur_plateforme,:X_profiljoueur_tempsjeux,:X_profiljoueur_preferences)");
		$req->bindValue(':X_id', $profiljoueur->get_profiljoueur_id());
		$req->bindValue(':X_profiljoueur_jeux',$profiljoueur->get_profiljoueur_jeux());
		$req->bindValue(':X_profiljoueur_plateforme',$profiljoueur->get_profiljoueur_plateforme());
		$req->bindValue(':X_profiljoueur_tempsjeux',$profiljoueur->get_profiljoueur_tempsjeux());
		$req->bindValue(':X_profiljoueur_preferences',$profiljoueur->get_profiljoueur_preferences());
		return $req;
	}
}

?>