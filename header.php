<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<?php wp_head(); ?>
	<?php
        $content_text_color = get_option('content_text_color');
        $content_link_color = get_option('content_link_color');
	    $content_hover_link_color = get_option('content_hover_link_color');
	    $content_blog_title_color = get_option('content_blog_title_color');
    ?>
<style>
  body { color:  <?php echo $content_text_color; ?>; }
  body a { color:  <?php echo $content_link_color; ?>; }
  body a:hover { color: <?php echo $content_hover_link_color; ?>;}
  body div .blog-title { color: <?php echo $content_blog_title_color; ?>;}
</style>
	<!---- Push page down to expose admin bar when logged in  */ ---->
	<?php if (is_admin_bar_showing()): ?>
		<style>
			.fixed-top{
				top: 32px;
			}
		</style>
	<?php endif ?>
</head>
