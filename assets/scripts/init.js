(function($){
    $(window).on("load", () => {
        $('.loader-wrapper').fadeOut(500);
    })
    $(function(){
        $('.sidenav').sidenav();
        $('.parallax').parallax();
        $('.modal').modal();
        $('.slider').slider()
        $('.fixed-action-btn').floatingActionButton();

    }); // end of document ready
})(jQuery); // end of jQuery name space

// $('.testimonials-wrapper').slick({

// });
