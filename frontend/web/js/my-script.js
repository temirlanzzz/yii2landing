var swiper = new Swiper(".card-swiper", {
    slidesPerView: 1,
    spaceBetween: 10,
    allowTouchMove:true,
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
    },
});
$(".next-card").on("click",function () {
    swiper.slideNext(2000)
})
$(".prev-card").on("click",function () {
    swiper.slidePrev(2000)
})

var swiper2 = new Swiper(".card-swiper-2", {
    slidesPerView: 1,
    spaceBetween: 10,
    allowTouchMove:true,
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 50,
        },
    },
});
$(".next-card-2").on("click",function () {
    swiper2.slideNext(2000)
})
$(".prev-card-2").on("click",function () {
    swiper2.slidePrev(2000)
})
var swiper3 = new Swiper(".card-swiper-3", {
    slidesPerView: 1,
    spaceBetween: 10,
    allowTouchMove:true,
    breakpoints: {
        640: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 3,
            spaceBetween: 40,
        },
        1024: {
            slidesPerView: 4,
            spaceBetween: 50,
        },
    },
});