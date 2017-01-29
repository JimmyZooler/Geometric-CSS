<!-- By default, this menu will use off-canvas for small
	 and a topbar for medium-up -->

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left">
		<ul class="menu">
			<li><a id="logo-name" href="<?php echo home_url(); ?>"><img id="logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/geometric_trim_white.png"><?php bloginfo('name'); ?></a></li>
		</ul>
            <a style="display:none;" href="<?php echo home_url(); ?>"></a>
	</div>
	<div style="display: none;"class="top-bar-right show-for-medium">
		<?php joints_top_nav(); ?>	
	</div>
	<div class="top-bar-right float-right show-for-small">
		<ul class="menu menu-button-wrap">
			<li class="menu-button"><button class="menu-icon" type="button" data-toggle="off-canvas">Menu</button></li> 
			<!--<li><a data-toggle="off-canvas"><?php _e( 'Menu', 'jointswp' ); ?></a></li>-->
		</ul>
	</div>
</div>