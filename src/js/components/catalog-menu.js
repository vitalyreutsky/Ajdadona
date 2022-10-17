import { disableScroll } from "../functions/disable-scroll";
import { enableScroll } from "../functions/enable-scroll";

const btnOpenFilterMenu = document.querySelector(".products__btn-category");

if (btnOpenFilterMenu) {
  const btnCloseFilterMenu = document.querySelector(
    ".products__show-btn--close"
  );

  const filterMenu = document.querySelector(".products__show-menu");

  btnOpenFilterMenu.addEventListener("click", () => {
    filterMenu.classList.add("filter-menu--active");
    disableScroll();
  });

  btnCloseFilterMenu.addEventListener("click", () => {
    filterMenu.classList.remove("filter-menu--active");
    enableScroll();
  });
}
