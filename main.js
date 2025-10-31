
         $(window).on("load", function () {
           const totalDelay = 1450;
         
           setTimeout(() => {
             $(".loader-wrapper").fadeOut("slow");
           }, totalDelay);
         });

         $(document).ready(function() {
           function checkFadeIn() {
             $('.fade-in-section').each(function() {
               var elemTop = $(this).offset().top;
               var windowBottom = $(window).scrollTop() + $(window).height() * 0.9;
         
               if (elemTop < windowBottom) {
                 $(this).addClass('is-visible');
               }
             });
           }
         
           $(window).on('scroll', checkFadeIn);
           checkFadeIn();
         });

         