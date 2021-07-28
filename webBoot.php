<!DOCTYPE html>
<html>
<?php  include('db.php'); ?>

<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
section{
	padding: 60px 0;
}
section .section-title{
	text-align:center;
	color:#007b5e;
	margin-bottom:50px;
	text-transform:uppercase;
}
#header{
	background:#ffffff;
}
#header .card{
	padding: 1rem!important;
	border: none;
	margin-bottom:1rem;
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
#header .card:hover{
	-webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
	-moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
	box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}
#header .card .card-block{
	padding-left: 50px;
    position: relative;
}
#header .card .card-block a{
	color: #007b5e !important;
	font-weight:700;
	text-decoration:none;
}
#header .card .card-block a i{
	display:none;
	
}
#header .card:hover .card-block a i{
	display:inline-block;
	font-weight:700;
	
}
#header .card .card-block:before{
	font-family: FontAwesome;
    position: absolute;
    font-size: 39px;
    color: #007b5e;
    left: 0;
	-webkit-transition: -webkit-transform .2s ease-in-out;
    transition:transform .2s ease-in-out;
}
#header .card .block-1:before{
    content: "\f0e7";
}
#header .card .block-2:before{
    content: "\f0eb";
}
#header .card .block-3:before{
    content: "\f00c";
}
#header .card .block-4:before{
    content: "\f209";
}
#header .card .block-5:before{
    content: "\f0a1";
}
#header .card .block-6:before{
    content: "\f218";
}
#header .card:hover .card-block:before{
	-webkit-transform: rotate(360deg);
	transform: rotate(360deg);	
	-webkit-transition: .5s all ease;
	-moz-transition: .5s all ease;
	transition: .5s all ease;
}
</style>
</head>
<body>
<?php
require('db.php');
?> 

<section id="header">
<div class="container-fluid">
<h2 class="section-title mb-2 h1">Welcome</h2>
<p class="text-center text-muted h5">$username</p>
  <div class="row mt-5">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
      <div class="card">
        <div class="card-block block-1">
        <h3 class="card-title">Announcements</h3>
	   
	    <a href="viewAnn.php" title="Click to View" class="read-more" >Click to View<i class="fa fa-angle-double-right ml-2"></i></a>
       </div>
     </div>
   </div>
	
<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
	<div class="card">
		<div class="card-block block-2">
		<h3 class="card-title">Special title</h3>
		<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
		<a href="https://www.fiverr.com/share/qb8D02" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
        </div>
    </div>
</div>
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
		<div class="card">
			<div class="card-block block-3">
			<h3 class="card-title">Special title</h3>
			<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			<a href="https://www.fiverr.com/share/qb8D02" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
        </div>
    </div>
</div>
</div>
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
			<div class="card">
				<div class="card-block block-4">
				<h3 class="card-title">Special title</h3>
				<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
				<a href="https://www.fiverr.com/share/qb8D02" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
		<div class="card">
			<div class="card-block block-5">
			<h3 class="card-title">Special title</h3>
			<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			<a href="https://www.fiverr.com/share/qb8D02" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 col-xl-4">
		<div class="card">
			<div class="card-block block-6">
			<h3 class="card-title">Special title</h3>
			<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
			<a href="https://www.fiverr.com/share/qb8D02" title="Read more" class="read-more" >Read more<i class="fa fa-angle-double-right ml-2"></i></a>
			</div>
		</div>
	</div>
</div>
</div>	
</section>
</body>