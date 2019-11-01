<!--	 ______________		 ______      ____   ____________________
		/| |/////////| |	/|	|  \    /|  |  /|				   |
		/| |		/| |	/|	|\  \   /|  |  /|________   _______|
		/| |________/| |	/|	|/\  \  /|  |  /_______/|   |______/
		/| |/////////| |	/|	| /\  \ /|  |		   /|   |
		/| |		/| |	/|	|  /\  \/|  |		   /|   |
		/| |	   	/| |	/|	|   /\  \|  |		   /|   |		
		/| |		/| |	/|	|    /\     |		   /|   |
		/|_|		/|_|	/|__|     /\____|		   /|___|
		////		////	////	   /////		   //////                 -->

<!DOCTYPE html>

<html>

<head>
	  <title>IEEE SB</title>
	  <script
  src="http://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
	<!--   <link rel="stylesheet" type="text/css" href="style.css">
	  <link rel="stylesheet" type="text/css" href="style2.css">
	    <link rel="icon" href="">
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Open Sans' rel='stylesheet'>
	<link href='https://fonts.googleapis.com/css?family=Russo One' rel='stylesheet'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js" integrity="sha384-SlE991lGASHoBfWbelyBPLsUlwY1GwNDJo3jSJO04KZ33K2bwfV9YBauFfnzvynJ" crossorigin="anonymous"></script>
 -->
</head>

<body style="overflow-x: hidden;">

<?php
include("navbar.php");
include("connection.php")
?>

<div id="home" class="jumbotron bg1 jumbotron-fluid " style="margin-bottom: 0px;height: 100vh;background-color: #333;">
<br><br> 
    <a href="https://www.ieee.org/"><img class="place" style="width: 100px; height: 35px;" src="ieee.png"></a>
      <a href="http://www.ssn.edu.in/"> <img class="place1" style="float:right; width: 100px; height: auto;" src="ssnlogo.png"></a>
 <div class="container">
 	<br><br><br><br><br><br><br>
    <h1 class="display-4 box text-center">SSN IEEE Student Branch</h1>
    <p class="lead "></p>
  </div>
</div>


<style type="text/css">
	#sidenav a {
  position: fixed; /* Position them relative to the browser window */
  right: 30px; /* Position them outside of the screen */
  transition: 0.3s;
  font-size: 30px;
}

#sidenav a:hover {
  right: 20px; /* On mouse-over, make the elements appear as they should */
}

/* The about link: 20px from the top with a green background */
#nhome {
  top: 180px;
}

#nnews {
  top: 240px;
}

#nchart {
  top: 300px;
}

#ntest {
  top: 360px;
}
</style>
<div id="sidenav" class="sidenav">
  <a href="#home" id="nhome"><i class="fas fa-home"></i></a>
  <a href="#news" id="nnews"><i class="far fa-newspaper"></i></a>
  <a href="#growth" id="nchart"><i class="far fa-chart-bar"></i></a>
<!--   <a href="#testimonial" id="ntest"><i class="far fa-sticky-note"></i></a> -->
</div>


<div class="container text-center">
	<br><br>
<div id="count" class="row ">

<div class="col-sm-4">
	<div class=" cent">
			<div class="box3">
			<i class="fas fa-users pad1" style="opacity: .8"></i>
		</div>
		<br>
	</div>
		<h3 id="mem" style="font-size: 25px">0 Members</h3>
	</div>

<div class="col-sm-4">
	<div class="cent">
			<div class="box3">
			<i class="far fa-calendar-check pad1" style="opacity: .8"></i>
		</div>
		<br>
	</div>
		<h3 id="eve" style="font-size: 25px">0+ Events</h3>
</div>

<div class="col-sm-4">
	<div class="cent">
			<div class="box3">
			<i class="fas fa-globe pad1" style="opacity: .8"></i>
		</div>
		<br>
	</div>
		<h3 id="soc" style="font-size: 25px">0 Societies</h3>
</div>

</div>
<br><br>
</div>

<br><br><br>

<style type="text/css">
	
.holder { 
  background-color:white;
  width:100%;
  height:250px;
  overflow:hidden;
  padding:10px;
  font-family:Open Sans;
}
.holder .mask {
  position: relative;
  left: 0px;
  top: 10px;
  width:100%;
  height:240px;
  overflow: hidden;
}
.holder ul {
  list-style:none;
  margin:0;
  padding:0;
  position: relative;
}
.holder ul li {
  padding:10px 0px;
}
.holder ul li a {
  color: blue;
  text-decoration:none;
  font-size:20px;
}

</style>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>
jQuery.fn.liScroll = function(settings) {
	settings = jQuery.extend({
		travelocity: 0.03
		}, settings);		
		return this.each(function(){
				var $strip = jQuery(this);
				$strip.addClass("newsticker")
				var stripHeight = 1;
				$strip.find("li").each(function(i){
					stripHeight += jQuery(this, i).outerHeight(true); // thanks to Michael Haszprunar and Fabien Volpi
				});
				var $mask = $strip.wrap("<div class='mask'></div>");
				var $tickercontainer = $strip.parent().wrap("<div class='tickercontainer'></div>");								
				var containerHeight = $strip.parent().parent().height();	//a.k.a. 'mask' width 	
				$strip.height(stripHeight);			
				var totalTravel = stripHeight;
				var defTiming = totalTravel/settings.travelocity;	// thanks to Scott Waye		
				function scrollnews(spazio, tempo){
				$strip.animate({top: '-='+ spazio}, tempo, "linear", function(){$strip.css("top", containerHeight); scrollnews(totalTravel, defTiming);});
				}
				scrollnews(totalTravel, defTiming);				
				$strip.hover(function(){
				jQuery(this).stop();
				},
				function(){
				var offset = jQuery(this).offset();
				var residualSpace = offset.top + stripHeight;
				var residualTime = residualSpace/settings.travelocity;
				scrollnews(residualSpace, residualTime);
		});			
	});
};

$(function(){
    $("ul#ticker01").liScroll();
});
</script>

<div class="container-fluid"  id='news' style="background-image: url('images/news.jpg');background-attachment: fixed;background-color: #767D80;">
	<br><br>
<?php
$sql="SELECT * FROM news";
$stmt = $db->prepare($sql);
$stmt->execute();


echo "<div class='container text-center'>
<h1 style='letter-spacing:7px; font-size:40px; color:#55A9F3;'> NEWS</h1><br>
<div class='holder'  style='max-width:600px; margin:0px auto;border: 1px solid lightgrey;box-shadow: 5px 10px #888888; border-radius:7px;'>
  <ul id='ticker01'>";
  while($all = $stmt->fetch(PDO::FETCH_ASSOC)){
							echo "
							<li style='text-align:left; margin:0px 10px; border-bottom:1px solid grey'><a href='".$all['link']."' style=' color:#55A9F3;'>".$all['description']."</a>&nbsp&nbsp<br><span style='font-size:10px;color:grey;'>".$all['dates']."</span></li>";}
							
				echo"</ul>
</div>
</div>";
							
$db=null;
?><br><br><br><br>
</div>

			<br><br><br><br>
<div class="container">
	<div class="row">

		<div class="col-sm-4 text-center">
			<br><br>
			<img id="ob" class="box0" src="images/ob12.JPG" style="transform:rotate(0deg);width: 200px; height: 200px;"><br><br>
			<p style="color: #1088F2;">Chair, SSN IEEE SB</p>
		</div>
		<div class="col-sm-8">
			<p style="color: #55A9F3; font-style: italic; font-size: 30px;">MESSAGE FROM CHAIR</p>
			<p style="text-align: justify;" class="slide">SSN IEEE Student Branch is one of the most actively working Student Branches in the Madras Section with three societies (Computer Society, Communication Society, Engineering in Medicine and Biology Society) and one affinity group (Women in Engineering) working in unison. The numerous events organised throughout the year is a testament to its accomplishments. The student Branch is well structured heirarchially with core committee and other committee coordinating a plethora of events through its assiduous student volunteers. to It includes active participation of many student volunteers who handle all activities professionally and efficiently. All the members get equal and fair opportunities and it lays an important platform for self-development and in holistic development of its members. I've been part of the student branch for the past two years and I've contributed to its growth and witnessed its immense strides. Currently, I hold the position of Chair Person of SSN IEEE Student Branch. We organized many technical, non-technical and humanitarian activities with a sole aim for the betterment of the lives of people in every possible way. It is clearly evident from the India Council Outstanding Student Branch Award, 2018 that the branch earned.</p>
		</div>

	</div>
	
</div>


<div id="growth" class="container-fluid">
	<br><br><br><br>
<div class="text-center container">
<h2 class="text-center" style="letter-spacing: 7px; font-size: 30px; color:">Our Growth Over the Years</h2><br>
<br><br>
	<div class="row">

<div id="gb" class="col-sm-6" style="transform: scaleY(-1);">

	<div style="width:250px;margin: 0px auto; border-left: 1px solid black; border-top: 1px solid black; display: inline-flex; height: 250px;">
		<div>
	<p style="transform: scaleY(-1);margin-top: -40px;">2016</p>
<div style="transform: scaleY(-1);color:white;" class="gb gb1">
	<p>310</p>
</div>
		</div>
		<div>
			<p style="transform: scaleY(-1);margin-top: -40px;">2017</p>
		<div style="transform: scaleY(-1);color:white;"class="gb gb2">
	<p>358</p>
		</div>
		</div>
		<div>
		<p style="transform: scaleY(-1);margin-top: -40px;">2018</p>
<div style="transform: scaleY(-1);color:white;" class="gb gb3">
	<p>416</p>
</div>
		</div>
	</div>
</div>


<div class="col-sm-6">
<h1 style="text-align: justify;letter-spacing: 5px; color: #F26910;">Members</h1>

<p style="text-align: justify; letter-spacing: 2px;" class="slide">
Our Student branch started with an initial members of 10 in 1998. Now, we have over 420 active members under our banner as IEEE volunteer. Our membership growth has been constantly in the upward direction, since 1998. We had 310 members in 2016, 358 in 2017 and 422 members in 2018 which includes 96 staff members and 326 student members.
</p>

</div>

	</div>
	<br><br><br>

<!-- 2nd GRAPH -->

<div class="row">

<div class="col-sm-6">
<h1 style="text-align: justify; letter-spacing: 5px; color: #F26910;">Events</h1>

<p style="text-align: justify; letter-spacing: 2px;" class="slide">
	Our Student branch has organised 300+ events over the years. We have organised 30 events in 2015, 36 events in 2016 and 55 in 2017. In 2018, we have organised 24 events and we are hoping to do much more in this year. As you could see our growth rate is impressive and we hope to maintain the same pace throughout.
 
</p>
</div>

<div id="gb" class="col-sm-6" style="transform: scaleY(-1);">

	<div style="width:250px;margin: 0px auto; border-left: 1px solid black; border-top: 1px solid black; display: inline-flex; height: 290px;">
		<div>
	<p style="transform: scaleY(-1);margin-top: -40px;">2016</p>
<div style="transform: scaleY(-1);color:white;" class="gb gc1">
	<p>30</p>
</div>
		</div>
		<div>
			<p style="transform: scaleY(-1);margin-top: -40px;">2017</p>
		<div style="transform: scaleY(-1);color:white;"class="gb gc2">
	<p>36</p>
		</div>
		</div>
		<div>
		<p style="transform: scaleY(-1);margin-top: -40px;">2018</p>
<div style="transform: scaleY(-1);color:white;" class="gb gc3">
	<p>55</p>
</div>
		</div>
	</div>
</div>

	</div>
	<br><br>
</div>
</div>

<div class="container-fluid" style="background-image: url('images/awards.png');background-color: white; background-size: cover;background-position: center;background-attachment:fixed;">
<div class="container text-center" style="margin: 50px auto;">
	<div class="text-center">
		<br><br><br>
<i class="fas fa-trophy" style=" font-size: 60px; margin: 10px auto; color:#55A9F3;"></i>
</div>
		<p style="letter-spacing: 7px; font-size: 40px;text-align: center; color:">  MileStones</p>
		<p style="letter-spacing: 5px;text-align: center; font-size: 20px;">
			In Our Student Branch we have a impressive track record, Check us out to know about our achivements
		</p>
<br>
<a href="awards.php" class="btbox1" style="text-decoration: none;"> Check Us  </a>
<br><br><br>
<!-- <div class="row">
	<div class="col-sm-3">
		<div class="mbox text-center" style="">
			<div class="star">
			<i class="fas fa-star" style=""></i>
			</div>
			<div style="max-width: 80%; margin: 0px auto;">
				<p>Best Student Branch Award, 2017</p>
			</div>
		</div>
	</div>
	<div class="col-sm-3">
	<div class="mbox text-center">
		<div class="star">
			<i class="fas fa-star"></i><i class="fas fa-star"></i>
		</div>
			<div style="max-width: 80%; margin: 0px auto;">
				<p>Largest Members In Section, 2017</p>
			</div>
	</div>	
	</div>
	<div class="col-sm-3">
	<div class="mbox text-center">
		<div class="star">
			<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
		</div>
			<div style="max-width: 80%; margin: 0px auto;">
				<p>Best Student Branch Chair Award, 2017</p>
			</div>
	</div>
	</div>
	<div class="col-sm-3">
	<div class="mbox text-center">
		<div class="star">
			<i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
		</div>
			<div style="max-width: 80%; margin: 0px auto;">
				<p>Best Student Branch Counsellor Award, 2017</p>
			</div>
	</div>
	</div>
</div>-->

</div>
</div>


</body>
<?php
include('cont.php')
?>
<script type="text/javascript" src="js/jq.js"></script>
<script type="text/javascript" src="js/jq2.js"></script>

<script  type="text/javascript">

 
   $(document).ready(function(){
    $('.navbar').hide();
    $(function() {
        $(window).scroll(function () {
            if ($(this).scrollTop()>400) {
                $('.navbar').fadeIn();
            }
	            //  else {
	            //     $('.navbar').fadeOut();
	            // }
	            if ($(this).scrollTop() == 0) {
                $('.navbar').fadeOut();
            }
        });
   });
});

      $(document).ready(function(){
    $('.sidenav').hide();
    $(function() {
        $(window).scroll(function () {
            if ($(this).scrollTop()>400) {
                $('.sidenav').fadeIn();
            }
	            //  else {
	            //     $('.navbar').fadeOut();
	            // }
	            else{
                $('.sidenav').fadeOut();
            }
        });
   });
});

</script>
<script type="text/javascript">
	
</script>

</html>