document.addEventListener('scroll', function () {
    let scrollY = parseFloat(window.scrollY.toFixed(0));
    const arrowUp = document.querySelector('.scrollUp');

    if (scrollY >= 200) {
        arrowUp.classList.add("visible");
    } else {
        arrowUp.classList.remove("visible");
    }
});