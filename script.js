// Code Started

let navigation__icon = document.getElementById('navigation__icon');
let formPop = document.getElementById("formPop");
let classPop = document.getElementById("classPop");
let leave = document.getElementById("leave");
let sel = document.getElementById("sel");
let close = document.getElementById("close");


navigation__icon.onclick = () => {
    document.getElementById('navigation').classList.toggle('navigation-open');
}

var swiper = new Swiper(".mySwiper", {
    centeredSlides: true,
    scrollbar: {
        el: ".swiper-scrollbar",
        hide: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
});

leave.onclick = ()=>{
    formPop.classList.toggle("show")
}
sel.onclick = ()=>{
    classPop.classList.toggle("show")
}
close.onclick = ()=>{
    classPop.classList.toggle("show")
}

var clubs = document.getElementById("clubs").offsetTop;
function club() {
    window.scrollTo({ top: clubs, behavior: 'smooth'});
}
var card = document.getElementById("card").offsetTop;
function register() {
    window.scrollTo({ top: card, behavior: 'smooth'});
}
