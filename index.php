<?
include "header.php";
?>
<!DOCTYPE html>
<html lang="<?=$_SESSION['lang']?>">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
		<title><?=$string['TITLE']?></title>
<style>
html, body {

	margin: 0;
	padding: 0;
	font-family: Arial, Helvetica, sans-serif;
	overflow-x: hidden;
}
nav {
	left: 0;
	top: 0;
	z-index: 100;
	position: fixed;
	width: 100vw;
	font-size: 13px;
	background-color: rgba(0,0,0,0.5);
}
nav ul {
	margin: 0;
	padding: 0;
	height: 50px;
	list-style-type: none;
    display: flex;             /* establish flex container */
    align-items: center;       /* center ul container vertically */
   // justify-content: center;   /* center ul container horizontally (optional) */
   justify-content:space-between;
}
nav li {
vertical-align:middle;
}

nav li:first-child { 
    padding-left: 20%;
}

nav li:last-child { 
    padding-right: 20%;
}


nav li a {
	color: white;
	text-align: center;
	vertical-align:middle;
	text-decoration: none;

}
nav li a:hover {
	color: silver;
}
nav li .active {
	font-weight: bold;
}


header {
left: 0px;
top: 0px;
	width: 100vw;
	height: 100vh;
	background-color: black;
}
/*
@media (max-width: 1023px), (orientation: portrait) {
nav ul {
	margin: 0;
	padding: 0;
	height: 10px;
	list-style-type: none;
    display: inline;
}
nav li {
padding: 10px;
	text-align: center;
}
nav li:first-child, nav li:last-child { 
    padding-left: 0;
    padding-right: 0;
}
}
@keyframes fadeIn {
   // from { opacity: 0.5; }
   //   to { opacity: 1; }
}
.mySlides {
    animation: leftani 1.5s;
            transition: left 2s;
	}
@keyframes leftani {
    0%   {left: -100%;}
    100% {left: 0px;}
}
*/

.slideBox {

	margin: 0;
	padding: 0;
transition: left 1s;
    animation: leftani 1s;
	}
@keyframes leftani {
    0%   {left: -200vw;}
    100% {left: 0px;}
}
.slideBadge {
cursor: pointer;
height:15px;width:15px;padding:0;margin:0;display:inline-block;
border-radius:50%;border: 1px solid white;
vertical-align:text-top;
}
.slideBadge:hover{
background-color:white;
}
</style>	




<script>
var slideIndex = 1;
slideAuto = setTimeout(slideForward, 3000);

function slideBack() {
	clearTimeout(slideAuto);
	if(slideIndex == 1) {
		document.getElementById("slideBox").style.left = "-200vw";
		document.getElementById("slideBadge1").style.backgroundColor = "";
		document.getElementById("slideBadge3").style.backgroundColor = "white";
		slideIndex = 3;
	} else if(slideIndex == 2) {
		document.getElementById("slideBox").style.left = "0px";
		document.getElementById("slideBadge2").style.backgroundColor = "";
		document.getElementById("slideBadge1").style.backgroundColor = "white";
		slideIndex--;
	} else {
		document.getElementById("slideBox").style.left = "-100vw";
		document.getElementById("slideBadge3").style.backgroundColor = "";
		document.getElementById("slideBadge2").style.backgroundColor = "white";
		slideIndex--;
	}
	slideAuto = setTimeout(slideForward, 3000);
}

function slideForward() {
	clearTimeout(slideAuto);
	if(slideIndex == 1) {
		document.getElementById("slideBox").style.left = "-100vw";
		document.getElementById("slideBadge1").style.backgroundColor = "";
		document.getElementById("slideBadge2").style.backgroundColor = "white";
		slideIndex++;
	} else if(slideIndex == 2) {
		document.getElementById("slideBox").style.left = "-200vw";
		document.getElementById("slideBadge2").style.backgroundColor = "";
		document.getElementById("slideBadge3").style.backgroundColor = "white";
		slideIndex++;
	} else {
		document.getElementById("slideBox").style.left = "0px";
		document.getElementById("slideBadge3").style.backgroundColor = "";
		document.getElementById("slideBadge1").style.backgroundColor = "white";
		slideIndex = 1;
	}
	slideAuto = setTimeout(slideForward, 3000);
}

function slideMove(n) {
	clearTimeout(slideAuto);
	if(n == 1) {
		document.getElementById("slideBox").style.left = "0px";
		document.getElementById("slideBadge1").style.backgroundColor = "white";
		document.getElementById("slideBadge2").style.backgroundColor = "";
		document.getElementById("slideBadge3").style.backgroundColor = "";
		slideIndex = 1;
	} else if(n == 2) {
		document.getElementById("slideBox").style.left = "-100vw";
		document.getElementById("slideBadge1").style.backgroundColor = "";
		document.getElementById("slideBadge2").style.backgroundColor = "white";
		document.getElementById("slideBadge3").style.backgroundColor = "";
		slideIndex = 2;
	} else {
		document.getElementById("slideBox").style.left = "-200vw";
		document.getElementById("slideBadge1").style.backgroundColor = "";
		document.getElementById("slideBadge2").style.backgroundColor = "";
		document.getElementById("slideBadge3").style.backgroundColor = "white";
		slideIndex = 3;
	}
	slideAuto = setTimeout(slideForward, 3000);
}


</script>
	</head>
	<body onselectstart="return false;">
		<nav>
			<ul>
				<li><a href="mailto:Junghwan_Kim@student.uml.edu" class="active"><?=$string['MENU_HOME']?></a></li>
				<li><a href="tripplanner" target="_blank"><?=$string['MENU_PRO1']?></a></li>
				<li><a href="twitter" target="_blank"><?=$string['MENU_PRO2']?></a></li>
				<li><a href="wowzer/home_1.php" target="_blank"><?=$string['MENU_PRO3']?></a></li>
				<li><a href="resume.pdf" target="_blank"><?=$string['MENU_RESUME']?></a></li>
        <!--
				<li><a href="#"><?=$string['MENU_ABOUT']?></a></li>
				<li><a href="#"><?=$string['MENU_LINKEDIN']?></a></li>
				<li><a href="#"><?=$string['MENU_RESEARCH']?></a></li>
				<li><a href="#"><?=$string['MENU_PROJECT']?></a></li>
				<li><a href="#"><?=$string['MENU_GITHUB']?></a></li>
				<li><a href="#"><?=$string['MENU_SERVICE']?></a></li>
				<li><a href="#"><?=$string['MENU_CONTACT']?></a></li>
        -->
			</ul>
			<div style="height: 50px; position: fixed; top:0px; right: 0px;line-height: 50px; color:white; padding-right: 5%;"><img src="<?=$string['MENU_FLAG']?>.png" style="vertical-align:middle; height: 30px; width: 30px;"> <img src="<?=$string['MENU_FLAG_SND']?>.png" style="vertical-align:middle; height: 30px; width: 30px;cursor: pointer;" onclick="location.href='language.php';"></span></div>
		</nav>
		<header style="position:relative;">
			<div id="slideBox" class="slideBox" style="position:relative; left:0px;width:300vw;height: 100vh;">
				<div style="float:left;background-image: url('img/001.jpg');background-size: 100% 100%;top:0px;width:100vw;height: 100%;"></div>
				<div style="position:relative;float:left;background-image: url('img/002.jpg');background-size: 100% 100%;top:0px;width:100vw;height: 100%;"></div>
				<div style="position:relative;float:left;background-image: url('img/003.jpg');background-size: 100% 100%;top:0px;width:100vw;height: 100%;"></div>
			</div>
			<div class="" style="text-align:center; width:100%; margin-bottom:10px;position:absolute;bottom:0;color:white;">
			<span style="cursor: pointer;margin-right:1%;" onclick="slideBack();">&#10094;</span>
    <span class="slideBadge"  id="slideBadge1" style="background-color: white;" onclick="slideMove(1);"></span>
    <span class="slideBadge" id="slideBadge2" onclick="slideMove(2);"></span>
    <span class="slideBadge" id="slideBadge3" onclick="slideMove(3);"></span>
			<span style="cursor: pointer;margin-left:1%;" onclick="slideForward();">&#10095;</span>
  </div>
		</header>
	</body>
</html>