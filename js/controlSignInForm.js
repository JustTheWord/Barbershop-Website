const passCheckbox = document.getElementById('pass-checkbox');
const pass = document.getElementById('password');
const passConfirm = document.getElementById('password_confirm');

passCheckbox.addEventListener('change', function () {

    if (passCheckbox.checked === true) {
        pass.type = 'text'
        passConfirm.type = 'text'
    } else {
        pass.type = 'password'
        passConfirm.type = 'password'
    }
})
