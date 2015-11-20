$('a.toggle').on('click', function(){
  $('section').scrollTop(0);
  $('.contain').toggleClass('active');
  return false;
})

$('section').on('click', function(){
//  $(this).closest('section').prependTo('.contain');
  $('section').removeClass('active');
  $(this).addClass('active');
  $('.contain').removeClass('active');
})
// background video

var vid = document.getElementById("bgvid");
var pauseButton = document.querySelector("#polina button");

function vidFade() {
  vid.classList.add("stopfade");
}

vid.addEventListener('ended', function()
{
// only functional if "loop" is removed 
vid.pause();
// to capture IE10
vidFade();
}); 

pauseButton.addEventListener("click", function() {
  vid.classList.toggle("stopfade");
  if (vid.paused) {
    vid.play();
    pauseButton.innerHTML = "Pause";
  } else {
    vid.pause();
    pauseButton.innerHTML = "Paused";
  }
})

