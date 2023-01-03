const btnBurger = document.getElementById("btn-burger");
const navTop = document.getElementById("nav-large");

btnBurger.addEventListener('click', () => {
    navTop.classList.toggle('open');
})