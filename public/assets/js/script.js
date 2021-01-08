// display login

const linkLogin = document.querySelector('.masuk');
const btnClose = document.querySelector('.close input');
const displayLogin = document.querySelector('.bg-transparan');

btnClose.addEventListener('click', function() {
    displayLogin.classList.toggle('display-none');
});

linkLogin.addEventListener('click', function() {
    displayLogin.classList.toggle('display-none');
});

// end display login
