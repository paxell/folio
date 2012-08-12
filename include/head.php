<!DOCTYPE html>

<html>
<head>

<meta http-equiv="Content-type" content="text/html;charset=UTF-8">

<title>Paxell: The portfolio of Eleanor Paxman, interaction designer and developer</title>

<meta name="viewport" content="width=device-width, initial-scale=1"/>

<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js' type='text/javascript'></script>
<script src='js/lightbox.js' type='text/javascript'></script>
<!-- allows html5 sectioning elements in IE etc -->
<script src='js/html5shiv.js' type='text/javascript'></script>
<!-- allows css3 media queries in IE etc - currently not working -->
<script src='js/css3-mediaqueries.js' type='text/javascript'></script>
<!--swipe action for home page -->
<script src='js/jquery.flexslider-min.js' type='text/javascript'></script>

<script>
	$(window).load(function() {
		$('.flexslider').flexslider();
	  });
	$(document).ready(function() {
		var urlSplit = document.URL.split("/");
		var currentPage = urlSplit[urlSplit.length -1];
		$("nav a[href$='"+currentPage+"']").addClass("active");
		if (currentPage !== "index.php" && currentPage !== "") {
			$("header .logo").addClass("compact");
			$("nav").addClass("inner");
		};
		
		// Use alt tags as titles
		$('.work a img').each(function() {
			$(this).after('<div class="workcaption">' + $(this).attr('alt') + '</div>');	
		});
		
		/*$('.id a img').hover(function() {
			var imgalt = $(this).attr('alt');
			//needs to be specific to this caption's div
			$('.idcap').html(imgalt);
		});*/

	});
</script>

<link rel='shortcut icon' href='images/favicon.png'>
<link href='css/style.css' rel='stylesheet' type='text/css'>
<link href='css/flexslider.css' rel='stylesheet' type='text/css'>
<link href='css/lightbox.css' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>

</head>

<body>

	<header>
		<div class='logo'><div id='tagline'>the work of Eleanor Paxman:<br />interaction designer and developer</div></div>
		<nav>
			<a href='index.php'>home</a>
			<a href='work.php'>work</a>
			<a href='links.php'>links</a>
			<a href='contact.php'>contact</a>
			<div class='clear'></div>
		</nav>
		<div class='clear'></div>
	</header>
