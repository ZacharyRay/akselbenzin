jQuery(document).ready(function($) {

    //modal news pop up
        $(document).ready(function(){
        $("#menu-item-847, #menu-item-861").click(function () {
            $("#bg-grey").show();
        });
        $('#bg-grey, #btn-close').click(function () {
            $("#bg-grey").hide();
        });
        $});
        $(".js-open-modal").click(function(){
            $(".modal").addClass("visible");
        });
        $(".js-close-modal").click(function(){
            $(".modal").removeClass("visible");
        });
        $(document).click(function(event) {
            if (!$(event.target).closest(".modal,.js-open-modal").length) {
                $("body").find(".modal").removeClass("visible");
            }
        });

    //gallery
$('.main-carousel').flickity({
    cellAlign: 'center',
    contain: true,
    wrapAround: true,
    autoPlay: true,
    autoPlay: 5300,
    pauseAutoPlayOnHover: true,
    });


    // Gallery product page
    $('.carousel-main').flickity({
        prevNextButtons: false,
    });

    // 2nd carousel, navigation
    $('.carousel-nav').flickity({
        asNavFor: '.carousel-main',
        contain: true,
        pageDots: false,
        prevNextButtons: false,
    });

    // Gallery products alike
    $('.products-alike-carousel').flickity({
        cellAlign: 'center',
        contain: true,
        wrapAround: true,
        autoPlay: false,
        prevNextButtons: false
    });

    //products alike button

    var $carousel = $('.products-alike-carousel').flickity();
    // previous
    $('.alike-btn-prev').on( 'click', function() {
        $carousel.flickity('previous');
    });
    // next
    $('.alike-btn-next').on( 'click', function() {
        $carousel.flickity('next');
    });

    //fixed menu desktop

    const nav = document.querySelector('.menu_wrapper');
    const menu = document.querySelector('.desktop_menu').offsetHeight;
    const topOfNav = nav.offsetTop;

    function fixNav() {
        if (window.scrollY >= topOfNav) {
            document.querySelector('.main-wrapper').style.paddingTop = menu + 'px';
            document.body.classList.add('fixed-nav');
        } else {
            document.querySelector('.main-wrapper').style.paddingTop = 0;
            document.body.classList.remove('fixed-nav');
        }
    }
    window.addEventListener('load', fixNav)


    const Mnav = document.querySelector('.mobile_navigation');
    const Mmenu = document.querySelector('.mobile_menu_wrapper').offsetHeight;
    const MtopOfNav = Mnav.offsetTop;

    function MfixNav() {
        if (window.scrollY >= MtopOfNav) {
            document.querySelector('.main-wrapper').style.paddingTop = Mmenu + 'px';
            document.body.classList.add('fixed-nav');
        } else {
            document.querySelector('.main-wrapper').style.paddingTop = 0;
            document.body.classList.remove('fixed-nav');
        }
    }
    window.addEventListener('load', MfixNav)


    // Menus on scroll

    $(function() {
        var mobileHeader = $('.mobile_menu_wrapper');
        var header = $(".desktop_menu");
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();
            if (scroll >= 164) {
                header.removeClass('reveal').addClass("be_gone");
                mobileHeader.removeClass('be_gone_mobile').addClass('reveal_mobile');
            } else {
                header.removeClass("be_gone").addClass('reveal');
                mobileHeader.removeClass("reveal_mobile").addClass('be_gone_mobile');
            }
        });
    });

    //parallax scrolling
    if($(window).width() < 720)
    {
        $(document).ready(function(){
            $(window).scroll(function(e){
                parallaxScroll();
            });
            function parallaxScroll(){
                var scrolled = $(window).scrollTop();
                $('#single_parallax').css('bottom',(125-(scrolled*.25))+'px');
            }
        });
    } else {
        $(document).ready(function(){
            $(window).scroll(function(e){
                parallaxScroll();
            });
            function parallaxScroll(){
                var scrolled = $(window).scrollTop();
                $('#single_parallax').css('bottom',(280-(scrolled*.25))+'px');
            }
        });
    }
});

