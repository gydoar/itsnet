<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 */
function optionsframework_option_name() {
	// Change this to use your theme slug
	return 'options-framework-theme';
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 * If you are making your theme translatable, you should replace 'theme-textdomain'
 * with the actual text domain for your theme.  Read more:
 * http://codex.wordpress.org/Function_Reference/load_theme_textdomain
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __( 'One', 'theme-textdomain' ),
		'two' => __( 'Two', 'theme-textdomain' ),
		'three' => __( 'Three', 'theme-textdomain' ),
		'four' => __( 'Four', 'theme-textdomain' ),
		'five' => __( 'Five', 'theme-textdomain' )
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __( 'French Toast', 'theme-textdomain' ),
		'two' => __( 'Pancake', 'theme-textdomain' ),
		'three' => __( 'Omelette', 'theme-textdomain' ),
		'four' => __( 'Crepe', 'theme-textdomain' ),
		'five' => __( 'Waffle', 'theme-textdomain' )
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => false
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}


	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages( 'sort_column=post_parent,menu_order' );
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/images/';

	$options = array();

	$options[] = array(
		'name' => __( 'TEXTO CENTRAL', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Titulo texto central', 'theme-textdomain' ),
		'desc' => __( 'Escriba aqui el titulo del texto', 'theme-textdomain' ),
		'id' => 'titulo_central',
		'std' => 'IT as a Service and NETwork',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Texto central', 'theme-textdomain' ),
		'desc' => __( 'Escriba aqui el texto central', 'theme-textdomain' ),
		'id' => 'texto_central',
		'std' => 'Cuando requiera de servicios TI, somos una real alternativa para ser su partner tecnológico, pudiendo asesorarlo permanentemente y trabajando a su lado en el diseño e implementación de nuevos proyectos, así como en el rediseño de los proyectos actuales.',
		'type' => 'textarea'
	);

	$options[] = array(
		'name' => __( 'SERVICIOS', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Titulo servicio 1', 'theme-textdomain' ),
		'desc' => __( 'Escriba aqui el titulo del servicio 1', 'theme-textdomain' ),
		'id' => 'titulo_servicio_1',
		'std' => 'Servidores',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Texto servicio 1', 'theme-textdomain' ),
		'desc' => __( 'Escriba aqui texto del servicio 1', 'theme-textdomain' ),
		'id' => 'texto_servicio_1',
		'std' => 'Sin demoras, puede crear un servidor virtual, cargar sus aplicaciones y comenzar a utilizarlo.',
		'type' => 'textarea'
	);

	// Servicio 2

	$options[] = array(
		'name' => __( 'Titulo servicio 2', 'theme-textdomain' ),
		'desc' => __( 'Escriba aqui el titulo del servicio 2', 'theme-textdomain' ),
		'id' => 'titulo_servicio_2',
		'std' => 'Segudidad',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Texto servicio 2', 'theme-textdomain' ),
		'desc' => __( 'Escriba aqui texto del servicio 2', 'theme-textdomain' ),
		'id' => 'texto_servicio_2',
		'std' => 'Complementando los servicios de infraestructura, ofrecemos el arriendo y configuración de firewall...',
		'type' => 'textarea'
	);

	// Servicio 3

	$options[] = array(
		'name' => __( 'Titulo servicio 3', 'theme-textdomain' ),
		'desc' => __( 'Escriba aqui el titulo del servicio 3', 'theme-textdomain' ),
		'id' => 'titulo_servicio_3',
		'std' => 'Respaldos',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Texto servicio 3', 'theme-textdomain' ),
		'desc' => __( 'Escriba aqui texto del servicio 3', 'theme-textdomain' ),
		'id' => 'texto_servicio_3',
		'std' => 'Para el control de los respaldos y operación de ellos, utilizamos las herramientas Symantec Backup Exec y Net Backup.',
		'type' => 'textarea'
	);

	// Servicio 4

	$options[] = array(
		'name' => __( 'Titulo servicio 4', 'theme-textdomain' ),
		'desc' => __( 'Escriba aqui el titulo del servicio 4', 'theme-textdomain' ),
		'id' => 'titulo_servicio_4',
		'std' => 'Conectividad',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Texto servicio 4', 'theme-textdomain' ),
		'desc' => __( 'Escriba aqui texto del servicio 4', 'theme-textdomain' ),
		'id' => 'texto_servicio_4',
		'std' => 'Podemos proveer y administrar enlaces de comunicaciones entre la dirección del cliente y el datacenter.',
		'type' => 'textarea'
	);	

	//Servicios destacados 1

	$options[] = array(
		'name' => __( 'SERVICIOS PRINCIPALES', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Imagen servicio destacado 1', 'theme-textdomain' ),
		'desc' => __( 'Suba la imagen del servicio 1', 'theme-textdomain' ),
		'id' => 'imagen_servicio_destacado_1',
		'std' => '',
		'type' => 'upload'
	);
	$options[] = array(
		'name' => __( 'Titulo servicio destacado 1', 'theme-textdomain' ),
		'desc' => __( 'Escriba el titulo del servicio destacado 1', 'theme-textdomain' ),
		'id' => 'titulo_servicio_destacado_1',
		'std' => 'Datacenter',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Texto servicio destacado 1', 'theme-textdomain' ),
		'desc' => __( 'Escriba el texto del servicio destacado 1', 'theme-textdomain' ),
		'id' => 'texto_servicio_destacado_1',
		'std' => 'Tenemos espacio para sus servidores a través de nuestro servicio Co-location (Housing + Internet) asociado a servidores físicos.',
		'type' => 'textarea'
	);

	//Servico destacado 2
	$options[] = array(
		'name' => __( 'Imagen servicio destacado 2', 'theme-textdomain' ),
		'desc' => __( 'Suba la imagen del servicio 2', 'theme-textdomain' ),
		'id' => 'imagen_servicio_destacado_2',
		'std' => '',
		'type' => 'upload'
	);
	$options[] = array(
		'name' => __( 'Titulo servicio destacado 2', 'theme-textdomain' ),
		'desc' => __( 'Escriba el titulo del servicio destacado 2', 'theme-textdomain' ),
		'id' => 'titulo_servicio_destacado_2',
		'std' => 'Servicio de plataforma para Ti',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Texto servicio destacado 2', 'theme-textdomain' ),
		'desc' => __( 'Escriba el texto del servicio destacado 2', 'theme-textdomain' ),
		'id' => 'texto_servicio_destacado_2',
		'std' => 'ITSNET puede prestar servicios generales TI directamente sobre infraestructura ubicada en las instalaciones del cliente o sobre infraestructura de ITSNET alojada en datacenter.',
		'type' => 'textarea'
	);

	//Servico destacado 3
	$options[] = array(
		'name' => __( 'Imagen servicio destacado 3', 'theme-textdomain' ),
		'desc' => __( 'Suba la imagen del servicio 3', 'theme-textdomain' ),
		'id' => 'imagen_servicio_destacado_3',
		'std' => '',
		'type' => 'upload'
	);
	$options[] = array(
		'name' => __( 'Titulo servicio destacado 3', 'theme-textdomain' ),
		'desc' => __( 'Escriba el titulo del servicio destacado 3', 'theme-textdomain' ),
		'id' => 'titulo_servicio_destacado_3',
		'std' => 'Venta de Hardware y de Software',
		'type' => 'text'
	);

	$options[] = array(
		'name' => __( 'Texto servicio destacado 3', 'theme-textdomain' ),
		'desc' => __( 'Escriba el texto del servicio destacado 3', 'theme-textdomain' ),
		'id' => 'texto_servicio_destacado_3',
		'std' => 'Al estar asociados con importantes fabricantes y directamente con los mayoristas, podemos asesorar, evaluar y cotizar hardware.',
		'type' => 'textarea'
	);

	//Clientes
	$options[] = array(
		'name' => __( 'CLIENTES', 'theme-textdomain' ),
		'type' => 'heading'
	);
	$options[] = array(
		'name' => __( 'Imagen cliente 1', 'theme-textdomain' ),
		'desc' => __( 'Suba la imagen del cliente 1', 'theme-textdomain' ),
		'id' => 'imagen_cliente_1',
		'std' => '',
		'type' => 'upload'
	);
	$options[] = array(
		'name' => __( 'Imagen cliente 2', 'theme-textdomain' ),
		'desc' => __( 'Suba la imagen del cliente 2', 'theme-textdomain' ),
		'id' => 'imagen_cliente_2',
		'std' => '',
		'type' => 'upload'
	);
	$options[] = array(
		'name' => __( 'Imagen cliente 3', 'theme-textdomain' ),
		'desc' => __( 'Suba la imagen del cliente 3', 'theme-textdomain' ),
		'id' => 'imagen_cliente_3',
		'std' => '',
		'type' => 'upload'
	);
	$options[] = array(
		'name' => __( 'Imagen cliente 4', 'theme-textdomain' ),
		'desc' => __( 'Suba la imagen del cliente 4', 'theme-textdomain' ),
		'id' => 'imagen_cliente_4',
		'std' => '',
		'type' => 'upload'
	);
	$options[] = array(
		'name' => __( 'Imagen cliente 5', 'theme-textdomain' ),
		'desc' => __( 'Suba la imagen del cliente 5', 'theme-textdomain' ),
		'id' => 'imagen_cliente_5',
		'std' => '',
		'type' => 'upload'
	);
	$options[] = array(
		'name' => __( 'Imagen cliente 6', 'theme-textdomain' ),
		'desc' => __( 'Suba la imagen del cliente 6', 'theme-textdomain' ),
		'id' => 'imagen_cliente_6',
		'std' => '',
		'type' => 'upload'
	);
	$options[] = array(
		'name' => __( 'Imagen cliente 7', 'theme-textdomain' ),
		'desc' => __( 'Suba la imagen del cliente 7', 'theme-textdomain' ),
		'id' => 'imagen_cliente_7',
		'std' => '',
		'type' => 'upload'
	);
	$options[] = array(
		'name' => __( 'Imagen cliente 8', 'theme-textdomain' ),
		'desc' => __( 'Suba la imagen del cliente 8', 'theme-textdomain' ),
		'id' => 'imagen_cliente_8',
		'std' => '',
		'type' => 'upload'
	);
	$options[] = array(
		'name' => __( 'Imagen cliente 9', 'theme-textdomain' ),
		'desc' => __( 'Suba la imagen del cliente 9', 'theme-textdomain' ),
		'id' => 'imagen_cliente_9',
		'std' => '',
		'type' => 'upload'
	);
	//Contacto
	$options[] = array(
		'name' => __( 'CONTACTO', 'theme-textdomain' ),
		'type' => 'heading'
	);

	$options[] = array(
		'name' => __( 'Dirección', 'theme-textdomain' ),
		'desc' => __( 'Dirección', 'theme-textdomain' ),
		'id' => 'direccion',
		'std' => 'Oficina central: Huelen 154, oficina 12. Providencia, Santiago',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Teléfono', 'theme-textdomain' ),
		'desc' => __( 'Teléfono', 'theme-textdomain' ),
		'id' => 'telefono',
		'std' => '02 2 8873100',
		'type' => 'text'
	);
	$options[] = array(
		'name' => __( 'Email', 'theme-textdomain' ),
		'desc' => __( 'Email', 'theme-textdomain' ),
		'id' => 'email',
		'std' => 'info@itsnet.cl',
		'type' => 'text'
	);
	return $options;
}