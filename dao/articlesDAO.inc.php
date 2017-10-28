<?php 

include_once '../dao/config/DAO.php'; 

class articlesDAO extends DAO {
	private $_articles_id = "articles_id as _articles_id";
	private $_articles_auteurPK = "articles_auteurPK as _articles_auteurPK";
	private $_articles_datecreation = "articles_datecreation as _articles_datecreation";
	private $_articles_datemodification = "articles_datemodification as _articles_datemodification";
	private $_articles_titre = "articles_titre as _articles_titre";
	private $_articles_description = "articles_description as _articles_description";
	private $_articles_articlehtml = "articles_articlehtml as _articles_articlehtml";
	private $_articles_traductionPK = "articles_traductionPK as _articles_traductionPK";
	private $_articles_publication = "articles_publication as _articles_publication";
	private $_articles_priorite = "articles_priorite as _articles_priorite";
	private $_articles_recherche = "articles_recherche as _articles_recherche";

	public function get_articles(){ 
		$req = $this-> prepare("SELECT $this->_articles_id, $this->_articles_auteurPK, $this->_articles_datecreation, $this->_articles_datemodification, $this->_articles_titre, $this->_articles_description, $this->_articles_articlehtml, $this->_articles_traductionPK, $this->_articles_publication, $this->_articles_priorite, $this->_articles_recherche FROM articles " ); 
		$req->execute(); 
		return $this->cursorToObjectArray($req);
	}

	public function get_articles_By_PK(){ 
		$req = $this-> prepare("SELECT FROM articles  WHERE  $this->_articles_id, $this->_articles_auteurPK, $this->_articles_datecreation, $this->_articles_datemodification, $this->_articles_titre, $this->_articles_description, $this->_articles_articlehtml, $this->_articles_traductionPK, $this->_articles_publication, $this->_articles_priorite, $this->_articles_recherche $this->_articles_id = :X_articles_id");
		$req->BindParam(":X_articles_id",$articles_id);
		$req->exectute(); 
		return $this->cursorToObject($req);
	}
}

?>