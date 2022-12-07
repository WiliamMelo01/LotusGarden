const icon = document.querySelector('#eye-icon');
const inputPassword = document.querySelector('#senha');

icon.addEventListener('click', () => {

    if (icon.classList.contains('fa-eye')) {
        icon.classList.replace('fa-eye', 'fa-eye-slash');
        inputPassword.type = "text";
    } else {
        icon.classList.replace('fa-eye-slash', 'fa-eye');
        inputPassword.type = "password";
    }

})