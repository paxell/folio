<?php include('include/head.php'); ?>
<script>
$(function() {
	$('.workimg').hover(function() {
		var imgalt = $(this).attr('alt');
		$('.caption').html(imgalt);
	});
});
</script>

<h1>My work</h1>

<div class='imgcont work'>
	<h2>Graphic Design</h2>
	<a class='workimg' href='number_case.php'><img src='images/nc-2.jpg' alt='The Number Case'></a>
	<a href='botanical_art.php'><img src='images/basq-2.png' alt='Botanical Art Queensland'></a>
	<a href='number_case.php' class='last'><img src='images/nc-2.jpg' alt='The Number Case'></a>
	<div class='caption'></div>
</div>

<div class='imgcont work'>
	<h2>Web Development</h2>
	<a href='botanical_art.php'><img src='images/basq-2.png' alt='Botanical Art Queensland'></a>
	<a href='another_world.php' class='last'><img src='images/nc-2.jpg' alt='Another World'></a>
</div>

<div class='imgcont work last'>
	<h2>Game Design</h2>
	<a href='another_world.php' class='last'><img src='images/nc-2.jpg' alt='Another World'></a>
	<a href='botanical_art.php'><img src='images/basq-2.png' alt='Botanical Art Queensland'></a>
	<a href='number_case.php' class='last'><img src='images/nc-2.jpg' alt='The Number Case'></a>
</div>

<!--<h2>Interface design?</h2>-->
<!--<h2>Illustration?</h2>-->

<div class='clear'></div>

<?php include('include/foot.php'); ?>