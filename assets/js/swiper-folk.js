/* services */
const swiperTeam = new Swiper( '.js-swiper-team', { 
    breakpoints: {
        320: {
            slidesPerView: 1,
            spaceBetween: 0
        },

        768: {
            slidesPerView: 2,
            spaceBetween: 30
        },

        992: {
            slidesPerView: 3,
            spaceBetween: 30
        }
    },

    navigation: {
        prevEl: '.js-swiper-button-prev-team',
        nextEl: '.js-swiper-button-next-team'
    }
});