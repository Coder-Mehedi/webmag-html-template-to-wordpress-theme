<?php 

/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
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

<div id="comments" class="<?php echo comments_open() ? 'comments-area' : 'comments-area comments-closed'; ?>">
  <div class="<?php echo $discussion->responses > 0 ? 'comments-title-wrap' : 'comments-title-wrap no-responses'; ?>">
    <h2 class="comments-title">
    <?php
    if ( comments_open() ) {
      if ( have_comments() ) {
        // _e( 'Join the Conversation', 'webmag_mehedi' );
      } else {
        // _e( 'Leave a comment', 'webmag_mehedi' );
      }
    } else {
      if ( '1' == $discussion->responses ) {
        /* translators: %s: post title */
        printf( _x( 'One reply on &ldquo;%s&rdquo;', 'comments title', 'webmag_mehedi' ), get_the_title() );
      } else {
        printf(
          /* translators: 1: number of comments, 2: post title */
          _nx(
            '%1$s reply on &ldquo;%2$s&rdquo;',
            '%1$s replies on &ldquo;%2$s&rdquo;',
            $discussion->responses,
            'comments title',
            'webmag_mehedi'
          ),
          number_format_i18n( $discussion->responses ),
          get_the_title()
        );
      }
    }
    ?>
    </h2><!-- .comments-title -->
    <?php
      // Only show discussion meta information when comments are open and available.
    if ( have_comments() && comments_open() ) {
      get_template_part( 'template-parts/post/discussion', 'meta' );
    }
    ?>
  </div><!-- .comments-title-flex -->
  <?php
  if ( have_comments() ) :

    // Show comment form at top if showing newest comments at the top.
   
    ?>
    <ol class="comment-list">
      <?php
      wp_list_comments(
        array(
          'short_ping'  => true,
          'style'       => 'ol',
        )
      );
      ?>
    </ol><!-- .comment-list -->
    <?php

    // Show comment navigation
    if ( have_comments() ) :
      $comments_text = __( 'Comments', 'webmag_mehedi' );
      the_comments_navigation();
    endif;

    // Show comment form at bottom if showing newest comments at the bottom.
    if ( comments_open() && 'asc' === strtolower( get_option( 'comment_order', 'asc' ) ) ) :
      ?>
      <?php
    endif;

    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() ) :
      ?>
      <p class="no-comments">
        <?php _e( 'Comments are closed.', 'webmag_mehedi' ); ?>
      </p>
      <?php
    endif;

  else :



  endif; // if have_comments();
  ?>
</div>


<?php
$aria_req = ($req ? "required='required'": '');
$args = array(
	'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
  'fields' => apply_filters( 'comment_form_default_fields', array(

    'author' =>
      '<p class="comment-form-author">' .
      '<label for="author">' . __( 'Name', 'domainreference' ) . '</label> ' .
      ( $req ? '<span class="required">*</span>' : '' ) .
      '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
      '" size="30"' . $aria_req . ' /></p>',

    'email' =>
      '<p class="comment-form-email"><label for="email">' . __( 'Email', 'domainreference' ) . '</label> ' .
      ( $req ? '<span class="required">*</span>' : '' ) .
      '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
      '" size="30"' . $aria_req . ' /></p>',

    'url' =>
      '<p class="comment-form-url"><label for="url">' .
      __( 'Website', 'domainreference' ) . '</label>' .
      '<input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) .
      '" size="30" /></p>'
    )

));
comment_form( $args );