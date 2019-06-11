<?php

if ( post_password_required() ) {
	return;
}
?>

<div id="comments">
	<div class="container">
		<div class="row">
			<div class="col-md-12 og-border-1">
				<div class="og-comments">
					<?php
					// You can start editing here -- including this comment!
					if ( have_comments() ) : ?>
						<h4 class="title">
							<?php
							$comments_number = get_comments_number();
							if ( '1' === $comments_number ) {
								/* translators: %s: post title */
								//  _x 要翻譯的內容 
								printf( _x( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'ognam' ), get_the_title() );
							} else {
								printf(
									/* translators: 1: number of comments, 2: post title */
									_nx(
										'%1$s Reply to &ldquo;%2$s&rdquo;',
										'%1$s Replies to &ldquo;%2$s&rdquo;',
										$comments_number,
										'comments title',
										'ognam'
									),
									number_format_i18n( $comments_number ),
									get_the_title()
								);
							}
							?>
						</h4>

						<ul class="comment-list">
							<?php
								wp_list_comments( array(
									'avatar_size' => 60,
									'style'       => 'li',
									'reply_text'  =>  __( 'Reply', 'ognam' ),
								) );
							?>
						</ul>
						<?php 
						
					endif; // Check for have_comments().

					// If comments are closed and there are comments, let's leave a little note, shall we?
					if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

						<p class="no-comments"><?php _e( 'Comments are closed.', 'ognam' ); ?></p>
					<?php
					endif;

					comment_form();
					?>
				</div>
			</div>
		</div>
	</div>
</div>
