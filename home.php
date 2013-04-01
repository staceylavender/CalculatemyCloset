<!--Home page--> 
<?php include('header.php');?> 
<head>
    <title>Calculate My Closet</title>
    <link rel='stylesheet' type='text/css' href='stylesheet.css'/>
<head>
<body>
	<div class="button">
    	<a href="createaccount.php">Lets Get Started!</a>
    </div>
    <div class="button">
    	<a href="about.php">What is this?</a>
	</div>
</body>

<script>
	$(document).ready(function(){
    	$('.button').mouseenter(function(){
        	$('.button').fadeTo('slow', 0.5);
    	});
    	$('.button').mouseleave(function(){
        	$('.button').fadeTo('slow', 1);
    	});
	});
    </script>

</html>
