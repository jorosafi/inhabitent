

  (function($) {

	  jQuery(document).ready(function(){
      
      $('.search-button').click(function(){
        $('.nav-search .search-form').toggle();
        $('.nav-search .search-field').focus();
      });

      $('.nav-search .search-field').blur(function(){
        $('.nav-search .search-form').hide();
      })

    })
    
  })( jQuery );




