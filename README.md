## Warten-Site
Description : Site d'un Animateur Web

### Réalisation du site

* Partie 1 - Aspect Graphique

 	- Gestion d'un aspect graphique dans le thème "Dark" avec un style FlatDesign.
 	- Gestion de L'UI et UX pour une expérience utilisateur intense.
 	- Gestion de la charte graphique à respecter.
 	- Gestion des formulaires (sécurité)

* Partie 2 - Aspect Metier

 	- Création d'une base de donnée
 	- Création des objects en lien avec la "BDD" 
 	- Création des solutions métier transactionnel
 	- Liaison des données au site internet

* Partie 3 - Aspect Controller

 	- Création des Lien vers le controllers et la vue
 	- Intégration des envoie vers HTTP.
 	- Gestion des requêtes GET et POST des formulaires

### Base de donnée


#### User
| UTILISATEUR   |	TYPE		  |		Valeur     |	PK     |
| ------------- | -------------   | ---------      | --------- |
| ID	        |     INT (AI)	  |  	           |		   |
| PSEUDO        |     VARCHAR 	  |     255 	   |		   |
| Mot de passe  |     VARCHAR     |     255 	   |		   |
| Mail	        |     VARCHAR 	  |     255		   |		   |
| Droit		    |     INT	      |     NULL	   |	Oui	   |
| Profil 		|     INT	      |     NULL	   |	Oui	   |
| Paramètre		|     INT	      |     NULL	   |	Oui	   |


#### Profil
| PROFIL	    	|	TYPE		  |		Valeur     |	PK     |
| ------------- 	| -------------   | ---------      | --------- |
| ID	       		|     INT (AI)	  |  	           |		   |
| Sexe	        	|     VARCHAR  	  |    	255    	   |		   |
| Date de naissance |     Date   	  |         	   |		   |
| Bio	        	|     TEXT   	  |         	   |		   |
| Image de profil   |     TEXT   	  |     		   |		   |
| Profil de Joueur	|     INT	      |     NULL	   |	Oui	   |


#### Profil de Joueur
| PROFIL JOUEUR    	|	TYPE		  |		Valeur     |	PK     |
| ------------- 	| -------------   | ---------      | --------- |
| ID	       		|     INT (AI)	  |  	           |		   |
| Jeux				|     TEXT   	  |         	   |		   |
| Plateforme	    |     VARCHAR  	  |     255  	   |		   |
| Temps de jeux     |     INT   	  |     		   |		   |
| Vos préférences  	|     INT	      |     NULL	   |	Oui	   |

#### Paramètre
| PARAMETRE	    	|	TYPE		  |		Valeur     |	PK     |
| ------------- 	| -------------   | ---------      | --------- |
| ID	       		|     INT (AI)	  |  	           |		   |
| Date de création  |     Date		  |         	   |		   |
| Desactivation    	|     BOOL   	  |       0  	   |		   |
| Verification	    |     BOOL   	  |       0		   |		   |
| Suppression    	|     BOOL	      |       0 	   |		   |

#### Droit
| DROIT         |	TYPE		  |		Valeur     |	PK     |
| ------------- | -------------   | ---------      | --------- |
| ID	        |    INT (AI)	  |  	           |		   |
| Nom           |	   INT	      |     NULL	   |	Oui	   |
| Priorité      |      INT  	  |     		   |		   |

#### Article
| ARTICLES	    		|	TYPE		  |		Valeur     |	PK     |
| ------------- 		| -------------   | ---------      | --------- |
| ID	        		|    INT (AI)	  |  	           |		   |
| Auteur        		|      	INT	      |     NULL	   |	Oui	   |
| Date de création  	|     	Date	  |     	 	   |		   |
| Date de modification  |     	Date	  |     	 	   |		   |
| Titre		    		|		INT	      |     NULL	   |	Oui	   |
| Description		    |		INT	      |     NULL	   |	Oui	   |
| ArticleHTML    		|		INT	      |     NULL	   |	Oui	   |
| Traduction    		|     	INT	      |     NULL	   |	Oui	   |
| Publicaton    		|      	BOOL      |      0		   |		   |
| Priorité		    	|      	INT       |     		   |		   |


#### Traduction
| TRADUCTION    |	TYPE		  |		Valeur     |	PK     |
| ------------- | -------------   | ---------      | --------- |
| ID	        |    INT (AI)	  |  	           |		   |
| Langue        |     VARCHAR 	  |      5	 	   |		   |
| Traduction    |      TEXT  	  |     		   |		   |

#### Contenu
| CONTENU	    |	TYPE		  |		Valeur     |	PK     |
| ------------- | -------------   | ---------      | --------- |
| ID	        |    INT (AI)	  |  	           |		   |
| Langue        |     VARCHAR 	  |      5	 	   |		   |
| Traduction    |      TEXT  	  |     		   |		   |

