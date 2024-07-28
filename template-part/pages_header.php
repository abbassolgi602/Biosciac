<div class="pages-header" style="background: url(<?php echo get_field('pages_bg')['url']; ?>) no-repeat; height: <?php echo get_field('pages_bg')['height']; ?>px">
	<div class="pages-title">
		<?php the_field('pages_title'); ?>
		<?php 
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<ol class="breadcrumb" vocab="https://schema.org/" typeof="BreadcrumbList">','</ol>' );
			}
		?>
	</div>
</div>