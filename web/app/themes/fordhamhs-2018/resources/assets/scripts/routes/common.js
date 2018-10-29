function resize() {
  var width = $(window).width();
  var headerHeight = $('header.banner').outerHeight();
  var footerHeight = $('footer.footer').outerHeight();

  if (width >= 1024){
    $('.wrap.container').css('margin', headerHeight + 'px 0 ' + footerHeight + 'px');
  }
}

export default {
  init() {
    // JavaScript to be fired on all pages

    $(window).resize(function(){
      resize();
    });

    //Hamburger Menu
    $('.hamburger').click(function(){
      $('nav.nav-primary.mobile').toggleClass('active');
    });

    $('li.search').click(function(event){
      event.preventDefault();

      $('.search').toggleClass('active');

    });

    //Initiate Slick Carousels
    $('section.gallery').slick({
      adaptiveHeight: true,
      dots: true,
      //autoplay: true,
    });
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    $(window).on('load',(function() {
      resize();
    }));
    $(window).on('resize',(function() {
      resize();
    }));

  },
};
