<?php get_header(); ?>
<!-- banner - proyecto -->
<section class="max-w-[1300px] m-auto py-8 md:py-12 lg:py-14">
    <div class="px-5">
        <h2
            class="font-[Montserrat] text-white text-4xl md:text-5xl lg:text-6xl font-extrabold">
            Proyectos<span class="text-[#FF6F61]">.</span>
        </h2>
    </div>
</section>
</header>

<!-- main - proyectos -->
<main>
    <!-- Proyectos -->
    <section class="max-w-[1300px] m-auto pb-14">
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
    </section>

    <!-- info - ideas -->
    <section class="max-w-[1300px] m-auto py-8 md:py-12 lg:py-14 px-5">
        <h2
            class="font-[Montserrat] text-white text-3xl md:text-4xl font-semibold text-center">
            Desarrollemos Ideas
        </h2>
        <div
            class="flex flex-wrap lg:flex-nowrap md:flex-row justify-center pt-11 pb-5">
            <div
                class="flex flex-col text-white border-2 px-6 py-14 md:px-4 md:py-10 max-w-sm w-full">
                <h3 class="font-[Montserrat] text-xl md:text-2xl font-semibold">
                    01
                </h3>
                <p class="font-[DM Sans] font-normal md:text-lg pb-2">
                    Antes de iniciar un sitio web, es importante realizar una investigación
                    previa que permita optimizar su funcionamiento. Herramientas como el <span class="text-[#FF6F61] font-semibold">Brief</span>
                    ayudan a definir el enfoque estratégico analizando al público objetivo,
                    mientras que el <span class="text-[#FF6F61] font-semibold">Benchmarking</span> permite evaluar la usabilidad, accesibilidad
                    y estética de sitios similares. Aplicar estos métodos favorece el desarrollo
                    de una estructura clara y alineada con las necesidades del usuario.
                </p>
            </div>
            <div
                class="flex flex-col text-white border-2 px-6 py-14 md:px-4 md:py-10 max-w-sm w-full">
                <h3 class="font-[Montserrat] text-xl md:text-2xl font-semibold">
                    02
                </h3>
                <p class="font-[DM Sans] font-normal md:text-lg pb-2">
                    Es fundamental crear un <span class="text-[#FF6F61] font-semibold">Wireframe</span>
                    para planificar su estructura y distribución visual. Herramientas como
                    Figma o Adobe XD, junto con plugins, facilitan este proceso y lo hacen
                    más dinámico.
                </p>
                <p class="font-[DM Sans] font-normal md:text-lg pb-2">
                    Al diseñar el <span class="text-[#FF6F61] font-semibold">Mockup</span> final, se debe aplicar lo aprendido
                    para definir tipografías, colores, tamaños de imagen y secciones,
                    asegurando así un diseño claro, coherente y funcional desde el inicio.
                </p>
            </div>
            <div
                class="flex flex-col text-white border-2 px-6 py-14 md:px-4 md:py-10 max-w-sm w-full">
                <h3 class="font-[Montserrat] text-xl md:text-2xl font-semibold">
                    03
                </h3>
                <p class="font-[DM Sans] font-normal md:text-lg pb-2">
                    Antes de comenzar a codificar con <span class="text-[#FF6F61] font-semibold">HTML</span> y <span class="text-[#FF6F61] font-semibold">CSS</span>, es clave definir la estructura del sitio,
                    pestañas, enlaces y librerías necesarias. Esto permite organizar mejor
                    los recursos, facilitar el uso de <span class="text-[#FF6F61] font-semibold">JavaScript</span> y mantener ordenados los
                    archivos en carpetas.
                </p>
                <p class="font-[DM Sans] font-normal md:text-lg pb-2">
                    Con todo listo y descargado, se inicia la etapa
                    final de codificación, aplicando lo planificado para construir el sitio
                    con un diseño responsivo y bien estructurado desde el principio.
                </p>
            </div>
            <div
                class="flex flex-col text-white border-2 px-6 py-14 md:px-4 md:py-10 max-w-sm w-full">
                <h3 class="font-[Montserrat] text-xl md:text-2xl font-semibold">
                    04
                </h3>
                <p class="font-[DM Sans] font-normal md:text-lg pb-2">
                    Subimos el proyecto a <span class="text-[#FF6F61] font-semibold">WordPress</span>, primero se configura en local usando
                    MAMP o XAMPP, descargando WordPress y creando una base de datos en <span class="text-[#FF6F61] font-semibold">PhpMyAdmin</span>,
                    ubicada en la carpeta htdocs. Luego, se agrega el proyecto en wp-content/themes/(nombre del sitio)
                    con archivos clave como style.css, y el lenguaje Backend como <span class="text-[#FF6F61] font-semibold">PHP</span> para index.php y functions.php para estructurar el sitio.
                </p>
                <p class="font-[DM Sans] font-normal md:text-lg pb-2">
                    Después se organiza el contenido en categorías, entradas y páginas para completar la estructura.
                    Finalmente, el sitio se sube a producción mediante CPanel, importando la base de datos y
                    vinculándolo correctamente al dominio para su publicación online.
                </p>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>