<!DOCTYPE html>
<html class="night">
	<head>
		<script src="http://leaverou.github.io/prefixfree/prefixfree.js"></script>
		<script src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
		<title>
			<?php echo page_title("Page can't be found"); ?> - <?php echo site_name(); ?>
		</title>
		<link href="<?php echo theme_url('assets/style.css'); ?>" media="screen" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="<?php echo theme_url('assets/favicon.ico'); ?>" type="image/x-icon">
		<meta name="description" content="Just zis website, you know?">
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="generator" content="Anchor CMS">
	</head>
	
	<body>
		<header>
			<a class="logo" href="<?php echo base_url(); ?>" title="<?php site_description(); ?>"><?php echo site_name(); ?></a>
		</header>
		
		<?php if(has_menu_items()) : ?>
			<nav role="navigation">
		        <?php while(menu_items()) : ?>
					<a href="<?php echo menu_url(); ?>" title="<?php echo menu_title(); ?>"><?php echo menu_name(); ?></a>
				<?php endwhile; ?>
				<br /><button></button>
			</nav>
		<?php endif; ?>