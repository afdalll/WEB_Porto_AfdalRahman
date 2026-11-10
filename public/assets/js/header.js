const menuToggle = document.querySelector(".header__menu-toggle");
const navigation = document.querySelector("#main-navigation");

if (menuToggle && navigation) {
    const closeMenu = () => {
        menuToggle.setAttribute("aria-expanded", "false");
        menuToggle.setAttribute("aria-label", "Buka menu navigasi");
        navigation.classList.remove("is-open");
    };

    menuToggle.addEventListener("click", () => {
        const isExpanded = menuToggle.getAttribute("aria-expanded") === "true";

        menuToggle.setAttribute("aria-expanded", String(!isExpanded));
        menuToggle.setAttribute(
            "aria-label",
            isExpanded ? "Buka menu navigasi" : "Tutup menu navigasi"
        );
        navigation.classList.toggle("is-open", !isExpanded);
    });

    navigation.addEventListener("click", (event) => {
        if (event.target instanceof Element && event.target.closest("a")) {
            closeMenu();
        }
    });

    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape" && menuToggle.getAttribute("aria-expanded") === "true") {
            closeMenu();
            menuToggle.focus();
        }
    });

    window.matchMedia("(min-width: 901px)").addEventListener("change", (event) => {
        if (event.matches) {
            closeMenu();
        }
    });
}
