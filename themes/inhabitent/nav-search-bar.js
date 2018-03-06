// hide, on-click, prevent default, toggle(speed), on click, prevent default.
// $("#button").click(function () {

//   1. .hide() search field
// 2.(but still show icon? fa-search)
// 3..on click, event.preventdefault
// 4.search field .toggle, speed open
// 5. toggle close


(function($) {
  $(document).ready(function() {
    $('.nav-search .search-submit').click(function(e){
      e.preventDefault();

      $('.nav-search .search-field').toggleClass('search-toggle');
        $('.nav-search .search-field').focus();
    });

  });

})(jQuery);


// (function($) {

//   $(document).ready(function() {
// $( '.search-icon' ).click(function() {
//          event.preventDefault();
//     $('.search-field').toggle('slow');
//       if (! $('.search-field').is(event.target)) {
//          $('.search-field').toggle('slow');
//       }
//       else{ $('.search-field').hide('slow');
//   }
// })(jQuery);
//   });

      