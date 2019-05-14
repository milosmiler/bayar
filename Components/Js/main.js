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
