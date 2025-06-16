<?php get_header(); ?>
<section class="max-w-[1300px] m-auto py-8 md:py-12 lg:py-14">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div
                class="px-5 flex flex-col md:flex-row items-center justify-between">
                <div class="w-full md:w-3/5">
                    <h2
                        class="font-[Montserrat] text-white text-4xl md:text-5xl lg:text-6xl font-extrabold text-center md:text-left">
                        <?php the_title(); ?>

                    </h2>
                    <div
                        class="font-[DM Sans] font-normal md:text-lg text-center md:text-start text-white py-3 pb-6 lg:pb-0">
                        <?php the_content(); ?>

                    </div>
                </div>
                <div>
                    <button
                        class="font-[DM Sans] py-2 px-5 bg-[#FFEA00] hover:bg-[#FFEE39] text-[#202023] font-semibold rounded-lg hover:-translate-y-2 hover:shadow-lg will-change-transform transition-transform duration-300 ease-in-out">
                        <a href="https://www.behance.net/danielrosales43" class="flex items-center gap-2">Behance <i class="fa-brands fa-square-behance text-3xl"></i></a>
                    </button>
                </div>
            </div>


            <h2
                class="font-[Montserrat] text-white text-3xl md:text-4xl font-semibold text-center">
                Proyecto Womad
            </h2>
            <!-- investigacion -->
            <div
                class="mx-5 flex flex-col lg:flex-row justify-center items-center gap-7 md:gap-12 lg:gap-14 pt-11">
                <div class="border-2 border-white text-white p-11 rounded-md w-full">
                    <h3
                        class="font-[Montserrat] text-[#FF6F61] text-xl md:text-2xl font-semibold text-center">
                        Investigación
                    </h3>
                    <p
                        class="font-[DM Sans] text-white font-normal md:text-lg py-3 md:py-4">
                        <b>Paso 1.</b>
                        Lo primero que hicimos como equipo es definir las tareas para cada
                        uno y generar el contrato como compromisos generales, procedimos a
                        inspeccionar y evaluar la usabilidad y accesibilidad de la pagina
                        web, para poder hacer una propuesta concreta.
                    </p>
                </div>
                <div class="w-1/4 hidden lg:block">
                    <img src="./img/arrrow-right.svg" alt="arrow-right" />
                </div>
                <div class="lg:hidden block">
                    <img
                        src="./img/arrow-bottom-responsive.svg"
                        alt="arrow-bottom"
                        class="w-3/4 md:w-full" />
                </div>
                <div class="w-full">
                    <img
                        src="./img/con-pro.jpg"
                        alt="con-pro"
                        class="rounded-md border-[#FF6F61] border-4" />
                </div>
            </div>
            <!-- arrow-interactive -->
            <div class="lg:flex lg:justify-center hidden relative">
                <div class="absolute -bottom-32">
                    <img src="./img/arrow-1.svg" alt="arrow-1" />
                </div>
            </div>
            <!-- arrow-bottom -->
            <div class="w-full flex justify-center pt-7">
                <div class="lg:hidden block">
                    <img
                        src="./img/arrow-bottom-responsive.svg"
                        alt="arrow-bottom"
                        class="w-3/4 md:w-full" />
                </div>
            </div>
            <!-- metodo-1 -->
            <div
                class="mx-5 flex flex-col-reverse lg:flex-row justify-center items-center gap-7 md:gap-12 pt-11">
                <div class="w-full">
                    <img
                        src="./img/bri-ben.jpg"
                        alt="bri-ben"
                        class="rounded-md border-[#FF6F61] border-4" />
                </div>
                <div class="w-1/4 hidden lg:block">
                    <img src="./img/arrow-left.svg" alt="arrow-left" />
                </div>
                <div class="lg:hidden block">
                    <img
                        src="./img/arrow-bottom-responsive.svg"
                        alt="arrow-bottom"
                        class="w-3/4 md:w-full" />
                </div>
                <div class="border-2 border-white text-white p-11 rounded-md w-full">
                    <h3
                        class="font-[Montserrat] text-[#FF6F61] text-xl md:text-2xl font-semibold text-center">
                        Metodo 1
                    </h3>
                    <p
                        class="font-[DM Sans] text-white font-normal md:text-lg py-3 md:py-4">
                        <b>Paso 2.</b> Debido al estudio que hicimos previamente a Womad
                        pudimos realizar metodologias como Brief para identificar la
                        problematica, fortalezas y debilidades para tener un panorama mas
                        claro de lo que debiamos hacer.
                    </p>
                    <p
                        class="font-[DM Sans] text-white font-normal md:text-lg py-3 md:py-4">
                        <b>Paso 3.</b> En Benchmark identificamos las posibles
                        competencias del sitio para analizarlas y tener un review de sus
                        debilidades para hacerlas nuestras fortalezas.
                    </p>
                </div>
            </div>
            <!-- arrow-interactive -->
            <div class="lg:flex lg:justify-center hidden relative">
                <div class="absolute -bottom-44">
                    <img src="./img/arrow-2.svg" alt="arrow-2" />
                </div>
            </div>
            <!-- arrow-bottom -->
            <div class="w-full flex justify-center pt-7">
                <div class="lg:hidden block">
                    <img
                        src="./img/arrow-bottom-responsive.svg"
                        alt="arrow-bottom"
                        class="w-3/4 md:w-full" />
                </div>
            </div>
            <!-- metodo-2 -->
            <div
                class="mx-5 flex flex-col lg:flex-row justify-center items-center gap-7 md:gap-12 lg:gap-14 pt-11">
                <div class="border-2 border-white text-white p-11 rounded-md w-full">
                    <h3
                        class="font-[Montserrat] text-[#FF6F61] text-xl md:text-2xl font-semibold text-center">
                        Metodo 2
                    </h3>
                    <p
                        class="font-[DM Sans] text-white font-normal md:text-lg py-3 md:py-4">
                        <b>Paso 4.</b> Tambien pudimos hacer el mapa de contenidos para
                        ver las secciones de la web.
                    </p>
                    <p
                        class="font-[DM Sans] text-white font-normal md:text-lg py-3 md:py-4">
                        <b>Paso 5.</b> User flow para ver el comportamiento del usuario
                        dentro de esta.
                    </p>
                    <p
                        class="font-[DM Sans] text-white font-normal md:text-lg py-3 md:py-4">
                        <b>Paso 6.</b> Card sorting para estudiar mas a fondo a nuestro
                        tipo de cliente y su informacion especifica.
                    </p>
                </div>
                <div class="w-1/4 hidden lg:block">
                    <img src="./img/arrrow-right.svg" alt="arrow-right" />
                </div>
                <div class="lg:hidden block">
                    <img
                        src="./img/arrow-bottom-responsive.svg"
                        alt="arrow-bottom"
                        class="w-3/4 md:w-full" />
                </div>
                <div class="w-full">
                    <img
                        src="./img/user-card-mapa.jpg"
                        alt="user-card-mapa"
                        class="rounded-md border-[#FF6F61] border-4" />
                </div>
            </div>
            <!-- arrow-interactive -->
            <div class="lg:flex lg:justify-center hidden relative">
                <div class="absolute -bottom-36">
                    <img src="./img/arrow-1.svg" alt="arrow-1" />
                </div>
            </div>
            <!-- arrow-bottom -->
            <div class="w-full flex justify-center pt-7">
                <div class="lg:hidden block">
                    <img
                        src="./img/arrow-bottom-responsive.svg"
                        alt="arrow-bottom"
                        class="w-3/4 md:w-full" />
                </div>
            </div>
            <!-- metodo-3 -->
            <div
                class="mx-5 flex flex-col-reverse lg:flex-row justify-center items-center gap-7 md:gap-12 pt-11">
                <div class="w-full">
                    <img
                        src="./img/guia-estilos.jpg"
                        alt="guia-estilos"
                        class="rounded-md border-[#FF6F61] border-4" />
                </div>
                <div class="w-1/4 hidden lg:block">
                    <img src="./img/arrow-left.svg" alt="arrow-left" />
                </div>
                <div class="lg:hidden block">
                    <img
                        src="./img/arrow-bottom-responsive.svg"
                        alt="arrow-bottom"
                        class="w-3/4 md:w-full" />
                </div>
                <div class="border-2 border-white text-white p-11 rounded-md w-full">
                    <h3
                        class="font-[Montserrat] text-[#FF6F61] text-xl md:text-2xl font-semibold text-center">
                        Metodo 3
                    </h3>
                    <p
                        class="font-[DM Sans] text-white font-normal md:text-lg py-3 md:py-4">
                        <b>Paso 7.</b> Logramos definir los tipos de publico que se
                        centrarian en womad identificando sus intereses, motivaciones, etc
                        y las encuestamos segun sus capacidades.
                    </p>
                    <p
                        class="font-[DM Sans] text-white font-normal md:text-lg py-3 md:py-4">
                        <b>Paso 8.</b> En la guía de estilos pusimos los colores que
                        queriamos que tenga para nuestra propuesta, el tipo de fuente,
                        tamaño de las imagenes, los iconos, etc.
                    </p>
                </div>
            </div>

            <!-- arrow-interactive -->
            <div class="lg:flex lg:justify-center hidden relative">
                <div class="absolute -bottom-[100px]">
                    <img src="./img/arrow-final.svg" alt="arrow-1" />
                </div>
            </div>
            <!-- arrow-bottom -->
            <div class="w-full flex justify-center pt-7">
                <div class="lg:hidden block">
                    <img
                        src="./img/arrow-bottom-responsive.svg"
                        alt="arrow-bottom"
                        class="w-3/4 md:w-full" />
                </div>
            </div>

            <!-- final -->
            <section class="max-w-[1300px] m-auto pt-14 md:pt-16">
                <div
                    class="flex justify-center items-center flex-col w-72 md:w-1/2 lg:w-3/4 text-white m-auto text-center gap-3">
                    <h2
                        class="font-[Montserrat] text-white text-3xl md:text-4xl font-semibold">
                        Presentación
                    </h2>
                    <p class="font-[DM Sans] font-normal md:text-lg pb-2">
                        Para la presentacion final de nuestra propuesta lo diseñamos en la
                        plataforma de figma, trabajamos colectivamente para hacer el trabajo
                        mas facil aunque al principio nos costo acostumbrarnos para las
                        diferentes ideas que teniamos, pero decidimos basarnos en los
                        estudios realizados previamente para lograr un diseño wiframe como
                        un boceto para proceder al mockup final.
                    </p>
                </div>
                <div class="flex justify-center pt-8 md:pt-14">
                    <img
                        src="./img/final.jpg"
                        alt="final"
                        class="rounded-md border-[#FFEA00] border-4" />
                </div>
            </section>
            <!-- button contacto -->
            <section class="flex justify-center py-8">
                <button
                    class="flex items-center gap-2 font-[DM Sans] py-2 px-5 bg-[#FFEA00] hover:bg-[#FFEE39] text-[#202023] font-semibold rounded-lg hover:-translate-y-2 hover:shadow-lg will-change-transform transition-transform duration-300 ease-in-out">
                    <a href="#">Contacto</a>
                </button>
            </section>

        <?php endwhile;
    else : ?>

        <div class="mb-4">
            <h1>No hay resultados</h1>
        </div>

    <?php endif; ?>
</section>

<?php get_footer(); ?>