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
        const scrollToBlockValue = scrollToBlock.getBoundingClientRect().top + pageYOffset - document.querySelector('.header-container').offsetHeight;

        window.scrollTo({
            top: scrollToBlockValue,
            behavior: "smooth"
        })

        event.preventDefault();
    }
}

