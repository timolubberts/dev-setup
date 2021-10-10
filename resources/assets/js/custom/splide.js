var elms = document.getElementsByClassName('splide');
console.log(elms.length);
for (var i = 0, len = elms.length; i < len; i++) {
    if (elms[i].id === "dev-reviews-slide") {
    new Splide(elms[i], {
        type: 'loop',
        pagination: true,
        arrows: false,
        autoplay: true,
        interval: 10000
    }).mount();
    } else if (elms[i].id === "dev-services-slide") {
    new Splide(elms[i], {

        pagination: false,
        arrows: false,
        drag: false,
        focus: "center",
        perPage: 3,
        breakpoints: {
        992: {
            perPage: 2,
            pagination: true,
            arrows: true,
            drag: true,
        }, 768: {
            perPage: 1,
            pagination: true,
            arrows: true,
            drag: true,
        }

        }
    }).mount();
    } else if (elms[i].id === "dev-news-slide") {
    new Splide(elms[i], {
        perPage: 4,
        gap: 0,
        pagination: false,
        arrows: false,
        drag: false,
        focus: "center",
        breakpoints: {
        1200: {
            perPage: 3,
            pagination: true,
            focus: "center",
            drag: true,
        }, 992: {
            perPage: 2,
            pagination: true,
            focus: "center",
            drag: true,
        }, 768: {
            perPage: 1,
            pagination: true,
            focus: "center",
            drag: true,
        }

        }
    }).mount();
    }

}
