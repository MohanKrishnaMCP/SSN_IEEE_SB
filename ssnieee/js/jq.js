// NUMBER-COUNT
var i = 0;
var j = 0;
var k = 0;


    //     $(".pad1").each(function(){
    // var a = $(this).offset().top;
    // var b = $(window).scrollTop();
    // if (a < b + 200) {
      

setInterval(function(){
   $(".pad1").each(function(){
    var a = $(this).offset().top;
    var b = $(window).scrollTop();
    if (a < b + 450) {
	var $num = $('#mem')
	var a = parseInt($num.html());
	if(i<400){
	a++;
	$num.html(a + "+ Members");}
	i++;}});
},20);

setInterval(function(){
     $(".pad1").each(function(){
    var a = $(this).offset().top;
    var b = $(window).scrollTop();
    if (a < b + 450) {
	var $num2 = $('#eve')
	var b = parseInt($num2.html());
	if(j<300){
	b++;
	$num2.html(b + "+ Events");}
	j++;}});
},20);


setInterval(function(){
     $(".pad1").each(function(){
    var a = $(this).offset().top;
    var b = $(window).scrollTop();
    if (a < b + 450) {
	var $num3 = $('#soc')
	var c = parseInt($num3.html());
	if(k<4){
	c++;
	$num3.html(c + " societies");}
	k++;}});
},400);

    // }
// });

//accord
$("#ob").click(function(){
$("#obd1").slideToggle();
});

$("#ob2").click(function(){
$("#obd2").slideToggle();
});

$("#ob3").click(function(){
$("#obd3").slideToggle();
});

$("#ob6").click(function(){
$("#obd6").slideToggle();
});

//gall
$(".bdr1").mouseenter(function(){
$(".galdet").show();	
});	

//star
$(".mbox").mouseenter(function(){
$(".mbox").addClass("glow");  
}); 
$(".mbox").mouseenter(function(){
$(".mbox").addClass("glow");  
}); 
    
//Smooth scroll
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".sidenav a, footer a[href='#myPage']").on('click', function(event) {
   // Make sure this.hash has a value before overriding default behavior
  if (this.hash !== "") {
    // Prevent default anchor click behavior
    event.preventDefault();
    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
      });
    }
  });
});

 $(document).ready(function() {
    $('#trigger').click(function(){
      $("#dialog").dialog();
    }); 
  }); 



//society

$("#cs").show();
$("#comsoc").hide();
$("#emb").hide();
$("#wie").hide();

  $("#emb1").click(function(){
$("#emb").slideDown();
$("#comsoc").slideUp();
$("#cs").slideUp();
$("#wie").slideUp();
});

$("#wie1").click(function(){
$("#wie").slideDown();
$("#comsoc").slideUp();
$("#emb").slideUp();
$("#cs").slideUp();
});

$("#comsoc1").click(function(){
$("#comsoc").slideDown();
$("#cs").slideUp();
$("#emb").slideUp();
$("#wie").slideUp();
$("#comsoc").addClass('comsocbg');
});

$("#cs1").click(function(){
  $("#comsoc").slideUp();
$("#emb").slideUp();
$("#wie").slideUp();
$("#cs").slideDown();
$("#cs").addClass('csbg');
});