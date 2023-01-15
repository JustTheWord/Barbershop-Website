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