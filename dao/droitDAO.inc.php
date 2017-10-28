<?php

include_once '../dao/config/DAO.php';

class droitDAO extends DAO {
	private $_droit_id = "droit_id as _droit_id";
	private $_droit_nom = "droit_nom as _droit_nom";
	private $_droit_priorite = "droit_priorite as _droit_priorite";

	public function get_droit(){ 
		$req = $this-> prepare("SELECT $this->_droit_id, $this->_droit_nom, $this->_droit_priorite FROM droit " ); 
		$req->execute(); 
		return $this->cursorToObjectArray($req);
	}

	public function get_droit_By_PK(){ 
		$req = $this-> prepare("SELECT FROM droit  WHERE  $this->_droit_id, $this->_droit_nom, $this->_droit_priorite $this->_droit_id = :X_droit_id");
		$req->BindParam(":X_droit_id",$droit_id);
		$req->exectute(); 
		return $this->cursorToObject($req);
	}
}


?>