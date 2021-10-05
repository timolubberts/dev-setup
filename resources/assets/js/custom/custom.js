function openMenu() {

    var menu = document.getElementById("mobile-menu");
    var toggleButton = document.getElementById("toggle-button");

    if (menu.classList.contains("mobile-menu--active")) {
      toggleButton.classList.remove("is-active");
      menu.classList.remove("mobile-menu--active");
    } else {
      toggleButton.classList.add("is-active");
      menu.classList.add("mobile-menu--active");
    }
}