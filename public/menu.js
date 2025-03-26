document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("menu-toggle");
    const menu = document.getElementById("menu");

    // Función para alternar el menú
    menuToggle.addEventListener("click", function (event) {
        menu.classList.toggle("active");
        menuToggle.classList.toggle("active");
        event.stopPropagation(); // Evita que el clic se propague al document
    });

    // Detectar clic fuera del menú y cerrarlo
    document.addEventListener("click", function (event) {
        if (!menu.contains(event.target) && !menuToggle.contains(event.target)) {
            menu.classList.remove("active");
            menuToggle.classList.remove("active");
        }
    });
});