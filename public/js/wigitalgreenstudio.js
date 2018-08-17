var hamburger_menu = document.getElementById('hamburger-menu');
var navbar_dropdown = document.getElementById('navbar-dropdown');

hamburger_menu.addEventListener('click', function(){
	navbar_dropdown.classList.toggle('open');
});