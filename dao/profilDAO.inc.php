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

	public function get_profil_By_PK(){ 
		$req = $this-> prepare("SELECT FROM profil  WHERE  $this->_profil_id, $this->_profil_sexe, $this->_profil_datenaissance, $this->_profil_bio, $this->_profil_imageprofil, $this->_profil_profiljoueurPK, $this->_profil_lienPK $this->_profil_id = :X_profil_id");
		$req->BindParam(":X_profil_id",$profil_id);
		$req->exectute(); 
		return $this->cursorToObject($req);
	}
}

?>