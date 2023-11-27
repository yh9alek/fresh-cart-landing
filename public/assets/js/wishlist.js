const checkall = document.querySelector('.check-all');
const checks = Array.from(document.querySelectorAll('.check'));
const btn__add = document.querySelector('.btn__add');

let checked = false;

const getChecks = () => {
    checks.some(check => {
        if(check.checked) {
            btn__add.classList.add('active');
            return true;
        }
        btn__add.classList.remove('active');
        return false;
    });
}

checkall.onchange = () => {
    checked = !checked;
    checks.forEach(check => {
        if(checked) check.checked = checked;
        else check.checked = false;
    });
    getChecks();
}

checks.forEach(check => {
    check.addEventListener('change', getChecks);
});