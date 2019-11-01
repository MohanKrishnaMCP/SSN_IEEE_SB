  $(window).scroll(function() {

// slider
  $(".slide").each(function(){
    var x = $(this).offset().top;
    var y = $(window).scrollTop();
    if (x < y + 600) {
      $(this).addClass("slideact");
    }
  });
  // graph
   $(".gb").each(function(){
    var a = $(this).offset().top;
    var b = $(window).scrollTop();
    if (a < b + 600) {
      $(".gb").addClass("gbi");
    }
});

   $("#nav").each(function(){
    var a = $(this).offset().top;
    var b = $(window).scrollTop();
    if (a < b +500) {
      $(this).slideDown("#nav");
    }
});

});


// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = $('.myImg');
var modalImg = $("#img01");
var captionText = document.getElementById("caption");
$('.myImg').click(function(){
    modal.style.display = "block";
    var newSrc = this.src;
    modalImg.attr('src', newSrc);
    captionText.innerHTML = this.alt;
});

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
  navbar.style.display="none";
}



