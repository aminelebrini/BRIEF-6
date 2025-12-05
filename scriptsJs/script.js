const side = document.querySelector('.side-bar'); 
const menuBtn = document.getElementById('open'); 
const closeBtn = document.getElementById('close'); 
const btnSlide = document.getElementById('btnslide');

if (menuBtn && side) {
    menuBtn.addEventListener('click', () => {
        side.classList.toggle('translate-x-full');
    });
}

if (closeBtn && side) {
    closeBtn.addEventListener('click', () => {
        side.classList.add('translate-x-full');
    });
}

if (btnSlide) {
    btnSlide.addEventListener('click', () => {
        window.location.href = "/service";
    });
}

const navMenu = document.querySelector('.nav');
if (menuBtn && navMenu) {
    menuBtn.addEventListener('click', () => {
        navMenu.classList.toggle('hidden'); 
    });
}