// Dropdown
function dropdown(dropdown, target){
    var dropdown    = typeof(dropdown) == 'undefined' ? $('.dropdown') : $(dropdown);
        target      = typeof(target) == 'undefined' ? $('.dropdown-target') : $(target);
    $(dropdown).each(function(){
        
        $(this).hover(function(){
            $(this).addClass('active');
            $(this).find(target).stop().stop().slideDown();
        }).mouseleave(function(){
            $(this).removeClass('active');
            $(this).find(target).stop().stop().slideUp();
        });
    });
}

// Collapse
function collapse(){
    $('[data-toggle="collapse"]').each(function(){
        var target      = $(this).attr('data-target'),
            accordion   = $(this).attr('data-parent'),
            button      = '[data-target="'+target+'"]';

        if(typeof(target) == 'undefined') {
            var target = $(this).attr('href'),
                button      = 'a[href="'+target+'"]';;
        }

        if($(this).hasClass('collapsed')){
            $(target).slideUp();
        }
        
        $(this).click(function(){
            if($(target).is(':hidden')){
                if(typeof(accordion) != 'undefined') {
                    $(accordion).find('.collapse:not('+target+')').slideUp();
                    $(accordion).find('[data-toggle="collapse"]:not('+target+')').addClass('collapsed').removeClass('show');
                }
                $(button).removeClass('collapsed').addClass('show');
                $(target).stop().stop().slideDown().addClass('visible').removeClass('hidden');
            } else {
                $(button).removeClass('show').addClass('collapsed');
                $(target).stop().stop().slideUp().addClass('hidden').removeClass('visible');
            }
        });
    });
}

// Adicionar produto aos favoritos
function addFavorites(product){
    var value = $(product).find('[name="favorite"]'),
        btn = $(product).find('.btn-favorites'),
        icon = $(btn).find('[class*="fa-"]');

    // Adiciona
    if($(value).val() == 'false'){
        $(value).attr('value','true');
        $(btn).removeClass('btn-add-favorites').addClass('btn-remove-favorites').attr('title','Remover dos favoritos');
        $(icon).removeClass('far').addClass('fas');
    
    // Remove
    } else {
        $(value).attr('value','false');
        $(btn).removeClass('btn-remove-favorites').addClass('btn-add-favorites').attr('title','Adicionar aos favoritos');
        $(icon).removeClass('fas').addClass('far');
    }
}

// Verifica se cada produto está ou não adicionado aos favoritos
function verifyFavorites() {
    $('.product').each(function(){
        addFavorites(this);
    });
}

// Da um padding no body pra compensar a altura do topo que está fixo 
function paddingBody() {
    $('body').css('padding-top',$('#header').height());
}

// Desktop: esconde ou exibe menu de categorias do topo conforme o scroll
function collapseCategoryHeader() {
    var lastScrollTop = 0,
        menuCategory = $('#header .bar-bottom'),
        menuCategoryHeight = $(menuCategory).height();

    $(window).scroll(function(){
        var scrollTop = $(this).scrollTop();

        if(scrollTop > lastScrollTop && scrollTop > 200 && $(menuCategory).find('.menu > ul > li.active').length == 0) {
            $(menuCategory).css('margin-top',-menuCategoryHeight);
        } else {
            $(menuCategory).css('margin-top',0);
        }
        lastScrollTop = scrollTop; 
    });
}

// Menu de categorias Desktop
function checkSubmenusQuantity() {

    $('#header .menu > ul > li').each(function(){

        // Verifica se tem apenas um submenu para pode estilizar diferente
        if($(this).find('.submenu-primary').length && $(this).find('.submenu-secondary').length == 0){
            $(this).addClass('only-submenu-primary');
        }

        // Se tiver submenu, aciona o background
        $(this).mouseenter(function(){

            if($(this).hasClass('active') && $(this).find('.submenu-primary').length){
                $('#background-page').stop().fadeIn();
            }
        }).mouseleave(function(){
            $('#background-page').stop().fadeOut();
        });
    });
}

$(document).ready(function(){
    dropdown();
    collapse();
    
    // Menu principal desktop
    dropdown('.bar-bottom .menu > ul > li', '.submenu-primary');

    // Carousel de texto no header
    $('.carousel-header').owlCarousel({
        items: 1,
        autoplay: true,
        dots: false,
        itemElement: 'li',
        stageElement: 'ul',
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        rewind: true
    });
    
    // Função de adicionar aos favoritos caso haja produtos na página
    if($('.product').length) {
        verifyFavorites();

        $('.btn-favorites').click(function(e){
            e.preventDefault();
            var product = $(this).parent().parent('.product');
            addFavorites(product);
        });
    }

    // Da focus no input ao abrir a busca mobile
    $('button[data-target="#header-search"]').click(function(){
        console.log('cliquei');
        $('#header-search input[type="text"]').focus();
    });

    // Funções apenas para desktop
    if($(window).width() >= 992){
        checkSubmenusQuantity();
    }
});

$(window).resize(function(){
    paddingBody();
});

$(window).on('load', function(){
    setTimeout(function(){
        paddingBody();
        
        // Funções apenas para desktop
        if($(window).width() >= 992){
            collapseCategoryHeader();
        }
    }, 1000);
});