<?php 
class traduction{
	private $_traduction_id; 
	private $_traduction_langue; 
	private $_traduction_text; 

	public function get_traduction_id(){
		return $this->_traduction_id;
	} 
	public function get_traduction_langue(){
		return $this->_traduction_langue;
	} 
	public function get_traduction_text(){
		return $this->_traduction_text;
	} 

	public function set_traduction_id($x){
		$this->_traduction_id=$x;
	} 
	public function set_traduction_langue($x){
		$this->_traduction_langue=$x;
	} 
	public function set_traduction_text($x){
		$this->_traduction_text=$x;
	} 
}

?>