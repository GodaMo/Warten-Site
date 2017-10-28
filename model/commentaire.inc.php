<?php 
class commentaire{
	private $_commentaire_id; 
	private $_commentaire_proprietairePK; 
	private $_commentaire_destinatairePK; 
	private $_commentaire_message; 
	private $_commentaire_creation; 
	private $_commentaire_modification; 

	public function get_commentaire_id(){
		return $this->_commentaire_id;
	} 
	public function get_commentaire_proprietairePK(){
		return $this->_commentaire_proprietairePK;
	} 
	public function get_commentaire_destinatairePK(){
		return $this->_commentaire_destinatairePK;
	} 
	public function get_commentaire_message(){
		return $this->_commentaire_message;
	} 
	public function get_commentaire_creation(){
		return $this->_commentaire_creation;
	} 
	public function get_commentaire_modification(){
		return $this->_commentaire_modification;
	} 

	public function set_commentaire_id($x){
		$this->_commentaire_id=$x;
	} 
	public function set_commentaire_proprietairePK($x){
		$this->_commentaire_proprietairePK=$x;
	} 
	public function set_commentaire_destinatairePK($x){
		$this->_commentaire_destinatairePK=$x;
	} 
	public function set_commentaire_message($x){
		$this->_commentaire_message=$x;
	} 
	public function set_commentaire_creation($x){
		$this->_commentaire_creation=$x;
	} 
	public function set_commentaire_modification($x){
		$this->_commentaire_modification=$x;
	} 
}

?>