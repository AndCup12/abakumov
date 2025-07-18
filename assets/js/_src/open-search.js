function openSearch() {
  const btn = document.querySelector(".open-search");
  const inp = document.querySelector(".open-search-inp");
  let isClicked = false;
  btn?.addEventListener("click", function handler(event) {
    event.stopPropagation();
    btn.classList.add("active");

    isClicked = true;
  });

  inp.addEventListener("submit", function (e) {
    btn.classList.remove("active");
  });

  document.addEventListener("click", function handler(event) {
    if (!btn.contains(event.target)) {
      btn.classList.remove("active");
    }
  });
}

document.addEventListener("DOMContentLoaded", () => openSearch());
