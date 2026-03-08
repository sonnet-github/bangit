const slider = e => {
    const sliderContainers = document.querySelectorAll('.js-slider-container'); 

    if (sliderContainers.length) {
        sliderContainers.forEach(container => {
            const { slidesPerView, spaceBetween, slidesOffsetBefore, slidesPerViewTablet, slidesPerViewMobile, slidesPerViewSmall } = container.dataset;
            const prevElem = container.querySelector('.js-slide-prev');
            const nextElem = container.querySelector('.js-slide-next');

            const swiper = new Swiper(container, {
                slidesPerView: slidesPerViewMobile ? slidesPerViewMobile : slidesPerView,
                spaceBetween: spaceBetween ? spaceBetween : 0,
                loop: true,
                slidesOffsetBefore: slidesOffsetBefore ? slidesOffsetBefore : 0,
                navigation: {
                    nextEl: nextElem ? nextElem : "",
                    prevEl: prevElem ? prevElem : "",
                },
                breakpoints: {
                    767: {
                        slidesPerView: slidesPerViewTablet ? slidesPerViewTablet : slidesPerView,
                    },
                    991: {
                        slidesPerView: slidesPerViewSmall ? slidesPerViewSmall : slidesPerView,
                    },
                    1200: {
                        slidesPerView: slidesPerView ? slidesPerView : 1,
                    }
                }
            })
        });
    }
}

export default slider