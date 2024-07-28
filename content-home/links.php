<div class="home-links mt-100 mb-100" style="background: url(<?php the_field('links_backgournd'); ?>);">
	<div class="container-fluid px-md-5 px-2">
		<div class="link-items col-12 px-md-5 px-0">
			<?php
				$i = 0;
				if( have_rows('links_repeter') ){
					while ( have_rows('links_repeter') ) { the_row();
						if($i%2 == 0) {
							echo '<div class="break"></div>';
						}
						if(get_sub_field('links_repeter_link') != '') {
							echo '<a class="link-item" href="'.get_sub_field('links_repeter_link').'">
								<p>'.get_sub_field('links_repeter_title').'</p>
								<svg xmlns="http://www.w3.org/2000/svg" width="8.079" height="12.516" viewBox="0 0 8.079 12.516"><path id="Union_58" data-name="Union 58" d="M4.565,6.359,0,1.721,1.693,0,6.258,4.639,10.823,0l1.693,1.721L7.951,6.359,6.258,8.079Z" transform="translate(8.079) rotate(90)" fill="#fff"/></svg>
								</a>';
								} else {
								echo '<div class="link-item">
									<p>'.get_sub_field('links_repeter_title').'</p>
									<svg xmlns="http://www.w3.org/2000/svg" width="8.079" height="12.516" viewBox="0 0 8.079 12.516"><path id="Union_58" data-name="Union 58" d="M4.565,6.359,0,1.721,1.693,0,6.258,4.639,10.823,0l1.693,1.721L7.951,6.359,6.258,8.079Z" transform="translate(8.079) rotate(90)" fill="#fff"/></svg>
							</div>';
						}
						$i++;
					}
				}
			?>
		</div>
	</div>  
</div>  