<!DOCTYPE html>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
<body <?php body_class("{$theme}theme {$gradient}theme {$corners}theme sidebar{$sidebar}"); ?>>
	</header>