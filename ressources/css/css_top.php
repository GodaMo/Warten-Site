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
	margin: 0;
	padding: 0;
	color: white;
	font-family: "LithosPro";
	background-color: <?php echo $color1 ?>;
}
a, a:visited, a:link, a:active{
	text-decoration: none;
	color:white;
}
a:hover{
	color:white;
	opacity: 0.5;
}
div.center{
	margin: auto;
}
/*END General*/

/*NavTop*/
section.cont_barreprogress{
	width:100%;
	height:3px;
	background-color: <?php echo $color3 ?>;
}
section.cont_visueltop{
	width: 100%;
	height: 250px;
	background-color: <?php echo $color1 ?>;
}
section.cont_midtop{
	width: 1200px;
	height: 100%;
	margin: 0 auto;	
}
/*Coté gauche*/
section.cont_parentimglogo{
	width: 182px;
	height: 75%;
	float: left;
	margin-top: 10px;
}
section.cont_imglogo{
	width: 182px;
	height: 50%;
	position: relative;
}
img.imglogo{
	margin-top: 25%; 
	transform: translateY(-25%);
	width: 210px;
	height: 100%;

}
section.sponsored{
	font-size: 10px;		
}
section.cont_rsparentplacement{
	position: absolute;
	z-index: 5;
	width: 125px;
	height: 21px;
	top:25px;
	left: 150px;
}
section.cont_rsplacement{
	position: relative;
	width: 100%;
	height: 100%;
}
img.reseauxtop{
	height: 100%;
	margin-right: 5px;
}
img.reseauxtop:last-of-type{
	margin-right:  0px;
}
section.cont_sponsorprimaryparent{
	width: 280px;
	height: 60px;
	position: relative;
	top: -15px;
}
img.sponsortop{
	width: 90px;
	height: 100%;
	margin-right:2px; 
	margin-top: 15px;

}
img.sponsortop:last-of-type{
	margin-right: 0px;
}
/*Coté droit*/
section.cont_gauche{
	width: 350px;
	height: 100%;
	float: right;
	position: relative;
}
section.cont_logparent{
	opacity: 0.2;
	width: 300px;
	height:35px; 
	float:right;
	margin-top: 20px;
	font-size: 15px;
	position: relative;
	left:90px;
}
section.cont_drapeau{
	float: left;
	width: 40px;
	height: 25px;
	margin-top: 30px;
	position: relative;
	left:90px;
}
img.drapeau{
	float: left;
	width: 100%;
	height: 100%;
	opacity: 0.5;
}
section.cont_parentrecherche{
	position: absolute;
	width: 340px;
	height: 90px;
	bottom: 8px;
	right: 15px;
	font-size: 8px;
	opacity:0.8;
}
input.input_search{
	width: 100%;
	height:20px;
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
	left: 5px;
}
input.input_search:focus{
	width: 100%;
	outline: none;
	color:<?php echo $color2 ?>;
	font-family: "LithosPro";
	font-size: 10px;
	background-color: <?php echo $color4 ?>;
}
input.input_rechercher{
	position: absolute;
	bottom: 0;
	right:-15px;
	border:0;
	background-color: <?php echo $color4 ?> ;
	color:<?php echo $color2 ?>;
	padding: 8px;
	font-size: 10px;
	border-radius: 8px;
	font-family: "LithosPro";
	width: 85px;
	height: 25px;
	cursor: pointer;
}
/*Sponsor*/
section.cont_sponsor{
	background-color: <?php echo $color2 ?>;
	width: 100%;
	height: 170px;
	float: left;
}
section.cont_centresponsor{
	width: 1200px;
	height: 150px;
	margin: 0 auto;
	position: relative;
	top:10px;
	position: relative;
	left:65px;
}
img.sponsor{
	width: 175px;
	height: 150px;
	margin-right:30px;
}
img.sponsor:last-of-type{
	margin-right: 0px;
}
/*Navigation*/
section.cont_nav{
	float: left;
	width: 100%;
	height: 45px;
	background-color: <?php echo $color3 ?>;
}
nav.nav{
	width: 1200px;
	height: 45px;
}

ul.menu{
	float:right;
	position: relative;
	left: 120px;
}
li.bouton{
	display: inline;
	font-size: 12px;
	margin-left: 15px;
	cursor: pointer;
}
li.bouton:hover{
	opacity: 0.7;
}

</style>