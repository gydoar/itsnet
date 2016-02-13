<footer class="container footer">
	<div class="ten columns offset-by-one">
		<hr>
	</div>
	<div class="eight columns offset-by-two">
		<div class="three columns">
			<a href=""><img src="<?php bloginfo('template_url' ); ?>/library/img/logo-footer.jpg" alt=""></a>
		</div>	
		<div class="nine columns contact__footer">
			<p><?php echo of_get_option('direccion'); ?></p>
			<p>Teléfono: <?php echo of_get_option('telefono'); ?></p>
			<p>E-mail: <a href="<?php echo of_get_option('email'); ?>"><?php echo of_get_option('email'); ?></a></p>
		</div>
	</div>
</footer>
<div class="sombra__footer"></div>
<div class="copyright container">
	<div class="six columns left">
		<p><a href=""><?php bloginfo('name' ); ?> <?php the_time('Y') ?></a> TODOS LOS DERECHOS RESERVADOS</p>
	</div>
	<div class="six columns right">
		<p>DISEÑADO POR: <a target="new" href="http://www.colorway.cl/">COLORWAY</a></p>
	</div>
</div>


<!-- script -->

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="http://code.jquery.com/ui/1.9.1/jquery-ui.js"></script>
<script src="<?php bloginfo('template_url' ); ?>/library/js/modernizr-custom-min.js"></script>
<script src="<?php bloginfo('template_url' ); ?>/library/js/jquery.meanmenu.js"></script>
<script src="<?php bloginfo('template_url' ); ?>/library/js/vertical-tabs.js"></script>
<script src="<?php bloginfo('template_url' ); ?>/library/js/easyResponsiveTabs.js"></script>



<script>
	jQuery(document).ready(function () {
	    jQuery('header nav').meanmenu();
	});
</script>


<!--Plug-in Initialisation-->
	<script type="text/javascript">
    $(document).ready(function() {
        //Horizontal Tab
        $('#parentHorizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });

        // Child Tab
        $('#ChildVerticalTab_1').easyResponsiveTabs({
            type: 'vertical',
            width: 'auto',
            fit: true,
            tabidentify: 'ver_1', // The tab groups identifier
            activetab_bg: '#fff', // background color for active tabs in this group
            inactive_bg: '#F5F5F5', // background color for inactive tabs in this group
            active_border_color: '#c1c1c1', // border color for active tabs heads in this group
            active_content_border_color: '#5AB1D0' // border color for active tabs contect in this group so that it matches the tab head border
        });

        //Vertical Tab
        $('#parentVerticalTab').easyResponsiveTabs({
            type: 'vertical', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_1', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo2');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });


         //Vertical Tab 2
        $('#parentVerticalTab-1').easyResponsiveTabs({
            type: 'vertical', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_2', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo2');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });

         //Vertical Tab 2
        $('#parentVerticalTab-2').easyResponsiveTabs({
            type: 'vertical', //Types: default, vertical, accordion
            width: 'auto', //auto or any width like 600px
            fit: true, // 100% fit in a container
            closed: 'accordion', // Start closed if in accordion view
            tabidentify: 'hor_3', // The tab groups identifier
            activate: function(event) { // Callback function if tab is switched
                var $tab = $(this);
                var $info = $('#nested-tabInfo2');
                var $name = $('span', $info);
                $name.text($tab.text());
                $info.show();
            }
        });
    });
</script>
<!--/ script -->

<!-- Scripts Adiconales -->

	<!-- Menu responsive -->

	<!--/ Menu responsive -->

<!--/ Scripts Adiconales -->

<?php wp_footer(); ?>

</body>
</html>