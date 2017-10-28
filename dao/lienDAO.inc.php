<?php 

include_once '../dao/config/DAO.php';

class lienDAO extends DAO {
	private $_lien_id = "lien_id as _lien_id";
	private $_lien_nom = "lien_nom as _lien_nom";
	private $_lien_adresse = "lien_adresse as _lien_adresse";

	public function get_lien(){ 
		$req = $this-> prepare("SELECT $this->_lien_id, $this->_lien_nom, $this->_lien_adresse FROM lien " ); 
		$req->execute(); 
		return $this->cursorToObjectArray($req);
	}

	public function get_lien_By_PK(){ 
		$req = $this-> prepare("SELECT FROM lien  WHERE  $this->_lien_id, $this->_lien_nom, $this->_lien_adresse $this->_lien_id = :X_lien_id");
		$req->BindParam(":X_lien_id",$lien_id);
		$req->exectute(); 
		return $this->cursorToObject($req);
	}
}

?>