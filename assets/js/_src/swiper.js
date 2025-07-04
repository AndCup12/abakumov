const comfortSwiper = document.querySelector(".comfort__swiper");
if (comfortSwiper)
  new Swiper(comfortSwiper, {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: ".comfort__right .swiper-button-next",
      prevEl: ".comfort__right .swiper-button-prev",
    },
    breakpoints: {
      1230: {
        slidesPerView: "auto",
        spaceBetween: 30,
      },
      575.98: {
        slidesPerView: "auto",
        spaceBetween: 20,
      },
    },
  });
const justTreat = document.querySelector(".just-treat__swiper");
if (justTreat)
  new Swiper(justTreat, {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: ".just-treat__right .swiper-button-next",
      prevEl: ".just-treat__right .swiper-button-prev",
    },
    breakpoints: {
      575.98: {
        slidesPerView: "auto",
        spaceBetween: 20,
      },
    },
  });
const reviews = document.querySelector(".reviews__swiper");
if (reviews)
  new Swiper(reviews, {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: ".reviews__right .swiper-button-next",
      prevEl: ".reviews__right .swiper-button-prev",
    },
    breakpoints: {
      1230: {
        slidesPerView: "auto",
        spaceBetween: 30,
      },
      575.98: {
        slidesPerView: "auto",
        spaceBetween: 30,
      },
    },
  });
const checkupReviews = document.querySelector(".checkup-reviews__swiper");
if (checkupReviews)
  new Swiper(checkupReviews, {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: ".checkup-reviews__right .swiper-button-next",
      prevEl: ".checkup-reviews__right .swiper-button-prev",
    },
    breakpoints: {
      1230: {
        slidesPerView: "auto",
        spaceBetween: 30,
      },
      575.98: {
        slidesPerView: "auto",
        spaceBetween: 30,
      },
    },
  });
const rating = document.querySelector(".rating__swiper");
if (rating)
  new Swiper(rating, {
    loop: false,
    slidesPerView: 1,
    spaceBetween: 10,
    navigation: {
      nextEl: ".rating__right .swiper-button-next",
      prevEl: ".rating__right .swiper-button-prev",
    },
    breakpoints: {
      1230: {
        slidesPerView: "auto",
        spaceBetween: 30,
      },
      575.98: {
        slidesPerView: "auto",
        spaceBetween: 30,
      },
    },
  });
