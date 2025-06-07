<?php

function size_imagen()
{
    //activo la seccion imagen destacada
    add_theme_support('post-thumbnails');
    //menu
    register_nav_menus(array('main-menu' => esc_html__('Menus principal')));
};

add_action('after_setup_theme', 'size_imagen');

function theme_enqueue_scripts()
{
    $version = date('YmdHis');

    // styles css tailwind - solo el compilado, no el input
    wp_enqueue_style('tailwind',  get_template_directory_uri() . '/css/styles.css', array(), $version, 'all');
    // libreria de iconos
    wp_enqueue_style('icons',  get_template_directory_uri() . '/node_modules/@fortawesome/fontawesome-free/css/all.min.css', array(), $version, 'all');
    // styles de carrusel
    wp_enqueue_style('carrusel-icons',  get_template_directory_uri() . '/assets/css/splide.min.css', array(), $version, 'all');
    // libreria de animaciones
    wp_enqueue_style('animate',  get_template_directory_uri() . '/assets/css/animate.min.css', array(), $version, 'all');
    // fuentes google
    wp_enqueue_style('bootstrap', 'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', array(), $version, 'all');

    // scripts
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/script.js', array(), $version, true);
    // scripts de carrusel
    wp_enqueue_script('scripts-carrusel', get_template_directory_uri() . '/assets/js/splide.min.js', array(), $version, true);
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

// logo perzonalisable
function theme_setup()
{
    // Otros soportes de tema...

    // Agregar soporte para logo personalizado
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'theme_setup');


// Tailwind CSS Nav Walker
class Tailwind_Nav_Walker extends Walker_Nav_Menu
{
    function start_lvl(&$output, $depth = 0, $args = null)
    {
        $output .= "<ul class='text-[#202023] md:static lg:absolute bg-white hidden group-hover:block lg:mt-2 lg:shadow-md lg:rounded-md lg:min-w-[150px] lg:py-2'>";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $classes = empty($item->classes) ? array() : (array) $item->classes;

        // Añade clases Tailwind basadas en la profundidad
        if ($depth === 0) {
            $item_output = "<li class='relative group lg:hover:bg-transparent hover:bg-[#FF6F61] lg:p-0 p-2 rounded transition-colors'>";
        } else {
            $item_output = "<li class='hover:bg-gray-100'>";
        }

        // Añade atributos al enlace
        $atts = array();
        $atts['href'] = !empty($item->url) ? $item->url : '';
        $atts['class'] = '';

        if ($depth === 0) {
            $atts['class'] = 'lg:hover:text-[#FF6F61] hover:text-white transition-colors inline-block w-full';

            // Si tiene hijos, añade icono desplegable
            if (in_array('menu-item-has-children', $classes)) {
                $atts['class'] .= ' flex items-center gap-2';
            }
        } else {
            $atts['class'] = 'block px-4 py-2';
        }

        // Construye el enlace con atributos
        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;

        // Añade icono desplegable si tiene hijos
        if ($depth === 0 && in_array('menu-item-has-children', $classes)) {
            $item_output .= '<i class="fa-solid fa-caret-down"></i>';
        }

        // Añade la línea de hover para elementos del primer nivel
        if ($depth === 0) {
            $item_output .= '<span class="absolute left-0 bottom-0 w-0 h-0.5 bg-[#FF6F61] group-hover:w-full transition-all duration-300 hidden lg:block"></span>';
        }

        $item_output .= '</a>';

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }

    function end_el(&$output, $item, $depth = 0, $args = null)
    {
        $output .= "</li>\n";
    }

    function end_lvl(&$output, $depth = 0, $args = null)
    {
        $output .= "</ul>\n";
    }
}
