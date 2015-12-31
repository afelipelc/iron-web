$(function(){
  $('#carousel').infiniteCarousel({
    displayThumbnailNumbers:1,
    displayThumbnailBackground:1,
    thumbnailWidth:'81px',
    thumbnailHeight:'50px',
    thumbnailFontSize:'.9em',
    displayProgressBar : 1
  });
  $('#carousel a').fancybox({
    'overlayColor'    : '#000',
    'overlayOpacity'  : 0.9,
    'transitionIn'  : 'elastic',
    'transitionOut' : 'none'
  });
});
