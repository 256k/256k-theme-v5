jQuery(document).ready(function($){
  $(".drop-button i").on('click', function(){
    $(this).toggleClass('flip');
    $("#menu-main-nav").toggleClass('drop-action');
  });
  if ($(document).width() > 720){
    $('#menu-main-nav').removeClass('tras03 drop-action');
  }
});
