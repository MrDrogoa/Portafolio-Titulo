<?php get_header(); ?>

<!-- main - contacto -->
<main>
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

<?php get_footer(); ?>