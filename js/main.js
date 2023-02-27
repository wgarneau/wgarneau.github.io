//------Refresh------//
$(document).ready(function () {
    $('html').animate({scrollTop: 0}, 1);
    $('body').animate({scrollTop: 0}, 1);
});
//------Refresh------//


// ------Load------//
$(window).load(function () {
    $(".loader").fadeOut(0);
});
//------Load------//


//------ScrollReveal------//
ScrollReveal().reveal('.title', {
    delay: 300,
    origin: 'top',
    distance: '50px',
    duration: 600,
});
ScrollReveal().reveal('.text', {
    delay: 300,
    origin: 'bottom',
    distance: '50px',
    duration: 600,
});
ScrollReveal().reveal('.competences','.panel', {
    delay: 300,
    origin: 'left',
    distance: '100px',
    duration: 600,
});
ScrollReveal().reveal('.cv', {
    delay: 450,
    origin: 'bottom',
    distance: '50px',
    duration: 600,
});
ScrollReveal().reveal('.html', {
    delay: 300,
    origin: 'right',
    distance: '50px',
    duration: 600,
});
ScrollReveal().reveal('.css', {
    delay: 350,
    origin: 'right',
    distance: '50px',
    duration: 600,
});
ScrollReveal().reveal('.js', {
    delay: 400,
    origin: 'right',
    distance: '50px',
    duration: 600,
});
ScrollReveal().reveal('.wp', {
    delay: 450,
    origin: 'right',
    distance: '50px',
    duration: 600,
});
ScrollReveal().reveal('.Me', {
    delay: 450,
    origin: 'bottom',
    distance: '50px',
    duration: 600,
});
ScrollReveal().reveal('.haut', {
    delay: 450,
    origin: 'top',
    distance: '100px',
    duration: 600,
});
ScrollReveal().reveal('.bas', {
    delay: 450,
    origin: 'top',
    distance: '100px',
    duration: 600,
});
ScrollReveal().reveal('.links', {
    delay: 450,
    origin: 'bottom',
    distance: '100px',
    duration: 500,
});

//------ScrollReveal------//
ScrollReveal().reveal('.entrance', {
    delay: 450,
    origin: 'bottom',
    distance: '100px',
    duration: 500,
});

//------Panel------//
$(document).ready(function () {
    $('.s1 .question').on('click', function () {
        $(this).parents('.panel').toggleClass('open').siblings();
        $(this).siblings('.answer').slideToggle(225);
        $(this).parents('.panel').siblings();
    });
});
//------Panel------//

//------arrowsDown------//
$(function() {
    $('a[href*=#]').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop:
        $($(this).attr('href')).offset().top}, 500, 'linear');
    });
});
//------arrowsDown------//

// ---------------------- scroll pour change color de nav

var changeColor = $('.colorchange').css('height');
changeColor = parseInt(changeColor);

window.onscroll = function () {

    if (document.documentElement.scrollTop >= changeColor) {
        $('.logo').css('color', 'black');
        $('.spanMenu').css('background', 'black');
        $('.page').css('color', 'black');
        $('.globalNav').css('background-color', 'white');
        $('#menu').css('background-color', 'white');
        $('.li').css('color', 'black')
    } else{
        $('.logo').css('color', 'white');
        $('.spanMenu').css('background', 'white');
        $('.page').css('color', 'black');
        $('.globalNav').css('background-color', 'transparent');
        $('#menu').css('background-color', 'transparent');
        $('.li').css('color', 'white')
    }


};
// ---------------------- scroll pour change color de nav


// ---------------------- enlarge img

$(document).ready(function () {

    $('#button1').click(function () {
        $('.enlarge1').fadeToggle("slow");
    });

    $('#retourbutton1').click(function () {
        $('.enlarge1').fadeToggle("slow");
    });

    $('#button2').click(function () {
        $('.enlarge2').fadeToggle("slow");
    });

    $('#retourbutton2').click(function () {
        $('.enlarge2').fadeToggle("slow");
    });
    
    $('#button3').click(function () {
        $('.enlarge3').fadeToggle("slow");
    });

    $('#retourbutton3').click(function () {
        $('.enlarge3').fadeToggle("slow");
    });


    $('#button4').click(function () {
        $('.enlarge4').fadeToggle("slow");
    });

    $('#retourbutton4').click(function () {
        $('.enlarge4').fadeToggle("slow");
    });

// ---------------------- enlarge img

// ---------------------- Show nav



});
































