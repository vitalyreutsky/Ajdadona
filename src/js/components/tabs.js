// Реализация табов
const sectionProducts = document.querySelector(".products");
const sectionProduct = document.querySelector(".single-product");

let tabs = document.querySelectorAll(".product__item-title"),
  tabsContent = document.querySelectorAll(".tab-content"),
  tabsParent = document.querySelector(".tab-header__items"),
  tabsMenu = document.querySelectorAll(".product__item-menu"),
  categoryTitle = document.querySelector(".products__category-title"),
  hash = window.location.hash.replace("#", "");

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

    let btnClear = document.querySelector(".products__btn-clear");

    btnClear.addEventListener("click", () => {
      history.go(0);
    });

    categoryTitle.firstChild.textContent = tabs[i].firstChild.textContent;
    categoryTitle.lastElementChild.textContent =
      tabs[i].querySelector("span").textContent;
  }

  hideTabContent();
  if (tabs[hash]) {
    showTabContent(hash);
  } else {
    showTabContent();
  }

  tabsParent.addEventListener("click", function (event) {
    const target = event.target;
    if (target.classList.contains("product__item-title")) {
      tabs.forEach((item, i) => {
        if (target == item) {
          hideTabContent();
          showTabContent(i);

          categoryTitle.firstChild.textContent = target.firstChild.textContent;
          categoryTitle.lastElementChild.textContent =
            target.querySelector("span").textContent;
        }
      });
    }
  });
}

if (sectionProduct) {
  function hideTabContent() {
    tabs.forEach((item) => {
      item.classList.remove("tab-header__item--active");
    });
  }

  function showTabContent(i = 0) {
    tabs[i].classList.add("tab-header__item--active");
  }

  function showTitleContent(i = 0) {
    categoryTitle.firstChild.textContent = tabs[i].firstChild.textContent;
    categoryTitle.lastElementChild.textContent =
      tabs[i].querySelector("span").textContent;
  }

  hideTabContent();
  if (tabs[hash]) {
    showTabContent(hash);
    showTitleContent(hash);
  } else {
    showTabContent();
    showTitleContent();
  }

  let btnClear = document.querySelector(".products__btn-clear");
  btnClear.addEventListener("click", () => {
    history.go(0);
  });

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

  itemMenuOpen[i].addEventListener("click", function (e) {
    subMenu.classList.toggle("show-tabs-menu");
    thisitemMenuOpen.classList.toggle("tab-header__item--active");

    subMenu.classList.toggle("fade");

    thisItemSvg.classList.toggle("accordion__header-icon--active");
  });
}
