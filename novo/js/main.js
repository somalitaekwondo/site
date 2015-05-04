$(document).ready(function(){
    $('a[rel="external"]').click(function(e) {
        e.preventDefault();
        window.open(this.href);
    });
})(jQuery);