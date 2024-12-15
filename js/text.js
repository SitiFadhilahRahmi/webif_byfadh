var megamenu = {
  timeout: "300",
  interval: "100",
};
document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.querySelector(".mega-toggle-animated");
    const menu = document.querySelector(".mega-menu");

    toggleButton.addEventListener("click", function () {
        menu.classList.toggle("show");
        const expanded = toggleButton.getAttribute("aria-expanded") === "true";
        toggleButton.setAttribute("aria-expanded", !expanded);
    });
});
