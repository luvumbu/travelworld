<?php
session_start();
include("class/php/ip.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
	include("link.html"); // ajout des liens externes 
	include("link_php.php"); // pour toutes les classe php 
	include("link_js.html"); // pour toutes les class Javascript
	?>
	<title>Bokonzi</title>
</head>

<body>
	<div id="body">
		<header>
			<?php
	 	include("model/header.php");
			?>
		</header>
		<section>
			<?php
			include("model/section.php");
			?>
		</section>
		<footer>
			<?php
			include("model/footer.php");
			?>
		</footer>
		<?php
		include("vue.html");
		?>
	</div>
</body>

<style>
		:root {
  --color1: #993333;
  --font-size1: 1.5em;
  /*--color1: #993333;
  --color1: #993333;
  --color1: #993333;
  --color1: #993333;

  --color1: #993333;
  --color1: #993333;
  --color1: #993333;
  --color1: #993333;
  --color1: #993333;*/
}
.color_style1{
	color: var(--color1);
	font-size: var(--font-size1);
	border-bottom: 1px solid  var(--color1); 
}

	#header_van_accueil{
		display: flex;
		position: relative;
		justify-content: flex-end;		
	}
	#header_van_accueil h1 {
		font-size: var( --font-size1);
		padding: 25px;
		color: white;
		transition: 1s all;
	}
	#header_van_accueil h1:hover {
 
		color: red;
		transition: 1s all;
	}
	.cursor-pointer{
		cursor: pointer;
	}
 
	#van_accueil{
		background-image: url("src/img/van_accueil.jpg");
		background-size: 135%;
		background-position-x: -120px;
		background-attachment: fixed;
	}
	#summer_logo{
		text-align: center;
	 
	}
	#summer_logo img{
		width: 600px;
		margin-bottom: 140px;
		margin-top: 140px;
	}
	.display_flex_around{
		display: flex;
		justify-content: space-around;
	}

	/*  
partie section 
	*/

	.color1{
		color: var(--color1);
	}
#info_destination{
	width: 80%;
	margin: auto;
 	padding: 40px;
}
#info_destination img {
	width: 150px;	
}
 #info_destination{
	 display: flex;
	 
 }
 #text_destination{
	 padding-top: 50px; 
	 padding-left: 50px; 
	 width: 100%;
 }
 #text_destination h2 {
	border-bottom: 1px solid  var(--color1); 
 }
 #coups_d_c{
	 background-color: orangered;
 }
 #coups_d_c h1 {
	 color: white;
	 font-size: var( --font-size1);
 }
 
 .coups_d_c_img_background{
    width: 300px;
	 background-color: white;
	 color: var(--color1);
	 font-size: var(--font-size1);
	 margin-bottom: 200px;
	 padding-bottom: 25px;
	 border-radius: 0 0 15px 15px;
	 margin: auto;
	 margin-bottom: 50px;
	 padding-bottom: 50px;
 
 }
 .coups_d_c_img_background h3{
	border-bottom: 1px solid  var(--color1); 
	width: 80%;
	 margin: auto;
	 margin-bottom: 45px;
	 padding-top: 20px;
	
 }
 .coups_d_c_img_background p {
	 color: black;
	 font-size: 0.8em;
	 padding: 10px;
 }
 .coups_d_c_img_background img {
	 width: 100%;
 }
 .lear_more{
	 color: var(--color1);
	float: right;
	padding-right: 20px;
 }
.depart_imminent_spaces{
	width: 80%;
	margin: auto;
	padding-top: 50px;
	padding-bottom: 50px;
}
.depart_imminent_spaces img {
	max-height: 300px;
	margin-top:50px; 
	margin-bottom:50px; 
}
 /* 
  
  section partie 2 

 */

 /* 

footer

 */
 footer {
	 background-color: #333333;
	 padding: 100px;
	 color: white;
 }
 footer img {
	 max-width: 300px;
	 margin-right: 20px;

 }
 .display_flex{
	 display: flex;
 }
 .margin-left{
	 padding-left: 20px;
	 border-left: 2px solid white;
 }
 @media screen and (max-width: 1280px)
{
	 .display_flex_around{
		display: block; 
	} 
	#van_accueil{ 
		background-size: 355%;	
		background-position-x: -450px; 
	 
	}
	#van_accueil img{ 
		width: 100%;
	}
}
  </style>

</html>