$(document).ready(function() {
    $('.admin__products-cards').slick({
        dots: true,
        arrows: false,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 1151,
                settings: {
                    slidesToShow: 4,
                },
            },
            {
                breakpoint: 923,
                settings: {
                    slidesToShow: 3,
                },
            },
            {
                breakpoint: 686,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 454,
                settings: {
                    slidesToShow: 1,
                },
            },
        ]
    });
});

const view_exit = document.querySelector('.view-exit');
const background = document.querySelector('.background');
const view_product = document.querySelector('.view-product');
const view__image = document.querySelector('.view-side .view-img');
const view_images = Array.from(document.querySelectorAll('.view-imgs figure img.view-img'));

const updateSelection = () => {
    view_images.forEach(view_image => {
        view_image.classList.remove('active');
    });
}

view_images.forEach(view_image => {
    view_image.addEventListener('click', e => {
        updateSelection();
        view_image.classList.add('active');
        view__image.src = view_image.src;
    });
});

view_exit.addEventListener('click', e => {
    if(e.target.closest('.view-exit')){
        view_product.classList.remove('active');
        background.classList.remove('active');
    }
});