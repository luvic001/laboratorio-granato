jQuery(function($){
    width = window.innerWidth;
    if (width > 767)
    {
        if (width >= 1920)
        {
            $('.carousel-granato .item .carousel-data').css('min-width', (1920/2) + 'px')
        }
        else 
        {
            $('.carousel-granato .item .carousel-data').css('min-width', (width/2) + 'px')
        }
    }
    else 
    {
        $('.carousel-granato .item-image .carousel-data').css('min-width', '0px')
        $('.carousel-granato .item-image').css('max-width', '0px')

        $('.carousel-granato .item-content').css('max-width', (width) + 'px')
        $('.carousel-granato .item-content .content').css('min-width', (width) + 'px')
    }
    
    $(window).resize(function(){
        width = window.innerWidth;
        if (width > 767)
        {
            if (width >= 1920)
            {
                $('.carousel-granato .item .carousel-data').css('min-width', (1920/2) + 'px')
                $('.carousel-granato .item').css('max-width', (1920/2) + 'px')    
            }
            else {
                $('.carousel-granato .item .carousel-data').css('min-width', (width/2) + 'px')
                $('.carousel-granato .item').css('max-width', (width/2) + 'px')
            }
        }
        else
        {
            $('.carousel-granato .item-image .carousel-data').css('min-width', '0px')
            $('.carousel-granato .item-image').css('max-width', '0px')

            $('.carousel-granato .item-content').css('max-width', (width) + 'px')
            $('.carousel-granato .item-content .content').css('min-width', (width) + 'px')
        }

        $('.carousel-granato .controller li.active').each(function(){
            ind = $(this).attr('go-to')

            scroll1 = $('.image-slide-item').css('width').replace('px', '') * ind
            scroll2 = $('.content-slide-item').css('width').replace('px', '') * ind

            $('.item-image').animate({ scrollLeft: scroll1 }, 0)
            $('.body-items').animate({ scrollLeft: scroll2 }, 0)

        })

    })

    // Auto_interval
    controller_limit = 0
    $('.carousel-granato .controller li').each(function(){
        controller_limit++;
    })

    have_interval = true
    active_ind = $('.carousel-granato .controller li.active').attr('go-to')

    function switch_slider() 
    {
        if (have_interval)
        {
            if (active_ind >= controller_limit)
            {
                active_ind = 0
            }
            $('.carousel-granato .controller li[go-to="'+ ( active_ind ) +'"]').click()
            active_ind++;
        }
    }
    autoswitch = setInterval(switch_slider, 5000)
    
    $('.carousel-granato .controller').on('hover', function(e){
        clearInterval(autoswitch)
    })

    $('.carousel-granato .controller li').on('click', function(){

        ind = $(this).attr('go-to')

        scroll1 = $('.image-slide-item').css('width').replace('px', '') * ind
        scroll2 = $('.content-slide-item').css('width').replace('px', '') * ind
        
        $('.carousel-granato .controller li').removeClass('active')
        $(this).addClass('active')

        $('.item-image').animate({ scrollLeft: scroll1 }, 700)
        $('.body-items').animate({ scrollLeft: scroll2 }, 700)

        clearInterval(autoswitch)

    })

})