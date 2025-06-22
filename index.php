<?php get_header(); ?>

<!-- banner -->
<section class="max-w-[1300px] m-auto relative pt-8 md:pt-32 lg:pt-44">
    <!-- Luna - posicionada en la esquina superior derecha -->
    <div
        class="absolute left-14 md:left-1/4 top-1 md:top-4 lg:top-10 -z-10 md:z-0">
        <img
            src="<?php echo get_theme_file_uri('./img/luna.svg') ?>"
            alt="Luna"
            class="w-28 md:w-48 lg:w-64 animate-pulse duration-100" />
    </div>
    <div
        class="absolute left-32 lg:left-40 top-24 lg:top-28 -z-10 md:z-0 md:block hidden">
        <img
            src="<?php echo get_theme_file_uri('./img/sound.svg') ?>"
            alt="music"
            class="w-10 lg:w-auto ease-in-out floating" />
    </div>
    <div
        class="absolute left-56 lg:left-72 top-64 lg:top-80 -z-10 md:z-0 md:block hidden">
        <img
            src="<?php echo get_theme_file_uri('./img/sun.svg') ?>"
            alt="sun"
            class="w-10 lg:w-auto ease-in-out floating-slow" />
    </div>
    <div class="absolute right-1/2 top-9 -z-10 md:z-0 md:block hidden">
        <img
            src="<?php echo get_theme_file_uri('./img/laptop.svg') ?>"
            alt="laptop"
            class="w-10 lg:w-auto ease-in-out floating-fast" />
    </div>
    <div
        class="absolute right-72 lg:right-96 top-24 -z-10 md:z-0 md:block hidden">
        <img
            src="<?php echo get_theme_file_uri('./img/bike.svg') ?>"
            alt="bike"
            class="w-10 lg:w-auto ease-in-out floating-slower" />
    </div>
    <div
        class="absolute right-40 lg:right-52 top-10 lg:top-4 -z-10 md:z-0 md:block hidden">
        <img
            src="<?php echo get_theme_file_uri('./img/plane.svg') ?>"
            alt="plane"
            class="w-10 lg:w-auto ease-in-out floating-fasting" />
    </div>
    <div
        class="absolute right-56 lg:right-64 -bottom-6 lg:bottom-1 -z-10 md:z-0 md:block hidden">
        <img
            src="<?php echo get_theme_file_uri('./img/code.svg') ?>"
            alt="code"
            class="w-10 lg:w-auto ease-in-out floating-low" />
    </div>

    <!-- Iconos sociales - posicionados en el lado izquierdo -->
    <div
        class="text-white lg:flex hidden flex-col gap-2 items-center border-white border-2 py-6 px-2 rounded-md absolute left-5 top-1/2 -translate-y-1/2 z-20">
        <div>
            <a href="https://www.instagram.com/j.daniel.01/?next=%2F" target="_blank" class="hover:text-[#FF6F61] transition-colors"><i class="fa-brands fa-square-instagram text-3xl"></i></a>
        </div>
        <div>
            <a href="https://www.linkedin.com/in/daniel-rosales-1b737a1a9/" target="_blank" class="hover:text-[#FF6F61] transition-colors"><i class="fa-brands fa-linkedin text-3xl"></i></a>
        </div>
        <div>
            <a href="https://github.com/MrDrogoa" target="_blank" class="hover:text-[#FF6F61] transition-colors"><i class="fa-brands fa-github text-3xl"></i></a>
        </div>
        <div>
            <a href="https://wa.me/+56962857073" target="_blank" class="hover:text-[#FF6F61] transition-colors"><i class="fa-brands fa-square-whatsapp text-3xl"></i></a>
        </div>
    </div>

    <!-- Contenido principal - centrado -->
    <div
        class="flex flex-col items-center justify-center relative z-10 w-3/5 m-auto md:w-auto">
        <h1
            class="font-[Montserrat] text-white text-5xl md:text-6xl lg:text-8xl font-extrabold text-center animate__animated animate__headShake">
            DANIEL <span class="text-[#FF6F61]">R</span>OSALES
        </h1>
        <p
            class="font-[DM Sans] text-white font-semibold text-lg sm:text-xl md:text-2xl lg:pb-8 pb-4 text-center">
            Diseñador UX UI & desarrollador Front-End
        </p>
        <div>
            <button
                class="font-[DM Sans] py-2 px-5 bg-[#FFEA00] hover:bg-[#FFEE39] text-[#202023] font-semibold rounded-lg hover:-translate-y-2 hover:shadow-lg will-change-transform transition-transform duration-300 ease-in-out">
                <a href="<?php echo get_theme_file_uri('./img/Daniel rosales - Profesional.pdf') ?>" target="_blank" class="inline-block">Currículum</a>
            </button>
        </div>
    </div>
</section>
<!-- firma -->
<section class="max-w-[1300px] m-auto">
    <div
        class="pt-8 md:pt-20 lg:pt-36 px-5 flex justify-center md:justify-end">
        <img
            src="<?php echo get_theme_file_uri('./img/RuM.svg') ?>"
            alt="firma"
            class="w-10 md:w-auto animate__animated animate__flash animate__slow" />
    </div>
</section>
</header>

<!-- main -->
<main>
    <!-- carrusel - Herramientas-->
    <section class="max-w-[1300px] m-auto py-14 md:py-20">
        <h2
            class="font-[Montserrat] text-white text-3xl md:text-4xl font-semibold text-center">
            Herramientas
        </h2>

        <div class="splide pt-8 mx-auto w-1/2" role="group">
            <div class="splide__track">
                <ul class="splide__list">
                    <li class="splide__slide flex justify-center">
                        <i class="fa-brands fa-html5 text-[#FF0000] text-5xl"></i>
                    </li>
                    <li class="splide__slide flex justify-center">
                        <i class="fa-brands fa-css3-alt text-[#0059FF] text-5xl"></i>
                    </li>
                    <li class="splide__slide flex justify-center">
                        <i class="fa-brands fa-square-js text-[#FFEA00] text-5xl"></i>
                    </li>
                    <li class="splide__slide flex justify-center">
                        <i class="fa-solid fa-database text-[#32C3FC] text-5xl"></i>
                    </li>
                    <li class="splide__slide flex justify-center">
                        <i class="fa-brands fa-wordpress text-white text-5xl"></i>
                    </li>
                    <li class="splide__slide flex justify-center">
                        <i class="fa-brands fa-php text-[#8800FF] text-5xl"></i>
                    </li>
                    <li class="splide__slide flex justify-center">
                        <i class="fa-brands fa-figma text-white text-5xl"></i>
                    </li>
                </ul>
            </div>

            <div class="splide__arrows flex justify-center mt-4">
                <button
                    class="splide__arrow splide__arrow--prev text-white hover:text-[#FF6F61]">
                    <i class="fa-solid fa-arrow-left text-2xl transition-colors"></i>
                </button>
                <button
                    class="splide__arrow splide__arrow--next text-white ml-8 hover:text-[#FF6F61]">
                    <i class="fa-solid fa-arrow-right text-2xl transition-colors"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- tarjetas juntos - Experiencia -->
    <section id="experiencia" class="max-w-[1300px] m-auto py-14 md:py-20">
        <h2
            class="font-[Montserrat] text-white text-3xl md:text-4xl font-semibold text-center title-experiencia">
            Experiencia
        </h2>
        <div
            class="flex flex-col md:flex-row flex-wrap justify-center px-5 pt-11 w-full">
            <!-- card-1 -->
            <div
                class="flex flex-col border-2 border-white p-10 gap-3 max-w-sm m-auto md:m-0">
                <h3
                    class="font-[Montserrat] text-white text-xl md:text-2xl font-semibold">
                    Diseño Centrado en el Usuario
                </h3>
                <div class="flex gap-2 font-[DM Sans] text-[#FF6F61] font-medium">
                    <p>Womad</a>
                        -
                    <p>Libros</a>
                        -
                    <p>Petmatch</a>
                </div>
                <p class="font-[DM Sans] text-white font-normal md:text-lg">
                    Use metodologias de brief, benchmark, mapa de contenidos y otros
                    para definir ideas sobre los requerimientos del usuario.
                </p>
                <a href="<?= site_url() . '/category/diseno-ux-ui'; ?>" class="text-white flex justify-end mt-auto">
                    <i
                        class="fa-solid fa-arrow-right text-2xl hover:text-[#FF6F61] transition-colors"></i>
                </a>
            </div>

            <!--card-2  -->
            <div
                class="flex flex-col border-2 border-white p-10 gap-3 max-w-sm m-auto md:m-0">
                <h3
                    class="font-[Montserrat] text-white text-xl md:text-2xl font-semibold">
                    Desarrollo Front-End
                </h3>
                <div class="flex gap-2 font-[DM Sans] text-[#FF6F61] font-medium">
                    <p>Restaurante</a>
                        -
                    <p>Landings</a>
                        -
                    <p>FrontPet</a>
                </div>
                <p class="font-[DM Sans] text-white font-normal md:text-lg">
                    Desarrollo de codigo HTML y CSS para diferentes sitios webs asi
                    como el manejo de librerias como Bootstrap.
                </p>
                <a href="<?= site_url() . '/category/front-end'; ?>" class="text-white flex justify-end mt-auto">
                    <i
                        class="fa-solid fa-arrow-right text-2xl hover:text-[#FF6F61] transition-colors"></i>
                </a>
            </div>

            <!-- card-3 -->
            <div
                class="flex flex-col border-2 border-white p-10 gap-3 max-w-sm m-auto md:m-0">
                <h3
                    class="font-[Montserrat] text-white text-xl md:text-2xl font-semibold">
                    Implementación de Frameworks
                </h3>
                <div class="flex gap-2 font-[DM Sans] text-[#FF6F61] font-medium">
                    <p>Habitissimo</a>
                        -
                    <p>Spotify</a>
                        -
                    <p>Firma</a>
                </div>
                <p class="font-[DM Sans] text-white font-normal md:text-lg">
                    Proyectos programados con js, php, mysql y el cms de wordpress.
                    Iniciando asi con el manejo de Api y BD.
                </p>
                <a href="<?= site_url() . '/category/frameworks'; ?>" class="text-white flex justify-end mt-auto">
                    <i
                        class="fa-solid fa-arrow-right text-2xl hover:text-[#FF6F61] transition-colors"></i>
                </a>
            </div>
        </div>
    </section>

    <!-- Sobre - Mi -->
    <section class="max-w-[1300px] m-auto py-14 md:py-16">
        <div
            class="flex justify-center items-center flex-col w-72 md:w-96 text-white m-auto text-center gap-3">
            <h2
                class="font-[Montserrat] text-white text-3xl md:text-4xl font-semibold title-sobre-mi">
                Sobre mí
            </h2>
            <p class="font-[DM Sans] font-normal md:text-lg pb-2">
                Soy desarrollador web y diseñador UX/UI con experiencia en crear
                soluciones digitales escalables, combinando código limpio,
                interfaces intuitivas y accesibilidad. Mi enfoque se centra en
                optimizar la experiencia del usuario y transformar ideas en
                productos digitales eficientes para emprendimientos y empresas
                emergentes.
            </p>
            <button
                class="font-[DM Sans] py-2 px-5 bg-[#FFEA00] hover:bg-[#FFEE39] text-[#202023] font-semibold rounded-lg hover:-translate-y-2 hover:shadow-lg will-change-transform transition-transform duration-300 ease-in-out">
                <a href="<?= site_url() . '/sobre-mi'; ?>" class="inline-block">Ver más</a>
            </button>
        </div>
    </section>

    <!-- Proyectos -->
    <section class="max-w-[1300px] m-auto py-14 md:py-20">
        <h2
            class="font-[Montserrat] text-white text-3xl md:text-4xl font-semibold text-center">
            Proyectos
        </h2>
        <div
            class="flex flex-col md:flex-row flex-wrap justify-center px-5 pt-11 w-full gap-5">
            <!-- card-1 -->
            <div
                class="flex flex-col border-2 border-white rounded-md overflow-hidden max-w-sm m-auto md:m-0">
                <a href="<?= site_url() . '/category/diseno-ux-ui'; ?>" class="w-full h-1/3 md:h-3/4">
                    <img src="<?php echo get_theme_file_uri('./img/diseñouxui.jpg') ?>" alt="diseñouxui" class="object-cover" />
                </a>
                <div class="px-6 pb-6 pt-5">
                    <!-- revisar para entrar a las categorias desde las tarjetas -->
                    <a
                        href="<?= site_url() . '/category/diseno-ux-ui'; ?>"
                        class="hover:text-[#ce4c40] font-[Montserrat] text-[#FF6F61] font-semibold  md:text-lg  transition-colors">Diseño Centrado en el Usuario</a>
                    <p class="font-[DM Sans] font-normal text-white pb-2">
                        metodología que prioriza las necesidades y expectativas del
                        usuario...
                    </p>
                    <a href="<?= site_url() . '/category/diseno-ux-ui'; ?>" class="text-white flex justify-end mt-auto">
                        <i class="fa-brands fa-figma text-white text-2xl lg:text-3xl"></i>
                    </a>
                </div>
            </div> <!--card-2  -->
            <div
                class="card flex flex-col border-2 border-white rounded-md overflow-hidden max-w-sm m-auto md:m-0">
                <a href="<?= site_url() . '/category/front-end'; ?>" class="w-full h-3/5 md:h-3/4">
                    <img src="<?php echo get_theme_file_uri('./img/frontend.jpg') ?>" alt="frontend" class="object-cover" />
                </a>
                <div class="px-6 pb-6 pt-5">
                    <a
                        href="<?= site_url() . '/category/front-end'; ?>"
                        class="hover:text-[#ce4c40] font-[Montserrat] text-[#FF6F61] font-semibold md:text-lg transition-colors">Desarrollo Front-End</a>
                    <p class="font-[DM Sans] text-white font-normal pb-2">
                        Se enfoca en la creación y diseño de la interfaz visual de un
                        sitio o aplicación...
                    </p>
                    <a href="<?= site_url() . '/category/front-end'; ?>" class="text-white flex justify-end mt-auto gap-2">
                        <i
                            class="fa-brands fa-html5 text-[#FF0000] text-2xl lg:text-3xl"></i>
                        <i
                            class="fa-brands fa-css3-alt text-[#0059FF] text-2xl lg:text-3xl"></i>
                    </a>
                </div>
            </div>

            <!-- card-3 -->
            <div
                class="card flex flex-col border-2 border-white rounded-md overflow-hidden max-w-sm m-auto md:m-0">
                <a href="<?= site_url() . '/category/frameworks'; ?>" class="w-full h-1/3 md:h-3/4">
                    <img src="<?php echo get_theme_file_uri('./img/frameworks.jpg') ?>" alt="frameworks" class="object-cover" />
                </a>
                <div class="px-6 pb-6 pt-5">
                    <a
                        href="<?= site_url() . '/category/frameworks'; ?>"
                        class="hover:text-[#ce4c40] font-[Montserrat] text-[#FF6F61] font-semibold md:text-lg transition-colors">Implementación de Frameworks</a>

                    <p class="font-[DM Sans] text-white font-normal pb-2">
                        Consiste en integrar estructuras predefinidas de desarrollo...
                    </p>
                    <a href="<?= site_url() . '/category/frameworks'; ?>" class="text-white flex justify-end mt-auto gap-2">
                        <i
                            class="fa-brands fa-php text-[#8800FF] text-2xl lg:text-3xl"></i>
                        <i
                            class="fa-brands fa-square-js text-[#FFEA00] text-2xl lg:text-3xl"></i>
                        <i
                            class="fa-solid fa-database text-[#32C3FC] text-2xl lg:text-3xl"></i>
                        <i
                            class="fa-brands fa-wordpress text-white text-2xl lg:text-3xl"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="p-5 flex justify-center">
            <button
                class="font-[DM Sans] py-2 px-5 bg-[#FFEA00] hover:bg-[#FFEE39] text-[#202023] font-semibold rounded-lg hover:-translate-y-2 hover:shadow-lg will-change-transform transition-transform duration-300 ease-in-out mt-5">
                <a href="<?= site_url() . '/proyectos'; ?>" class="inline-block">Ver más</a>
            </button>
        </div>
    </section>
</main>

<?php get_footer(); ?>