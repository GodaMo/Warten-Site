<?php 
class parametre{
	private $_parametre_id; 
	private $_parametre_datecreation; 
	private $_parametre_desactivation; 
	private $_parametre_verification; 

	public function get_parametre_id(){
		return $this->_parametre_id;
	} 
	public function get_parametre_datecreation(){
		return $this->_parametre_datecreation;
	} 
	public function get_parametre_desactivation(){
		return $this->_parametre_desactivation;
	} 
	public function get_parametre_verification(){
		return $this->_parametre_verification;
	} 

	public function set_parametre_id($x){
		$this->_parametre_id=$x;
	} 
	public function set_parametre_datecreation($x){
		$this->_parametre_datecreation=$x;
	} 
	public function set_parametre_desactivation($x){
		$this->_parametre_desactivation=$x;
	} 
	public function set_parametre_verification($x){
		$this->_parametre_verification=$x;
	} 
}

?>