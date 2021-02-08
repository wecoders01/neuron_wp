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
 * @subpackage neuron
 * @since 1.0.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}

$neuron_comment_count = get_comments_number();
?>

<div id="comments" class="comments-area default-max-width <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">

    <?php if ( have_comments() ): ;?>

					        <h2 class="comments-title">
					            <?php if ( '1' === $neuron_comment_count ): ?>
					                <?php esc_html_e( '1 comment', 'neuron' );?>
					            <?php else: ?>
        <?php
printf(
    /* translators: %s: comment count number. */
    esc_html( _nx( '%s comment', '%s comments', $neuron_comment_count, 'Comments title', 'neuron' ) ),
    esc_html( number_format_i18n( $neuron_comment_count ) )
);
?>
			<?php endif;?>
		</h2><!-- .comments-title -->

		<ol class="comment-list">
			<?php
wp_list_comments(
    array(
        'avatar_size' => 60,
        'style'       => 'ol',
        'short_ping'  => true,
    )
);
?>
		</ol><!-- .comment-list -->

		<?php
the_comments_pagination(
    array(
        /* translators: There is a space after page. */
        'before_page_number' => esc_html__( 'Page ', 'neuron' ),
        'mid_size'           => 0,
        'prev_text'          => '%s <span class="nav-prev-text">%s</span>' . esc_html__( 'Older comments', 'neuron' ),

        'next_text'          => '<span class="nav-next-text">%s</span> %s' . esc_html__( 'Newer comments', 'neuron' ),

    )
);
?>

		<?php if ( !comments_open() ): ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'neuron' );?></p>
		<?php endif;?>
	<?php endif;?>

	<?php
comment_form(
    array(
        'logged_in_as'       => null,
        'title_reply'        => esc_html__( 'Write Your comment', 'neuron' ),
        'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
        'title_reply_after'  => '</h2>',
    )
);
?>

</div><!-- #comments -->
