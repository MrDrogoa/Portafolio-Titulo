// menu amburguesa
function openMenu() {
  const menuContent = document.getElementById("menu-content");
  menuContent.classList.toggle("hidden");
  menuContent.classList.toggle("block");
}

document.addEventListener("DOMContentLoaded", function () {
  // Inicializar el menú móvil (tu código existente)

  // Inicializar el carrusel de Splide
  if (document.querySelector(".splide")) {
    new Splide(".splide", {
      type: "loop",
      perPage: 3,
      perMove: 1,
      pagination: false,
      arrows: true,
      autoplay: true,
      interval: 1800,
      breakpoints: {
        1024: {
          perPage: 2,
        },
        768: {
          perPage: 1,
        },
      },
    }).mount();
  }
});

document.addEventListener("DOMContentLoaded", function () {
  // Para pantallas móviles, permite hacer clic en elementos con submenús
  const menuItemsWithChildren = document.querySelectorAll(
    ".menu-item-has-children > a"
  );

  menuItemsWithChildren.forEach((item) => {
    item.addEventListener("click", function (e) {
      // Solo en móviles (pantallas pequeñas)
      if (window.innerWidth < 1024) {
        e.preventDefault();
        const submenu = this.nextElementSibling;

        // Alternar visibilidad del submenú
        if (submenu && submenu.classList.contains("hidden")) {
          // Primero oculta todos los submenús abiertos
          document
            .querySelectorAll(".menu-item-has-children > ul:not(.hidden)")
            .forEach((menu) => {
              menu.classList.add("hidden");
            });

          // Luego muestra el submenú actual
          submenu.classList.remove("hidden");
        } else if (submenu) {
          submenu.classList.add("hidden");
        }
      }
    });
  });
});
