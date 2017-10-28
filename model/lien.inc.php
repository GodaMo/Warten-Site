<?php 
class lien{
	private $_lien_id; 
	private $_lien_nom; 
	private $_lien_adresse; 
	
	public function get_lien_id(){
		return $this->_lien_id;
	} 
	public function get_lien_nom(){
		return $this->_lien_nom;
	} 
	public function get_lien_adresse(){
		return $this->_lien_adresse;
	} 

	public function set_lien_id($x){
		$this->_lien_id=$x;
	} 
	public function set_lien_nom($x){
		$this->_lien_nom=$x;
	} 
	public function set_lien_adresse($x){
		$this->_lien_adresse=$x;
	} 
}
?>