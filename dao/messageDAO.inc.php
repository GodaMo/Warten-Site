<?php 

include_once '../dao/config/DAO.php'; 

class messageDAO extends DAO {
	private $_message_id = "message_id as _message_id";
	private $_message_proprietairePK = "message_proprietairePK as _message_proprietairePK";
	private $_message_destinatairePK = "message_destinatairePK as _message_destinatairePK";
	private $_message_envoie = "message_envoie as _message_envoie";
	private $_message_reception = "message_reception as _message_reception";
	private $_message_modif = "message_modif as _message_modif";

	public function get_message(){ 
		$req = $this-> prepare("SELECT $this->_message_id, $this->_message_proprietairePK, $this->_message_destinatairePK, $this->_message_envoie, $this->_message_reception, $this->_message_modif FROM message " ); 
		$req->execute(); 
		return $this->cursorToObjectArray($req);
	}
	public function get_message_by_id($id){
		$req = $this-> prepare("SELECT * FROM message WHERE message_id=$id");
		$req->execute();
		return $this->cursorToArrayNonObject($req);
	}
	public function delete_message($id){ 
		$req = $this-> prepare("DELETE  FROM message  WHERE  message_id = $id");
		$req->execute();
		return $req;
	}
	public function update_message($message){ 
		$req = $this-> prepare("UPDATE  message  SET message_id = :X_id,message_proprietairePK= :X_message_proprietairePK,message_destinatairePK = :X_message_destinatairePK, message_envoie = :X_message_envoie,message_reception = :X_message_reception,message_modif = :X_message_modif WHERE  message_id = :X_id");
		$req->bindValue(':X_id', $message->get_message_id());
		$req->bindValue(':X_message_proprietairePK',$message->get_message_proprietairePK());
		$req->bindValue(':X_message_destinatairePK',$message->get_message_destinatairePK());
		$req->bindValue(':X_message_envoie',$message->get_message_envoie());
		$req->bindValue(':X_message_reception',$message->get_message_reception());
		$req->bindValue(':X_message_modif',$message->get_message_modif());
		$req->execute();
		return $this->cursorToObject($req);
	}
	public function insert_message($message){ 
		$req = $this-> prepare("INSERT INTO  message (message_id,message_proprietairePK, message_destinatairePK, message_envoie,message_reception,message_modif,message_modif) VALUES (:X_id, :X_message_proprietairePK, :X_message_destinatairePK,:X_message_envoie,:X_message_reception,:X_message_modif)");
		$req->bindValue(':X_id', $message->get_message_id());
		$req->bindValue(':X_message_proprietairePK',$message->get_message_proprietairePK());
		$req->bindValue(':X_message_destinatairePK',$message->get_message_destinatairePK());
		$req->bindValue(':X_message_envoie',$message->get_message_envoie());
		$req->bindValue(':X_message_reception',$message->get_message_reception());
		$req->bindValue(':X_message_modif',$message->get_message_modif());
		return $req;
	}
}

?>