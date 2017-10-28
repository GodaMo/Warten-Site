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

	public function get_message_By_PK(){ 
		$req = $this-> prepare("SELECT FROM message  WHERE  $this->_message_id, $this->_message_proprietairePK, $this->_message_destinatairePK, $this->_message_envoie, $this->_message_reception, $this->_message_modif $this->_message_id = :X_message_id");
		$req->BindParam(":X_message_id",$message_id);
		$req->exectute(); 
		return $this->cursorToObject($req);
	}
}

?>