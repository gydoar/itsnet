<?php 
/*------------------------------------*\
    CONFIGURACIÓN DE NUESTRO BACKEND
\*------------------------------------*/

/*------------------------------------*\
    $CONTENIDO
\*------------------------------------*/
/**
 * AGREGANDO OPTIONS THEME FRAMEWORK
 * AGREGANDO FAVICON AL ADMINISTRADOR
 * INFORMACIÓN DE CONTACTO FOOTER
 * ACTIVAR BOTONES EN EDITOR DE TEXTO
 * AUTENTICACIÓN CON EMAIL
 * LOGO FORMULARIO AUTENTICACIÓN
 * LIMITAR MENU SI NO ES ADMIN
 * ELIMINAMOS ELEMENTOS DEL TOOLBAR DESDE WP 3.3
 * FORZAR ESCRITORIO A UNA COLUMNA
 * ELIMINAMOS METABOX DEL ESCRITORIO
 * WIDGET PARA EL ESCRITORIO
 * REMPLAZAR NOMBRES DEL MENU
 * ORDENAR EL MENU DE ADMINISTRACIÓN
 * MOVIENDO EL MENU
 * 
 */

/*------------------------------------*\
    AGREGANDO OPTIONS THEME FRAMEWORK
\*------------------------------------*/
define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/library/inc/' );
require_once dirname( __FILE__ ) . '/inc/options-framework.php';
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );


/*------------------------------------*\
    AGREGANDO FAVICON AL ADMINISTRADOR
\*------------------------------------*/
 function admin_head_example() {
    echo '<link rel="icon" type="image/png" href="' . get_bloginfo('template_directory') . '/library/img/admin-favicon.png" />';
}

add_action( 'admin_head', 'admin_head_example' );



/*------------------------------------*\
    ACTUALIZACIONES AUTO DE PLUGINS
\*------------------------------------*/
add_filter( 'auto_update_plugin', '__return_true' );


/*------------------------------------*\
    REMOVER LA VERSION DE WORDPRESS
\*------------------------------------*/
remove_action('wp_head', 'wp_generator');


/*------------------------------------*\
    DESACTIVAR MENSAJE DE ACTUALIZACION WP
\*------------------------------------*/
add_filter( 'auto_core_update_send_email', '__return_false' );