(function($) {
    $('figure.wp-content.aligncenter').removeAttr('style');
    $('img.aligncenter').wrap('<figure class="centered-image" />');
}) (jQuery);