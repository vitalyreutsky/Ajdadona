// Реализация табов
const sectionProducts = document.querySelector(".products");

let tabs = document.querySelectorAll(".product__item-title"),
  tabsContent = document.querySelectorAll(".tab-content"),
  tabsParent = document.querySelector(".tab-header__items"),
  tabsMenu = document.querySelectorAll(".product__item-menu");

if (sectionProducts) {
  function hideTabContent() {
    tabsContent.forEach((item) => {
      item.classList.add("hide");
      item.classList.remove("show-tabs-content", "fade");
    });

    tabs.forEach((item) => {
      item.classList.remove("tab-header__item--active");
    });
  }

  function showTabContent(i = 0) {
    tabsContent[i].classList.add("show-tabs-content", "fade");
    tabsContent[i].classList.remove("hide");

    tabs[i].classList.add("tab-header__item--active");
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

//sub menu
let itemMenuOpen = document.querySelectorAll(".product__item-title");
for (i = 0; i < itemMenuOpen.length; i++) {
  let subMenu = itemMenuOpen[i].nextElementSibling;
  let thisitemMenuOpen = itemMenuOpen[i];
  let thisItemSvg = itemMenuOpen[i].querySelector("svg");

  itemMenuOpen[i].addEventListener("click", function () {
    subMenu.classList.toggle("show-tabs-menu");
    thisitemMenuOpen.classList.toggle("tab-header__item--active");

    subMenu.classList.toggle("fade");

    thisItemSvg.classList.toggle("accordion__header-icon--active");
  });
}

let itemSubMenuOpen = document.querySelectorAll(".product__item--subtitle");
for (i = 0; i < itemSubMenuOpen.length; i++) {
  itemSubMenuOpen[i].addEventListener("click", function (e) {
    if (e.target.classList.contains("product__item--subtitle")) {
      e.target.classList.toggle("tab-header__item--active");
      e.target.nextElementSibling.classList.toggle("show-tabs-menu");
      e.target.nextElementSibling.classList.toggle("fade");
      e.target
        .querySelector("svg")
        .classList.toggle("accordion__header-icon--active");
    }
  });
}
