<?php 

include_once('../model/modelAll.php');
include_once('../dao/DAOAll.php');

$Examplearticles = new articlesDAO();
$Examplecommentaire = new commentaireDAO();
$Exampledroit = new droitDAO();
$Examplelien = new lienDAO();
$Examplemessage = new messageDAO();
$Exampleparametre = new parametreDAO();
$Exampleprofil = new profilDAO();
$Exampleprofiljoueur = new profiljoueurDAO();
$Exampletraduction = new traductionDAO();
$Exampleuser = new userDAO();

/*Views*/
print_r($Examplearticles->get_articles());
print_r($Examplecommentaire->get_commentaire());
print_r($Exampledroit->get_droit());
print_r($Examplelien->get_lien());
print_r($Examplemessage->get_message());
print_r($Exampleparametre->get_parametre());
print_r($Exampleprofil->get_profil());
print_r($Exampleprofiljoueur->get_profiljoueur());
print_r($Exampletraduction->get_traduction());
print_r($Exampleuser->get_user());
?>