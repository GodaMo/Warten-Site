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
	public function get_traduction_by_id($id){
		$req = $this-> prepare("SELECT * FROM traduction WHERE traduction_id=$id");
		$req->execute();
		return $this->cursorToArrayNonObject($req);
	}
	public function delete_translate($id){ 
		$req = $this-> prepare("DELETE  FROM translate  WHERE  translate_id = $id");
		$req->execute();
		return $req;
	}
	public function update_translate($translate){ 
		$req = $this-> prepare("UPDATE  translate  SET translate_id = :X_id,translate_langue= :X_translate_langue,translate_text = :X_translate_text WHERE  translate_id = :X_id");
		$req->bindValue(':X_id', $translate->get_translate_id());
		$req->bindValue(':X_translate_langue',$translate->get_translate_langue());
		$req->bindValue(':X_translate_text',$translate->get_translate_text());
		$req->execute();
		return $this->cursorToObject($req);
	}
	public function insert_translate($translate){ 
		$req = $this-> prepare("INSERT INTO  translate (translate_id,translate_langue, translate_text) VALUES (:X_id, :X_translate_langue, :X_translate_text)");
		$req->bindValue(':X_id', $translate->get_translate_id());
		$req->bindValue(':X_translate_langue',$translate->get_translate_langue());
		$req->bindValue(':X_translate_text',$translate->get_translate_text());
		return $req;
	}
}


?>