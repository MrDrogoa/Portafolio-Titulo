<?php get_header(); ?>

<section class="max-w-[1300px] m-auto py-8 md:py-12 lg:py-14">

    <div class="w-full">
        <h2 class="font-[Montserrat] text-[#FF6F61] text-4xl md:text-6xl lg:text-8xl font-extrabold text-center">Error 404</h2>
        <h2 class="font-[Montserrat] text-white text-3xl md:text-5xl lg:text-7xl font-extrabold text-center">¡Ups!</h2>
        <p class="font-[DM Sans] font-normal md:text-2xl text-center text-white py-3 pb-6 lg:pb-0 w-1/2 sm:w-[30%]  md:w-1/4 m-auto">No hemos podido encontrar la pagina que buscas.</p>
    </div>
    <div class="flex justify-center mt-5">
        <button
            class="font-[DM Sans] py-2 px-5 bg-[#FFEA00] hover:bg-[#FFEE39] text-[#202023] font-semibold rounded-lg hover:-translate-y-2 hover:shadow-lg will-change-transform transition-transform duration-300 ease-in-out">
            <a href="<?= esc_url(home_url("/")); ?>" class="flex items-center gap-2">Volver</a>
        </button>
    </div>

</section>