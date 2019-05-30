//menu mobile
let burger = document.querySelector(".burger"),
	menu = document.querySelector('.menu'),
	close = document.querySelector('.close'),
	overlay = document.querySelector('.overlay');

	burger.addEventListener("click", function(){
		menu.className += ' open';
		overlay.className += ' open';
	});

	close.addEventListener("click", function(){
		menu.classList.remove('open');
		overlay.classList.remove('open')
	});

// scroll
	$(window).scroll(function(event) {
		var scrollTop = $(window).scrollTop();
		var data = (scrollTop/10);
		 console.log(data);
		$('section.grid > div > ul:nth-child(1)').css('transform','translate3d(0px, '+data+'px'+', 0px)');

	});

// active al seleccionar menu

let navItem = Array.prototype.slice.apply(document.querySelectorAll('a')); // seleccionamos la etiqueda y la convertimos en un array
let navItems = document.getElementById('navs'); // cachamos el id de la caja padre para meter el evento click
navItems.addEventListener('click', e =>{
	if(e.target.classList.contains('item-nav')){  // delegamos el evento  buscando la clase item-nav  para disparar el evento
		let i= navItem.indexOf(e.target); // cual es la posicion del elemento seleccion solo funciona con los array
		navItem.map(tab => tab.classList.remove('active'));
		navItem[i].classList.add('active');
	}
});

let catItem = Array.prototype.slice.apply(document.querySelectorAll('a')); // seleccionamos la etiqueda y la convertimos en un array
let actItems = document.getElementById('category'); // cachamos el id de la caja padre para meter el evento click
actItems.addEventListener('click', e =>{

    if(e.target.classList.contains('cat')){  // delegamos el evento  buscando la clase item-nav  para disparar el evento
        console.log(e.target);
        let i= catItem.indexOf(e.target); // cual es la posicion del elemento seleccion solo funciona con los array
        catItem.map(tab => tab.classList.remove('active'));
        catItem[i].classList.add('active');
    }
});



// slider nosotros

	var sync1 = $("#sync1");
    var sync2 = $("#sync2");
    var slidesPerPage = 1; //globaly define number of elements per page
    var syncedSecondary = true;

    sync1.owlCarousel({
        items: 1,
        slideSpeed: 2000,
        nav: false,
        margin: 1,
        autoplay: false,
        dots: true,
        loop: true,
        responsiveRefreshRate: 200,
    }).on('changed.owl.carousel', syncPosition);

    sync2
        .on('initialized.owl.carousel', function() {
            sync2.find(".owl-item").eq(0).addClass("current");
        })
        .owlCarousel({
            items: slidesPerPage,
            dots: true,
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
        var current = Math.round(el.item.index - (el.item.count / 2) - .5);

        if (current < 0) {
            current = count;
        }
        if (current > count) {
            current = 0;
        }

        //end block

        sync2
            .find(".owl-item")
            .removeClass("current")
            .eq(current)
            .addClass("current");
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

    sync2.on("click", ".owl-item", function(e) {
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
   