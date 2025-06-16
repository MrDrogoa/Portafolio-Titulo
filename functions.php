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
    wp_enqueue_style('icons',  get_template_directory_uri() . '/node_modules/@fortawesome/fontawesome-free/css/all.min.css', array(), $version, 'all');    // styles de carrusel
    wp_enqueue_style('carrusel-icons',  get_template_directory_uri() . '/assets/css/splide.min.css', array(), $version, 'all');
    // libreria de animaciones
    wp_enqueue_style('animate',  get_template_directory_uri() . '/assets/css/animate.min.css', array(), $version, 'all');
    // fuentes google
    wp_enqueue_style('fuente', 'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap', array(), $version, 'all');


    // scripts de carrusel - cargamos primero las dependencias
    wp_enqueue_script('scripts-carrusel', get_template_directory_uri() . '/assets/js/splide.min.js', array(), $version, true);
    // script de scroll - debe cargarse antes que script.js
    wp_enqueue_script('scripts-scroll', get_template_directory_uri() . '/assets/js/scrollreveal.min.js', array(), $version, true);
    // script principal - debe cargarse después de todas las dependencias
    wp_enqueue_script('scripts', get_template_directory_uri() . '/js/script.js', array('jquery', 'scripts-carrusel', 'scripts-scroll'), $version, true);
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
        // Clases mejoradas para el submenú con efectos de transición y accesibilidad
        $output .= "<ul class='hidden lg:group-hover:block lg:absolute lg:top-full lg:left-0 lg:mt-1 lg:bg-white lg:text-[#202023] lg:min-w-[200px] lg:shadow-md lg:rounded-md lg:p-2 mt-2 ml-4 space-y-2 lg:space-y-0 z-50 lg:origin-top lg:opacity-0 lg:group-hover:opacity-100 lg:translate-y-[-10px] lg:group-hover:translate-y-0 lg:transition-all lg:duration-300 lg:ease-in-out'>";
    }

    function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
    {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $has_children = in_array('menu-item-has-children', $classes);

        // Añade clases Tailwind basadas en la profundidad
        if ($depth === 0) {
            $item_output = "<li class='relative group lg:hover:bg-transparent hover:bg-[#FF6F61] lg:p-0 p-2 rounded transition-colors'>";

            // Si tiene hijos, iniciar la estructura con div para alinear botón y enlace
            if ($has_children) {
                $item_output .= "<div class='flex items-center justify-between'>";
            }
        } else {
            $item_output = "<li class='lg:hover:bg-[#FF6F61] lg:p-2 p-1 rounded transition-colors'>";
        }

        // Añade atributos al enlace
        $atts = array();
        $atts['href'] = !empty($item->url) ? $item->url : '';

        if ($depth === 0) {
            $atts['class'] = 'lg:hover:text-[#FF6F61] hover:text-white transition-colors inline-block w-full lg:w-auto';
        } else {
            $atts['class'] = 'lg:hover:text-white hover:text-[#202023] lg:hover:bg-transparent lg:rounded-none p-2 lg:p-0 rounded-md hover:bg-white transition-colors block w-full';
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

        // Añade la línea de hover para elementos del primer nivel
        if ($depth === 0) {
            $item_output .= '<span class="absolute left-0 bottom-0 w-0 h-0.5 bg-[#FF6F61] group-hover:w-full transition-all duration-300 hidden lg:block"></span>';
        }

        $item_output .= '</a>';

        // Si tiene hijos, añade el botón de despliegue para móviles
        if ($depth === 0 && $has_children) {
            $item_output .= '<button class="dropdown-toggle lg:hidden text-[#202023] hover:text-white transition-colors ml-2 p-2" aria-label="Toggle submenu">
                <i class="fa-solid fa-caret-down text-large"></i>
            </button>';
            $item_output .= '</div>'; // Cierra el div flex
        }

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
