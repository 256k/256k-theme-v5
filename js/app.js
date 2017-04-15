jQuery(document).ready(function($){
  $(".drop-button i").on('click', function(){
    $(this).toggleClass('flip');
    $("#navbar ul").toggleClass('drop-action');
  });
  if ($(document).width() > 720){
    $('#navbar ul').removeClass('tras03 drop-action');
  }
});
