


const navMenu = document.getElementById('nav-menu'),
toggleMenu = document.getElementById('toggle-menu'),
closeMenu = document.getElementById( 'close-menu')


toggleMenu.addEventListener('click', () => {
navMenu.classList.toggle('show')
})

closeMenu.addEventListener('click', () => {
navMenu.classList.remove('show')
})

/*window.onload = function() {
    const ABOUT = document.querySelector("#about");
   window.addEventListener('scroll', scrollabout);
    function scrollabout() {
       if (window.scrollY >= 100) {
            ABOUT.style.opacity = '1';
            ABOUT.style.transfrom = 'trans lateX(0px)';
            ABOUT.style.transition = '1s ease-in-out';
        }
        else {
            ABOUT.style.opacity = '0';
            ABOUT.style.transfrom = 'trans lateX(-50px)';
        }
    }
    scrollabout();
}*/
 