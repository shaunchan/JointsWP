<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/responsive-navigation/
 */
?>

<div class="top-bar" id="main-menu" style="background-color: #13CFC3">
	<div class="top-bar-left" >
		<ul class="menu" style="background-color: #13CFC3">
			<li><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?> Logo</a></li>
		</ul>
	</div>
	<div class="top-bar-right">
		<?php joints_top_nav(); ?>
	</div>
</div>