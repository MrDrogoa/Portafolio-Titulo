<?php get_header(); ?>

<!-- banner - sobreMi -->
<section class="max-w-[1300px] m-auto py-8 md:py-14 lg:py-16">
    <div class="px-5">
        <h2
            class="font-[Montserrat] text-white text-4xl md:text-5xl lg:text-6xl font-extrabold text-center">
            YO <span class="text-[#FF6F61]">SOY</span> DANIEL<span
                class="text-[#FF6F61]">.</span>
        </h2>
    </div>
</section>
</header>

<!-- main - sobreMi -->
<main>
    <!-- biografia -->
    <section class="max-w-[1300px] m-auto py-8 md:py-14">
        <div class="flex flex-col lg:flex-row lg:justify-center gap-8 px-5">
            <div>
                <img src="<?php echo get_theme_file_uri('./img/sobreMi.jpg') ?>" alt="sobremi" class="m-auto w-3/4 md:w-full border-4 border-[#FF6F61] rounded-md" />
            </div>
            <div class="text-white w-full text-center md:text-start ">
                <h3
                    class="font-[Montserrat] text-white text-xl md:text-2xl font-semibold">
                    Creatividad y accesibilidad desde Santiago, potenciando el mundo
                    del desarrollo.
                </h3>
                <p class="font-[DM Sans] font-normal md:text-lg py-2">
                    Soy desarrollador web y diseñador UX/UI con experiencia en crear
                    soluciones digitales escalables, combinando código limpio,
                    interfaces intuitivas y accesibles.
                </p>
                <p class="font-[DM Sans] font-normal md:text-lg pb-2">
                    Me especializo en optimizar la experiencia del usuario y
                    transformar ideas en productos digitales eficientes para
                    emprendimientos y empresas emergentes. Integro principios de
                    usabilidad, accesibilidad y marketing digital para negocios
                    online, con un enfoque estratégico.
                </p>
                <p class="font-[DM Sans] font-normal md:text-lg pb-2">
                    Mi mentalidad emprendedora y creatividad me permiten diseñar
                    soluciones innovadoras adaptadas a las necesidades reales de los
                    usuarios.
                </p>
            </div>
        </div>
    </section>

    <!-- certificados -->
    <section class="max-w-[1300px] m-auto py-8 md:py-14">
        <!-- Primera fila - 3 tarjetas en lg -->
        <div
            class="flex justify-center flex-wrap lg:flex-nowrap gap-6 text-white px-5 w-full">
            <div
                class="border-2 border-white p-5 hover:text-[#202023] hover:bg-white transition-colors w-64 h-32 flex items-center justify-center">
                <p class="font-[DM Sans] font-medium md:text-lg text-center">
                    Certificado Front-End
                </p>
            </div>

            <div
                class="border-2 border-white p-5 hover:text-[#202023] hover:bg-white transition-colors w-64 h-32 flex items-center justify-center">
                <p class="font-[DM Sans] font-medium md:text-lg text-center">
                    Certificado UX UI
                </p>
            </div>

            <div
                class="border-2 border-white p-5 hover:text-[#202023] hover:bg-white transition-colors w-64 h-32 flex items-center justify-center">
                <p class="font-[DM Sans] font-medium md:text-lg text-center">
                    Certificado Inglés
                </p>
            </div>
        </div>

        <!-- Segunda fila - 3 tarjetas en lg -->
        <div
            class="flex justify-center flex-wrap lg:flex-nowrap gap-6 text-white px-5 w-full mt-6">
            <div
                class="border-2 border-white p-5 hover:text-[#202023] hover:bg-white transition-colors w-64 h-32 flex items-center justify-center">
                <p class="font-[DM Sans] font-medium md:text-lg text-center">
                    Certificado Gestión de proyectos
                </p>
            </div>

            <div
                class="border-2 border-white p-5 hover:text-[#202023] hover:bg-white transition-colors w-64 h-32 flex items-center justify-center">
                <p class="font-[DM Sans] font-medium md:text-lg text-center">
                    Certificado Frameworks
                </p>
            </div>

            <div
                class="border-2 border-white p-5 hover:text-[#202023] hover:bg-white transition-colors w-64 h-32 flex items-center justify-center">
                <p class="font-[DM Sans] font-medium md:text-lg text-center">
                    Certificado Software
                </p>
            </div>
        </div>

        <!-- Tercera fila - Edad en formato de tarjeta -->
        <div class="flex justify-center mt-6 px-5 text-white">
            <div
                class="border-2 border-white p-5 hover:text-[#202023] hover:bg-white transition-colors w-64 h-32 flex items-center justify-center">
                <p class="font-[DM Sans] font-medium md:text-lg text-center">
                    Edad: 24 años
                </p>
            </div>
        </div>
    </section>

    <!-- carrusel - Herramientas-->
    <section class="max-w-[1300px] m-auto py-14 md:py-18">
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
</main>

<?php get_footer(); ?>