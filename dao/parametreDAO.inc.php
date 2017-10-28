<?php 

include_once '../dao/config/DAO.php'; 


class parametreDAO extends DAO {
	private $_parametre_id = "parametre_id as _parametre_id";
	private $_parametre_datecreation = "parametre_datecreation as _parametre_datecreation";
	private $_parametre_desactivation = "parametre_desactivation as _parametre_desactivation";
	private $_parametre_verification = "parametre_verificatio as _parametre_verification";

	public function get_parametre(){ 
		$req = $this-> prepare("SELECT $this->_parametre_id, $this->_parametre_datecreation, $this->_parametre_desactivation, $this->_parametre_verification FROM parametre " ); 
		$req->execute(); 
		return $this->cursorToObjectArray($req);
	}
	public function get_parametre_by_id($id){
		$req = $this-> prepare("SELECT * FROM parametre WHERE parametre_id=$id");
		$req->execute();
		return $this->cursorToArrayNonObject($req);
	}
	public function delete_parametre($id){ 
		$req = $this-> prepare("DELETE  FROM parametre  WHERE  parametre_id = $id");
		$req->execute();
		return $req;
	}
	public function update_parametre($parametre){ 
		$req = $this-> prepare("UPDATE  parametre  SET parametre_id = :X_id,parametre_datecreation= :X_parametre_datecreation,parametre_desactivation = :X_parametre_desactivation, parametre_verification = :X_parametre_verification WHERE  parametre_id = :X_id");
		$req->bindValue(':X_id', $parametre->get_parametre_id());
		$req->bindValue(':X_parametre_datecreation',$parametre->get_parametre_datecreation());
		$req->bindValue(':X_parametre_desactivation',$parametre->get_parametre_desactivation());
		$req->bindValue(':X_parametre_verification',$parametre->get_parametre_verification());
		$req->execute();
		return $this->cursorToObject($req);
	}
	public function insert_parametre($parametre){ 
		$req = $this-> prepare("INSERT INTO  parametre (parametre_id,parametre_datecreation, parametre_desactivation, parametre_verification) VALUES (:X_id, :X_parametre_datecreation, :X_parametre_desactivation,:X_parametre_verification)");
		$req->bindValue(':X_id', $parametre->get_parametre_id());
		$req->bindValue(':X_parametre_datecreation',$parametre->get_parametre_datecreation());
		$req->bindValue(':X_parametre_desactivation',$parametre->get_parametre_desactivation());
		$req->bindValue(':X_parametre_verification',$parametre->get_parametre_verification());
		return $req;
	}
}

?>