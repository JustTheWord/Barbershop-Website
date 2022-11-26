const menuLinks = document.querySelectorAll('.link-to-scroll[data-goto]');


if (menuLinks.length > 0) {

    menuLinks.forEach(menuLink => {
        menuLink.addEventListener("click", onMenuLinkClick)
    })
}


function onMenuLinkClick(event) {

    const menuLink = event.target;
    console.log(menuLink);

    if (menuLink.dataset.scrollTo && document.getElementById(menuLink.dataset.scrollTo)) {

        const scrollToBlock = document.getElementById(menuLink.dataset.scrollTo);
        const   scrollToBlockValue = scrollToBlock.getBoundingClientRect().top + pageYOffset; // WITHOUT HEADER

        window.scrollTo({
            top: scrollToBlockValue,
            behavior: "smooth"
        })

        // event.preventDefault();
    }
}

