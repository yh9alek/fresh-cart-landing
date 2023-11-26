const view_button = document.querySelector('.view__button');
const view_icon = document.querySelector('i.bi');
const input_pass = document.querySelector('input[type="password"]');

let view = false;

view_button.addEventListener('click', e => {
    e.preventDefault();
    if(e.target.closest('.view__button')) {
        view = !view;
        if(view) {
            view_icon.classList.remove('bi-eye-slash');
            view_icon.classList.add('bi-eye');
            input_pass.setAttribute('type', 'text');

        }
        else
        {
            view_icon.classList.remove('bi-eye');
            view_icon.classList.add('bi-eye-slash');
            input_pass.setAttribute('type', 'password');
        }
    }
});