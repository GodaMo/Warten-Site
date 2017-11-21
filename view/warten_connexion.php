<!DOCTYPE html>
<html>
<head>
	<title>Warten - Revenir ?</title>
	<link rel="icon" type="image/png" href="ressources/img/warten/logo.png" />
	<?php include_once('../ressources/css/css_tablog.php'); ?>
</head>
<body>
	<header class="navigation">
		<a href="home"><img class="wartenlogo" src="ressources/img/warten/logoWarten.png"></a>
		<span class="connectitle">Warten - Se connecter</span>
		<a href="signin">
			<section class="btn_inscription">
				<div class="center">S'inscrire</div>
			</section>
		</a>
	</header>
	<section class="cont_formulaire">
		Connecter vos identifiants pour accéder à votre dashboard :
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<form action="#" method="get" style="position: relative;top:15px;">
			<p style="font-size: 18px;">Pseudo:</p>
			<br>
			<input type="text" name="" class="text" placeholder="Entrez votre pseudo ...">
			<br>
			<br>
			<p style="font-size: 18px;">Mot de passe:</p>
			<br>
			<input type="password" name="" class="text" placeholder="Entrez votre Mot de passe ...">
			<br>
			<br>
			<label id="rememberme" class="checkbox"><input type="checkbox" name="rememberme" id="rememberme" class="checkbox" checked>Se Souvenir de moi</label> <br><br> <a href="#" class="lostpass">Mot de passe oublié ?</a>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<br>
			<input type="submit" value="Connexion" class="connexion">
		</form>
		<a href="home"><section class="cancel">Retour</section></a>
		</section>
	</body>
	</html>