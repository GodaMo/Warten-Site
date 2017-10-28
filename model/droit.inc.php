<?php 
class droit{
	private $_droit_id; 
	private $_droit_nom; 
	private $_droit_priorite; 

	public function get_droit_id(){
		return $this->_droit_id;
	} 
	public function get_droit_nom(){
		return $this->_droit_nom;
	} 
	public function get_droit_priorite(){
		return $this->_droit_priorite;
	} 

	public function set_droit_id($x){
		$this->_droit_id=$x;
	} 
	public function set_droit_nom($x){
		$this->_droit_nom=$x;
	} 
	public function set_droit_priorite($x){
		$this->_droit_priorite=$x;
	} 
}
?>