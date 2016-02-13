<?php get_header(); ?>

<?php masterslider(1); ?>

<div class="container home__dest">
	<h2><?php echo of_get_option('titulo_central'); ?></h2>
	<p><?php echo of_get_option('texto_central'); ?></p>
</div>

<!-- Servicios Home -->
<div class="servicios__home center">
	<img class="logo__servicios" src="<?php bloginfo('template_url' ); ?>/library/img/logo-big.png" alt="">

	<h3>SERVICIOS</h3>

	<div class="container">
		<div class="ten columns offset-by-one">
			<div class="three columns">
				<div class="caja__icon__servicios__home">
					<img src="<?php bloginfo('template_url' ); ?>/library/img/icon-lupa.png" alt="">
				</div>
				<h4><?php echo of_get_option('titulo_servicio_1'); ?></h4>
				<p><?php echo of_get_option('texto_servicio_1'); ?></p>
			</div>

			<div class="three columns">
				<div class="caja__icon__servicios__home">
					<img src="<?php bloginfo('template_url' ); ?>/library/img/icon-lapiz.png" alt="">
				</div>
				<h4><?php echo of_get_option('titulo_servicio_2'); ?></h4>
				<p><?php echo of_get_option('texto_servicio_2'); ?></p>
			</div>

			<div class="three columns">
				<div class="caja__icon__servicios__home">
					<img src="<?php bloginfo('template_url' ); ?>/library/img/icon-engrane.png" alt="">
				</div>
				<h4><?php echo of_get_option('titulo_servicio_3'); ?></h4>
				<p><?php echo of_get_option('texto_servicio_3'); ?></p>
			</div>

			<div class="three columns">
				<div class="caja__icon__servicios__home">
					<img src="<?php bloginfo('template_url' ); ?>/library/img/icon-cafe.png" alt="">
				</div>
				<h4><?php echo of_get_option('titulo_servicio_4'); ?></h4>
				<p><?php echo of_get_option('texto_servicio_4'); ?></p>
			</div>
		</div>
	</div>

	<!-- Destacados -->
	<div class="container-2 destacados__home">
		<div class="destacados-1">
			<img src="<?php echo of_get_option('imagen_servicio_destacado_1'); ?>" alt="">
			<h3><?php echo of_get_option('titulo_servicio_destacado_1'); ?></h3>
			<p><?php echo of_get_option('texto_servicio_destacado_1'); ?></p>
		</div>
		<div class="destacados-central">
			<img src="<?php echo of_get_option('imagen_servicio_destacado_2'); ?>" alt="">
			<h3><?php echo of_get_option('titulo_servicio_destacado_2'); ?></h3>
			<p><?php echo of_get_option('texto_servicio_destacado_2'); ?></p>
		</div>
		<div class="destacados-2">
			<img src="<?php echo of_get_option('imagen_servicio_destacado_3'); ?>" alt="">
			<h3><?php echo of_get_option('titulo_servicio_destacado_3'); ?></h3>
			<p><?php echo of_get_option('texto_servicio_destacado_2'); ?></p>
		</div>
	</div>
</div>

<!-- Fin de servicios -->

<div class="logos__clientes__home container center">
	<div class="row">
		<h3>Clientes</h3>
		<hr>
		<ul class="list__clientes">
			<li><a href=""><img width="200px" src="<?php echo of_get_option('imagen_cliente_1'); ?>" alt=""></a></li>
			<li><a href=""><img width="200px" src="<?php echo of_get_option('imagen_cliente_2'); ?>" alt=""></a></li>
			<li><a href=""><img width="200px" src="<?php echo of_get_option('imagen_cliente_3'); ?>" alt=""></a></li>
			<li><a href=""><img width="200px" src="<?php echo of_get_option('imagen_cliente_4'); ?>" alt=""></a></li>
		</ul>
		<ul class="list__clientes">
			<li><a href=""><img width="200px" src="<?php echo of_get_option('imagen_cliente_5'); ?>" alt=""></a></li>
			<li><a href=""><img width="200px" src="<?php echo of_get_option('imagen_cliente_6'); ?>" alt=""></a></li>
			<li><a href=""><img width="200px" src="<?php echo of_get_option('imagen_cliente_7'); ?>" alt=""></a></li>
			<li><a href=""><img width="200px" src="<?php echo of_get_option('imagen_cliente_8'); ?>" alt=""></a></li>
		</ul>
		
		<ul class="list__clientes">
			<li><a href=""><img src="<?php echo of_get_option('imagen_cliente_9'); ?>" alt=""></a></li>
		</ul>
	</div>
</div>

<?php get_footer(); ?>