$(document).ready(function(){
  $("#nav-projects-link").on('click', function(){
    $(this).toggleClass("active");
    $(".projects-menu").toggleClass("show");
    console.log("did you just click projects?");
  });
});
