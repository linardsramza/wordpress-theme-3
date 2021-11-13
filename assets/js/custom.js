jQuery(document).ready(function($) {
    $(".mobile-nav .menu-item-has-children > a").click(function(event){
        event.preventDefault();
        $(this).parent().toggleClass('active-sub');
    });
});
