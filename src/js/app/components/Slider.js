const slider = e => {
    const sliderContainers = document.querySelectorAll('.js-slider-container'); 

    if (sliderContainers.length) {
        sliderContainers.forEach(container => {
            const swiper = new Swiper(container, {
                slidesPerView: 1,
                loop: true,
                navigation: {
                    nextEl: '.js-slide-next',
                    prevEl: '.js-slide-prev',
                },
            })
        });
    }
}

export default slider