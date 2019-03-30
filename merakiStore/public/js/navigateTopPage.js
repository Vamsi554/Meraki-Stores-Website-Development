   $(document).ready(function(event) {

     $(window).scroll(function () {
            if ($(this).scrollTop() > 50) {
                $('#navigateTop').fadeIn();
            } else {
                $('#navigateTop').fadeOut();
            }
     });     
});
