<?php 

/*Thèmes Warten*/
$color1 =  "#282828";
$color2 =  "#323232";
$color3 = "#c10000";
$color4 = "#FFFFFF";


?>	
<style type="text/css">
/*General*/
@font-face {
	font-family: "LithosPro-Black";
	src: url("ressources/css/LithosPro-Black.otf");
}
@font-face {
	font-family: "LithosPro";
	src: url("ressources/css/LithosPro-Regular.otf");
}
body,html{
	margin:0;
	padding: 0;
}
/*Page Inscription/Connexion */
body{
	width: 100%
	height:100%;
	background-color: <?php echo $color1 ?>;

}
header.navigation{
	width: 100%;
	height: 8%;
	position: absolute;
	top:0;
	background-color: <?php echo $color4 ?>;
}
img.wartenlogo{
	position: absolute;
	top: 10%;
	left: 1%;
	width: 6%;
}
section.btn_inscription{
	height: 100%;
	width: 15%;
	position: absolute;
	right:0;
	background-color: red;
	text-align: center;
	vertical-align: center;
	display: flex;
	color:<?php echo $color4 ?>;
	font-family: "LithosPro";
}
div.center{
	margin: auto;
}
span.connectitle{
	font-size: 95%;
	color:<?php echo $color1 ?>;
	position: absolute;
	top:42%;
	right: 44%;
	font-family: "LithosPro";
	
}
section.cont_formulaire{
	position: absolute;
	bottom: 0;
	height: 85%;
	width: 100%;
	font-size: 15px;
	color:white;
	text-align: center;
	font-family: "LithosPro";
	
}
input.text{
	width: 20%;
	height:30px;
	border: 0;
	background-color:<?php echo $color2 ?>;
	border-radius: 5px;
	color:<?php echo $color4 ?>;
	font-family: "LithosPro";
	font-size: 12px;
	line-height: 20px;
	padding-left: 10px;
	cursor: pointer;
	position: relative;
	left: 5px;
	text-align: center;
	position: relative;
	top:-25px;
}
input.text:focus{
	width: 20%;
	outline: none;
	color:<?php echo $color2 ?>;
	font-family: "LithosPro";
	font-size: 12px;
	background-color: <?php echo $color4 ?>;
}
input.checkbox{
 	border:0;
 	width: 15px;
 	height: 15px;
 	position: relative;
 	top:2px;
 	color: <?php echo $color2 ?>;
	cursor: pointer;
 }
 label.checkbox{
 	cursor: pointer;
 	font-size: 15px;
 }
 a.lostpass{
 	color: <?php echo $color4 ?>;
 	font-size: 15px;
 }
 
input.connexion{
 	width: 10%;
	height:25px;
	border: 0;
	background-color:<?php echo $color2 ?>;
	border-radius: 5px;
	color:<?php echo $color4 ?>;
	font-family: "LithosPro";
	font-size: 10px;
	line-height: 20px;
	padding-left: 10px;
	cursor: pointer;
	position: relative;
	left: 150px;

}
input.connexion:hover{
	width: 10%;
	outline: none;
	color:<?php echo $color2 ?>;
	font-family: "LithosPro";
	font-size: 10px;
	background-color: <?php echo $color4 ?>;
}
section.cancel{
	width: 150px;
	height: 20px;
	margin: 0 auto;
	position: relative;
	background-color:<?php echo $color2 ?>;
	right: 150px;
	text-align: center;
	padding-top:6px;
	top: -10px;
	font-size: 10px;
	border-radius: 5px;
	cursor: pointer;

}
section.cancel:hover{
	background-color:<?php echo $color4 ?>;
}
a section.cancel:hover{
	color:<?php echo $color2 ?>;
}
a, a:visited, a:link, a:active{
	text-decoration: none;
	color:white;
}

</style>