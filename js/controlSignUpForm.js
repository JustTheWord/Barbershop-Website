const passCheckbox = document.getElementById('pass-checkbox_signup');
const pass = document.getElementById('password-signup');
const passConfirm = document.getElementById('password_confirm_signup');

passCheckbox.addEventListener('change', function () {

    if (passCheckbox.checked === true) {
        pass.type = 'text'
        passConfirm.type = 'text'
    } else {
        pass.type = 'password'
        passConfirm.type = 'password'
    }
})

