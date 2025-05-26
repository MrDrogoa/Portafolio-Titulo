// menu amburguesa
function openMenu() {
  let navContent = document.getElementById("menu-content");
  let navIcons = document.getElementById("menu-icons");

  if (
    navContent.classList.contains("hidden") ||
    navIcons.classList.contains("hidden")
  ) {
    navContent.classList.remove("hidden");
    navIcons.classList.remove("hidden");
  } else {
    navContent.classList.add("hidden");
    navIcons.classList.add("block");
  }
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
