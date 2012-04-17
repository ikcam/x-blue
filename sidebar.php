	<aside id="primary" class="sidebar">
		<ul class="xoxo">
			<li id="social">
				<h3><?php _e( 'Follow Us', 'sandbox' ) ?></h3>
				<div class="fb-like"><fb:like href="http://www.facebook.com/pages/Xploit29-Tecnolog%C3%ADa-al-Alcance-de-tus-manos/198968303509866" send="false" width="288" show_faces="true"></fb:like></div>
				<div class="twitter"><a href="https://twitter.com/ikcam" data-show-count="true" data-lang="es" class="twitter-follow-button"><?php _e( 'Follow', 'sandbox' ) ?> @ikcam</a></div>
				<div class="googleplus">
					<div class="left"><g:plusone size="medium" href="<?php bloginfo('url') ?>"></g:plusone></div>
					<div class="text"><?php _e( 'Recommend', 'sandbox' ) ?> <?php bloginfo('title') ?></div>
				</div>
				<div class="email">
					<span><strong>xploit29 <?php _e( 'on your email', 'sandbox' ) ?></strong></span>
					<form class="email" action="http://www.feedburner.com/fb/a/emailverify" target="popupwindow" method="post" onsubmit="window.open('http://www.feedburner.com/fb/a/emailverifySubmit?feedId=1983204', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true">
						<input type="text" size="25" tabindex="1" class="text">
						<input value="http://feeds.feedburner.com/~e?ffid=1983204" name="url" type="hidden"/>
						<input value="xploit29" name="title" type="hidden"/><input value="<?php language_attributes() ?>" name="loc" type="hidden"/>
						<input type="submit" value="<?php _e( 'Subscribe', 'sandbox' ) ?>" tabindex="2" class="button" />
					</form>
					<a href="<?php bloginfo('rss2_url') ?>" class="rss"><?php ( 'RSS', 'sandbox' ) ?></a>
					<a href="<?php bloginfo('home') ?>/contacto/" class="contact"><?php _e( 'Send Hint', 'sandbox' ) ?></a>
				</div>
			</li>

<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(1) ) : // begin primary sidebar widgets ?>

			<li id="pages">
				<h3><?php _e( 'Pages', 'sandbox' ) ?></h3>
				<ul>
<?php wp_list_pages('title_li=&sort_column=menu_order' ) ?>
				</ul>
			</li>

			<li id="categories">
				<h3><?php _e( 'Categories', 'sandbox' ) ?></h3>
				<ul>
<?php wp_list_categories('title_li=&show_count=0&hierarchical=1') ?> 

				</ul>
			</li>

			<li id="archives">
				<h3><?php _e( 'Archives', 'sandbox' ) ?></h3>
				<ul>
<?php wp_get_archives('type=monthly') ?>

				</ul>
			</li>
<?php endif; // end primary sidebar widgets  ?>
			<li class="ad">
				<h3><?php _e( 'Ad', 'sandbox' ) ?></h3>
				<section class="ad" id="ad300">
					<?php include_once('ad/ad300.html') ?>
				</section>
			</li>
		</ul>
	</aside><!-- #primary .sidebar -->

	<aside id="secondary" class="sidebar">
		<ul class="xoxo">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(2) ) : // begin secondary sidebar widgets ?>
			<li id="search">
				<h3><label for="s"><?php _e( 'Search', 'sandbox' ) ?></label></h3>
				<form id="searchform" class="blog-search" method="get" action="<?php bloginfo('home') ?>">
					<div>
						<input id="s" name="s" type="text" class="text" value="<?php the_search_query() ?>" size="10" tabindex="1" required />
						<input type="submit" class="button" value="<?php _e( 'Find', 'sandbox' ) ?>" tabindex="2" />
					</div>
				</form>
			</li>

<?php wp_list_bookmarks('title_before=<h3>&title_after=</h3>&show_images=1') ?>

			<li id="rss-links">
				<h3><?php _e( 'RSS Feeds', 'sandbox' ) ?></h3>
				<ul>
					<li><a href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" rel="alternate" type="application/rss+xml"><?php _e( 'All posts', 'sandbox' ) ?></a></li>
					<li><a href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" rel="alternate" type="application/rss+xml"><?php _e( 'All comments', 'sandbox' ) ?></a></li>
				</ul>
			</li>

			<li id="meta">
				<h3><?php _e( 'Meta', 'sandbox' ) ?></h3>
				<ul>
					<?php wp_register() ?>

					<li><?php wp_loginout() ?></li>
					<?php wp_meta() ?>

				</ul>
			</li>
<?php endif; // end secondary sidebar widgets  ?>
		</ul>
	</aside><!-- #secondary .sidebar -->
