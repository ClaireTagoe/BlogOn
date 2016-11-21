
$(document).ready(function(){
    $('#outer').animate({height: '93%'}, 300);
    $('#bottom1').hide(1);
    hide_buttons();
    $('#explore_button').click(function() {
      display_bottom();
    })
    $("#writing").typed({
          strings: ["Discover new people", "Share your experience", "Connect with the world.."], loop: true, typeSpeed: 50
        });
    ;
})

function hide_buttons() {
  $('#login_button2').hide(1);
}

function show_buttons (){
  $('#login_button2').show(500);
}

function display_bottom() {
  $('#outer').slideUp(500);
  $('#foot h5').replaceWith('<h5>Explore<h5>');
  show_buttons();
  $('#bottom1').show(500);
}
