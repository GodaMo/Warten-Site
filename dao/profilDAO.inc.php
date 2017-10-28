<?php

include_once '../dao/config/DAO.php';

class profilDAO extends DAO {
	private $_profil_id = "profil_id as _profil_id";
	private $_profil_sexe = "profil_sexe as _profil_sexe";
	private $_profil_datenaissance = "profil_datenaissance as _profil_datenaissance";
	private $_profil_bio = "profil_bio as _profil_bio";
	private $_profil_imageprofil = "profil_imageprofil as _profil_imageprofil";
	private $_profil_profiljoueurPK = "profil_profiljoueurPK as _profil_profiljoueurPK";
	private $_profil_lienPK = "profil_lienPK as _profil_lienPK";

	public function get_profil(){ 
		$req = $this-> prepare("SELECT $this->_profil_id, $this->_profil_sexe, $this->_profil_datenaissance, $this->_profil_bio, $this->_profil_imageprofil, $this->_profil_profiljoueurPK, $this->_profil_lienPK FROM profil " ); 
		$req->execute(); 
		return $this->cursorToObjectArray($req);
	}
	public function get_profil_by_id($id){
		$req = $this-> prepare("SELECT * FROM profil WHERE profil_id=$id");
		$req->execute();
		return $this->cursorToArrayNonObject($req);
	}
	public function delete_profil($id){ 
		$req = $this-> prepare("DELETE  FROM profil  WHERE  profil_id = $id");
		$req->execute();
		return $req;
	}
	public function update_profil($profil){ 
		$req = $this-> prepare("UPDATE  profil  SET profil_id = :X_id,profil_sexe= :X_profil_sexe,profil_datenaissance = :X_profil_datenaissance, profil_bio = :X_profil_bio,profil_imageprofil = :X_profil_imageprofil,profil_profiljoueurPK = :X_profil_profiljoueurPK WHERE  profil_id = :X_id");
		$req->bindValue(':X_id', $profil->get_profil_id());
		$req->bindValue(':X_profil_sexe',$profil->get_profil_sexe());
		$req->bindValue(':X_profil_datenaissance',$profil->get_profil_datenaissance());
		$req->bindValue(':X_profil_bio',$profil->get_profil_bio());
		$req->bindValue(':X_profil_imageprofil',$profil->get_profil_imageprofil());
		$req->bindValue(':X_profil_profiljoueurPK',$profil->get_profil_profiljoueurPK());
		$req->bindValue(':X_profil_lienPK',$profil->get_profil_lienPK());
		$req->execute();
		return $this->cursorToObject($req);
	}
	public function insert_profil($profil){ 
		$req = $this-> prepare("INSERT INTO  profil (profil_id,profil_sexe, profil_datenaissance, profil_bio,profil_imageprofil,profil_profiljoueurPK,profil_profiljoueurPK) VALUES (:X_id, :X_profil_sexe, :X_profil_datenaissance,:X_profil_bio,:X_profil_imageprofil,:X_profil_profiljoueurPK)");
		$req->bindValue(':X_id', $profil->get_profil_id());
		$req->bindValue(':X_profil_sexe',$profil->get_profil_sexe());
		$req->bindValue(':X_profil_datenaissance',$profil->get_profil_datenaissance());
		$req->bindValue(':X_profil_bio',$profil->get_profil_bio());
		$req->bindValue(':X_profil_imageprofil',$profil->get_profil_imageprofil());
		$req->bindValue(':X_profil_profiljoueurPK',$profil->get_profil_profiljoueurPK());
		$req->bindValue(':X_profil_lienPK',$profil->get_profil_lienPK());
		return $req;
	}
}

?>