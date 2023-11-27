const menu_btn = document.querySelector('.menu__btn');
const menu_exit = document.querySelector('.header__exit');
const background = document.querySelector('.background');
const background_cart = document.querySelector('.background-cart');
const header_left = document.querySelector('.header__left');
const header_mid = document.querySelector('.header__mid');
const btn__cart = document.querySelector('.btn__cart');
const cart__exit = document.querySelector('.cart__exit');
const cart__shop = document.querySelector('.cart');
const btn__plus = document.querySelector('.btn_p');
const btn__minus = document.querySelector('.btn_m');

document.addEventListener('click', e => {
    if(!e.target.closest('input[type="checkbox"]')) e.preventDefault();
    if(e.target.closest('.menu__btn') == menu_btn) {
        background.classList.add('active');
        header_mid.classList.add('active');
        header_left.classList.add('active');
    }
    if(e.target.closest('.header__exit') == menu_exit) {
        background.classList.remove('active');
        header_mid.classList.remove('active');
        header_left.classList.remove('active');
    }
    if(e.target.closest('.btn__cart') == btn__cart) {
        background_cart.classList.add('active');
        cart__shop.classList.add('active');
    }
    if(e.target.closest('.cart__exit') == cart__exit) {
        background_cart.classList.remove('active');
        cart__shop.classList.remove('active');
    }
});