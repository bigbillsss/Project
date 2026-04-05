function toggleMenu() {
    const hamburgerMenu = document.getElementById("myLinks");
    if (!hamburgerMenu) return;
    hamburgerMenu.classList.toggle("open");
}

document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("menu-toggle");
    if (menuToggle) {
        menuToggle.addEventListener("click", toggleMenu);
    }
});

