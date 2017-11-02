 if ($(document).height() <= $(window).height())
  $("footer.footer").addClass("navbar-fixed-bottom");

$(".reviews__slider").slick({
    nextArrow: '<i class="fa fa-arrow-right"></i>',
    prevArrow: '<i class="fa fa-arrow-left"></i>',
    draggable: false
});
$('.fa-arrow-left').click(function(){
  $('.reviews-text__slider').slick('slickPrev');
})

$('.fa-arrow-right').click(function(){
  $('.reviews-text__slider').slick('slickNext');
})

$(".reviews-text__slider").slick({
    arrows: false,
    draggable: false
});


function tabFunc(evt, Name) {
    var i;
    var x = document.getElementsByClassName("tab-target");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    tablinks = document.getElementsByClassName("tab-selector");
    for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(Name).style.display = "block";
    evt.currentTarget.className += " active";  
}

var buttl=document.querySelector(".tab-btn__1");
var butt2=document.querySelector(".tab-btn__2");
var butt3=document.querySelector(".tab-btn__3");
var butt4=document.querySelector(".tab-btn__4");

buttl.addEventListener("click",function(){
    tabFunc(event, "tab-1");
});
butt2.addEventListener("click",function(){
    tabFunc(event, "tab-2");
});
butt3.addEventListener("click",function(){
    tabFunc(event, "tab-3");
});
butt4.addEventListener("click",function(){
    tabFunc(event, "tab-4");
});
$('.header-nav_gallery').click(function(){
        $('html, body').animate({
        scrollTop: $("#gal").offset().top
    }, 1000);
})

$('.header-nav_main').click(function(){
        $('html, body').animate({
        scrollTop: $("#main").offset().top
    }, 1000);
})

$('.category__link_flowers').click(function(){
        tabFunc(event, "tab-1");
        $('html, body').animate({
        scrollTop: $("#tab-1").offset().top
    }, 1000);
})

$('.category__link_decupage').click(function(){
        tabFunc(event, "tab-2");
        $('html, body').animate({
        scrollTop: $("#tab-2").offset().top
    }, 1000);
})

$('.category__link_accesories').click(function(){
        tabFunc(event, "tab-3");
        $('html, body').animate({
        scrollTop: $("#tab-3").offset().top
    }, 1000);
})

$('.category__link_improvization').click(function(){
        tabFunc(event, "tab-4");
        $('html, body').animate({
        scrollTop: $("#tab-4").offset().top
    }, 1000);
})

$(".header-mobile__icon").click(function(){
    $(".header-mobile").toggle();
});