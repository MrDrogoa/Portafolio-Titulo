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

// Función para registrar campos personalizados para plantilla single.php
function registrar_metaboxes_proyecto()
{
    // Metabox principal para configuración del proyecto
    add_meta_box(
        'proyecto_config',
        'Configuración de Proyecto',
        'mostrar_campos_proyecto',
        'post',
        'normal',
        'high'
    );
}
add_action('add_meta_boxes', 'registrar_metaboxes_proyecto');

// Función para mostrar los campos del proyecto
function mostrar_campos_proyecto($post)
{
    // Crear nonce para seguridad
    wp_nonce_field('guardar_datos_proyecto', 'proyecto_nonce');

    // Recuperar valores existentes
    $enlace_behance = get_post_meta($post->ID, 'enlace_behance', true);
    $texto_boton_superior = get_post_meta($post->ID, 'texto_boton_superior', true);
    $icono_boton_superior = get_post_meta($post->ID, 'icono_boton_superior', true);

    // Sección 1
    $titulo_seccion_1 = get_post_meta($post->ID, 'titulo_seccion_1', true);
    $contenido_seccion_1 = get_post_meta($post->ID, 'contenido_seccion_1', true);
    $imagen_seccion_1 = get_post_meta($post->ID, 'imagen_seccion_1', true);

    // Sección 2
    $titulo_seccion_2 = get_post_meta($post->ID, 'titulo_seccion_2', true);
    $contenido_seccion_2 = get_post_meta($post->ID, 'contenido_seccion_2', true);
    $imagen_seccion_2 = get_post_meta($post->ID, 'imagen_seccion_2', true);

    // Sección 3
    $titulo_seccion_3 = get_post_meta($post->ID, 'titulo_seccion_3', true);
    $contenido_seccion_3 = get_post_meta($post->ID, 'contenido_seccion_3', true);
    $imagen_seccion_3 = get_post_meta($post->ID, 'imagen_seccion_3', true);

    // Sección 4
    $titulo_seccion_4 = get_post_meta($post->ID, 'titulo_seccion_4', true);
    $contenido_seccion_4 = get_post_meta($post->ID, 'contenido_seccion_4', true);
    $imagen_seccion_4 = get_post_meta($post->ID, 'imagen_seccion_4', true);

    // Sección 5 (opcional)
    $titulo_seccion_5 = get_post_meta($post->ID, 'titulo_seccion_5', true);
    $contenido_seccion_5 = get_post_meta($post->ID, 'contenido_seccion_5', true);
    $imagen_seccion_5 = get_post_meta($post->ID, 'imagen_seccion_5', true);

    // Sección 6 (opcional)
    $titulo_seccion_6 = get_post_meta($post->ID, 'titulo_seccion_6', true);
    $contenido_seccion_6 = get_post_meta($post->ID, 'contenido_seccion_6', true);
    $imagen_seccion_6 = get_post_meta($post->ID, 'imagen_seccion_6', true);

    // Sección de presentación
    $titulo_presentacion = get_post_meta($post->ID, 'titulo_presentacion', true);
    $contenido_presentacion = get_post_meta($post->ID, 'contenido_presentacion', true);
    $imagen_presentacion = get_post_meta($post->ID, 'imagen_presentacion', true);

    // Botón de contacto
    $texto_boton_contacto = get_post_meta($post->ID, 'texto_boton_contacto', true);
    $enlace_boton_contacto = get_post_meta($post->ID, 'enlace_boton_contacto', true);

    // Imprimir formulario HTML
?>
    <style>
        .campos-proyecto {
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
        }

        .campos-proyecto h3 {
            margin-top: 0;
            padding-bottom: 10px;
            border-bottom: 1px solid #ddd;
        }

        .campo-grupo {
            margin-bottom: 15px;
        }

        .campo-grupo label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .campo-grupo input[type="text"],
        .campo-grupo textarea {
            width: 100%;
        }

        .campo-grupo textarea {
            min-height: 100px;
        }

        .campo-grupo .descripcion {
            color: #666;
            font-style: italic;
            font-size: 0.9em;
            margin-top: 5px;
        }
    </style>

    <!-- Información de botón superior -->
    <div class="campos-proyecto">
        <h3>Botón Superior</h3>
        <div class="campo-grupo">
            <label for="enlace_behance">Enlace del botón:</label>
            <input type="text" id="enlace_behance" name="enlace_behance" value="<?php echo esc_attr($enlace_behance); ?>" />
            <p class="descripcion">URL completa (ej: https://behance.net/usuario)</p>
        </div>
        <div class="campo-grupo">
            <label for="texto_boton_superior">Texto del botón:</label>
            <input type="text" id="texto_boton_superior" name="texto_boton_superior" value="<?php echo esc_attr($texto_boton_superior); ?>" placeholder="Behance" />
        </div>
        <div class="campo-grupo">
            <label for="icono_boton_superior">Clase del ícono:</label>
            <input type="text" id="icono_boton_superior" name="icono_boton_superior" value="<?php echo esc_attr($icono_boton_superior); ?>" placeholder="fa-brands fa-square-behance" />
            <p class="descripcion">Clase CSS de Font Awesome (ej: fa-brands fa-square-behance)</p>
        </div>
    </div>

    <!-- Sección 1 -->
    <div class="campos-proyecto">
        <h3>Sección 1</h3>
        <div class="campo-grupo">
            <label for="titulo_seccion_1">Título:</label>
            <input type="text" id="titulo_seccion_1" name="titulo_seccion_1" value="<?php echo esc_attr($titulo_seccion_1); ?>" />
        </div>
        <div class="campo-grupo">
            <label for="contenido_seccion_1">Contenido:</label>
            <textarea id="contenido_seccion_1" name="contenido_seccion_1"><?php echo esc_textarea($contenido_seccion_1); ?></textarea>
        </div>
        <div class="campo-grupo">
            <label for="imagen_seccion_1">URL de la imagen:</label>
            <input type="text" id="imagen_seccion_1" name="imagen_seccion_1" value="<?php echo esc_attr($imagen_seccion_1); ?>" />
            <p class="descripcion">URL completa de la imagen</p>
            <button type="button" class="button upload-image" data-target="imagen_seccion_1">Seleccionar imagen</button>
        </div>
    </div>

    <!-- Sección 2 -->
    <div class="campos-proyecto">
        <h3>Sección 2</h3>
        <div class="campo-grupo">
            <label for="titulo_seccion_2">Título:</label>
            <input type="text" id="titulo_seccion_2" name="titulo_seccion_2" value="<?php echo esc_attr($titulo_seccion_2); ?>" />
        </div>
        <div class="campo-grupo">
            <label for="contenido_seccion_2">Contenido:</label>
            <textarea id="contenido_seccion_2" name="contenido_seccion_2"><?php echo esc_textarea($contenido_seccion_2); ?></textarea>
        </div>
        <div class="campo-grupo">
            <label for="imagen_seccion_2">URL de la imagen:</label>
            <input type="text" id="imagen_seccion_2" name="imagen_seccion_2" value="<?php echo esc_attr($imagen_seccion_2); ?>" />
            <p class="descripcion">URL completa de la imagen</p>
            <button type="button" class="button upload-image" data-target="imagen_seccion_2">Seleccionar imagen</button>
        </div>
    </div>

    <!-- Sección 3 -->
    <div class="campos-proyecto">
        <h3>Sección 3</h3>
        <div class="campo-grupo">
            <label for="titulo_seccion_3">Título:</label>
            <input type="text" id="titulo_seccion_3" name="titulo_seccion_3" value="<?php echo esc_attr($titulo_seccion_3); ?>" />
        </div>
        <div class="campo-grupo">
            <label for="contenido_seccion_3">Contenido:</label>
            <textarea id="contenido_seccion_3" name="contenido_seccion_3"><?php echo esc_textarea($contenido_seccion_3); ?></textarea>
        </div>
        <div class="campo-grupo">
            <label for="imagen_seccion_3">URL de la imagen:</label>
            <input type="text" id="imagen_seccion_3" name="imagen_seccion_3" value="<?php echo esc_attr($imagen_seccion_3); ?>" />
            <p class="descripcion">URL completa de la imagen</p>
            <button type="button" class="button upload-image" data-target="imagen_seccion_3">Seleccionar imagen</button>
        </div>
    </div>

    <!-- Sección 4 -->
    <div class="campos-proyecto">
        <h3>Sección 4</h3>
        <div class="campo-grupo">
            <label for="titulo_seccion_4">Título:</label>
            <input type="text" id="titulo_seccion_4" name="titulo_seccion_4" value="<?php echo esc_attr($titulo_seccion_4); ?>" />
        </div>
        <div class="campo-grupo">
            <label for="contenido_seccion_4">Contenido:</label>
            <textarea id="contenido_seccion_4" name="contenido_seccion_4"><?php echo esc_textarea($contenido_seccion_4); ?></textarea>
        </div>
        <div class="campo-grupo">
            <label for="imagen_seccion_4">URL de la imagen:</label>
            <input type="text" id="imagen_seccion_4" name="imagen_seccion_4" value="<?php echo esc_attr($imagen_seccion_4); ?>" />
            <p class="descripcion">URL completa de la imagen</p>
            <button type="button" class="button upload-image" data-target="imagen_seccion_4">Seleccionar imagen</button>
        </div>
    </div>

    <!-- Sección 5 (Opcional) -->
    <div class="campos-proyecto">
        <h3>Sección 5 (Opcional)</h3>
        <div class="campo-grupo">
            <label for="titulo_seccion_5">Título:</label>
            <input type="text" id="titulo_seccion_5" name="titulo_seccion_5" value="<?php echo esc_attr($titulo_seccion_5); ?>" />
        </div>
        <div class="campo-grupo">
            <label for="contenido_seccion_5">Contenido:</label>
            <textarea id="contenido_seccion_5" name="contenido_seccion_5"><?php echo esc_textarea($contenido_seccion_5); ?></textarea>
        </div>
        <div class="campo-grupo">
            <label for="imagen_seccion_5">URL de la imagen:</label>
            <input type="text" id="imagen_seccion_5" name="imagen_seccion_5" value="<?php echo esc_attr($imagen_seccion_5); ?>" />
            <p class="descripcion">URL completa de la imagen (dejar en blanco para omitir esta sección)</p>
            <button type="button" class="button upload-image" data-target="imagen_seccion_5">Seleccionar imagen</button>
        </div>
    </div>

    <!-- Sección 6 (Opcional) -->
    <div class="campos-proyecto">
        <h3>Sección 6 (Opcional)</h3>
        <div class="campo-grupo">
            <label for="titulo_seccion_6">Título:</label>
            <input type="text" id="titulo_seccion_6" name="titulo_seccion_6" value="<?php echo esc_attr($titulo_seccion_6); ?>" />
        </div>
        <div class="campo-grupo">
            <label for="contenido_seccion_6">Contenido:</label>
            <textarea id="contenido_seccion_6" name="contenido_seccion_6"><?php echo esc_textarea($contenido_seccion_6); ?></textarea>
        </div>
        <div class="campo-grupo">
            <label for="imagen_seccion_6">URL de la imagen:</label>
            <input type="text" id="imagen_seccion_6" name="imagen_seccion_6" value="<?php echo esc_attr($imagen_seccion_6); ?>" />
            <p class="descripcion">URL completa de la imagen (dejar en blanco para omitir esta sección)</p>
            <button type="button" class="button upload-image" data-target="imagen_seccion_6">Seleccionar imagen</button>
        </div>
    </div>

    <!-- Sección de Presentación -->
    <div class="campos-proyecto">
        <h3>Sección de Presentación (Final)</h3>
        <div class="campo-grupo">
            <label for="titulo_presentacion">Título:</label>
            <input type="text" id="titulo_presentacion" name="titulo_presentacion" value="<?php echo esc_attr($titulo_presentacion); ?>" />
        </div>
        <div class="campo-grupo">
            <label for="contenido_presentacion">Contenido:</label>
            <textarea id="contenido_presentacion" name="contenido_presentacion"><?php echo esc_textarea($contenido_presentacion); ?></textarea>
        </div>
        <div class="campo-grupo">
            <label for="imagen_presentacion">URL de la imagen:</label>
            <input type="text" id="imagen_presentacion" name="imagen_presentacion" value="<?php echo esc_attr($imagen_presentacion); ?>" />
            <p class="descripcion">URL completa de la imagen</p>
            <button type="button" class="button upload-image" data-target="imagen_presentacion">Seleccionar imagen</button>
        </div>
    </div>

    <!-- Botón de Contacto -->
    <div class="campos-proyecto">
        <h3>Botón de Contacto</h3>
        <div class="campo-grupo">
            <label for="texto_boton_contacto">Texto del botón:</label>
            <input type="text" id="texto_boton_contacto" name="texto_boton_contacto" value="<?php echo esc_attr($texto_boton_contacto); ?>" placeholder="Contacto" />
        </div>
        <div class="campo-grupo">
            <label for="enlace_boton_contacto">Enlace del botón:</label>
            <input type="text" id="enlace_boton_contacto" name="enlace_boton_contacto" value="<?php echo esc_attr($enlace_boton_contacto); ?>" placeholder="<?php echo esc_url(home_url('/contacto/')); ?>" />
            <p class="descripcion">URL completa (dejar en blanco para usar la página de contacto predeterminada)</p>
        </div>
    </div>

    <script>
        jQuery(document).ready(function($) {
            // Manejo del botón de subir imagen
            $('.upload-image').click(function(e) {
                e.preventDefault();

                var button = $(this);
                var targetField = button.data('target');

                var mediaUploader = wp.media({
                    title: 'Seleccionar imagen',
                    button: {
                        text: 'Usar esta imagen'
                    },
                    multiple: false
                });

                mediaUploader.on('select', function() {
                    var attachment = mediaUploader.state().get('selection').first().toJSON();
                    $('#' + targetField).val(attachment.url);
                });

                mediaUploader.open();
            });
        });
    </script>
<?php
}

// Función para guardar los datos del proyecto
function guardar_datos_proyecto($post_id)
{
    // Verificar el nonce por seguridad
    if (!isset($_POST['proyecto_nonce']) || !wp_verify_nonce($_POST['proyecto_nonce'], 'guardar_datos_proyecto')) {
        return;
    }

    // Verificar autosave
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    // Verificar permisos
    if (!current_user_can('edit_post', $post_id)) {
        return;
    }

    // Campos a guardar
    $campos = array(
        'enlace_behance',
        'texto_boton_superior',
        'icono_boton_superior',
        'titulo_seccion_1',
        'contenido_seccion_1',
        'imagen_seccion_1',
        'titulo_seccion_2',
        'contenido_seccion_2',
        'imagen_seccion_2',
        'titulo_seccion_3',
        'contenido_seccion_3',
        'imagen_seccion_3',
        'titulo_seccion_4',
        'contenido_seccion_4',
        'imagen_seccion_4',
        'titulo_seccion_5',
        'contenido_seccion_5',
        'imagen_seccion_5',
        'titulo_seccion_6',
        'contenido_seccion_6',
        'imagen_seccion_6',
        'titulo_presentacion',
        'contenido_presentacion',
        'imagen_presentacion',
        'texto_boton_contacto',
        'enlace_boton_contacto'
    );

    // Guardar cada campo
    foreach ($campos as $campo) {
        if (isset($_POST[$campo])) {
            update_post_meta($post_id, $campo, sanitize_text_field($_POST[$campo]));
        }
    }

    // Campos de contenido con formato HTML
    $campos_html = array(
        'contenido_seccion_1',
        'contenido_seccion_2',
        'contenido_seccion_3',
        'contenido_seccion_4',
        'contenido_seccion_5',
        'contenido_seccion_6',
        'contenido_presentacion'
    );

    // Guardar campos HTML
    foreach ($campos_html as $campo) {
        if (isset($_POST[$campo])) {
            update_post_meta($post_id, $campo, wp_kses_post($_POST[$campo]));
        }
    }
}
add_action('save_post', 'guardar_datos_proyecto');
