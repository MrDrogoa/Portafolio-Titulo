<?php get_header() ?>

<!-- banner - proyecto -->
<section class="max-w-[1300px] m-auto py-8 md:py-12 lg:py-14">
    <div class="px-5">
        <h2
            class="font-[Montserrat] text-white text-4xl md:text-5xl lg:text-6xl font-extrabold">
            Proyectos - Front End</span>
        </h2>
    </div>
</section>
</header>

<main>
    <!-- Proyectos frameworks -->
    <section class="max-w-[1300px] m-auto pb-14">
        <div
            class="flex flex-col md:flex-row flex-wrap justify-center px-5 pt-11 w-full gap-5">
            <!-- card-1 -->
            <div
                class="flex flex-col border-2 border-white rounded-md overflow-hidden max-w-sm m-auto md:m-0">
                <img src="<?php echo get_theme_file_uri('./img/diseñouxui.jpg') ?>" alt="diseñouxui" class="w-full h-1/3 md:h-3/4 object-cover" />
                <div class="px-6 pb-6 pt-5">
                    <a
                        href="#"
                        class="hover:text-[#ce4c40] font-[Montserrat] text-[#FF6F61] font-semibold  md:text-lg  transition-colors">Diseño Centrado en el Usuario</a>
                    <p class="font-[DM Sans] font-normal text-white pb-2">
                        metodología que prioriza las necesidades y expectativas del
                        usuario...
                    </p>
                    <a href="#" class="text-white flex justify-end mt-auto">
                        <i class="fa-brands fa-figma text-white text-2xl lg:text-3xl"></i>
                    </a>
                </div>
            </div>

            <!--card-2  -->
            <div
                class="card flex flex-col border-2 border-white rounded-md overflow-hidden max-w-sm m-auto md:m-0">
                <img src="<?php echo get_theme_file_uri('./img/frontend.jpg') ?>" alt="frontend" class="w-full h-3/5 md:h-3/4 object-cover" />
                <div class="px-6 pb-6 pt-5">
                    <a
                        href="#"
                        class="hover:text-[#ce4c40] font-[Montserrat] text-[#FF6F61] font-semibold md:text-lg transition-colors">Desarrollo Front-End</a>
                    <p class="font-[DM Sans] text-white font-normal pb-2">
                        Se enfoca en la creación y diseño de la interfaz visual de un
                        sitio o aplicación...
                    </p>
                    <a href="#" class="text-white flex justify-end mt-auto gap-2">
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
                <img src="<?php echo get_theme_file_uri('./img/frameworks.jpg') ?>" alt="frameworks" class="w-full h-1/3 md:h-3/4 object-cover" />
                <div class="px-6 pb-6 pt-5">
                    <a
                        href="#"
                        class="hover:text-[#ce4c40] font-[Montserrat] text-[#FF6F61] font-semibold md:text-lg transition-colors">Implementación de Frameworks</a>

                    <p class="font-[DM Sans] text-white font-normal pb-2">
                        Consiste en integrar estructuras predefinidas de desarrollo...
                    </p>
                    <a href="#" class="text-white flex justify-end mt-auto gap-2">
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

    <!-- formulario -->
    <section class="max-w-[1300px] m-auto py-8 md:py-12 lg:py-14">
        <div class="px-5">
            <h2
                class="font-[Montserrat] text-white text-4xl md:text-5xl lg:text-6xl font-extrabold text-center">
                Contacto
            </h2>
            <p
                class="font-[DM Sans] text-[#FF6F61] font-normal md:text-lg text-center m-auto w-1/2 md:w-1/3 lg:w-1/4 py-2 md:py-4">
                Contactame para marcar la diferencia. ¿Listo para crear impacto?
            </p>
        </div>
        <div class="flex flex-col px-5 mt-6">
            <form action="#" method="POST" class="space-y-6">
                <div>
                    <input
                        type="text"
                        id="name"
                        name="name"
                        placeholder="Nombre"
                        class="mt-1 block w-full sm:w-3/4 md:w-1/2 m-auto px-3 py-2 focus:outline-none bg-transparent border-2 text-white"
                        required />
                </div>
                <div>
                    <input
                        type="text"
                        id="email"
                        name="email"
                        placeholder="Email"
                        class="mt-1 block w-full sm:w-3/4 md:w-1/2 m-auto px-3 py-2 focus:outline-none bg-transparent border-2 text-white"
                        required />
                </div>
                <div>
                    <textarea
                        id="message"
                        name="message"
                        rows="7"
                        placeholder="Mensaje"
                        class="mt-1 block w-full sm:w-3/4 md:w-1/2 m-auto px-3 py-2 focus:outline-none bg-transparent border-2 text-white resize-none"
                        required></textarea>
                </div>
                <div class="flex items-center justify-center">
                    <button
                        class="font-[DM Sans] py-2 px-5 bg-[#FFEA00] hover:bg-[#FFEE39] text-[#202023] font-semibold rounded-lg hover:-translate-y-2 hover:shadow-lg will-change-transform transition-transform duration-300 ease-in-out">
                        <a href="#" class="inline-block">Enviar</a>
                    </button>
                </div>
            </form>
        </div>
    </section>
</main>
<?php get_footer() ?>