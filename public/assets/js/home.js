const menu_btn = document.querySelector('.menu__btn');
const menu_exit = document.querySelector('.header__exit');
const background = document.querySelector('.background');
const header_left = document.querySelector('.header__left');
const header_mid = document.querySelector('.header__mid');

document.addEventListener('click', e => {
    e.preventDefault();
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
});