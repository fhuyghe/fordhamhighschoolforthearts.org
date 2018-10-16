function resize() {
  var headerHeight = $('header.banner').outerHeight();

  $('.wrap.container').css('margin-top', headerHeight);
}

export default {
  init() {
    // JavaScript to be fired on all pages

    $(window).resize(function(){
      resize();
    });

    $('li.search').click(function(event){
      event.preventDefault();

      $('.search').toggleClass('active');

    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    $(window).load(function() {
      resize();
    })

  },
};
