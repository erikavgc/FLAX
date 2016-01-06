function getcurrent() {
    "use strict";
    var pagina;
    $('#explora').animate({
        opacity: '0.9',
        bottom: '43%'
    }, 1800);
    currentPage("current", "current2");
    window.location.hash = "index";
}

function currentPage(id, id2) {
    if($(window).width() > 960){
    document.getElementById(id).style.background = ("#e20b3d");
    }
    document.getElementById(id).style.padding = "3px";
    document.getElementById(id).style.borderRadius = "5px";
     if($(window).width() > 960){
    document.getElementById(id2).style.color = ("#ffffff");
     }else{
      document.getElementById(id2).style.color = ("#e20b3d");   
     }
    
}

function explora() {
    $('#entry').fadeIn(2000);
}

function showentry(id) {
    $('html, body').animate({
        scrollTop: 0
    }, 'slow');
    var hash = "#";
    var name = hash.concat(id);
    $(name).fadeIn(500);
    $('#black').fadeIn();
}


$(document).click(function (e) {
    var target = $(e.target);
    if (target.is(".tutoriales")) {} else {
        if (target.is("#black") || target.is("#exit")) {
            e.stopPropagation();
            $('.container_hidden').fadeOut();
            $('#black').fadeOut();
        }
    }
});

$(document).ready(function () {
    $(window).scroll(function () {
        $('.hide').each(function (i) {

            var final_objeto = $(this).offset().top + $(this).outerHeight();
            var final_ventana = $(window).scrollTop() + $(window).height();

            /* If the object is completely visible in the window, fade it it */
            if (final_ventana > final_objeto) {

                $(this).animate({
                    'opacity': '1'
                }, 500);
            }

        });

    });

});



function load(id, id2) {
    $("li a").css({
        'color': '#ccc'
    });
    if($(window).width() > 960){
        $("li").css({
        'backgroundColor': "#151515"
    });
    }
    currentPage(id, id2);
    $('html, body').animate({
        scrollTop: 0
    }, 'fast');
    if (id == "current") {
        window.location.hash = "index";
        $('section').load('index.php #index', function () {
            getcurrent();
        });
    }
    if (id == "fav") {
        window.location.hash = "tutoriales";
        $('section').load('tutoriales.php #entry', function () {
            $("#entry").show("slide", {
                direction: "right"
            }, 'slow').fadeIn(3000);
        });
    }
    if (id == "fav3") {
        window.location.hash = "favoritos";
        $('section').load('favoritos.php #section2', function () {
            $("#section2").show("slide", {
                direction: "right"
            }, 'slow').fadeIn(3000);
        });
    }
    if (id == "fav5") {
        window.location.hash = "blog";
        $('section').load('inspiracion.php #section', function () {
            $("#section").show("slide", {
                direction: "right"
            }, 'slow').fadeIn(3000);
        });
    }
    if (id == "fav7") {
        window.location.hash = "sobrenosotros";
        $('section').load('about.php #about', function () {
            $("#about").show("slide", {
                direction: "right"
            }, 'slow').fadeIn(3000);
        });
    }
}

function explore() {
    var num;
    num = parseInt((Math.random() * 10), 10);
    if (num == 3 || num == 2 || num==1) {
        load('fav', 'fav2');
    }
    if (num == 4 || num == 5 || num==6) {
        load('fav3', 'fav4');
    }
    if (num == 7 || num == 8 || num==9) {
        load('fav5', 'fav6');
    }
}