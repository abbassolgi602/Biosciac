<div class="post-item ">
	<div class="post-item-thumbnail">
		<a href="<?php echo get_the_permalink(); ?>">
	 		<?php 
				if ( has_post_thumbnail() ) {
					the_post_thumbnail('medium');
				}
			?>
			<h2><?php the_title(); ?></h2>
		</a>
	</div>
</div>