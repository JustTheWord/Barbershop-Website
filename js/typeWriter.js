const intervalId = setInterval(function typeWriter() {

    textContainer.innerHTML += text.charAt(index++);

    if (index === text.length) {
        clearInterval(intervalId)
    }

}, 60);

let textContainer = document.getElementById("barbershop-name");
let index = 0;
let text = 'Barbershop Farian';

if (textContainer.offsetHeight !== 0) {

    intervalId();

}