const Side = document.querySelector('.side-bar');

document.getElementById('menu').addEventListener('click', () => {
    Side.classList.toggle("translate-x-full");
});

document.getElementById('close').addEventListener('click', ()=>{
     Side.classList.add("translate-x-full");
});
