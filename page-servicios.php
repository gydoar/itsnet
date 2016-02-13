<?php get_header(); ?>

		
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
	<div class="header__page">
		<div class="container center">
			<h2><?php the_title(); ?></h2>
			<?php $meta = get_post_meta( get_the_ID(), 'subtitulo' );?>
			<p><?php echo $meta[0]; ?></p>
		</div>
			
	</div>

	<article class="page container">

	<?php the_content(); ?>
		
	        <!--Vertical Tab-->
	        <div id="parentVerticalTab">
	        	<ul class="resp-tabs-list hor_1">
	            	<p class="title-tab">DATACENTER</p>
	                <li>Servicio de Infraestructura</li>
	                <li>Servicio de Datacenter</li>
	                <li>Servicio de Monitorizacion</li>
	            </ul>
	            <div class="resp-tabs-container hor_1">
	                <div>
	                    <p>ITSNET cuenta con equipos con las debidas garantías de los fabricantes, dispuestos en un datacenter, para ofrecer diferentes servicios a sus clientes.</p>
	                    <div class="row">
	                    	<ul class="six columns">
		                    	<li>Fisica</li>
		                    	<li>Virtual</li>
		                    	<li>Alamacenamiento</li>
		                    	<li>Telecomunicaciones</li>
		                    </ul>
		                    <ul class="six columns">
		                    	<li>Conectividad</li>
		                    	<li>Respaldo</li>
		                    	<li>Seguridad</li>
		                    </ul>

	                    </div>
	                    
	                </div>
	                <div>
	                    <ul>
	                    	<li>Housing</li>
	                    	<li>Hosting</li>
	                    	<li>Manos remotas e inteligentes</li>
	                    </ul>
	                </div>
	                <div>
		                 <ul>
		                 	<li>NOC</li>
		                 	<li>SOC</li>
		                 </ul>
	                </div>
	        	</div>
	            
	        </div>
			<div class="espacio-tab"></div>
	        <!-- Tabs 2 -->
			
			<div id="parentVerticalTab-1">
	            <ul class="resp-tabs-list hor_2">
	            	<p class="title-tab">SERVICIOS DE PLATAFORMA TI</p>
	                <li>Administración de Plataforma</li>
	                <li>Servicios de Ingeniería</li>
	                <li>Servicio de Soporte</li>
	            </ul>
	            <div class="resp-tabs-container hor_2">
	                <div>
	                    <div class="row">
	                    	<ul class="six columns">
		                    	<li>Servidores</li>
		                    	<li>Respaldos</li>
		                    	<li>Telecomunicaciones</li>
		                    </ul>
		                    <ul class="six columns">
		                    	<li>Seguridad</li>
		                    	<li>Monitorización</li>
		                    	<li>Conectividad</li>
		                    </ul>

	                    </div>
	                    
	                </div>
	                <div>
	                    <ul>
	                    	<li>Proyectos</li>
	                    	<li>Implementaciones</li>
	                    	<li>Auditorías</li>
	                    	<li>Asesorías</li>
	                    </ul>
	                </div>
	                <div>
		                 <ul>
		                 	<li>Mesa de Ayuda</li>
		                 	<li>Outsourcing</li>
		                 	<li>Soporte de Terreno</li>
		                 </ul>
	                </div>
	            </div>
	        </div>
	         <!-- Tabs 3 -->
			
			<div id="parentVerticalTab-2">
	            <ul class="resp-tabs-list hor_3">
	            	<p class="title-tab">HARDWARE Y SOFTWARE</p>
	                <li>Hardware</li>
	                <li>Licenciamiento</li>
	            </ul>
	            <div class="resp-tabs-container hor_3">
	                <div>
	                	<ul>
	                		<li>HP</li>
	                		<li>DELL</li>
	                		<li>Fortinet</li>
	                		<li>Otros</li>
	                	</ul>   
	               	</div>
	                <div>
	                    <ul>
	                    	<li>Citrix</li>
	                    	<li>Microsoft</li>
	                    	<li>Panda</li>
	                    	<li>Symantec</li>
	                    	<li>Otros</li>
	                    </ul>
	                </div>
	            </div>
	        </div>


	<!--
		<div id="tabs">
			<div class="row">
				<p>DATACENTER</p>
			</div>
			<div class="row">
				<div class="two columns">
					<img src="<?php bloginfo('template_url' ); ?>/library/img/icon-datacenter-servicios.png" alt="">
				</div>
				<ul class="three columns titulo_servicios">
					<li><a href="#one">Servicio de Infraestructura</a></li>
					<li><a href="#two">Servicio de Datacenter</a></li>
					<li><a href="#three">Servicio de Monitorizacion</a></li>
				</ul>
				<div class="seven columns"id="one">
					<p>ITSNET cuenta con equipos con las debidas garantías de los fabricantes, dispuestos en un datacenter, para ofrecer diferentes servicios a sus clientes.</p>

				</div>
				<div id="two">Two Contents</div>
				<div id="three">Three Contents</div>
			</div>
		</div>
	-->

		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>

	</article>

<?php get_footer(); ?>