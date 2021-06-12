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

function addFavorites(product){
    console.log(product);
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

$(document).ready(function(){
    dropdown();

    // Menu principal
    dropdown('.menu > ul > li', '.submenu-primary');

    // Função de adicionar aos favoritos caso haja produtos na página
    if($('.product').length) {
        
        verifyFavorites();

        $('.btn-favorites').click(function(e){
            e.preventDefault();

            var product = $(this).parent().parent('.product');
            addFavorites(product);
        });
    }
});