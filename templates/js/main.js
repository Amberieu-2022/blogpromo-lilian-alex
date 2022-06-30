// Main.js

let btnContainer = document.getElementById('burger-container')

let topLine = document.getElementById('menu-button-top')
let middleLine = document.getElementById('menu-button-center')
let bottomLine = document.getElementById('menu-button-bottom')

let nav = document.getElementById('header-nav-burger')

console.log(btnContainer);
console.log(topLine);
console.log(middleLine);
console.log(bottomLine);

btnContainer.addEventListener('click', () => {
    topLine.classList.toggle('top-transformation')
    bottomLine.classList.toggle('bottom-transformation')
    middleLine.classList.toggle('none')
    nav.classList.toggle('new-position')
})