<?php 

/* Template Name: Contact us */

acf_form_head();

get_header(); ?>

<?php get_template_part('template-part/pages_header');?>


	<div class="container-fluid px-md-5 px-2">
    	<div class="col-12 px-md-5 px-0">
			<div class="box-site p-3">
				<div class="contact-top">
					<div class="contact-info-map">
						<?php echo '<img src="'.get_field('img_map_cantact')['url'].'" width="'.get_field('img_map_cantact' )['width'].'" height="'.get_field('img_map_cantact' )['height'].'" alt="'.get_field('img_map_cantact')['alt'].'">'; ?>
						<p><?php echo get_field('address_map'); ?></p>
					</div>
					<div class="contact-info-lists">
						<h2>با ما در ارتباط باشید</h2>
						<?php 
							if( have_rows('contact_page_item_1') ) {
								while ( have_rows('contact_page_item_1') ) { the_row(); ?>
									<div class="contact-info-list">
										<div class="contact-info-list-detail">
											<span><?php echo get_sub_field('tit_contact_page_item_1'); ?></span>
											<p><?php echo get_sub_field('val_contact_page_item'); ?></p>
										</div>
									</div>
								<?php }
							}
						?>
					</div>
				</div>
				<div class="contact-mid">
					<div class="footer-info-social">
						<p>ما را در شبکه‌های اجتماعی دنبال کنید</p>
						<div class="social-media">
							<?php
								if( have_rows('footer_social_repeater','options') ){
									while ( have_rows('footer_social_repeater','options') ) { the_row(); ?>
										<a href="<?php the_sub_field('footer_social_repeater_link','options'); ?>">
											<?php the_sub_field('footer_social_repeater_icon','options'); ?>
										</a>
								<?php }
							} ?>
						</div>
					</div>
				</div>
				<div class="contact-down">

					<div class="box-form-contact">

						<div class="title-section">
							<div class="site-titles">
								<?php the_field('contact_title'); ?>
							</div>
							<span class="line-dash-between"></span>
						</div>
						<div class="contact-form col-12 px-0">
							<form enctype="multipart/form-data" action="" method="POST">
								<label for="content_contact"><strong>متن پیام</strong> (الزامی)</label>
								<textarea id="content_contact" name="content_contact"></textarea>
								<div class="d-flex flex-column flex-lg-row justify-content-between align-item-center">
									<div class="">
										<label for="title_contact"><strong>عنوان</strong>(الزامی)</label>
										<input type="text" id="title_contact" name="title_contact">
									</div>
									<div class="">
										<label for="mail_contact"><strong>آدرس ایمیل</strong></label>
										<input type="text" id="mail_contact" name="mail_contact">
									</div>
									<div class="">
										<label for="name_contact"><strong>نام شما </strong></label>
										<input type="text" id="name_contact" name="name_contact">
									</div>
								</div>
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
	</div>


<?php get_footer(); ?>