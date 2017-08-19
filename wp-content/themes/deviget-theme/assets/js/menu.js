(function($) {
	
$('.menu-item-has-children a').hover(function(){
	$(this).next('.sub-menu').fadeIn();
});

$(document).click(function(e) {
  var target = e.target;
  if (!$(target).is('.menu-item-has-children a') && !$(target).parents().is('.menu-item-has-children a')) {
    $('.sub-menu').hide();
  }
});
	
	
$('#toggle').toggle( 
    function() {
	     $('#toggle').animate({ right: 20 });
		 $('#popout').animate({ right: 0 }, 'fast', function() {
            $('#toggle').html('Close').addClass('close');
        });
    }, 
    function() {
	    $('#toggle').animate({ right: 80 });
        $('#popout').animate({ right: -250 }, 'fast', function() {
            $('#toggle').html('Menu').removeClass('close');
      });
    }
);


$('#searchbutton').click( 
    function() {
	     $('.search-box').fadeIn('fast');
    });
    
$('.search-close').click( 
    function() {
	     $('.search-box').hide('fast');
		
    });


})(jQuery);