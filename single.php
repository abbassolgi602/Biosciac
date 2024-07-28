<?php 

get_header(); 
get_template_part('template-part/pages_header');

if(have_posts()) {
	while(have_posts()) {
		the_post();
?>



<div class="container-fluid px-md-5 px-2">
	<div class="single-archive col-12 px-md-5 px-0">
		<div class="col-lg-5 col-12">
			<?php 
				if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				}
			?>
		</div>
		<div class="col-lg-7 col-12 pr-4">
			<h2><?php the_title(); ?></h2>
			<div class="single-expert"><?php the_excerpt(); ?></div>
			<div class="single-details">
				<div class="single-detail single-date"><?php the_date(); ?></div>
				<div class="single-detail single-date"><?php the_field('reading_time'); ?></div>
			</div>
		</div>
	</div>
	<div class="the-content col-12 px-md-5 px-0 my-5">
		<?php the_content(); ?>
		<div class="tagss">
			<?php 
				$categories = get_categories();
				foreach($categories as $category) {
					echo '<a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
				}
			?>
		</div>
	</div>
	<div id="comment_single" class="col-12 px-md-5 px-0 my-5">
		<div class="comments-single">
			<?php
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
		</div>
	</div>
</div>



<?php }} get_footer(); ?>