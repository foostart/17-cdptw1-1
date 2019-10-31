$(document).ready(function () {
    //  DROPDOWN
    if ($(window).width() > 728) {
        $(".dropdown2").hover(
                function () {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).fadeIn("600");
                    $(this).toggleClass('open');
                },
                function () {
                    $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).fadeOut("600");
                    $(this).toggleClass('open');
                }
        );
    }
    if ($(window).width() < 728) {
        var i = 0;
        $(".dropdown2", this).click(function () {
            if (i % 2 !== 0) {
                $('span.opener', this).removeClass("close");
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).fadeOut("600");
                $(this).toggleClass('open');
            } else {
                $('span.opener', this).addClass("close").css({'font-size': '28px', 'color': '#009900', 'opacity': '1'});
                $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true, true).fadeIn("600");
                $(this).toggleClass('open');
            }
            i++;

        });
    }
});