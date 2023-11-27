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
const btn__continue = document.querySelector('.btn__continue');

menu_btn.addEventListener('click', e => {
    e.preventDefault();
    background.classList.add('active');
    header_mid.classList.add('active');
    header_left.classList.add('active');
});

menu_exit.addEventListener('click', e => {
    e.preventDefault();
    background.classList.remove('active');
    header_mid.classList.remove('active');
    header_left.classList.remove('active');
});

btn__cart.addEventListener('click', e => {
    e.preventDefault();
    background_cart.classList.add('active');
    cart__shop.classList.add('active');
});

cart__exit.addEventListener('click', e => {
    e.preventDefault();
    background_cart.classList.remove('active');
    cart__shop.classList.remove('active');
});

btn__continue.addEventListener('click', e => {
    e.preventDefault();
    background_cart.classList.remove('active');
    cart__shop.classList.remove('active');
});