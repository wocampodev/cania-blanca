window.addEventListener("load", function () {
    new Glider(document.querySelector(".glider"), {
        slidesToShow: 6,
        slidesToScroll: 1,
        draggable: true,
        dots: ".dots",
        arrows: {
            prev: ".glider-prev",
            next: ".glider-next",
        },
    });
});
