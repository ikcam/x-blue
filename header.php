<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://ogp.me/ns/fb#" xmlns:fb="https://www.facebook.com/2008/fbml" <?php language_attributes() ?> itemscope itemtype="http://schema.org/Blog">
<head>
	<!-- Meta -->
	<meta charset="<?php bloginfo('charset') ?>" />
	<!-- Facebook Open Graph -->
	<meta property="og:site_name" content="<?php bloginfo('name') ?>" />
	<meta property="og:type" content="website" />
	<meta property="fb:app_id" content="" /><!-- Your Custom User ID or App ID -->
<?php if( is_single() ) { ?>
	<!-- Is Single -->
	<!-- Facebook Open Graph -->
	<meta property="og:title" content="<?php the_title() ?>"/>
	<meta property="og:url" content="<?php the_permalink() ?>"/>
	<meta property="og:description" content="<?php post_description() ?>" />
	<meta property="og:image" content="<?php post_image() ?>" />
	<!-- Google Plus One -->
	<meta itemprop="name" content="<?php the_title() ?>">
	<meta itemprop="description" content="<?php post_description() ?>">
	<meta itemprop="image" content="<?php post_image() ?>">
<?php } else { ?>
	<!-- Not Single -->
	<!-- Facebook Open Graph -->
	<meta property="og:title" content="<?php bloginfo('name') ?>" />
	<meta property="og:url" content="<?php bloginfo('url') ?>" />
	<meta property="og:description" content="<?php bloginfo('description') ?>" />
	<meta property="og:image" content="<?php bloginfo('stylesheet_directory') ?>/images/logo.png" />
	<!-- Google Plus One -->
	<meta itemprop="name" content="<?php bloginfo('name') ?>">
	<meta itemprop="description" content="<?php bloginfo('description') ?>">
	<meta itemprop="image" content="<?php bloginfo('stylesheet_directory') ?>/images/logo.png">
<?php } ?>

	<!-- Title -->
	<title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>

	<!-- CSS -->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/favicon.ico" />

	<!-- RSS & Pingback -->
	<link rel="alternate" href="<?php bloginfo('rss2_url') ?>" title="<?php printf( __( '%s latest posts', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="alternate" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'sandbox' ), wp_specialchars( get_bloginfo('name'), 1 ) ) ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url') ?>" />

	<!-- Scripts -->
<!--[if lt IE 9]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
	<script>
		window.___gcfg = {lang: 'es-419'};
		(function() {
			var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
			po.src = 'https://apis.google.com/js/plusone.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		})();
	</script><!-- Google Plus Script -->
	<script>
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");
	</script><!-- Twitter Script -->
<?php wp_head() // For plugins ?>
</head>

<body class="<?php sandbox_body_class() ?>">
<div id="fb-root"></div>
<script>
(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "//connect.facebook.net/es_LA/all.js#xfbml=1&appId=";
	fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<section id="nav-top">
	<section id="wrapper">
		<div id="breadcrumb">
<?php
	if(function_exists('bcn_display')) { ?>
			<strong>Est&aacute;s viendo: </strong> <?php bcn_display(); ?>
<?php } ?>
		</div>

		<div id="rss">
			<a href="<?php bloginfo('rss2_url') ?>" rel="alternative"><?php _e( 'Entries', 'sandbox' ) ?></a>
			<a href="<?php bloginfo('comments_rss2_url') ?>" rel="alternative"><?php _e( 'Comments', 'sandbox' ) ?></a>
		</div>
	</section>
</section>

<section id="wrapper" class="hfeed">

	<header id="header">
		<h1 id="blog-title"><a href="<?php bloginfo('home') ?>/" title="<?php echo wp_specialchars( get_bloginfo('name'), 1 ) ?>" rel="home"><img src="<?php bloginfo('template_directory') ?>/images/logo.png" width="300" height="75" alt="<?php echo wp_specialchars( get_bloginfo('name'), 1 ) ?>" /></a></h1>
	</header><!--  #header -->

	<section id="access">
		<?php sandbox_globalnav() ?>
		<form method="get" id="search" action="<?php echo get_settings('home'); ?>">
			<input class="text" id="s" name="s" type="text" value="<?php the_search_query() ?>" tabindex="1" />
			<input class="button" type="submit" value="<?php _e( 'Find', 'sandbox' ) ?>" tabindex="2" />
		</form>
	</section><!-- #access -->

	<section class="ad" id="ad728">
		<?php include_once( 'ad/ad728.html' ) ?>
	</section>
