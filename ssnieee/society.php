<?php
include('navbar.php');
?>
<head>	
</head>
<body>

<style type="text/css">
	#sidenav a {
  position: fixed; /* Position them relative to the browser window */
  right: 15px;
  transition: 0.3s;
  font-size: 16px;
  color:  #55A9F3;
  cursor: pointer;
}

#sidenav a:hover {
  font-size: 22px; /* On mouse-over, make the elements appear as they should */
}

/* The about link: 20px from the top with a green background */
#cs1 {
  top: 180px;
}

#comsoc1 {
  top: 240px;
}

#emb1 {
  top: 300px;
}

#wie1 {
  top: 360px;
}


.wb{
  max-width: 800px;
  margin:auto auto;
  border-radius:8px;
  border:1px solid lightgrey;
  padding: 10px;
  box-shadow: -10px 20px #888888;
  text-align: justify;background-color: white;
}
</style>
<div id="sidenav" class="sidenav">
  <a  id="cs1">Computer Society</a>
  <a  id="comsoc1">Communication Society </a>
  <a  id="emb1">EMB Society</a>
  <a  id="wie1">Women in Engineering</a>
</div>

 <style>
  	.spin{
 		animation:spin 7s linear infinite;
 	}
 	.spinb{
 		animation:spinb 7s linear infinite;
 	}
@-moz-keyframes spin { 100% { -moz-transform: rotate(360deg); } }
@-webkit-keyframes spin { 100% { -webkit-transform: rotate(360deg); } }
@keyframes spin { 100% { -webkit-transform: rotate(360deg); transform:rotate(360deg); } }

@-moz-keyframes spinb { 100% { -moz-transform: rotate(-360deg); } }
@-webkit-keyframes spinb { 100% { -webkit-transform: rotate(-360deg); } }
@keyframes spinb { 100% { -webkit-transform: rotate(-360deg); transform:rotate(-360deg); } }

</style>

<div style="position: absolute; top:80px;">
<i class="fas fa-cog spin" style="font-size: 8vw; color:#1088F2;margin-left: 25px;"></i>
<i class="fas fa-cog spinb" style="font-size: 7vw;top:50px;left:100px;color: #1088F5;"></i>
<br>
<i class="fas fa-cog spinb" style="font-size: 6vw;top:50px;left:100px;color: #1088F5;margin-left: 30px;"></i>

</div>

<div class="container" style="max-width: 80vw">
		<br><br><br>
		<div class="cs row wb" id="cs" style="margin:auto auto;">

	<div class="col-sm-4 text-center" style="border-right: 1px solid grey">
		<img id="ob" class="box0" src="images/ruba.jpg" style="transform:rotate(0deg);width: 120px; height: 120px; text-align: center;">
				<br><br>
			
				<h5 class="text-center">Ruba Mohan</h5>
				<p class="text-center" style="color: #1088F2;">Chair, IEEE SB</p>
				<p style=" text-align: justify;">
					<i class="fas fa-quote-left" style="font-size: 20px; color: grey"></i>SSN IEEE Computer Society Chapter (is dedicated to computer science and technology) [has been started an year back with initially 12 members and at the end of the year, we had around 30+ computer society members] We encompass all aspects of theory, design, practice, and application relating to computer and information processing science and technology.<br>

 Our team has organized many workshops, seminars and technical competitions under banner of IEEE and SSN for enhancing knowledge and technical abilities of students.

				</p>
	</div>
	<div class=" col-sm-8">
	<h1 style="color:#55A9F3;font-style: italic;">Computer Society</h1>
	<img src="images/cs.png" style="width: 30vw;">
	<p> The IEEE Computer Society is the world’s home for computer science, engineering, and technology. A global leader in providing access to computer science research, analysis, and information, the IEEE Computer Society offers a comprehensive array of unmatched products, services, and opportunities for individuals at all stages of their professional career. Known as the premier organization that empowers the people who drive technology, its unparalleled resources include membership, international conferences, peer-reviewed publications, a unique digital library, standards, and training programs.</p>
	<p>To know more about IEEE CS society <a href="https://www.computer.org">click here</a></p>
</div>
</div>
<div class="container comsoc row wb" id="comsoc" style="">
	<div class="col-sm-4 text-center" style="border-right: 1px solid grey">
		<img id="ob" class="box0" src="images/comsocc.jpg" style="transform:rotate(0deg);width: 120px; height: 120px; text-align: center;">
				<br><br>
			
				<h5 class="text-center">Savitha Srinivasan</h5>
				<p class="text-center" style="color: #1088F2;">ComSoc Chair, IEEE SB</p>
				<p style=" text-align: justify;">
					<i class="fas fa-quote-left" style="font-size: 20px; color: grey"></i>The IEEE ComSoc student Branch of SSN was officially inaugurated in the month of April 2016 . The Student Branch was started with 10 student  members in 2016. Over the years, the society has grown in number and effectiveness. The communications society has conducted several activities, including makeathons, hands-on workshops, guest lectures by esteemed professionals and technical contests to encourage the spirit of healthy competition. Members of the society held regular meetings to discuss topics trending in the technological world, and also to provide guidance to juniors who may need it.
				</p>
	</div>
	<div class=" col-sm-8">
	<h1 style="color:#55A9F3;font-style: italic;">Communication Socity</h1><br>	
	<img src="images/comsoc.png" style="width: 30vw;"><br><br>
	<p> Our Mission Statement<br>
The IEEE Communications Society promotes technological innovation and fosters creation and sharing of information among  the global technical community. The Society provides services to members for their technical and professional advancement and forums for technical exchanges among professionals in academia, industry, and public institutions.<br>

Our Vision Statement<br>
To bring the world together in harmony through communications and networking technology research, application, education, and incubation of new ideas.</p>
	<p>To know more about IEEE COMSOC society <a href="https://www.comsoc.org">click here</a></p>
</div>
</div>
<div class="container emb row wb" id="emb" style="">
<div class="col-sm-4 text-center" style="border-right: 1px solid grey">
		<img id="ob" class="box0" src="images/embsc.jpg" style="transform:rotate(0deg);width: 120px; height: 120px; text-align: center;">
				<br><br>
			
				<h5 class="text-center">Arun Kumar K</h5>
				<p class="text-center" style="color: #1088F2;">Chair, EMBS SSN IEEE SB</p>
				<p style=" text-align: justify;">
					<i class="fas fa-quote-left" style="font-size: 20px; color: grey"></i>IEEE Engineering in Medicine and Biology Society (EMBS) is the world's largest society for us, BioMedical Engineers. EMBS provides global opportunities
 for activities from local chapters for students and general members ffrom these can network and attend workshopon tutorial, listen to a gurst lecture or present their research at a regional conference,wherever you are in the world you can participate in EMBS activities.				</p>
	</div>
	<div class=" col-sm-8">
	<h1 style="color:#55A9F3;font-style: italic;">Engineering in Medicine and Biology Society</h1>
	<img src="images/emb.png" style="width: 20vw;">
	<p> IEEE Engineering in Medicine and Biology Society (EMBS) is the world’s largest international society of biomedical engineers. The organization’s 12,000 members reside in some 97 countries around the world. EMBS provides its members with access to the people, practices, information, ideas and opinions that are shaping one of the fastest growing fields in science.
<br>
Our members design the electrical circuits that make a pacemaker run, create the software that reads an MRI, and help develop the wireless technologies that allow patients and doctors to communicate over long distances. They’re interested in bioinformatics, biotechnology, clinical engineering, information technology, instrumentation and measurement, micro and nanotechnology, radiology, and robots. They are researchers and educators, technicians and clinicians—biomedical engineers are the link between science and life science, creating innovations in healthcare technology for the benefit of all humanity.</p>
	<p>To know more about IEEE EMBS society <a href="https://www.embs.org">click here</a></p>
</div>
</div>
<div class="container wie row wb" id="wie" style="">
<div class="col-sm-4 text-center" style="border-right: 1px solid grey">
		<img id="ob" class="box0" src="images/wiec.JPG" style="transform:rotate(0deg);width: 120px; height: 120px; text-align: center;">
				<br><br>
			
				<h5 class="text-center">Vaishnavi M</h5>
				<p class="text-center" style="color: #1088F2;">Chair, WIE SSN IEEE SB</p>
				<p style=" text-align: justify;">
					<i class="fas fa-quote-left" style="font-size: 20px; color: grey"></i>Being a part of any professional body is vital as a student. IEEE-WIE helps the
women engineers to access any corner from Engineering to Management.
Volunteering with IEEE-WIE provides a platform to exhibit one’s talent and
develop new skills. WIE provides networking opportunities and exposure to
technical environment. WIE identifies true talents and recognizes them with
awards which encourages members to volunteer more. Last but not the least
IEEE-WIE adds value to a student life and boosts one’s profile.
				</p>
	</div>
	<div class=" col-sm-8">
	<h1 style="color:#55A9F3;font-style: italic;">Women in Engineering</h1>
	<img src="images/wie.png" style="width: 20vw;margin:0px auto;">
	<p>IEEE Women in Engineering (WIE) is a global network of IEEE members and volunteers dedicated to promoting women engineers and scientists, and inspiring girls around the world to follow their academic interests in a career in engineering and science.
<br>
IEEE is the world’s largest technical professional organization dedicated to advancing technology for the benefit of humanity.</p>
	<p>To know more about IEEE WIE society <a href="https://www.wie.ieee.org">click here</a></p>
</div>
</div>



</div>
<br><br><br>
</body>
<?php
include('cont.php')
?>
<script
  src="http://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
<!-- <script>
      $(document).ready(function(){
    $('.cs').show();
    $('.comsoc').hide();
    $('.emb').hide();
    $('.wie').hide();    
    $(function() {
        $(window).scroll(function () {
            if ($(this).scrollTop()>100 && $(this).scrollTop()<200) {
                $('.comsoc').slideDown();
                $('.cs').slideUp();
                $('.emb').slideUp();
                $('.wie').slideUp();
            }
            if ($(this).scrollTop()>200 && $(this).scrollTop()<300) {
            	$('.comsoc').slideUp();
                $('.emb').slideDown();       
                $('.cs').slideUp();
                $('.wie').slideUp();
            }
            if ($(this).scrollTop()>300 && $(this).scrollTop()<400) {
                $('.emb').slideUp();
                $('.wie').slideDown();
                $('.cs').slideUp();
                $('.comsoc').slideUp();
            }
            if ($(this).scrollTop()>0 && $(this).scrollTop()<100) {
                $('.comsoc').slideUp();
                $('.cs').slideDown();
                $('.wie').slideUp();
                $('.emb').slideUp();
            }
              //  else {
              //     $('.navbar').fadeOut();
              // }
            //   else{
            //     $('.cs').fadeOut();
            // }
        });
   });
});
</script> -->
<script type="text/javascript" src="js/jq.js"></script>

</html>