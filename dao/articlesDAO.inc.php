<?php 

include_once '../dao/config/DAO.php'; 

class articlesDAO extends DAO{
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
	public function get_articles_by_id($id){
		$req = $this-> prepare("SELECT * FROM articles WHERE articles_id=$id");
		$req->execute();
		return $this->cursorToObjectArray($req);
	}


	public function delete_articles($id){ 
		$req = $this-> prepare("DELETE  FROM articles  WHERE  articles_id = $id");
		$req->execute();
		return $req;
	}
	public function update_articles($articles){ 
		$req = $this-> prepare("UPDATE  articles  SET articles_id = :X_id,articles_auteurPK= :X_articles_auteurPK,articles_datecreation = :X_articles_datecreation, articles_datemodification = :X_articles_datemodification,articles_titre = :X_articles_titre,articles_description = :X_articles_description,articles_articlehtml = :X_articles_articlehtml,articles_traductionPK = :X_articles_traductionPK,articles_publication = :X_articles_publication,articles_priorite = :X_articles_priorite,articles_recherche= :X_articles_recherche WHERE  articles_id = :X_id");
		$req->bindValue(':X_id', $articles->get_articles_id());
		$req->bindValue(':X_articles_auteurPK',$articles->get_articles_auteurPK());
		$req->bindValue(':X_articles_datecreation',$articles->get_articles_datecreation());
		$req->bindValue(':X_articles_datemodification',$articles->get_articles_datemodification());
		$req->bindValue(':X_articles_titre',$articles->get_articles_titre());
		$req->bindValue(':X_articles_description',$articles->get_articles_description());
		$req->bindValue(':X_articles_articlehtml',$articles->get_articles_articlehtml());
		$req->bindValue(':X_articles_traductionPK',$articles->get_articles_traductionPK());
		$req->bindValue(':X_articles_publication',$articles->get_articles_publication());
		$req->bindValue(':X_articles_priorite',$articles->get_articles_priorite());
		$req->bindValue(':X_articles_recherche',$articles->get_articles_recherche());
		$req->execute();
		return $this->cursorToObject($req);
	}
	public function insert_articles($articles){ 
		$req = $this-> prepare("INSERT INTO  articles (articles_id,articles_auteurPK, articles_datecreation, articles_datemodification,articles_titre,articles_description,articles_articlehtml,traductionPK,articles_publication,articles_priorite,articles_recherche) VALUES (:X_id, :X_articles_auteurPK, :X_articles_datecreation,:X_articles_datemodification,:X_articles_titre,:X_articles_description,:X_articles_articlehtml,:X_articles_traductionPK,:X_articles_publication,:X_articles_priorite,:X_articles_recherche)");
		$req->bindValue(':X_id', $articles->get_articles_id());
		$req->bindValue(':X_articles_auteurPK',$articles->get_articles_auteurPK());
		$req->bindValue(':X_articles_datecreation',$articles->get_articles_datecreation());
		$req->bindValue(':X_articles_datemodification',$articles->get_articles_datemodification());
		$req->bindValue(':X_articles_titre',$articles->get_articles_titre());
		$req->bindValue(':X_articles_description',$articles->get_articles_description());
		$req->bindValue(':X_articles_articlehtml',$articles->get_articles_articlehtml());
		$req->bindValue(':X_articles_traductionPK',$articles->get_articles_traductionPK());
		$req->bindValue(':X_articles_publication',$articles->get_articles_publication());
		$req->bindValue(':X_articles_priorite',$articles->get_articles_priorite());
		$req->bindValue(':X_articles_recherche',$articles->get_articles_recherche());
		return $req;
	}
}

?>