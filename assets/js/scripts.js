// Dropdown
function dropdown(dropdown, target){
    var dropdown    = typeof(dropdown) == 'undefined' ? $('.dropdown') : $(dropdown);
        target      = typeof(target) == 'undefined' ? $('.dropdown-target') : $(target);
    $(dropdown).each(function(){
        
        $(this).hover(function(){
            $(this).addClass('active');
            $(this).find(target).stop().stop().slideDown();
        });
    
        $(this).mouseleave(function(){
            $(this).removeClass('active');
            $(this).find(target).stop().stop().slideUp();
        });
    });
    
}

$(document).ready(function(){
    dropdown();

    // Menu principal
    dropdown('.menu > ul > li', '.submenu-primary');
});