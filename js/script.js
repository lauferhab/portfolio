let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menuIcon.onclick = () => {
    navbar.classList.toggle('active');

    // Cambia el icono dependiendo del estado del menú
    if (navbar.classList.contains('active')) {
        menuIcon.setAttribute('name', 'close-outline'); // muestra la X
    } else {
        menuIcon.setAttribute('name', 'ellipsis-vertical'); // muestra los 3 puntos
    }
}

let section = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('header nav a');

window.onscroll = () => {
    section.forEach(sec => {
        let top = window.scrollY;
        let offset = sec.offsetTop - 100;
        let height = sec.offsetHeight;
        let id = sec.getAttribute('id');

        if(top >= offset && top < offset + height) {
            navLinks.forEach(links => {
                links.classList.remove('active');
                document.querySelector('header nav a[href*=' + id + ']').classList.add('active');
            });
        }
    });
    navbar.classList.remove('active');
    menuIcon.setAttribute('name', 'ellipsis-vertical');
}
