<?php
class articles{
	private $_articles_id; 
	private $_articles_auteurPK; 
	private $_articles_datecreation; 
	private $_articles_datemodification; 
	private $_articles_titre; 
	private $_articles_description; 
	private $_articles_articlehtml; 
	private $_articles_traductionPK; 
	private $_articles_publication; 
	private $_articles_priorite; 
	private $_articles_recherche; 

	public function get_articles_id(){
		return $this->_articles_id;
	} 
	public function get_articles_auteurPK(){
		return $this->_articles_auteurPK;
	} 
	public function get_articles_datecreation(){
		return $this->_articles_datecreation;
	} 
	public function get_articles_datemodification(){
		return $this->_articles_datemodification;
	} 
	public function get_articles_titre(){
		return $this->_articles_titre;
	} 
	public function get_articles_description(){
		return $this->_articles_description;
	} 
	public function get_articles_articlehtml(){
		return $this->_articles_articlehtml;
	} 
	public function get_articles_traductionPK(){
		return $this->_articles_traductionPK;
	} 
	public function get_articles_publication(){
		return $this->_articles_publication;
	} 
	public function get_articles_priorite(){
		return $this->_articles_priorite;
	} 
	public function get_articles_recherche(){
		return $this->_articles_recherche;
	} 

	public function set_articles_id($x){
		$this->_articles_id=$x;
	} 
	public function set_articles_auteurPK($x){
		$this->_articles_auteurPK=$x;
	} 
	public function set_articles_datecreation($x){
		$this->_articles_datecreation=$x;
	} 
	public function set_articles_datemodification($x){
		$this->_articles_datemodification=$x;
	} 
	public function set_articles_titre($x){
		$this->_articles_titre=$x;
	} 
	public function set_articles_description($x){
		$this->_articles_description=$x;
	}
	public function set_articles_articlehtml($x){
		$this->_articles_articlehtml=$x;
	} 
	public function set_articles_traductionPK($x){
		$this->_articles_traductionPK=$x;
	} 
	public function set_articles_publication($x){
		$this->_articles_publication=$x;
	} 
	public function set_articles_priorite($x){
		$this->_articles_priorite=$x;
	} 
	public function set_articles_recherche($x){
		$this->_articles_recherche=$x;
	} 
}

?>