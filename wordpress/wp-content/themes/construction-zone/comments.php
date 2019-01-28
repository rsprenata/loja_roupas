<?php
/**
 * The template for displaying comments
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package WordPress
 * @subpackage construction-zone
 * @since construction-zone 1.0.6
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

<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h3 class="comments-title">
			<?php
				$comments_number = get_comments_number();
				printf(
						/* translators: 1: number of comments, 2: post title */
					_nx('<h3>%1$s Comment found','%1$s comments found</h3>',	$comments_number, 'comments title',	'construction-zone' ),
						number_format_i18n( $comments_number ),
						get_the_title()
					);
			?>
		</h3>

		<?php the_comments_navigation(); ?>

		<ol class="media wow fadeInUp">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 42,
					'callback' => 'construction_zone_comments',
				) );
			?>
		</ol><!-- .comment-list -->

		<?php the_comments_navigation(); ?>

	<?php endif; // Check for have_comments(). ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'construction-zone' ); ?></p>
	<?php endif; ?>
	
	<?php 
	    $req = get_option( 'require_name_email' );
	    $aria_req = ( $req ? " aria-required='true'" : '' );

		$comments_args = array(
	        // change the title of send button 
	        'label_submit'=> esc_html(__('Post Comments','construction-zone')),
	        // change the title of the reply section
	        'title_reply'=> esc_html(__('Leave a Comment','construction-zone')),
	        // redefine your own textarea (the comment body)
	        'comment_field' => 
				'<div class="col-sm-12">' .
					'<div class="form-group">' .
						'<textarea id="comment" class="textarea form-control" name="comment" placeholder="' . esc_attr__( 'Message*', 'construction-zone' ) . '" cols="20" rows="8" aria-required="true">' .
						'</textarea><br/>' .	
						'<div class="help-block with-errors"></div>' .
					'</div>' .
				'</div>',
				
	        'fields' => apply_filters( 'comment_form_default_fields', array(
			    'author' =>'' .
					 '<div class="col-sm-6">' .
						'<div class="form-group">' .
							'<input class="form-control" id="name" name="author" placeholder="'. esc_attr(__('Name*','construction-zone')) .'" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
							'" size="30"' . $aria_req . ' />' .
							'<div class="help-block with-errors"></div>' .
						'</div>' .
					'</div>', 

			    'email' =>'' .
			      '<div class="col-sm-6">' .
						'<div class="form-group">' .
							'<input class="form-control" id="email" name="email" placeholder="'. esc_attr(__('Email*','construction-zone')) .'" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
							'" size="30" />'.
							'<div class="help-block with-errors"></div>'.
						'</div>'.
					'</div>',
				)
		    ),
	    );
  
	comment_form($comments_args); ?> 

</div><!-- .comments-area -->
