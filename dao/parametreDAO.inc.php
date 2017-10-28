<?php 

include_once '../dao/config/DAO.php'; 


class parametreDAO extends DAO {
	private $_parametre_id = "parametre_id as _parametre_id";
	private $_parametre_datecreation = "parametre_datecreation as _parametre_datecreation";
	private $_parametre_desactivation = "parametre_desactivation as _parametre_desactivation";
	private $_parametre_verification = "parametre_verification as _parametre_verification";

	public function get_parametre(){ 
		$req = $this-> prepare("SELECT $this->_parametre_id, $this->_parametre_datecreation, $this->_parametre_desactivation, $this->_parametre_verification FROM parametre " ); 
		$req->execute(); 
		return $this->cursorToObjectArray($req);
	}

	public function get_parametre_By_PK(){ 
		$req = $this-> prepare("SELECT FROM parametre  WHERE  $this->_parametre_id, $this->_parametre_datecreation, $this->_parametre_desactivation, $this->_parametre_verification $this->_parametre_id = :X_parametre_id");
		$req->BindParam(":X_parametre_id",$parametre_id);
		$req->exectute(); 
		return $this->cursorToObject($req);
	}
}

?>