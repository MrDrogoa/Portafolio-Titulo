<!DOCTYPE html>
<html lang="es-en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php echo get_bloginfo("name") ?></title>
    <link rel="shortcut icon" href="<?php echo get_theme_file_uri('./img/logo.svg') ?>" type="image/x-icon" />
    <?php wp_head(); ?>
</head>

<body class="bg-[#202023]">
    <!-- header -->
    <header>
        <!-- navbar -->
        <nav class="font-[Montserrat]">
            <section
                class="flex justify-between items-center py-5 px-5 max-w-[1300px] m-auto">
                <div class="flex flex-grow">
                    <a href="<?php echo esc_url(home_url("/")); ?>" class="navbar-brand">
                        <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                        if (has_custom_logo()) {
                            echo '<img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '" />';
                        } else {
                            echo '<img src="' . get_theme_file_uri('./img/logo.svg') . '" alt="logo" />';
                        }
                        ?>
                    </a>
                </div>
                <!-- menu amburguesa -->
                <div class="lg:hidden block">
                    <button id="menu-icons" onclick="openMenu()">
                        <i class="fa-solid fa-bars text-white text-3xl"></i>
                    </button>
                </div>
                <div
                    id="menu-content"
                    class="lg:flex hidden flex-grow justify-between items-center absolute lg:relative lg:top-0 top-24 md:top-28 left-0 w-full lg:w-auto bg-white lg:bg-transparent py-10 px-8 lg:py-0 lg:px-0 z-30">
                    <?php wp_nav_menu(
                        array(
                            'theme_location' => 'main-menu',
                            'container' => false,
                            'items_wrap' => '<ul class="lg:text-white text-[#202023] font-medium flex justify-center gap-7 flex-col lg:flex-row">%3$s</ul>',
                            'fallback_cb' => '__return_false',
                            'menu_class' => '',
                            'depth' => 2,
                            'walker' => new Tailwind_Nav_Walker()
                        )
                    ); ?>

                    <div class="pt-5 lg:pt-0">
                        <a href="mailto:picisdaniel2016@gmail.com">
                            <i
                                class="fa-solid fa-square-envelope lg:text-white text-[#202023] text-3xl hover:text-[#FF6F61] transition-colors"></i>
                        </a>
                    </div>
                </div>
            </section>
        </nav>