document.addEventListener('DOMContentLoaded', function() {
    let menu = document.querySelector('#menu-icon');
    let navlist = document.querySelector('.navlist');
    
    menu.onclick = () => {
        menu.classList.toggle('bx-x');
        navlist.classList.toggle('open');
    };
    
    let sr = ScrollReveal({
        distance: '65px',
        duration: 2600,
        delay: 450,
        reset: false
    });
    
    sr.reveal('.hero-text', { delay: 200, origin: 'top' });
    sr.reveal('.hero-img', { delay: 450, origin: 'top' });
    sr.reveal('.icons', { delay: 300, origin: 'left' });
    sr.reveal('.winner', { delay: 450, origin: 'top' });
});