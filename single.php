<?php get_header() ?>

	<section id="container">
		<section id="content">

<?php the_post() ?>

			<nav id="nav-above" class="navigation">
				<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">&laquo;</span> %title' ) ?></div>
				<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">&raquo;</span>' ) ?></div>
			</nav>

			<article id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<div class="entry-date"><div><?php the_time('j') ?><br /><?php the_time('M') ?></div></div>
				<h2 class="entry-title"><?php the_title() ?></h2>
				<div class="entry-meta-top">
					<span class="author vcard"><?php printf( __( 'By %s', 'sandbox' ), '<a class="url fn n" href="' . get_author_link( false, $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( __( 'View all posts by %s', 'sandbox' ), $authordata->display_name ) . '">' . get_the_author() . '</a>' ) ?></span>
					<span class="cat-links"><?php printf( __( 'Posted in %s', 'sandbox' ), get_the_category_list(', ') ) ?></span>
				</div>
				<div class="entry-content">
<?php the_content() ?>

<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>
<?php the_tags( __( '<span class="tag-links">Tagged ', 'sandbox' ), " ", " " ) ?>
				</div>
				<div class="entry-meta">
					<div class="social-buttons">
						<div><fb:like href="<?php the_permalink() ?>" send="false" layout="button_count" width="100" show_faces="false"></fb:like></div>
						<div><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink() ?>" data-text="<?php the_title() ?>" data-count="none" data-via="xploit29" data-lang="es">Twittear</a></div>
						<div><g:plusone size="medium" href="<?php the_permalink() ?>"></g:plusone></div>
					</div>
					<div class="right">
<?php edit_post_link( __( 'Edit', 'sandbox' ), "\n\t\t\t\t\t<span class=\"edit-link\">", "</span>" ) ?>
<?php if ( ('open' == $post->comment_status) && ('open' == $post->ping_status) ) : // Comments and trackbacks open ?>
					<?php printf( __( '<a class="comment-link" href="#respond" title="Post a comment">Post a comment</a> or leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'sandbox' ), get_trackback_url() ) ?>
<?php elseif ( !('open' == $post->comment_status) && ('open' == $post->ping_status) ) : // Only trackbacks open ?>
					<?php printf( __( 'Comments are closed, but you can leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.', 'sandbox' ), get_trackback_url() ) ?>
<?php elseif ( ('open' == $post->comment_status) && !('open' == $post->ping_status) ) : // Only comments open ?>
					<?php _e( 'Trackbacks are closed, but you can <a class="comment-link" href="#respond" title="Post a comment">post a comment</a>.', 'sandbox' ) ?>
<?php elseif ( !('open' == $post->comment_status) && !('open' == $post->ping_status) ) : // Comments and trackbacks closed ?>
					<?php _e( 'Both comments and trackbacks are currently closed.', 'sandbox' ) ?>
<?php endif; ?>
					</div>
				</div>
			</article><!-- .post -->

			<section class="ad" id="ad468">
				<!-- Insert Ad code 468x60 -->
			</section>

			<nav id="nav-below" class="navigation">
				<div class="nav-previous"><?php previous_post_link( '%link', '<span class="meta-nav">&laquo;</span> %title' ) ?></div>
				<div class="nav-next"><?php next_post_link( '%link', '%title <span class="meta-nav">&raquo;</span>' ) ?></div>
			</nav>

<?php comments_template() ?>

			<section class="ad" id="ad468">
				<?php include_once( 'ad/ad468.html' ) ?>
			</section>

		</section><!-- #content -->
	</section><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>