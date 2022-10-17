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

    tabs.forEach((item) => {
      item.classList.remove("tab-header__item--active");
    });
  }

  function showTabContent(i = 0) {
    tabsContent[i].classList.add("show-tabs-content");
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

if (sectionProduct) {
  function hideTabContent() {
    tabsContent.forEach((item) => {
      item.classList.add("hide");
      item.classList.remove("show-tabs-content");
    });

    tabs.forEach((item) => {
      item.classList.remove("tab-header__item--active");
    });
  }

  function showTabContent(i = 0) {
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

//function tabs
const menuBtns = document.querySelectorAll(".product__item-title");
const drops = document.querySelectorAll(".product__item-menu");

menuBtns.forEach((el) => {
  el.addEventListener("click", (e) => {
    let currentBtn = e.currentTarget;
    let drop = currentBtn
      .closest(".product__item")
      .querySelector(".product__item-menu");

    menuBtns.forEach((el) => {
      if (el !== currentBtn) {
        el.classList.remove("tab-header__item--active");
      }
    });

    drops.forEach((el) => {
      if (el !== drop) {
        el.classList.remove("dropdown--active");
      }
    });

    drop.classList.toggle("dropdown--active");
    currentBtn.classList.add("tab-header__item--active");
  });
});

document.addEventListener("click", (e) => {
  if (!e.target.closest(".products__items")) {
    menuBtns.forEach((el) => {
      el.classList.remove("tab-header__item--active");
    });

    drops.forEach((el) => {
      el.classList.remove("dropdown--active");
    });
  }
});
