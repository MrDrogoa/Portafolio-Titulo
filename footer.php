    <!-- footer -->
    <footer class="bg-white">
        <section class="max-w-[1300px] m-auto md:px-5 pb-14 md:pb-10 pt-16">
            <div
                class="flex flex-col justify-center items-center md:items-stretch md:flex-row md:justify-between gap-6 md:gap-0">
                <!-- texto-contacto -->
                <div>
                    <a href="<?= esc_url(home_url("/")); ?>">
                        <img
                            src="<?php echo get_theme_file_uri('./img/logo-footer.svg') ?>"
                            alt="logo"
                            class="w-24 md:w-32 m-auto md:m-0" />

                    </a>
                    <p
                        class="font-[DM Sans] font-medium md:text-lg lg:text-xl w-40 md:w-52 text-center md:text-start">
                        ¡Creemos Juntos Tu Presencia Digital!
                    </p>
                    <div class="text-center md:text-start">
                        <button
                            class="font-[DM Sans] py-2 px-5 bg-[#FF6F61] hover:bg-[#ff776a] text-[#202023] font-semibold rounded-lg hover:-translate-y-2 hover:shadow-lg will-change-transform transition-transform duration-300 ease-in-out mt-4">
                            <a href="#" class="inline-block">Correo</a>
                        </button>
                    </div>
                </div>
                <!-- contacto -->
                <div class="flex md:flex-row gap-20">
                    <div>
                        <h3
                            class="font-[Montserrat] text-[#202023] text-xl md:text-2xl font-semibold text-center md:text-start">
                            Redes
                        </h3>
                        <div class="flex text-[#202023] gap-2">
                            <a href="#" class="hover:text-[#FF6F61] transition-colors"><i class="fa-brands fa-square-instagram text-3xl"></i></a>
                            <a href="#" class="hover:text-[#FF6F61] transition-colors"><i class="fa-brands fa-linkedin text-3xl"></i></a>
                            <a href="#" class="hover:text-[#FF6F61] transition-colors"><i class="fa-brands fa-github text-3xl"></i></a>
                            <a href="#" class="hover:text-[#FF6F61] transition-colors"><i class="fa-brands fa-square-whatsapp text-3xl"></i></a>
                        </div>
                    </div>
                    <div class="flex flex-col md:block">
                        <h3
                            class="font-[Montserrat] text-[#202023] text-xl md:text-2xl font-semibold text-center md:text-start">
                            Contacto
                        </h3>
                        <a
                            href="#"
                            class="text-center md:text-start hover:text-[#ff6e61e5] font-[DM Sans] transition-colors">mensaje</a>
                    </div>
                </div>
            </div>
            <!-- copyright -->
            <span
                class="flex items-center gap-2 justify-center text-[#202023] pt-6 font-medium"><i class="fa-regular fa-copyright"></i> Copyright 2025
                <i class="fa-solid fa-circle text-[#FF6F61] text-[6px]"></i> Daniel
                Rosales</span>
        </section>
    </footer>

    <?php wp_footer() ?>

    </body>

    </html>