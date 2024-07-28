<?php
get_header();

$pages = get_pages(array(
    'meta_key' => '_wp_page_template',
    'meta_value' => 'archive.php'
));
$page_id = 0;
foreach($pages as $page){
    $page_id = $page->ID;
}

$current_id = $wp_query->get_queried_object_id();
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : ( ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1 );
$arcterm = get_category( $current_id);
$total = $arcterm->count;

?>
<div class="pages-header" style="background: url(<?php echo get_field('pages_bg',$page_id)['url']; ?>) no-repeat; height: <?php echo get_field('pages_bg',$page_id)['height']; ?>px">
	<div class="pages-title">
		<?php the_field('pages_title',$page_id); ?>
		<?php 
			if ( function_exists('yoast_breadcrumb') ) {
				yoast_breadcrumb( '<ol class="breadcrumb" vocab="https://schema.org/" typeof="BreadcrumbList">','</ol>' );
			}
		?>
	</div>
</div>
<div class="container-fluid px-md-5 px-2">
	<div class="col-12 px-md-5 px-0">
		<div class="posts-archive">
			<?php
				$query = new WP_Query(array(
					'post_type'     => 'post',
					'paged' 	    => $paged,
					'cat' 			=> $current_id,
				));
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) { $query->the_post();
						get_template_part('template-part/post-content');
					}
					wp_pagenavi( array( 'query' => $query ) );
				}
			?>
		</div>
	</div>
</div>
<?php get_footer(); ?>