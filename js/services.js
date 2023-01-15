const buttons = document.querySelectorAll('.book-now');

if (buttons.length > 0) {

    buttons.forEach(button => {
        button.addEventListener("mouseover", (event) => {
            event.target.parentElement.parentElement.style.borderColor = "black";
        })
    })

    buttons.forEach(button => {
        button.addEventListener("mouseout", (event) => {
            event.target.parentElement.parentElement.style.borderColor = "rgb(210, 100, 0)";
        })
    })

}



const menuLinks = document.querySelectorAll('.link-to-scroll[data-goto]');

if (menuLinks.length > 0) {

    menuLinks.forEach(menuLink => {
        menuLink.addEventListener("click", onMenuLinkClick)
    })
}

function onMenuLinkClick(event) {

    const menuLink = event.target;

    if (menuLink.dataset.goto && document.querySelector(menuLink.dataset.goto)) {

        const scrollToBlock = document.querySelector(menuLink.dataset.goto);
        const scrollToBlockValue = scrollToBlock.getBoundingClientRect().top + pageYOffset - document.querySelector('.header-body').offsetHeight;

        window.scrollTo({
            top: scrollToBlockValue,
            behavior: "smooth"
        })

        event.preventDefault();
    }
}

// events for 'BOOK NOW' button to send to the booking form the selected service
document.getElementById('haircut&fade').addEventListener("click", onButtonLinkClick);
document.getElementById('haircut&shave').addEventListener("click", onButtonLinkClick);
document.getElementById('haircut&beard').addEventListener("click", onButtonLinkClick);
document.getElementById('haircut&long').addEventListener("click", onButtonLinkClick);
document.getElementById('long&beard').addEventListener("click", onButtonLinkClick);
document.getElementById('father&son').addEventListener("click", onButtonLinkClick);

function onButtonLinkClick(event) {
    // each service is associated to the index number it is in the dropdown menu
    // for more see bookNowService.js file
    const services = {
        "haircut&fade" : '0',
        "haircut&shave": '1',
        "haircut&beard": '2',
        "haircut&long": '3',
        "long&beard": '4',
        "father&son": '5'
    }
    window.localStorage.setItem('index', services[event.target.id]);
}