const burgerBtn = document.querySelector(".burger");
const popup = document.querySelector(".popup-menu");
const popupCloseBtn = popup.querySelector(".popup-menu__close");
const body = document.querySelector("body");

if (popup) {
  burgerBtn.addEventListener("click", function (e) {
    popup.classList.toggle("active");
    burgerBtn.classList.toggle("active");
    body.classList.toggle("no-scroll");
  });
  popupCloseBtn.addEventListener("click", function (e) {
    popup.classList.remove("active");
    burgerBtn.classList.remove("active");
    body.classList.remove("no-scroll");
  });
}
