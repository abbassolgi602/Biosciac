<?php

$pages = get_pages(array(
    'meta_key' => '_wp_page_template',
    'meta_value' => 'archive.php'
));
$page_id=0;
foreach($pages as $page){
    $page_id = $page->ID;
}

get_header(); ?>
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
		<div class="box-site p-3">
	
			<div class="error-404"> 
				<div class="tit-error-404">404</div>
				<div class="subtit-error-404">صفحه مورد نظر پیدا نشد</div>
				<div class="my-3">
					<a href="<?php echo get_home_url(); ?>" class="btn">صفحه اصلی</a>
				</div>
			</div>

		</div>
	</div>
</div>
	
	
 
<?php get_footer(); ?>