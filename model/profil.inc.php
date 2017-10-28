<?php class profil{
	private $_profil_id; 
	private $_profil_sexe; 
	private $_profil_datenaissance; 
	private $_profil_bio; 
	private $_profil_imageprofil; 
	private $_profil_profiljoueurPK; 
	private $_profil_lienPK; 

	public function get_profil_id(){
		return $this->_profil_id;
	} 
	public function get_profil_sexe(){
		return $this->_profil_sexe;
	} 
	public function get_profil_datenaissance(){
		return $this->_profil_datenaissance;
	} 
	public function get_profil_bio(){
		return $this->_profil_bio;
	} 
	public function get_profil_imageprofil(){
		return $this->_profil_imageprofil;
	} 
	public function get_profil_profiljoueurPK(){
		return $this->_profil_profiljoueurPK;
	} 
	public function get_profil_lienPK(){
		return $this->_profil_lienPK;
	} 

	public function set_profil_id($x){
		$this->_profil_id=$x;
	} 
	public function set_profil_sexe($x){
		$this->_profil_sexe=$x;
	} 
	public function set_profil_datenaissance($x){
		$this->_profil_datenaissance=$x;
	} 
	public function set_profil_bio($x){
		$this->_profil_bio=$x;
	} 
	public function set_profil_imageprofil($x){
		$this->_profil_imageprofil=$x;
	} 
	public function set_profil_profiljoueurPK($x){
		$this->_profil_profiljoueurPK=$x;
	} 
	public function set_profil_lienPK($x){
		$this->_profil_lienPK=$x;
	} 
}
?>