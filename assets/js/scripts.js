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

// Adiciona produto na lista de favoritos
function addFavorites() {

    $('.btn-favorites').click(function(e){
        e.preventDefault();

        var value = $(this).parent().find('[name="favorite"]'),
            btn = $(this),
            icon = $(btn).find('[class*="fa-"]'),
            btnAddClass = 'btn-add-favorites',
            btnRemoveClass = 'btn-remove-favorites';

        // Adiciona
        if($(value).val() == 'false'){
            $(value).attr('value','true');
            $(btn).removeClass(btnAddClass).addClass(btnRemoveClass).attr('title','Remover dos favoritos');
            $(icon).removeClass('far').addClass('fas');
        
        // Remove
        } else {
            $(value).attr('value','false');
            $(btn).removeClass(btnRemoveClass).addClass(btnAddClass).attr('title','Adicionar aos favoritos');
            $(icon).removeClass('fas').addClass('far');
        }
    });
}

$(document).ready(function(){
    dropdown();

    // Menu principal
    dropdown('.menu > ul > li', '.submenu-primary');

    // Função de adicionar aos favoritos caso haja produtos na página
    if($('.product').length) {
        addFavorites();
    }
});