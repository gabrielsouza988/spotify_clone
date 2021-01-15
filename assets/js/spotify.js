$(".main-card").mouseenter(function() {
  let classe = $(this).data('classe');
  var isVisible = $('.'+classe).is( ":visible" );

  if(isVisible == true) {
    $('.'+classe).css('display', 'none')
    
  } else {
    $('.'+classe).css('display', 'block');
  }
});

$(".main-card").mouseleave(function() {
  let classe = $(this).data('classe');
  var isHidden = $('.'+classe).is( ":hidden" );

  if(isHidden == true) {
    $('.'+classe).css('display', 'block');
  } else {
    $('.'+classe).css('display', 'none')
  }
});
