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
    <!-- Proyectos front-end -->
    <section class="max-w-[1300px] m-auto pb-14">
        <div
            class="flex flex-col md:flex-row flex-wrap justify-center px-5 pt-11 w-full gap-5">
            <!-- card-1 -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div
                        class="flex flex-col border-2 border-white rounded-md overflow-hidden max-w-sm m-auto md:m-0">
                        <a href="<?php the_permalink(); ?>" class="w-full h-1/3 md:h-3/4 object-cover">
                            <?php the_post_thumbnail('post-thumbnail', array()); ?>
                        </a>
                        <div class="px-6 pb-6 pt-5">
                            <a
                                href="<?php the_permalink(); ?>"
                                class="hover:text-[#ce4c40] font-[Montserrat] text-[#FF6F61] font-semibold  md:text-lg  transition-colors"><?php the_title(); ?></a>
                            <div class="font-[DM Sans] font-normal text-white pb-2">
                                <?php the_excerpt(); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="text-white flex justify-end mt-auto gap-2">
                                <i
                                    class="fa-brands fa-html5 text-[#FF0000] text-2xl lg:text-3xl"></i>
                                <i
                                    class="fa-brands fa-css3-alt text-[#0059FF] text-2xl lg:text-3xl"></i>
                            </a>
                        </div>
                    </div>
                <?php endwhile;
            else : ?>

                <div class="mb-4">
                    <h1>No hay resultados</h1>
                </div>

            <?php endif; ?>

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
                Contactame para marcar la diferencia. ¿Listo para crear tu impacto?
            </p>
        </div>

        <div class="flex flex-col px-5 mt-6">
            <form action="<?php echo get_template_directory_uri(); ?>/database/bd.php" method="post" class="space-y-6">
                <div>
                    <input
                        type="text"
                        id="nombre"
                        name="nombre"
                        placeholder="Nombre"
                        class="mt-1 block w-full sm:w-3/4 md:w-1/2 m-auto px-3 py-2 focus:outline-none bg-transparent border-2 text-white"
                        required />
                </div>
                <div>
                    <input
                        type="email"
                        id="correo"
                        name="correo"
                        placeholder="Email"
                        class="mt-1 block w-full sm:w-3/4 md:w-1/2 m-auto px-3 py-2 focus:outline-none bg-transparent border-2 text-white"
                        required />
                </div>
                <div>
                    <textarea
                        id="mensaje"
                        name="mensaje"
                        rows="7"
                        placeholder="Mensaje"
                        class="mt-1 block w-full sm:w-3/4 md:w-1/2 m-auto px-3 py-2 focus:outline-none bg-transparent border-2 text-white resize-none"
                        required></textarea>
                </div>
                <div class="flex items-center justify-center">
                    <button
                        type="submit"
                        class="font-[DM Sans] py-2 px-5 bg-[#FFEA00] hover:bg-[#FFEE39] text-[#202023] font-semibold rounded-lg hover:-translate-y-2 hover:shadow-lg will-change-transform transition-transform duration-300 ease-in-out">
                        Enviar
                    </button>
                </div>
            </form>
        </div>
    </section>
</main>
<?php get_footer() ?>