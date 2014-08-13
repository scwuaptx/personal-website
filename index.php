<?php 
include_once('image.php')?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
		<title>Angelboy</title>
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link href='http://fonts.googleapis.com/css?family=Roboto:100italic,400' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="style.css">
		<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script src="scroll.js"></script>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
	<div class="navbar-header">
		<a class="navbar-brand" id="name" href="#">Angelboy</a>
	</div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	  <ul class="nav navbar-nav">
		<li><a id="Pro">Profile</a></li>
		<li><a id="Exp">Experience</a><li>
		<li><a id="Edu">Education</a></li>
		<li><a id="Int">Interest</a></li>
        <li><a id="Lin">Links</a></li>
	  </ul>
	<ul class="nav navbar-nav navbar-right">
		<li><img class="navbar-brand" id="avatar" src="<?php echo get_gravatar('scwuaptx@gmail.com');?>" alt=""></li>
	</ul>
	</div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
  </div>
</nav>
<div class="page" id="Profile">
	<div class="container">
			<div class="row">
				<div class="col-xs-12">
				<h1>Profile</h1>
				<HR>
				</div>
				<div class="col-xs-9">
				<h2>An-Jie Yang (Angelboy)</h2>
				<p>National Central University, Taiwan<br>
				E-mail : scwuaptx@gmail.com<br>
				</p>
				<h2>Advisor</h2>
				<p>
				<a href="http://in1.csie.ncu.edu.tw/~hsufh/">許富皓 Fu-Hau Hsu</a><br>
				Associate Professor at National Central University<br>
				</p>
				</div>
				<div class="col-xs-3">
				<img class="pic" id="headpic" src="image2.jpg" >
				</div>
			</div>
	</div>
</div>
<div class="page" id="Experience">
	<div class="container">	
	<h1>Experience</h1>
	<HR>
	<h2>Conference</h2>
	<p>
		COSCUP 2011-2012 場務組員<br>
		COSCUP 2013 門機組長<br>
		COSCUP 2014 攤位負責人<br>
		HITCON 2013-2014 場務組員<br>
		JSDC 2012-2013 場務組員<br>
		PHPconf 2011-2012 場務組員<br>
		PyconTW 2013 場務組員<br>
	</p>
	<h2>Member</h2>
	<p>
		Member of MozTW(Mozilla Taiwan Community)<br>
		Leader of Community of Networking and Open Source at NCU （中央大學網路開源社） 2013.6-2014.6<br>
	</p>
	<h2>Part-time</h2>
	<p>
		Network manager of Mathematics Computation Laboratory, National Central University 2010-2013<br>
	</p>
</div>
</div>
<div class="page" id="Education">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
			<h1>Education</h1>
			<HR>
			</div>
			<div class="col-xs-9">
			<h2>Master</h2>
			<p>
				<a href="http://adl.csie.ncu.edu.tw/">Advanced Defense Lab</a><br>
				Major in Computer Science and Information Engineering<br>
				National Central University<br>
			</p>
			<h2>Bachelor</h2>
			<p>
				Major in Mathematics<br>
				National Central University<br>
			</p>
			<h2>High School</h2>
			<p>
				National Taichung Second Senior High School<br>
			</p>
			</div>
			<div class="col-xs-3">
				<img class="pic" src="http://adl.csie.ncu.edu.tw/adlab/theme/default/graph/menu-shield.png">
			</div>
		</div>
	</div>
</div>
<div class="page" id="Interest">
	<div class="container">
		<h1>Interest</h1>
		<HR>
		<p>
			Network Security<br>
			Programing with Python<br>
			OpenSource<br>
			Embedded system Security<br>
		</p>
	</div>
</div>
	<div class="page" id="Links">
		<div class="container">
			<h1>Links</h1>
			<HR>
			<a href="https://github.com/scwuaptx">Github</a><br>
			<a href="https://www.facebook.com/scwuaptx">Facebook</a>
		</div>
	</div>
</body>
</html>

