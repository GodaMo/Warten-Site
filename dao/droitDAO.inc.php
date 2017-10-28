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
	public function get_droit_by_id($id){
		$req = $this-> prepare("SELECT * FROM droit WHERE droit_id=$id");
		$req->execute();
		return $this->cursorToArrayNonObject($req);
	}
	public function delete_droit($id){ 
		$req = $this-> prepare("DELETE  FROM droit  WHERE  droit_id = $id");
		$req->execute();
		return $req;
	}
	public function update_droit($droit){ 
		$req = $this-> prepare("UPDATE  droit  SET droit_id = :X_id,droit_nom= :X_droit_nom,droit_priorite = :X_droit_priorite WHERE  droit_id = :X_id");
		$req->bindValue(':X_id', $droit->get_droit_id());
		$req->bindValue(':X_droit_nom',$droit->get_droit_nom());
		$req->bindValue(':X_droit_priorite',$droit->get_droit_priorite());
		$req->execute();
		return $this->cursorToObject($req);
	}
	public function insert_droit($droit){
		$req = $this-> prepare("INSERT INTO  droit (droit_id,droit_nom, droit_priorite) VALUES (:X_id, :X_droit_nom, :X_droit_priorite)");
		$req->bindValue(':X_id', $droit->get_droit_id());
		$req->bindValue(':X_droit_nom',$droit->get_droit_nom());
		$req->bindValue(':X_droit_priorite',$droit->get_droit_priorite());
		return $this->cursorToObject($req);
	}
}


?>