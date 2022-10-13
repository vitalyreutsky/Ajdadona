// Реализация табов
const sectionProducts = document.querySelector(".products");
const sectionProduct = document.querySelector(".single-product");
let tabs = document.querySelectorAll(".product__item-title"),
  tabsContent = document.querySelectorAll(".tab-content"),
  tabsParent = document.querySelector(".tab-header__items"),
  tabsMenu = document.querySelectorAll(".product__item-menu");

if (sectionProducts) {
  function hideTabContent() {
    tabsContent.forEach((item) => {
      item.classList.add("hide");
      item.classList.remove("show-tabs-content");
    });

    tabsMenu.forEach((item) => {
      item.classList.add("hide");
      item.classList.remove("show-tabs-menu");
    });

    tabs.forEach((item) => {
      item.classList.remove("tab-header__item--active");
    });
  }

  function showTabContent(i = 0) {
    tabsContent[i].classList.add("show-tabs-content");
    tabsContent[i].classList.remove("hide");
    tabs[i].classList.add("tab-header__item--active");

    tabsMenu[i].classList.add("show-tabs-menu");
    tabsMenu[i].classList.remove("hide");
  }

  hideTabContent();
  showTabContent();

  tabsParent.addEventListener("click", function (event) {
    const target = event.target;
    if (target.classList.contains("product__item-title")) {
      tabs.forEach((item, i) => {
        if (target == item) {
          hideTabContent();
          showTabContent(i);
        }
      });
    }
  });
}

if (sectionProduct) {
  function hideTabContent() {
    tabsMenu.forEach((item) => {
      item.classList.add("hide");
      item.classList.remove("show-tabs-menu");
    });

    tabs.forEach((item) => {
      item.classList.remove("tab-header__item--active");
    });
  }

  function showTabContent(i = 0) {
    tabs[i].classList.add("tab-header__item--active");

    tabsMenu[i].classList.add("show-tabs-menu");
    tabsMenu[i].classList.remove("hide");
  }

  hideTabContent();
  showTabContent();

  tabsParent.addEventListener("click", function (event) {
    const target = event.target;
    if (target.classList.contains("product__item-title")) {
      tabs.forEach((item, i) => {
        if (target == item) {
          hideTabContent();
          showTabContent(i);
        }
      });
    }
  });
}
