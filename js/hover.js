var shopStart = $('#toc_container').offset().top;
var shopStop = $('#stop').offset().top;
var lastMode = "absolute";

$(window).scroll(function() {
  var mode;
  if ($(this).scrollTop() >= shopStart) {
    if ($(this).scrollTop() - shopStop + $('#toc_container').height() > 0)
      mode = 'absolute';
    else
      mode = 'fixed';
  } else {
    mode = 'absolute';
  }

  if (lastMode !== mode) {
    if (mode == 'fixed') {
      $('#toc_container').css('position', 'fixed');
      $('#toc_container').css('top', '0');
    } else {
      $('#toc_container').css('position', 'absolute');
      $('#toc_container').css('top', shopStart);
    }
    lastMode = mode;
  }
});