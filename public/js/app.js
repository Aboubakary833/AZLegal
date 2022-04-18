const elements = [
    document.querySelector("a#services"),
    document.querySelector('ul[aria-labelledby="services"]'),
];
elements.forEach((element) => {
    element.addEventListener("mouseover", function () {
        elements[1].classList.add("d-block");
    });
    element.addEventListener("mouseout", function () {
        elements[1].classList.remove("d-block");
    });
});
