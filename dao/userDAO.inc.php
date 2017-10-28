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
	public function get_user_by_id($id){
		$req = $this-> prepare("SELECT * FROM user WHERE user_id=$id");
		$req->execute();
		return $this->cursorToArrayNonObject($req);
	}

	public function delete_user($id){ 
		$req = $this-> prepare("DELETE  FROM user  WHERE  user_id = $id");
		$req->execute();
		return $req;
	}
	public function update_user($user){ 
		$req = $this-> prepare("UPDATE  user  SET user_id = :X_id,user_pseudo= :X_user_pseudo,user_pass = :X_user_pass, user_mail = :X_user_mail,user_droitPK = :X_user_droitPK,user_profilPK = :X_user_profilPK,user_parametrePK = :X_user_parametrePK WHERE  user_id = :X_id");
		$req->bindValue(':X_id', $user->get_user_id());
		$req->bindValue(':X_user_pseudo',$user->get_user_pseudo());
		$req->bindValue(':X_user_pass',$user->get_user_pass());
		$req->bindValue(':X_user_mail',$user->get_user_mail());
		$req->bindValue(':X_user_droitPK',$user->get_user_droitPK());
		$req->bindValue(':X_user_profilPK',$user->get_user_profilPK());
		$req->bindValue(':X_user_parametrePK',$user->get_user_parametrePK());
		$req->execute();
		return $this->cursorToObject($req);
	}
	public function insert_user($user){ 
		$req = $this-> prepare("INSERT INTO  user (user_id,user_pseudo, user_pass, user_mail,user_droitPK,user_profilPK,user_parametrePK) VALUES (:X_id, :X_user_pseudo, :X_user_pass,:X_user_mail,:X_user_droitPK,:X_user_profilPK,:X_user_parametrePK)");
		$req->bindValue(':X_id', $user->get_user_id());
		$req->bindValue(':X_user_pseudo',$user->get_user_pseudo());
		$req->bindValue(':X_user_pass',$user->get_user_pass());
		$req->bindValue(':X_user_mail',$user->get_user_mail());
		$req->bindValue(':X_user_droitPK',$user->get_user_droitPK());
		$req->bindValue(':X_user_profilPK',$user->get_user_profilPK());
		$req->bindValue(':X_user_parametrePK',$user->get_user_parametrePK());
		return $req;
	}
}

?>