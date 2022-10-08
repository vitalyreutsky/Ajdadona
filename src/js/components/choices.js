import Choices from "choices.js";

const defaultSelect = () => {
  const element = document.querySelector(".lang");
  const choices = new Choices(element, {
    searchEnabled: false,
  });
};

defaultSelect();
