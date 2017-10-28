<?php 
class user{
	private $_user_id; 
	private $_user_pseudo; 
	private $_user_pass; 
	private $_user_mail; 
	private $_user_droitPK; 
	private $_user_profilPK; 
	private $_user_parametrePK; 

	public function get_user_id(){
		return $this->_user_id;
	} 
	public function get_user_pseudo(){
		return $this->_user_pseudo;
	} 
	public function get_user_pass(){
		return $this->_user_pass;
	} 
	public function get_user_mail(){
		return $this->_user_mail;
	} 
	public function get_user_droitPK(){
		return $this->_user_droitPK;
	} 
	public function get_user_profilPK(){
		return $this->_user_profilPK;
	} 
	public function get_user_parametrePK(){
		return $this->_user_parametrePK;
	} 

	public function set_user_id($x){
		$this->_user_id=$x;
	} 
	public function set_user_pseudo($x){
		$this->_user_pseudo=$x;
	} 
	public function set_user_pass($x){
		$this->_user_pass=$x;
	} 
	public function set_user_mail($x){
		$this->_user_mail=$x;
	} 
	public function set_user_droitPK($x){
		$this->_user_droitPK=$x;
	} 
	public function set_user_profilPK($x){
		$this->_user_profilPK=$x;
	} 
	public function set_user_parametrePK($x){
		$this->_user_parametrePK=$x;
	} 
}

?>