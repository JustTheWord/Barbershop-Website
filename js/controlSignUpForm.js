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

// delete Name form error after click on the field
const nameField = document.getElementById('name');
const nameFormError = document.getElementById('form-name-error');
nameField.addEventListener("click", function () { nameFormError.style.display = 'none'; })

// delete Email form error after click on the field
const emailField = document.getElementById('email');
const emailFormError = document.getElementById('form-email-error');
emailField.addEventListener("click", function () { emailFormError.style.display = 'none'; })

// delete Phone error form after click on the field
const phoneField = document.getElementById('phone');
const phoneFormError = document.getElementById('form-phone-error');
phoneField.addEventListener("click", function () { phoneFormError.style.display = 'none'; })

// delete Birthday form error after click on the field
const dateField = document.getElementById('birthday');
const dateFormError = document.getElementById('form-data-error');
dateField.addEventListener("click", function () { dateFormError.style.display = 'none'; })

// delete Password form error after click on the field
const passSignUpField = document.getElementById('password-signup');
const passSignUpFormError = document.getElementById('form-pass-error');
passSignUpField.addEventListener("click", function () { passSignUpFormError.style.display = 'none'; })

// delete Password Confirmation form error after click on the field
const passConfirmField = document.getElementById('password_confirm_signup');
const passConfirmFormError = document.getElementById('form-confirm-pass-error');
passConfirmField.addEventListener("click", function () { passConfirmFormError.style.display = 'none'; })