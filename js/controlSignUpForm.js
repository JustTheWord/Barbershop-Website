'use strict'

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


document.addEventListener('DOMContentLoaded', function () {

    const form = document.getElementById('form-sign-up');
    form.addEventListener('submit', formSend);

    function formSend(event) {
        event.preventDefault();
        formValidate(form);
    }

    function formValidate(form) {
        let formReq = document.querySelectorAll('.required')
        let errors = 0;

        for (let reqField of formReq) {
            removeError(reqField);

            if (reqField.classList.contains('email')) {

                if (emailTest(reqField)) {
                    addError(reqField);
                    errors++;
                }

            } else if (reqField.classList.contains('phone')) {

                if (phoneNumberTest(reqField)) {
                    addError(reqField);
                    errors++;
                }

            } else if (reqField.classList.contains('name') ||
                reqField.classList.contains('password') ||
                reqField.classList.contains('date')) {

                if (reqField.value === '') {
                    addError(reqField);
                    errors++;
                }
            }
        }

        if (errors === 0) {
            form.removeEventListener('submit', formSend);
            form.submit();
        }
    }

    function addError(input) {
        input.classList.add('_error');
    }
    function removeError(input) {
        input.classList.remove('_error');
    }

    function emailTest(input) {
        return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
    }

    function phoneNumberTest(input) {
        // only xxx xxx xxx or xxx-xxx-xxx formats
        return !/^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{3})$/.test(input.value);
    }
})
