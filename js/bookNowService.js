// local storage variable index is set on the 'Services' page which associated with the selected service
window.onload = function () {
    document.getElementById('service').selectedIndex = parseInt(localStorage.getItem('index'));
    localStorage.clear();
}


// dynamic change of the price according to the selected barber and service
// in the case of turning-off JavaScript, use <noscript> tag
const prices = {
    "Farian": {'Haircut': '600', 'Haircut & Shave': '900', 'Haircut & Beard': '900', 'Haircut Long Hair': '650',
        'Long Hair & Beard': '950', 'Father & Son': '1000'},

    "Kirill": {'Haircut': '550', 'Haircut & Shave': '800', 'Haircut & Beard': '800', 'Haircut Long Hair': '600',
        'Long Hair & Beard': '900', 'Father & Son': '900'},

    "Ivan": {'Haircut': '550', 'Haircut & Shave': '800', 'Haircut & Beard': '800', 'Haircut Long Hair': '600',
        'Long Hair & Beard': '900', 'Father & Son': '900'},
}

const barberField = document.getElementById('barber');
const serviceField = document.getElementById('service');
const priceField = document.getElementById('service-price');

//global function to call from the event listener
var globalChangePrice = function changePrice() {

    const barberName = barberField.options[barberField.selectedIndex].text
    const serviceName = serviceField.options[serviceField.selectedIndex].text

    priceField.innerText = prices[barberName][serviceName] + ' kč';
}

globalChangePrice();

barberField.addEventListener('change', function () { globalChangePrice(); });
serviceField.addEventListener('change', function () { globalChangePrice(); });


// delete Email form error after click on the field
const emailBookField = document.getElementById('email-booking');
const emailFormError = document.getElementById('form-email-error');
emailBookField.addEventListener("click", function () { emailFormError.style.display = 'none'; })

// delete Password form error after click on the field
const nameBookField = document.getElementById('name-booking');
const nameFormError = document.getElementById('form-pass-error');
nameBookField.addEventListener("click", function () { nameFormError.style.display = 'none'; })

const phoneBookField = document.getElementById('phone-booking');
const phoneFormError = document.getElementById('form-phone-error');
phoneBookField.addEventListener("click", function () { phoneFormError.style.display = 'none'; })

const dateBookField = document.getElementById('date-book');
const dateFormError = document.getElementById('form-phone-error');
dateBookField.addEventListener("click", function () { dateFormError.style.display = 'none'; })

const timeBookField = document.getElementById('time-book');
const timeFormError = document.getElementById('form-time-error');
timeBookField.addEventListener("click", function () { timeFormError.style.display = 'none'; })