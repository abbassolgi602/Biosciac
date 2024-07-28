<div class="home-contact mt-100 mb-100">
	<div class="container-fluid px-md-5 px-2">
		<div class="col-12 px-md-5 px-0">
			<div class="site-titles mb-4">
				<?php the_field('contact_title'); ?>
			</div>
			<div class="mb-4 d-flex flex-column flex-lg-row justify-content-between ">
				<div class="contact-repeater col-12 col-lg-6 px-0 pl-0 pl-lg-3">
					<?php
						$i = 0;
						if( have_rows('contact_repeter') ){
							while ( have_rows('contact_repeter') ) { the_row(); 
								if($i==0) {
									echo '
										<div class="panel panel-default collapsed">
											<div class="panel-heading accordion-toggle question-toggle">
												<h4 class="panel-title" data-toggle="collapse" href="#collapsefaq'.$i.'" aria-expanded="true">
													<div itemprop="name">'.get_sub_field('contact_repeter_title').'</div>
													<svg xmlns="http://www.w3.org/2000/svg" width="10.758" height="6.818" viewBox="0 0 10.758 6.818"><path id="Arrow" d="M5.379,6.817h0L3.923,5.366h0L0,1.452,1.455,0,5.379,3.914,9.3,0l1.455,1.452L6.514,5.685,5.379,6.818Z" fill="#9a9a9a"></path></svg>
												</h4>
											</div>
											<div id="collapsefaq'.$i.'" class="panel-collapse collapse show" style="">
												<div class="panel-body" itemprop="text"><p>'.get_sub_field('contact_repeter_des').'</p></div>
											</div>
										</div>
									';
								} else {
									echo '
										<div class="panel panel-default collapsed">
											<div class="panel-heading accordion-toggle question-toggle">
												<h4 class="panel-title collapsed" data-toggle="collapse" href="#collapsefaq'.$i.'">
													<div itemprop="name">'.get_sub_field('contact_repeter_title').'</div>
													<svg xmlns="http://www.w3.org/2000/svg" width="10.758" height="6.818" viewBox="0 0 10.758 6.818"><path id="Arrow" d="M5.379,6.817h0L3.923,5.366h0L0,1.452,1.455,0,5.379,3.914,9.3,0l1.455,1.452L6.514,5.685,5.379,6.818Z" fill="#9a9a9a"></path></svg>
												</h4>
											</div>
											<div id="collapsefaq'.$i.'" class="panel-collapse collapse" style="">
												<div class="panel-body" itemprop="text"><p>'.get_sub_field('contact_repeter_des').'</p></div>
											</div>
										</div>
									';
								}?>


								<?php 
								$i++;
							}
						}
					?>
				</div>  
				<div class="contact-form col-12 col-lg-6 px-0 pr-0 pr-lg-3">
					<form enctype="multipart/form-data" action="" method="POST">
						<label for="title_contact"><strong>عنوان</strong>(الزامی)</label>
						<input type="text" id="title_contact" name="title_contact">
						<label for="content_contact"><strong>متن پیام</strong> (الزامی)</label>
						<textarea id="content_contact" name="content_contact"></textarea>
						<label for="mail_contact"><strong>آدرس ایمیل</strong></label>
						<input type="text" id="mail_contact" name="mail_contact">
						<label for="name_contact"><strong>نام شما </strong></label>
						<input type="text" id="name_contact" name="name_contact">
						<input class="btn" type="submit" value="ارسال">
					</form>

					<?php

						
						if( $_POST['title_contact'] != '' ) {
							
							
							$my_post = array(
								'post_title'    => wp_strip_all_tags( $_POST['title_contact']),
								'post_status'   => 'draft',
								'post_type'     => 'contact',
								'post_content' => wp_strip_all_tags( $_POST['content_contact']),
							);
							$the_post_id = wp_insert_post( $my_post, true ); 
							update_field('contact_form_name', $_POST['name_contact'], $the_post_id);
							update_field('contact_form_mail', $_POST['mail_contact'], $the_post_id);
	
							// update_post_meta( $the_post_id, 'contact_product', wp_strip_all_tags( $_POST['contact_product']) );
							// update_field('force_contact', $force_contact_value, $the_post_id);
						}

					?>
				</div> 
			</div> 
		</div>
	</div>
</div>  