// Detalhes do produto

if($('#page-product').length){

    $(document).ready(function(){

        // Carousel principal
        $('.carousel-product').owlCarousel({
            autoplay: true,
            loop: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            rewind: false,
            autoplayHoverPause: true,
            itemElement: 'li',
            stageElement: 'ul',
            responsive: {
                0: {
                    items: 1,
                },
                992: {
                    dots: false,
                    items: 3,
                    nav: true,
                    navText: ['<span class="fa fa-chevron-left"></span>','<span class="fa fa-chevron-right"></span>'],
                    autoWidth: true,
                    autoplay: false,
                    margin: 5,
                    loop: true
                }
            }
        });

        if($(window).width() >= breakpointLarge) {
            $('.carousel-product .owl-item').each(function(){
                var item = $(this).find('a');

                $(item).click(function(e){
                    e.preventDefault();
                    var urlImage = $(item).find('img').attr('src');

                    $('.product-image-master > img').attr('src', urlImage);
                });
            });
        }

        
        // Produtos relacionados
        if($(window).width() >= breakpointSmall) {
            $('.carousel-related-products').owlCarousel({
                rewind: false,
                dots: false,
                itemElement: 'li',
                stageElement: 'ul',
                nav: true,
                navText: ['<span class="fa fa-chevron-left"></span>','<span class="fa fa-chevron-right"></span>'],
                margin: 15,
                responsive: {
                    576: {
                        items: 2,
                    },
                    768: {
                        items: 3,
                    },
                    992: {
                        items: 4
                    }
                }
            });
        }

        // Adicionar aos favoritos
        $('.product-infos .btn-favorites').click(function(){
            var value = $(this).parent().find('input[name="favorite"]');
            console.log(value);

            if($(value).val() == 'false') {
                $(this).attr('title', 'Remover da lista de desejos').removeClass('btn-add-favorites').addClass('btn-remove-favorites').html('<span class="far fa-heart"></span> Remover da lista de desejos');
                $(this).parent().find('input[name="favorite"]').attr('value', 'true');
            } else {
                $(this).attr('title', 'Adicionar a lista de desejos').removeClass('btn-remove-favorites').addClass('btn-add-favorites').html('<span class="far fa-heart"></span> Adicionar a lista de desejos');
                $(this).parent().find('input[name="favorite"]').attr('value','false');
            }
        });
    });
}