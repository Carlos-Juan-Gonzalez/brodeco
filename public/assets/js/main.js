$(document).ready(function () {
    $('.slider').bxSlider({
        auto: true,
        adaptativeHeight: true,
        controls:false,
    });

    $(window).scroll(function(){
        $('#scrolling_footer_container').hide()
        var scroll = 90;

        
        if($(window).scrollTop() + $(window).height() > $(document).height() - 100) {
            $('#scrolling_footer_container').hide()
        }else{
            if ($(window).scrollTop() >=scroll){
                $('#scrolling_footer_container').show()
            }
        }
    });

    
});
