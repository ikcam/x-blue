<?php get_header() ?>

	<section id="container">
		<section id="content">

<?php the_post() ?>

			<article id="post-<?php the_ID() ?>" class="<?php sandbox_post_class() ?>">
				<h2 class="entry-title"><?php the_title() ?></h2>
				<div class="entry-content">
<?php the_content() ?>

<?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'sandbox' ) . '&after=</div>') ?>

<?php edit_post_link( __( 'Edit', 'sandbox' ), '<span class="edit-link">', '</span>' ) ?>

				</div>
			</article><!-- .post -->

<?php if ( get_post_custom_values('comments') ) comments_template() // Add a key+value of "comments" to enable comments on this page ?>
			<section class="ad" id="ad468">
				<?php include_once( 'ad/ad468.html' ) ?>
			</section>
		</section><!-- #content -->
	</section><!-- #container -->

<?php get_sidebar() ?>
<?php get_footer() ?>