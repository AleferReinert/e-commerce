// Product Details Page

if($('#page-product').length){

    $(document).ready(function(){

        $('.carousel-product').owlCarousel({
            items: 1,
            autoplay: true,
            loop: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            rewind: false,
            autoplayHoverPause: true
        });
    });
}