// Подключение плагина кастом-скролла
import SimpleBar from "simplebar";

const sectionProductsScroll = document.querySelector(".products");
const sectionProductScroll = document.querySelector(".single-product");

if (sectionProductScroll) {
  new SimpleBar(document.querySelector(".products__header"), {
    autoHide: false,
  });
}

if (sectionProductsScroll) {
  new SimpleBar(document.querySelector(".products__header"), {
    autoHide: false,
  });
}
