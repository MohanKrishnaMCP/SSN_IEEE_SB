<?php
include('navbar.php');
include('connection.php')
$sql="SELECT * FROM past_events";
$stmt = $db->prepare($sql);
$stmt->execute();
$all = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<head>	
</head>
<body>

<style type="text/css">
	#sidenav a {
  position: fixed; /* Position them relative to the browser window */
  right: 30px; /* Position them outside of the screen */
  transition: 0.3s;
  font-size: 20px;
  color:  #55A9F3;
  cursor: pointer;
}

#sidenav a:hover {
  font-size: 25px; /* On mouse-over, make the elements appear as they should */
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
  max-width: 1000px;
  margin:auto auto;
  border-radius:8px;
  border:1px solid lightgrey;
  padding: 10px;
  box-shadow: -10px 20px #888888;
  text-align: justify;background-color: white;
}
</style>
<div id="sidenav" class="sidenav">
  <a  id="cs1">CS Society</a>
  <a  id="comsoc1">ComSoc </a>
  <a  id="emb1">EMB Society</a>
  <a  id="wie1">WIE</a>
</div>

<div class="container" style="max-width: 90vw">
		<br><br><br>
		<div class="cs wb" id="cs" style="margin:auto auto;">

	<h1>Future Events</h1>
  <br>
  <div class="row">
  <div class=" text-center col-3">
    <div class="mbox">
    <div class="star">
      <img src="medal.png" class="img1" style="">
      <!-- <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> -->
    </div>
      <div style="max-width: 80%; margin: 0px auto;">
        <p>Best Student Branch Chair Award, 2017</p>
      </div>
    </div>
  </div>

   <div class=" text-center col-3">
    <div class="mbox">
    <div class="star">
      <img src="medal.png" class="img1" style="">
      <!-- <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> -->
    </div>
      <div style="max-width: 80%; margin: 0px auto;">
        <p>Best Student Branch Chair Award, 2017</p>
      </div>
    </div>
  </div>

    <div class=" text-center col-3">
    <div class="mbox">
    <div class="star">
      <img src="medal.png" class="img1" style="">
      <!-- <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> -->
    </div>
      <div style="max-width: 80%; margin: 0px auto;">
        <p>Best Student Branch Chair Award, 2017</p>
      </div>
    </div>
  </div>

   <div class=" text-center col-3">
    <div class="mbox">
    <div class="star">
      <img src="medal.png" class="img1" style="">
      <!-- <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i> -->
    </div>
      <div style="max-width: 80%; margin: 0px auto;">
        <p>Best Student Branch Chair Award, 2017</p>
      </div>
    </div>
  </div>
</div>

<br><br>
</div>
</div>
<div class="container comsoc row wb" id="comsoc" style="">
	<div class="col-sm-4 text-center" style="border-right: 1px solid grey">
		<img id="ob" class="box0" src="ob12.JPG" style="transform:rotate(0deg);width: 120px; height: 120px; text-align: center;">
				<br><br>
			
				<h5 class="text-center">Abarna</h5>
				<p class="text-center" style="color: #1088F2;">Chair, IEEE SB</p>
				<p style=" text-align: justify;">
					<i class="fas fa-quote-left" style="font-size: 20px; color: grey"></i>The IEEE Computer Society is the world’s home for computer science, engineering, and technology. A global leader in providing access to computer science research, analysis, and information, the IEEE Computer Society offers a comprehensive array of unmatched products, services, and opportunities for individuals at all stages of their professional career. Known as the premier organization that empowers the people wh
				</p>
	</div>
	<div class=" col-sm-8">
	<h1>ComSoc</h1>
	<p> Our Mission Statement<br>
The IEEE Communications Society promotes technological innovation and fosters creation and sharing of information among  the global technical community. The Society provides services to members for their technical and professional advancement and forums for technical exchanges among professionals in academia, industry, and public institutions.<br>

Our Vision Statement<br>
To bring the world together in harmony through communications and networking technology research, application, education, and incubation of new ideas.</p>
	<p>To know more about IEEE COMSOC society <a href="https://www.comsoc.org">click here</a></p>
</div>
</div>
<div class="container emb row wb" id="emb" style="">
<div class="col-sm-4 text-center" style="border-right: 1px solid grey">
		<img id="ob" class="box0" src="ob12.JPG" style="transform:rotate(0deg);width: 120px; height: 120px; text-align: center;">
				<br><br>
			
				<h5 class="text-center">Abarna</h5>
				<p class="text-center" style="color: #1088F2;">Chair, IEEE SB</p>
				<p style=" text-align: justify;">
					<i class="fas fa-quote-left" style="font-size: 20px; color: grey"></i>The IEEE Computer Society is the world’s home for computer science, engineering, and technology. A global leader in providing access to computer science research, analysis, and information, the IEEE Computer Society offers a comprehensive array of unmatched products, services, and opportunities for individuals at all stages of their professional career. Known as the premier organization that empowers the people wh
				</p>
	</div>
	<div class=" col-sm-8">
	<h1>EMBS</h1>
	<p> IEEE Engineering in Medicine and Biology Society (EMBS) is the world’s largest international society of biomedical engineers. The organization’s 12,000 members reside in some 97 countries around the world. EMBS provides its members with access to the people, practices, information, ideas and opinions that are shaping one of the fastest growing fields in science.
<br>
Our members design the electrical circuits that make a pacemaker run, create the software that reads an MRI, and help develop the wireless technologies that allow patients and doctors to communicate over long distances. They’re interested in bioinformatics, biotechnology, clinical engineering, information technology, instrumentation and measurement, micro and nanotechnology, radiology, and robots. They are researchers and educators, technicians and clinicians—biomedical engineers are the link between science and life science, creating innovations in healthcare technology for the benefit of all humanity.</p>
	<p>To know more about IEEE EMBS society <a href="https://www.embs.org">click here</a></p>
</div>
</div>

</div>

</body>
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
<script type="text/javascript" src="jq.js"></script>

</html>