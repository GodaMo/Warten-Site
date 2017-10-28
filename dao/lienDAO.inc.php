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
	public function get_lien_by_id($id){
		$req = $this-> prepare("SELECT * FROM lien WHERE lien_id=$id");
		$req->execute();
		return $this->cursorToArrayNonObject($req);
	}
	public function delete_lien($id){ 
		$req = $this-> prepare("DELETE  FROM lien  WHERE  lien_id = $id");
		$req->execute();
		return $req;
	}
	public function update_lien($lien){ 
		$req = $this-> prepare("UPDATE  lien  SET lien_id = :X_id,lien_nom= :X_lien_nom,lien_adresse = :X_lien_adresse WHERE  lien_id = :X_id");
		$req->bindValue(':X_id', $lien->get_lien_id());
		$req->bindValue(':X_lien_nom',$lien->get_lien_nom());
		$req->bindValue(':X_lien_adresse',$lien->get_lien_adresse());
		$req->execute();
		return $this->cursorToObject($req);
	}
	public function insert_lien($lien){
		$req = $this-> prepare("INSERT INTO  lien (lien_id,lien_nom, lien_adresse) VALUES (:X_id, :X_lien_nom, :X_lien_adresse)");
		$req->bindValue(':X_id', $lien->get_lien_id());
		$req->bindValue(':X_lien_nom',$lien->get_lien_nom());
		$req->bindValue(':X_lien_adresse',$lien->get_lien_adresse());
		return $this->cursorToObject($req);
	}
}

?>