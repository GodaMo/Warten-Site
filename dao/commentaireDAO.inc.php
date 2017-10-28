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

	public function get_commentaire_By_PK(){ 
		$req = $this-> prepare("SELECT FROM commentaire  WHERE  $this->_commentaire_id, $this->_commentaire_proprietairePK, $this->_commentaire_destinatairePK, $this->_commentaire_message, $this->_commentaire_creation, $this->_commentaire_modification");
		$req->exectute(); 
		return $this->cursorToObject($req);
	}
}

?>