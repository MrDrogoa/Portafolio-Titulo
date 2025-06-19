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
                        <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'enlace_behance', true)); ?>" target="_blank" class="flex items-center gap-2">
                            <?php echo esc_html(get_post_meta(get_the_ID(), 'texto_boton_superior', true) ?: 'Behance'); ?>
                            <i class="<?php echo esc_attr(get_post_meta(get_the_ID(), 'icono_boton_superior', true) ?: 'fa-brands fa-square-behance'); ?> text-3xl"></i>
                        </a>
                    </button>
                </div>
            </div>

            <!-- investigacion -->
            <div
                class="mx-5 flex flex-col lg:flex-row justify-center items-center gap-7 md:gap-12 lg:gap-14 pt-11">
                <div class="border-2 border-white text-white p-11 rounded-md w-full">
                    <h3
                        class="font-[Montserrat] text-[#FF6F61] text-xl md:text-2xl font-semibold text-center">
                        <?php echo esc_html(get_post_meta(get_the_ID(), 'titulo_seccion_1', true)); ?>
                    </h3>
                    <div class="font-[DM Sans] text-white font-normal md:text-lg py-3 md:py-4">
                        <?php echo wpautop(get_post_meta(get_the_ID(), 'contenido_seccion_1', true)); ?>
                    </div>
                </div>
                <div class="w-1/4 hidden lg:block">
                    <img src="<?php echo get_theme_file_uri('./img/arrrow-right.svg'); ?>" alt="arrow-right" />
                </div>
                <div class="lg:hidden block">
                    <img
                        src="<?php echo get_theme_file_uri('./img/arrow-bottom-responsive.svg'); ?>"
                        alt="arrow-bottom"
                        class="w-3/4 md:w-full" />
                </div>
                <div class="w-full">
                    <img
                        src="<?php echo esc_url(get_post_meta(get_the_ID(), 'imagen_seccion_1', true)); ?>"
                        alt="<?php echo esc_attr(get_post_meta(get_the_ID(), 'titulo_seccion_1', true)); ?>"
                        class="rounded-md m-auto lg:m-0" />
                </div>
            </div> <!-- arrow-interactive -->
            <div class="lg:flex lg:justify-center hidden relative">
                <div class="absolute -bottom-32">
                    <img src="<?php echo get_theme_file_uri('./img/arrow-1.svg') ?>" alt="arrow-1" />
                </div>
            </div>
            <!-- arrow-bottom -->
            <div class="w-full flex justify-center pt-7">
                <div class="lg:hidden block">
                    <img
                        src="<?php echo get_theme_file_uri('./img/arrow-bottom-responsive.svg'); ?>"
                        alt="arrow-bottom"
                        class="w-3/4 md:w-full" />
                </div>
            </div>
            <!-- metodo-1 -->
            <div
                class="mx-5 flex flex-col-reverse lg:flex-row justify-center items-center gap-7 md:gap-12 pt-11">
                <div class="w-full">
                    <img
                        src="<?php echo esc_url(get_post_meta(get_the_ID(), 'imagen_seccion_2', true)); ?>"
                        alt="<?php echo esc_attr(get_post_meta(get_the_ID(), 'titulo_seccion_2', true)); ?>"
                        class="rounded-md m-auto lg:m-0" />
                </div>
                <div class="w-1/4 hidden lg:block">
                    <img src="<?php echo get_theme_file_uri('./img/arrow-left.svg'); ?>" alt="arrow-left" />
                </div>
                <div class="lg:hidden block">
                    <img
                        src="<?php echo get_theme_file_uri('./img/arrow-bottom-responsive.svg'); ?>"
                        alt="arrow-bottom"
                        class="w-3/4 md:w-full" />
                </div>
                <div class="border-2 border-white text-white p-11 rounded-md w-full">
                    <h3
                        class="font-[Montserrat] text-[#FF6F61] text-xl md:text-2xl font-semibold text-center">
                        <?php echo esc_html(get_post_meta(get_the_ID(), 'titulo_seccion_2', true)); ?>
                    </h3>
                    <div class="font-[DM Sans] text-white font-normal md:text-lg py-3 md:py-4">
                        <?php echo wpautop(get_post_meta(get_the_ID(), 'contenido_seccion_2', true)); ?>
                    </div>
                </div>
            </div> <!-- arrow-interactive -->
            <div class="lg:flex lg:justify-center hidden relative">
                <div class="absolute -bottom-44">
                    <img src="<?php echo get_theme_file_uri('./img/arrow-2.svg'); ?>" alt="arrow-2" />
                </div>
            </div>
            <!-- arrow-bottom -->
            <div class="w-full flex justify-center pt-7">
                <div class="lg:hidden block">
                    <img
                        src="<?php echo get_theme_file_uri('./img/arrow-bottom-responsive.svg'); ?>"
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
                        <?php echo esc_html(get_post_meta(get_the_ID(), 'titulo_seccion_3', true)); ?>
                    </h3>
                    <div class="font-[DM Sans] text-white font-normal md:text-lg py-3 md:py-4">
                        <?php echo wpautop(get_post_meta(get_the_ID(), 'contenido_seccion_3', true)); ?>
                    </div>
                </div>
                <div class="w-1/4 hidden lg:block">
                    <img src="<?php echo get_theme_file_uri('./img/arrrow-right.svg'); ?>" alt="arrow-right" />
                </div>
                <div class="lg:hidden block ">
                    <img
                        src="<?php echo get_theme_file_uri('./img/arrow-bottom-responsive.svg'); ?>"
                        alt="arrow-bottom"
                        class="w-3/4 md:w-full" />
                </div>
                <div class="w-full">
                    <img
                        src="<?php echo esc_url(get_post_meta(get_the_ID(), 'imagen_seccion_3', true)); ?>"
                        alt="<?php echo esc_attr(get_post_meta(get_the_ID(), 'titulo_seccion_3', true)); ?>"
                        class="rounded-md m-auto lg:m-0" />
                </div>
            </div> <!-- arrow-interactive -->
            <div class="lg:flex lg:justify-center hidden relative">
                <div class="absolute -bottom-36">
                    <img src="<?php echo get_theme_file_uri('./img/arrow-1.svg') ?>" alt="arrow-1" />
                </div>
            </div>
            <!-- arrow-bottom -->
            <div class="w-full flex justify-center pt-7">
                <div class="lg:hidden block">
                    <img
                        src="<?php echo get_theme_file_uri('./img/arrow-bottom-responsive.svg'); ?>"
                        alt="arrow-bottom"
                        class="w-3/4 md:w-full" />
                </div>
            </div>
            <!-- metodo-3 -->
            <div
                class="mx-5 flex flex-col-reverse lg:flex-row justify-center items-center gap-7 md:gap-12 pt-11">
                <div class="w-full">
                    <img
                        src="<?php echo esc_url(get_post_meta(get_the_ID(), 'imagen_seccion_4', true)); ?>"
                        alt="<?php echo esc_attr(get_post_meta(get_the_ID(), 'titulo_seccion_4', true)); ?>"
                        class="rounded-md m-auto lg:m-0" />
                </div>
                <div class="w-1/4 hidden lg:block">
                    <img src="<?php echo get_theme_file_uri('./img/arrow-left.svg'); ?>" alt="arrow-left" />
                </div>
                <div class="lg:hidden block">
                    <img
                        src="<?php echo get_theme_file_uri('./img/arrow-bottom-responsive.svg'); ?>"
                        alt="arrow-bottom"
                        class="w-3/4 md:w-full" />
                </div>
                <div class="border-2 border-white text-white p-11 rounded-md w-full">
                    <h3
                        class="font-[Montserrat] text-[#FF6F61] text-xl md:text-2xl font-semibold text-center">
                        <?php echo esc_html(get_post_meta(get_the_ID(), 'titulo_seccion_4', true)); ?>
                    </h3>
                    <div class="font-[DM Sans] text-white font-normal md:text-lg py-3 md:py-4">
                        <?php echo wpautop(get_post_meta(get_the_ID(), 'contenido_seccion_4', true)); ?>
                    </div>
                </div>
            </div> <!-- arrow-interactive después de sección 4 -->
            <div class="lg:flex lg:justify-center hidden relative">
                <div class="absolute -bottom-[100px]">
                    <img src="<?php echo get_theme_file_uri('./img/arrow-final.svg'); ?>" alt="arrow-final" />
                </div>
            </div>
            <!-- arrow-bottom -->
            <div class="w-full flex justify-center pt-7">
                <div class="lg:hidden block">
                    <img
                        src="<?php echo get_theme_file_uri('./img/arrow-bottom-responsive.svg'); ?>"
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
                        <?php echo esc_html(get_post_meta(get_the_ID(), 'titulo_presentacion', true)); ?>
                    </h2>
                    <div class="font-[DM Sans] font-normal md:text-lg pb-2">
                        <?php echo wpautop(get_post_meta(get_the_ID(), 'contenido_presentacion', true)); ?>
                    </div>
                </div>
                <div class="flex justify-center pt-8 md:pt-14">
                    <img
                        src="<?php echo esc_url(get_post_meta(get_the_ID(), 'imagen_presentacion', true)); ?>"
                        alt="<?php echo esc_attr(get_post_meta(get_the_ID(), 'titulo_presentacion', true)); ?>"
                        class="rounded-md " />
                </div>
            </section> <!-- button contacto -->
            <section class="flex justify-center py-8">
                <button
                    class="flex items-center gap-2 font-[DM Sans] py-2 px-5 bg-[#FFEA00] hover:bg-[#FFEE39] text-[#202023] font-semibold rounded-lg hover:-translate-y-2 hover:shadow-lg will-change-transform transition-transform duration-300 ease-in-out">
                    <a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'enlace_boton_contacto', true) ?: home_url('/contacto/')); ?>">
                        <?php echo esc_html(get_post_meta(get_the_ID(), 'texto_boton_contacto', true) ?: 'Contacto'); ?>
                    </a>
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