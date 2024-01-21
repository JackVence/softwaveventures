let menu = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('bx-x');
    navbar.classList.toggle('active');
}
let ownerdetails = document.querySelector('.ownerdetails');
let caret = document.querySelector('#caret');

caret.onclick = () =>{
    caret.classList.toggle('bx-x');
}