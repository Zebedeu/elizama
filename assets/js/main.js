 jQuery(document).ready(function(){

jQuery('.search-bar > a').on('click', function() {
   jQuery('.search-area').toggle(function() {
      jQuery(this).animate({             
      }, 500);
   });
}); 

jQuery('.closebtn').on('click', function() {
   jQuery('.search-area').toggle(function() {
      jQuery(this).animate({              
      }, 500);
   });
});

});


