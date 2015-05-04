$(document).ready(function(){
    $('a[rel="external"]').click(function(e) {
        e.preventDefault();
        window.open(this.href);
    });
    // tooltip demo
    $('nav').tooltip({
	    placement: 'bottom',
		delay: { show: 20, hide: 0 },
		selector: "a[data-toggle=tooltip]"
    })

    // $('.navSocials').tooltip()
    

})(jQuery);

// $(function (){
// 	// $(".navSocials").popover(); 
// 	// $('.navSocials').popover({placement:'bottom'}); 
// 	// $("#example_left").popover({placement:'left'});  
// 	// $("#example_top").popover({placement:'top'});  
// 	// $("#example_bottom").popover({placement:'bottom'});  
// });  

