<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script>
    $(document).ready(function(){
        var scrollTop = 0;
        $(window).scroll(function(){
            scrollTop = $(window).scrollTop();
        // $('.dt').html(scrollTop);
            if (scrollTop >= 5) {
                $('.dt ').addClass('z-depth-1');
                $('.dt').removeClass('z-depth-0');
            } else if (scrollTop < 5) {
                $('.dt').removeClass('z-depth-1');
                $('.dt').addClass('z-depth-0');
            } 
            
        }); 
        
    });
</script>

<script type="text/javascript" src="assets/js/app.js"></script>
<script>
    new WOW().init();
    $(".button-collapse").sideNav();
</script>

<script src="assets/js/owner.js" type="text/javascript"></script>