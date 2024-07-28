<div class="home-postss mt-100 mb-100" style="background: url(<?php the_field('posts_relation_background'); ?>);">
	<div class="container-fluid px-md-5 px-2">
		<div class="col-12 px-md-5 px-0">
			<div class="site-titles">
				<?php the_field('posts_title'); ?>
			</div>
		</div>
	</div>  
	<div class="container-fluid px-md-5 px-2">
		<div class="px-md-5 px-2 d-flex flex-column flex-lg-row">
			<div class="posts-relation1 col-12 col-lg-5">
				<?php
					$featured_posts = get_field('posts_relation1');
					if( $featured_posts ) {
						foreach( $featured_posts as $post ){ setup_postdata($post); ?>
							<a href="<?php the_permalink(); ?>" class="home-post-item">
								<?php 
									if ( has_post_thumbnail() ) {
										the_post_thumbnail('thumbnail');
									}
								?>
								<h2><?php the_title(); ?></h2>
								<span>جدید</span>
							</a>
						<?php } wp_reset_postdata();
					} 
				?>
			</div>  
			<div class="posts-relation2 col-12 col-lg-7">
				<?php
					$featured_posts = get_field('posts_relation2');
					if( $featured_posts ) {
						echo '<div class="owl-posts owl-carousel">';
							foreach( $featured_posts as $post ){ setup_postdata($post); ?>
								<a href="<?php the_permalink(); ?>" class="">
									<?php 
										if ( has_post_thumbnail() ) {
											the_post_thumbnail();
										}
									?>
									<h2><?php the_title(); ?></h2>
								</a>
							<?php } wp_reset_postdata();
						echo '</div>';
					} 
				?>
			</div> 
		</div>   	
	</div>   	
</div>  