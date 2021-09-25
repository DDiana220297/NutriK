function showLateralMenu(){
    if($('.lateral-dropdown-menu').hasClass('lateral-dropdown-menu-open')){
        $('.lateral-dropdown-menu').removeClass('lateral-dropdown-menu-open');
        $('.lateral-dropdown-menu').fadeOut();
    }
    else{
        $('.lateral-dropdown-menu').addClass('lateral-dropdown-menu-open');
        $('.lateral-dropdown-menu').fadeIn(200)
    }
};

$(document).ready(function (){
    $('.carousel').carousel();
});


