function collapsecustom() {
    jQuery('.collapse').addClass('no-transition').collapse('hide');
}

$(function() {
    $('.toggle').click(function(e) {
        jQuery('.collapse').addClass('no-transition').collapse('hide');
    });
  });
