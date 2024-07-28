

			<div id="Controls" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
					<?php 
					$i = 0;
						if( have_rows('slider_home') ){
							while ( have_rows('slider_home') ) { the_row(); $image = get_sub_field('slide_image');?>
							<?php
								if($i==0) {
									echo '<div class="carousel-item active">';
								} else {
									echo '<div class="carousel-item">';
								}
							?>
									<div class="home-slide mb-100">
										<img src="<?php echo $image['url']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php echo $image['alt']; ?>">
										<div class="content-slide">
											<div class="content-slide-title">
												<?php the_sub_field('slide_text'); ?>
											</div>
											<?php if(get_sub_field('slide_btn_enable') == true) { ?>
												<div class="btn-box content-slide-btn border1">
													<p><?php the_sub_field('slide_btn_text'); ?></p>
													<a class="btn" href="<?php the_sub_field('slide_btn_link'); ?>"><?php the_sub_field('slide_btn_title'); ?></a>
												</div>
											<?php } ?>
										</div>
									</div>  
								</div>
							<?php $i++; }
						}
					?>
				</div>
				<a class="carousel-control-prev" href="#Controls" role="button" data-slide="prev">
					<svg xmlns="http://www.w3.org/2000/svg" width="8.079" height="12.516" viewBox="0 0 8.079 12.516"><path id="Union_58" data-name="Union 58" d="M4.565,6.359,0,1.721,1.693,0,6.258,4.639,10.823,0l1.693,1.721L7.951,6.359,6.258,8.079Z" transform="translate(8.079) rotate(90)" fill="#fff"></path></svg>
				</a>
				<a class="carousel-control-next" href="#Controls" role="button" data-slide="next">
					<svg xmlns="http://www.w3.org/2000/svg" width="8.079" height="12.516" viewBox="0 0 8.079 12.516"><path id="Union_58" data-name="Union 58" d="M4.565,6.359,0,1.721,1.693,0,6.258,4.639,10.823,0l1.693,1.721L7.951,6.359,6.258,8.079Z" transform="translate(8.079) rotate(90)" fill="#fff"></path></svg>
				</a>
			</div>