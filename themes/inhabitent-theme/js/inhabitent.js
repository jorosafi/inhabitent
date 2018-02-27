/**
 * inhabitent.js
 *
 * Custom JS for styling and animations
 *
 * 
 */

  (function($) {//This helps WP know that $ is used in place of JQuery

	jQuery(document).ready(function(){
      
      //make search input show when clicking on search icon 
      $('.search-button').click(function(){
        $('.nav-search .search-form').toggle();
        $('.nav-search .search-field').focus();
      });

      //make search input disapear when it loses focus
      $('.nav-search .search-field').blur(function(){
        $('.nav-search .search-form').hide();
      })

      //make nav bar in Home, About and Adventure-single position:static when scrolltop bigger than banner
      //start by adding class .site-header-special on load
      $(window).load(function(){
        $('.site-header').addClass('site-header-special');
      });
      
      //on scroll, add .site-header-special to header when the y position of the scroll is less than the hero image
      $(window).scroll(function() {
        var adventureHeroHeight = $('.single-adventure_post_type .thumbnail-wrapper').height();
        var homeHeroHeight = $('.home-hero').height();
        var aboutHeroHeight = $('.page-template-about .entry-header').height();

        var yPos = $(window).scrollTop();
      
        if (yPos < adventureHeroHeight || yPos < homeHeroHeight || yPos < aboutHeroHeight) {
          $('.site-header').addClass('site-header-special');
        }else{
          $('.site-header').removeClass('site-header-special');
        }
      });

    })
    
  })( jQuery );




