$(document).ready(function(){
    $('img').removeAttr('width').removeAttr('height');

    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
   
   $(".card").flip({
     trigger: "hover",
     reverse: true
   });
   
});

