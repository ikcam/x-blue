<?php get_header() ?>

	<section id="container">
		<section id="content">

<?php while ( have_posts() ) : the_post() ?>

			<article id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<div class="entry-date"><div><?php the_time('j') ?><br /><?php the_time('M') ?></div></div>
				<h2 class="entry-title"><a href="<?php the_permalink() ?>" title="<?php printf( __('Permalink to %s', 'sandbox'), the_title_attribute('echo=0') ) ?>" rel="bookmark"><?php the_title() ?></a></h2>
				<div class="entry-meta-top">
					<span class="author vcard"><?php printf( __( 'By %s', 'sandbox' ), '<a class="url fn n" href="' . get_author_link( false, $authordata->ID, $authordata->user_nicename ) . '" title="' . sprintf( __( 'View all posts by %s', 'sandbox' ), $authordata->display_name ) . '">' . get_the_author() . '</a>' ) ?></span>
					<span class="cat-links"><?php printf( __( 'Posted in %s', 'sandbox' ), get_the_category_list(', ') ) ?></span>
				</div>
				<div class="entry-content">
<?php the_content( __( 'Read More <span class="meta-nav">&raquo;</span>', 'sandbox' ) ) ?>

<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>
<?php the_tags( __( '<span class="tag-links">Tagged ', 'sandbox' ), " ", "</span>\n" ) ?>
				</div>
				<div class="entry-meta">
					<div class="social-buttons">
						<div><fb:like href="<?php the_permalink() ?>" send="false" layout="button_count" width="100" show_faces="false"></fb:like></div>
						<div><a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink() ?>" data-text="<?php the_title() ?>" data-count="none" data-via="xploit29" data-lang="es">Twittear</a></div>
						<div><g:plusone size="medium" href="<?php the_permalink() ?>"></g:plusone></div>
					</div>
					<div class="right">
<?php edit_post_link( __( 'Edit', 'sandbox' ), "\t\t\t\t\t<span class=\"edit-link\">", "</span>" ) ?>
						<span class="comments-link"><?php comments_popup_link( __( 'Comments (0)', 'sandbox' ), __( 'Comments (1)', 'sandbox' ), __( 'Comments (%)', 'sandbox' ) ) ?></span>
					</div>
				</div>
			</article><!-- .post -->

<?php comments_template() ?>

<?php endwhile; ?>

			<section class="ad" id="ad468">
				<?php include_once( 'ad/ad468.html' ) ?>
			</section>

			<nav id="nav-below" class="navigation">
				<div class="nav-previous"><?php next_posts_link(__( '<span class="meta-nav">&laquo;</span> Older posts', 'sandbox' )) ?></div>
				<div class="nav-next"><?php previous_posts_link(__( 'Newer posts <span class="meta-nav">&raquo;</span>', 'sandbox' )) ?></div>
			</nav>

		</section><!-- #content -->
	</section><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>