
 var stickyHeaderTop = $('header').offset().top;

    $(window).scroll(function(){
            if( $(window).scrollTop() > stickyHeaderTop ) {
                $("#main-link-hide").addClass("main-links-postion ");
                $(".top_nav").addClass('s-hide');
                 
            } else {
                $(".top_nav").removeClass('s-hide');
                $("#main-link-hide").removeClass("main-links-postion ");
            }
    });


//$("#Drop_Down").fade(); 


$(document).ready(function() {
    $('#Toggle_menu').click(function() {
        $('#Drop_Down').toggle( "slow" ,function(){

        });

      // Alternative animation for example
      // slideToggle("fast");
    });
  });