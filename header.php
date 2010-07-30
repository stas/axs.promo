<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Arhive <?php } ?> <?php wp_title(); ?></title>
	
	<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats -->
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/js/sifr/sIFR-screen.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/js/sifr/sIFR-print.css" type="text/css" media="print" />
  
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/swifr/swfir.js"></script>
	<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/sifr/sifr.js"></script>
<!--[if IE]>
	<style type="text/css" media="screen">
	#badge{ background: none; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="<?php bloginfo('stylesheet_directory'); ?>/img/badge.png", sizingMethod="crop");}
	#nota{ background: none; filter: progid:DXImageTransform.Microsoft.AlphaImageLoader(src="<?php bloginfo('stylesheet_directory'); ?>/img/nota.png", sizingMethod="scale");}
	</style>
<![endif]-->

<?php wp_head(); ?>
</head>
<body>
	<div id="pagina">
		<span id="logo2007">&nbsp;</span>
		<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>" class="logo"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.png" class="logo" alt="logo" /></a>
		<a href="<?php bloginfo('url'); ?>/index.php/join" title="Alatura-te!" ><span id="badge">&nbsp;</span></a>
		<div id="cautare">
			<form method="get" id="searchform" action="">
			<div>
				<input value="" name="s" id="s" type="text" />
				<input id="searchsubmit" value="" type="submit" />
			</div>
			</form>
		</div>
		<div id="continut">
