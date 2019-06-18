//variables gobales
var loc = window.location.pathname;
var result2 = document.getElementById("location").value;

//menu mobile
let burger = document.querySelector(".burger"),
    menu = document.querySelector('.menu'),
    close = document.querySelector('.close'),
    overlay = document.querySelector('.overlay');

burger.addEventListener("click", function () {
    menu.className += ' open';
    overlay.className += ' open';
});

close.addEventListener("click", function () {
    menu.classList.remove('open');
    overlay.classList.remove('open');
});

// ejecusion de menu de categorias

if (result2 == 'index.html') {

    let catItem = Array.prototype.slice.apply(document.querySelectorAll('a')); // seleccionamos la etiqueda y la convertimos en un array
    let box = Array.prototype.slice.apply(document.querySelectorAll('.content-tab'));
    let actItems = document.getElementById('category'); // cachamos el id de la caja padre para meter el evento click
    actItems.addEventListener('click', e => {
        if (e.target.classList.contains('cat')) {
            // delegamos el evento  buscando la clase item-nav  para disparar el evento
            let i = catItem.indexOf(e.target); // cual es la posicion del elemento seleccion solo funciona con los array
            catItem.map(tab => tab.classList.remove('active'));
            catItem[i].classList.add('active');
            box.map(tabs => tabs.classList.remove('active-grid'));
            box[i].classList.add('active-grid');
            console.log(box);
        }
    });
};

// menu active

var locNavs = document.getElementsByClassName("item-nav");
var arr = Array.prototype.slice.call(locNavs);

for (var i = 0; i < arr.length; i++) {
    result = arr[i].getAttribute("href");
    if (result == result2) {
        arr.map(tab => tab.classList.remove('active'));
        arr[i].classList.add('active');
    };
}

// manipulaciones con jquery

// tabs de textos

$('.circle:first-child').addClass('active');

// click function
$('.circle').click(function () {
    $('.circle').removeClass('active');
    $('.content').removeClass('active');
    $(this).addClass('active');
    $('.content').addClass('active');

    return false;
});

// scroll
$(window).scroll(function (event) {
    var scrollTop = $(window).scrollTop();
    var data = scrollTop / 10;
    $('section.grid > div > ul:nth-child(1)').removeClass('animate-grids2');
    $('section.grid > div > ul:nth-child(1)').css('transform', 'translate3d(0px, ' + data + 'px' + ', 0px)');
});

//hover card de grid


// slider contacto
$('.owl-carousel.theme-contacto').owlCarousel({
    loop: true,
    margin: 10,
    autoplay: true,
    autoplayTimeout: 5000,
    animateOut: 'fadeOut',
    dots: true,
    responsive: {
        0: {
            items: 1
        },
        600: {
            items: 1
        },
        1000: {
            items: 1
        }
    }
});

// slider nosotros

var owl = $("#sync1");
owl.on('changed.owl.carousel', function (e) {
    console.log("current: ", e.item.index); //same
    if ("current: ", e.item.index == 4) {
        $('#sync2 .item .item-content h2').css('color', '#DC2771');
    }
    if ("current: ", e.item.index == 5) {
        $('#sync2 .item .item-content h2').css('color', '#42B3C6');
    }
    if ("current: ", e.item.index == 6) {
        $('#sync2 .item .item-content h2').css('color', '#A9C454');
    }
    if ("current: ", e.item.index == 7) {
        $('#sync2 .item .item-content h2').css('color', '#000000');
    }
    if ("current: ", e.item.index == 3) {
        $('#sync2 .item .item-content h2').css('color', '#7A6B99');
    }
});

var sync1 = $("#sync1");
var sync2 = $("#sync2");
var slidesPerPage = 1; //globaly define number of elements per page
var syncedSecondary = true;

sync1.owlCarousel({
    items: 1,
    slideSpeed: 6000,
    nav: false,
    margin: 1,
    autoplay: true,
    dots: true,
    loop: true,
    responsiveRefreshRate: 200,
    onInitialized: startProgressBar,
    onTranslate: resetProgressBar,
    onTranslated: startProgressBar
}).on('changed.owl.carousel', syncPosition);

sync2.on('initialized.owl.carousel', function () {
    sync2.find(".owl-item").eq(0).addClass("current");
}).owlCarousel({
    items: slidesPerPage,
    dots: true,
    animateOut: 'fadeOut',
    nav: false,
    smartSpeed: 200,
    slideSpeed: 500,
    slideBy: slidesPerPage, //alternatively you can slide by 1, this way the active slide will stick to the first item in the second carousel
    responsiveRefreshRate: 100
}).on('changed.owl.carousel', syncPosition2);

function syncPosition(el) {
    //if you set loop to false, you have to restore this next line
    //var current = el.item.index;

    //if you disable loop you have to comment this block
    var count = el.item.count - 1;
    var current = Math.round(el.item.index - el.item.count / 2 - .5);

    if (current < 0) {
        current = count;
    }
    if (current > count) {
        current = 0;
    }

    //end block

    sync2.find(".owl-item").removeClass("current").eq(current).addClass("current");
    var onscreen = sync2.find('.owl-item.active').length - 1;
    var start = sync2.find('.owl-item.active').first().index();
    var end = sync2.find('.owl-item.active').last().index();

    if (current > end) {
        sync2.data('owl.carousel').to(current, 100, true);
    }
    if (current < start) {
        sync2.data('owl.carousel').to(current - onscreen, 100, true);
    }
}

function syncPosition2(el) {
    if (syncedSecondary) {
        var number = el.item.index;
        sync1.data('owl.carousel').to(number, 100, true);
    }
}

sync2.on("click", ".owl-item", function (e) {
    e.preventDefault();
    var number = $(this).index();
    sync1.data('owl.carousel').to(number, 300, true);
});

var dot = $('#sync2 .owl-dots .owl-dot');
dot.each(function () {
    var index = $(this).index() + 1;
    if (index < 10) {
        $(this).html('0').append(index);
    } else {
        $(this).html(index);
    }
});

function startProgressBar() {
    // apply keyframe animation
    $(".slide-progress").css({
        width: "100%",
        transition: "width 6000ms"
    });
}

function resetProgressBar() {
    $(".slide-progress").css({
        width: 0,
        transition: "width 0s"
    });
}