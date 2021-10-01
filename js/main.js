$(document).ready(function() {
    $(".menuToggle").click(function() {
      $(this).toggleClass("active");
      $('.menu').slideToggle(300, function(){
        if($(this).css('display') === "none"){
          $(this).removeAttr('style');
        }
      });
    });
  });

$('.block').click(function(){
    $('.some').removeClass();
});



lightGallery(document.getElementById('lightgallery'));
