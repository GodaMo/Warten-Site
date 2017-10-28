<?php 

	include_once '../dao/config/DAO.php';

class userDAO extends DAO {
	private $_user_id = "user_id as _user_id";
	private $_user_pseudo = "user_pseudo as _user_pseudo";
	private $_user_pass = "user_pass as _user_pass";
	private $_user_mail = "user_mail as _user_mail";
	private $_user_droitPK = "user_droitPK as _user_droitPK";
	private $_user_profilPK = "user_profilPK as _user_profilPK";
	private $_user_parametrePK = "user_parametrePK as _user_parametrePK";

	public function get_user(){ 
		$req = $this-> prepare("SELECT $this->_user_id, $this->_user_pseudo, $this->_user_pass, $this->_user_mail, $this->_user_droitPK, $this->_user_profilPK, $this->_user_parametrePK FROM user " ); 
		$req->execute(); 
		return $this->cursorToObjectArray($req);
	}

	public function get_user_By_PK(){ 
		$req = $this-> prepare("SELECT FROM user  WHERE  $this->_user_id, $this->_user_pseudo, $this->_user_pass, $this->_user_mail, $this->_user_droitPK, $this->_user_profilPK, $this->_user_parametrePK $this->_user_id = :X_user_id");
		$req->BindParam(":X_user_id",$user_id);
		$req->exectute(); 
		return $this->cursorToObject($req);
	}
}