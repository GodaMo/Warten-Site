<?php 
class message{
	private $_message_id; 
	private $_message_proprietairePK; 
	private $_message_destinatairePK; 
	private $_message_envoie; 
	private $_message_reception; 
	private $_message_modif; 

	public function get_message_id(){
		return $this->_message_id;
	} 
	public function get_message_proprietairePK(){
		return $this->_message_proprietairePK;
	} 
	public function get_message_destinatairePK(){
		return $this->_message_destinatairePK;
	} 
	public function get_message_envoie(){
		return $this->_message_envoie;
	} 
	public function get_message_reception(){
		return $this->_message_reception;
	} 
	public function get_message_modif(){
		return $this->_message_modif;
	} 

	public function set_message_id($x){
		$this->_message_id=$x;
	} 
	public function set_message_proprietairePK($x){
		$this->_message_proprietairePK=$x;
	} 
	public function set_message_destinatairePK($x){
		$this->_message_destinatairePK=$x;
	} 
	public function set_message_envoie($x){
		$this->_message_envoie=$x;
	} 
	public function set_message_reception($x){
		$this->_message_reception=$x;
	} 
	public function set_message_modif($x){
		$this->_message_modif=$x;
	} 
}
?>