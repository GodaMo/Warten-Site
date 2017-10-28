<?php 
class profiljoueur{
	private $_profiljoueur_id; 
	private $_profiljoueur_jeux; 
	private $_profiljoueur_plateforme; 
	private $_profiljoueur_tempsjeux; 
	private $_profiljoueur_preferences; 

	public function get_profiljoueur_id(){
		return $this->_profiljoueur_id;
	} 
	public function get_profiljoueur_jeux(){
		return $this->_profiljoueur_jeux;
	} 
	public function get_profiljoueur_plateforme(){
		return $this->_profiljoueur_plateforme;
	} 
	public function get_profiljoueur_tempsjeux(){
		return $this->_profiljoueur_tempsjeux;
	} 
	public function get_profiljoueur_preferences(){
		return $this->_profiljoueur_preferences;
	} 

	public function set_profiljoueur_id($x){
		$this->_profiljoueur_id=$x;
	} 
	public function set_profiljoueur_jeux($x){
		$this->_profiljoueur_jeux=$x;
	} 
	public function set_profiljoueur_plateforme($x){
		$this->_profiljoueur_plateforme=$x;
	} 
	public function set_profiljoueur_tempsjeux($x){
		$this->_profiljoueur_tempsjeux=$x;
	} 
	public function set_profiljoueur_preferences($x){
		$this->_profiljoueur_preferences=$x;
	} 
}
?>