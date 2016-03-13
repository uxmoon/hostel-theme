jQuery(document).ready(function($) {
  $('.bxslider').bxSlider({
    auto: true,
    controls: false,
    mode: 'fade',
    pager: false,
    pause: 6000,
    speed: 750
  });
  $('.bxfotos').bxSlider({
    pager: false,
    prevText: '',
    nextText: ''
  });
});
