// menu.js
document.addEventListener("DOMContentLoaded", () => {
    const menuToggle = document.getElementById("menu-toggle");
    const menu = document.getElementById("menu");

    function checkMenuOverflow() {
        const navbarWidth = document.querySelector(".navbar").offsetWidth;
        const menuWidth = menu.scrollWidth;

        if (menuWidth > navbarWidth) {
            menu.classList.add("active");
        } else {
            menu.classList.remove("active");
        }
    }

    menuToggle.addEventListener("click", () => {
        menu.classList.toggle("active");
    });

    window.addEventListener("resize", checkMenuOverflow);
    checkMenuOverflow(); // Ejecutar al inicio
});