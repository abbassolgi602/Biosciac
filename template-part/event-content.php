<div class="event-item col-lg-4 col-md-6 col-12">
	<div class="event-item-thumbnail">
		<a href="<?php echo get_the_permalink(); ?>">
	 		<?php 
				if ( has_post_thumbnail() ) {
					the_post_thumbnail('medium');
				}
			?>
		</a>
		<a href="<?php echo get_the_permalink(); ?>">
			<h2><?php the_title(); ?></h2>
		</a> 
		<p class="event-date"><?php the_field('date_event'); ?></p>
	</div>
</div>