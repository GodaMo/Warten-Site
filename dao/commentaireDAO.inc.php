<?php 

include_once '../dao/config/DAO.php'; 

class commentaireDAO extends DAO {
	private $_commentaire_id = "commentaire_id as _commentaire_id";
	private $_commentaire_proprietairePK = "commentaire_proprietairePK as _commentaire_proprietairePK";
	private $_commentaire_destinatairePK = "commentaire_destinatairePK as _commentaire_destinatairePK";
	private $_commentaire_message = "commentaire_message as _commentaire_message";
	private $_commentaire_creation = "commentaire_creation as _commentaire_creation";
	private $_commentaire_modification = "commentaire_modification as _commentaire_modification";

	public function get_commentaire(){ 
		$req = $this-> prepare("SELECT $this->_commentaire_id, $this->_commentaire_proprietairePK, $this->_commentaire_destinatairePK, $this->_commentaire_message, $this->_commentaire_creation, $this->_commentaire_modification FROM commentaire " ); 
		$req->execute(); 
		return $this->cursorToObjectArray($req);
	}
	public function get_commentaire_by_id($id){
		$req = $this-> prepare("SELECT * FROM commentaire WHERE commentaire_id=$id");
		$req->execute();
		return $this->cursorToObjectArray($req);
	}
	public function delete_commentaire($id){ 
		$req = $this-> prepare("DELETE  FROM commentaire  WHERE  commentaire_id = $id");
		$req->execute();
		return $req;
	}
	public function update_commentaire($commentaire){ 
		$req = $this-> prepare("UPDATE  commentaire  SET commentaire_id = :X_id,commentaire_proprietairePK= :X_commentaire_proprietairePK,commentaire_destinatairePK = :X_commentaire_destinatairePK, commentaire_message = :X_commentaire_message,commentaire_creation = :X_commentaire_creation,commentaire_modification = :X_commentaire_modification WHERE  commentaire_id = :X_id");
		$req->bindValue(':X_id', $commentaire->get_commentaire_id());
		$req->bindValue(':X_commentaire_proprietairePK',$commentaire->get_commentaire_proprietairePK());
		$req->bindValue(':X_commentaire_destinatairePK',$commentaire->get_commentaire_destinatairePK());
		$req->bindValue(':X_commentaire_message',$commentaire->get_commentaire_message());
		$req->bindValue(':X_commentaire_creation',$commentaire->get_commentaire_creation());
		$req->bindValue(':X_commentaire_modification',$commentaire->get_commentaire_modification());
		$req->execute();
		return $this->cursorToObject($req);
	}
	public function insert_commentaire($commentaire){
		$req = $this-> prepare("INSERT INTO  commentaire (commentaire_id,commentaire_proprietairePK, commentaire_destinatairePK, commentaire_message,commentaire_creation,commentaire_modification) VALUES (:X_id, :X_commentaire_proprietairePK, :X_commentaire_destinatairePK,:X_commentaire_message,:X_commentaire_creation,:X_commentaire_modification)");
		$req->bindValue(':X_id', $commentaire->get_commentaire_id());
		$req->bindValue(':X_commentaire_proprietairePK',$commentaire->get_commentaire_proprietairePK());
		$req->bindValue(':X_commentaire_destinatairePK',$commentaire->get_commentaire_destinatairePK());
		$req->bindValue(':X_commentaire_message',$commentaire->get_commentaire_message());
		$req->bindValue(':X_commentaire_creation',$commentaire->get_commentaire_creation());
		$req->bindValue(':X_commentaire_modification',$commentaire->get_commentaire_modification());
		return $this->cursorToObject($req);
	}
}

?>