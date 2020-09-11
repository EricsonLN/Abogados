const iconMenu =document.getElementById('icon-menu');
const mainMenu= document.getElementById('main-menu2');
const mainConta= document.getElementById('main-contacto');

iconMenu.addEventListener('click',()=>mainMenu.classList.toggle('menu2--show'));

iconMenu.addEventListener('click',()=>mainConta.classList.toggle('menu2--show'));