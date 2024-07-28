<?php

/**

 * The template for displaying comments

 *

 * The area of the page that contains both current comments

 * and the comment form.

 *

 * @package WordPress

 * @subpackage Twenty_Fifteen

 * @since Twenty Fifteen 1.0

 */



/*

 * If the current post is protected by a password and

 * the visitor has not yet entered the password we will

 * return early without loading the comments.

 */

if ( post_password_required() ) {

	return;

}

?>



<?php if ( have_comments() ) : ?>

	<div class="comment-part">



	    <div class="comment-title">

	        <h4>دیدگاه ( <?php comments_number( '0', '1', '%' ); ?> ) </h4>

	    </div>



		<ol class="commentlist">

			<?php wp_list_comments(); ?>

		</ol>

	

	<?php if ( ! empty($comments_by_type['pings']) ) : ?>

		<h3 id="pings">Pingbacks</h3>

		

		<ol class="pinglist">

			<?php wp_list_comments('type=pings&callback=list_pings'); ?>

		</ol>

	<?php endif; ?>



	<?php

		// If comments are closed and there are comments, let's leave a little note, shall we?

		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :

	?>

		<p class="no-comments">نظرات بسته شده است..</p>

	<?php endif; ?>



	</div><!-- .comments-area -->

<?php endif; // have_comments() ?>



<?php

 			// Comments

			$fields =  array(

 

  'author' =>

    '<div class="comment-form-wrap"><div class="form-group floatRight"><label for="author">نام شما ' .

    ( $req ? '<span class="required">(الزامی)</span></label>' : '</label>' ) .

    '<input id="author" class="form-control" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .

    '" /></div>',

 

  'email' =>

    '<div class="form-group floatRight"><label for="email">آدرس ایمیل ' .

    ( $req ? '<span class="required">(الزامی)</span></label>' : '</label>' ) .

    '<input id="email" name="email" class="form-control" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .

    '" /><p class="dont-share-email">نشانی ایمیل شما منتشر نخواهد شد</p></div></div>',

 
);

    $comments_args = array(

 

        // change "Leave a Reply" to "Comment"

        //'title_reply'=>'دیدگاه ها',

		 'fields' => apply_filters( 'comment_form_default_fields', $fields ),

        'comment_field' =>  '<div class="textarea-comment"><label for="comment">دیدگاه شما<span class="required">(الزامی)</span></label><textarea id="comment" name="comment" class="form-control"  rows="8" aria-required="true"></textarea></div>',

			       

             'comment_notes_after' => ' ');

			 comment_form($comments_args); 

?>