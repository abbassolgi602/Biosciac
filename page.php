<?php 

get_header(); 
get_template_part('template-part/pages_header');
?>

<main>


<div class="container-fluid px-md-5 px-2">
	<div class="the-content col-12 px-md-5 px-0 my-5">
		<?php the_content(); ?>
	</div>
</div>



<?php get_footer(); ?>