const items = document.querySelectorAll(".footer__item");
if (items.length && window.innerWidth < 1230)
  items.forEach((item) => {
    const title = item.querySelector(".footer__item-title");
    const list = item.querySelector(".footer__item-list");
    const itemList = item.nextElementSibling?.classList.contains(
      "footer-item-list"
    )
      ? item.nextElementSibling
      : null;
    const listUnderItem = itemList?.querySelector(".footer__item-list");

    if (!title) return;

    title.addEventListener("click", function () {
      if (title.classList.contains("open")) {
        list.style.display = "none";
        if (itemList) itemList.style.display = "none";
        if (listUnderItem) listUnderItem.style.display = "none";
        title.classList.remove("open");
      } else {
        list.style.display = "grid";
        if (itemList) itemList.style.display = "block";
        if (listUnderItem) listUnderItem.style.display = "grid";
        title.classList.add("open");
      }
    });
  });
