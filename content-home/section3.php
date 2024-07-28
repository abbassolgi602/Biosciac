<div class="home-section2 mt-100 mb-100 container-fluid px-md-5 px-2">
	<div class="col-12 col-lg-6 px-md-5 px-0">
		<?php if(get_field('section3_video_enable') == true) {
			echo '<video class="section-image" loop poster="'.get_field('section3_video_cover')['url'].'" height="'.get_field('section2_video_cover')['height'].'" width="'.get_field('section2_video_cover')['width'].'">
				<source src="'.get_field('section3_video_address').'" type="video/mp4">
			</video>';	
		} else {
			echo '<img class="section-image" src="'.get_field('section3_video_address').'" alt="'.get_field('section_btn_title').'">';
		} ?>
	</div>
	<div class="col-12 col-lg-6 px-md-5 px-0">
		<div class="site-titles">
			<?php the_field('section3_title'); ?>
		</div>
		<p class="site-des"><?php the_field('section3_des'); ?></p>
		<div class="repeater-list">
			<?php
				$i = 0;
				if( have_rows('section3_repeter') ){ while ( have_rows('section3_repeter') ) { the_row();
					if(get_sub_field('section3_repeter_link') != '') {
						echo '<a class="section3-repeter-item" href="'.get_sub_field('section3_repeter_link').'">
							<img src="'.get_sub_field('section3_repeter_imege')['url'].'" alt="'.get_sub_field('section3_repeter_imege')['url'].'" width="'.get_sub_field('section3_repeter_imege')['width'].'" height="'.get_sub_field('section3_repeter_imege')['height'].'">
							<p>'.get_sub_field('section3_repeter_title').'</p>
						</a>';
					} else {
						echo '<div class="section3-repeter-item">
							<img src="'.get_sub_field('section3_repeter_imege')['url'].'" alt="'.get_sub_field('section3_repeter_imege')['url'].'" width="'.get_sub_field('section3_repeter_imege')['width'].'" height="'.get_sub_field('section3_repeter_imege')['height'].'">
							<p>'.get_sub_field('section3_repeter_title').'</p>
						</div>';
					}
				} }
			?>
		</div>
	</div>
</div>