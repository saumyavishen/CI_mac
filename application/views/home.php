<<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>pagePiling.js plugin - Looping</title>
	<meta name="author" content="Alvaro Trigo Lopez" />
	<meta name="description" content="pagePiling.js plugin by Alvaro Trigo." />
	<meta name="keywords"  content="pile,piling,piling.js,stack,pages,scrolling,stacking,touch,fullpile,scroll,plugin,jquery" />
	<meta name="Resource-type" content="Document" />

	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/jquery.pagepiling.css') ?>" />
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/examples.css') ?>" />

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url('assets/jquery.pagepiling.min.js') ?>"></script>
	<script type="text/javascript">
		var deleteLog = false;

		$(document).ready(function() {
	    	$('#pagepiling').pagepiling({
	    		menu: '#menu',
	    		anchors: ['page1', 'page2', 'page3'],
			    sectionsColor: ['#bfda00', '#2ebe21', '#2C3E50', '#51bec4'],
			    loopTop: true,
			    loopBottom: true
			});
	    });
    </script>
</head>
<body>

	<ul id="menu">
		<li data-menuanchor="page1" class="active"><a href="#page1">Page 1</a></li>
		<li data-menuanchor="page2"><a href="#page2">Page 2</a></li>
		<li data-menuanchor="page3"><a href="#page3">Page 3</a></li>
	</ul>

	<div id="pagepiling">
	    <div class="section" id="section1">
	    	<h1>pagePiling.js</h1>
			<p>Looping top and bottom enabled</p>
	    </div>
	    <div class="section" id="section2">
	    	<div class="intro">
	    		<h1>Looping!</h1>
				<p>Go to the first section and scroll up or to the last one and scroll down to see how it works.</p>
	    	</div>
	    </div>
	    <div class="section" id="section4">
	    	<div class="intro">
	    		<h1>Scroll Down</h1>
				<p>And it will loop to the first section</p>
	    	</div>
	    </div>
	</div>

</body>
</html>
