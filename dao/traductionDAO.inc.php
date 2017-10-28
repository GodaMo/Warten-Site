<?php 

include_once '../dao/config/DAO.php'; 

class traductionDAO extends DAO {
	private $_traduction_id = "traduction_id as _traduction_id";
	private $_traduction_langue = "traduction_langue as _traduction_langue";
	private $_traduction_text = "traduction_text as _traduction_text";

	public function get_traduction(){ 
		$req = $this-> prepare("SELECT $this->_traduction_id, $this->_traduction_langue, $this->_traduction_text FROM traduction " ); 
		$req->execute(); 
		return $this->cursorToObjectArray($req);
	}

	public function get_traduction_By_PK(){ 
		$req = $this-> prepare("SELECT FROM traduction  WHERE  $this->_traduction_id, $this->_traduction_langue, $this->_traduction_text $this->_traduction_id = :X_traduction_id");
		$req->BindParam(":X_traduction_id",$traduction_id);
		$req->exectute(); 
		return $this->cursorToObject($req);
	}
}


?>