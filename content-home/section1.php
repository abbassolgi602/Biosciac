<div class="home-section2 mt-100 mb-100 container-fluid px-md-5 px-2">
	<div class="col-12 col-lg-6 px-md-5 px-0">
		<div class="site-titles">
			<?php the_field('section2_title'); ?>
		</div>
		<p class="site-des"><?php the_field('section2_des'); ?></p>
		<?php if(get_field('section_btn_enable') == true) { ?>
			<div class="btn-box content-slide-btn border1">
				<p><?php the_field('section_btn_text'); ?></p>
				<a class="btn" href="<?php the_field('section_btn_link'); ?>"><?php the_field('section_btn_title'); ?></a>
			</div>
		<?php } ?>
	</div>
	<div class="col-12 col-lg-6 px-md-5 px-0">
		<?php if(get_field('section2_video_enable') == true) {
			echo '<video  class="section-image" loop poster="'.get_field('section2_video_cover')['url'].'" height="'.get_field('section2_video_cover')['height'].'" width="'.get_field('section2_video_cover')['width'].'">
				<source src="'.get_field('section2_video_address').'" type="video/mp4">
			</video>';	
		} else {
			echo '<img class="section-image" src="'.get_field('section2_video_address').'" alt="'.get_field('section_btn_title').'">';
		} ?>
	</div>
</div>  