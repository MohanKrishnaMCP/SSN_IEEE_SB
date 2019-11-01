<?php
include('navbar.php');
?>
<head>
	<style type="text/css">
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
  	<h1 style="color: white" class="display-2">About IEEE R10</h1>
  </div>
</div>

<div class="container"style="max-width:1000px;">
<p style="text-align: justify;">
Sri Sivasubramaniya Nadar College of Engineering (SSNCE), is located in Chennai, Tamil Nadu, India. The college is certified to ISO 9001:2000 standard by the National Board of Accreditation.
<br>
In March 2018, the college was granted autonomous status by UGC.
</p>
<p style="text-align: justify;">
SSN College of Engineering (SSNCE) is the outcome of the vision and initiative of Padma Bhushan Dr. Shiv Nadar, Chairman of HCL Technologies Ltd. The institution was established in 1996 on a sprawling campus of 250 acres on Rajiv Gandhi Salai (OMR) of Chennai. The institution offers eight B.E., / B.Tech. Degree programmes and eleven M.E. / M.Tech. degree programmes in addition to MBA. SSN Institutions stands out as a premier center of higher learning with a mission of pursuing excellence in education and research. The institutions, with their diverse and dynamic community of students offer a distinctive combination of some of the finest graduate, undergraduate and research programs, accomplished faculty, world class facilities and a residential campus set on a sprawling 250 acres of sylvan surroundings. SSN Institutions provide a variety of stimulating environments for intellectual development, free thinking, and personal growth, challenging its students with dynamic learning opportunities and equipping them with the skills, insights, attitudes and practical experiences that are necessary to take up responsibilities in the society
</p>

<div><p>To know more about IEEE R10<a href="https://www.ieeer10.org/"> Click here</a></p></div>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
	<!-- Carousel indicators -->
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>   
	<!-- Wrapper for carousel items -->
	<div class="carousel-inner">		
		<div class="item carousel-item active">
			<div class="img-box"><img src="/examples/images/clients/3.jpg" alt=""></div>
			<p class="testimonial">Phasellus vitae suscipit justo. Mauris pharetra feugiat ante id lacinia. Etiam faucibus mauris id tempor egestas. Duis luctus turpis at accumsan tincidunt. Phasellus risus risus, volutpat vel tellus ac, tincidunt fringilla massa. Etiam hendrerit dolor eget rutrum.</p>
			<p class="overview"><b>Michael Holz</b>Seo Analyst at <a href="#">OsCorp Tech.</a></p>

		</div>
		<div class="item carousel-item">
			<div class="img-box"><img src="/examples/images/clients/1.jpg" alt=""></div>
			<p class="testimonial">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor, varius quam at, luctus dui. Mauris magna metus, dapibus nec turpis vel, semper malesuada ante. Vestibulum idac nisl bibendum scelerisque non non purus. Suspendisse varius nibh non aliquet.</p>
			<p class="overview"><b>Paula Wilson</b>Media Analyst at <a href="#">SkyNet Inc.</a></p>

		</div>
		<div class="item carousel-item">
			<div class="img-box"><img src="/examples/images/clients/2.jpg" alt=""></div>
			<p class="testimonial">Vestibulum quis quam ut magna consequat faucibus. Pellentesque eget nisi a mi suscipit tincidunt. Utmtc tempus dictum risus. Pellentesque viverra sagittis quam at mattis. Suspendisse potenti. Aliquam sit amet gravida nibh, facilisis gravida odio. Phasellus auctor velit.</p>
			<p class="overview"><b>Antonio Moreno</b>Web Developer at <a href="#">Circle Ltd.</a></p>

		</div>		
	</div>
	<!-- Carousel controls -->
	<a class="carousel-control left carousel-control-prev" href="#carouselExampleIndicators" data-slide="prev">
		<i class="fa fa-angle-left"></i>
	</a>
	<a class="carousel-control right carousel-control-next" href="#carouselExampleIndicators" data-slide="next">
		<i class="fa fa-angle-right"></i>
	</a>
</div>



</div>

</body>