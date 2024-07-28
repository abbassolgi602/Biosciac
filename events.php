<?php
/* Template Name: Archive events */

get_header();

get_template_part('template-part/pages_header');
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : ( ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1 );
?>

<div class="container-fluid px-md-5 px-2">
	<div class="col-12 px-md-5 px-0">
		<div class="posts-archive">
			<?php
				$query = new WP_Query(array(
					'post_type'     => 'event',
					'paged' 	    => $paged,
				));
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) { $query->the_post();
						get_template_part('template-part/event-content');
					}
					wp_pagenavi( array( 'query' => $query ) );
				}
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>