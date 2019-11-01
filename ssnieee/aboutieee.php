<?php
include('navbar.php');
?>
<head>
	<style type="text/css">

.body{
position: relative;
min-height: 100vh
}
.jumbotron{
	background-image: url("ieee1.png");
	background-color: #0C4259;
	height: 50vh;
	overflow: auto;
	background-position: center;
  background-size: cover;
}

.carousel {
	width: 650px;
	margin: 0 auto;
	padding-bottom: 50px;
}
.carousel .item {
	color: #999;
	font-size: 14px;
    text-align: center;
	overflow: hidden;
    min-height: 340px;
}
.carousel .item a {
	color: #eb7245;
}
.carousel .img-box {
	width: 145px;
	height: 145px;
	margin: 0 auto;
	border-radius: 50%;
}
.carousel .img-box img {
	width: 100%;
	height: 100%;
	display: block;
	border-radius: 50%;
}
.carousel .testimonial {	
	padding: 30px 0 10px;
}
.carousel .overview {	
	text-align: center;
	padding-bottom: 5px;
}
.carousel .overview b {
	color: #333;
	font-size: 15px;
	text-transform: uppercase;
	display: block;	
	padding-bottom: 5px;
}
.carousel .carousel-control {
	width: 30px;
	height: 30px;
	border-radius: 50%;
    background: #999;
    text-shadow: none;
	top: 4px;
}
.carousel-control i {
	font-size: 20px;
	margin-right: 2px;
}
.carousel-control.left {
	left: auto;
	right: 40px;
}
.carousel-control.right i {
	margin-right: -2px;
}
	/*.carousel .carousel-indicators {
		bottom: 15px;
	}
	.carousel-indicators li, .carousel-indicators li.active {
		width: 11px;
		height: 11px;
		margin: 1px 5px;
		border-radius: 50%;
	}
	.carousel-indicators li {	
		background: #e2e2e2;
		border-color: transparent;
	}
	.carousel-indicators li.active {
		border: none;
		background: #888;		
	}*/

	</style>
</head>

<body>

<div class="jumbotron jumbotron-fluid text-center">
  <div class="container" style="margin-top:60px;">
  	<h1 style="color: white" class="display-2">About IEEE</h1>
  </div>
</div>

<div class="container"style="max-width:1000px;">
<p style="text-align: justify;">
IEEE - Institute of Electrical and Electronics Engineers is a global organization that consists of experienced professionals, scientists, researchers and students. IEEE is an association dedicated to advancing innovation and technological excellence for the benefit of humanity and it is the world's largest technical professional society. It is designed to serve professionals involved in all aspects of the electrical, electronic, and computing fields and related areas of science and technology that underlie modern civilization. However, as the world's largest technical professional association, IEEE's membership has long been composed of engineers, scientists, and allied professionals. These include computer scientists, software developers, information technology professionals, physicists, medical doctors, and many others in addition to IEEE's electrical and electronics engineering core. For this reason the organization no longer goes by the full name, except on legal business documents, and is referred to simply as IEEE.
<br><br>
As students you will be able to organize and participate in activities conducted by IEEE. If you want to learn or read about latest research you can purchase subscriptions from IEEE for fields you maybe interested in and read more about them. Moreover, you can conduct workshops and events for students on behalf of IEEE and participate in other events or even make projects that are funded by IEEE. Most of the information about events are usually conveyed through e-mails.
</p>
<p style="text-align: justify;">
<strong>Mission: </strong>IEEE's core purpose is to foster technological innovation and excellence for the benefit of humanity.<br>
<strong>Vision: </strong>IEEE will be essential to the global technical community and to technical professionals everywhere, and be universally recognized for the contributions of technology and of technical professionals in improving global conditions.
</p>

<div><p>If you want to learn more about IEEE and their activities<a href="http://www.ieee.org/"> Click here</a></p></div>

</div>

</body>

<?php
include('cont.php')
?>