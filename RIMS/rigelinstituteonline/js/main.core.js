const toggleButtons = document.querySelectorAll(".navbar__list-drop");
const menu = document.querySelector("#menu-icon");
const navbar = document.querySelector(".navbar__menu");

menu.onclick = () => {
  menu.classList.toggle("active");
  navbar.classList.toggle("right-open");
};

(() => {
  toggleButtons.forEach((toggleButton) => {
    toggleButton.addEventListener("click", () => {
      toggleButton.firstElementChild.lastElementChild.classList.toggle("up");
      toggleButton.lastElementChild.classList.toggle("open");
    });
  });
})();