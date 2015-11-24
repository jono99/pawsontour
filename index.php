<!DOCTYPE html>
<html lang="en">
<head>

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php wp_title(''); ?></title>

<link rel="stylesheet" media="screen" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.css" />
<link rel="stylesheet" media="screen" type="text/css" href="<?php bloginfo('template_directory'); ?>/style.css" />
<?php if (get_field('favicon', 'option')) { echo '<link rel="shortcut icon" href="'.get_field('favicon', 'option').'" />'; } ?>

<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<script type="text/javascript">
	var siteurl = '<?php echo bloginfo('url'); ?>', 
	templatedir = '<?php echo bloginfo('template_directory'); ?>', 
	ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
</script>

<?php wp_enqueue_script('backstretch', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-backstretch/2.0.4/jquery.backstretch.min.js', array('jquery'), '1.0', true); ?>
<?php wp_enqueue_script('theme', get_bloginfo('template_directory').'/js/theme.js', array('jquery'), '1.0', true ); ?>

<?php wp_head(); ?>

</head>

<body <?php echo body_class(); ?>>

	<div id="park" class="container fade">
		<div class="row content">
			<img src="<?php echo get_bloginfo('template_directory'); ?>/img/logo.png" id="logo">

			<img src="<?php echo get_bloginfo('template_directory'); ?>/img/park.png" class="park">

			<!-- DOGS -->
			<a href="#dog-modal-1" id="boston" class="dog" data-toggle="modal" data-target="dog-modal-1">
				<img src="<?php echo get_bloginfo('template_directory'); ?>/img/boston-terrier.png">
			</a>

			<a href="#dog-modal-2" id="bulldog" class="dog" data-toggle="modal" data-target="dog-modal-2">
				<img src="<?php echo get_bloginfo('template_directory'); ?>/img/bulldog.png">
			</a>

			<a href="#dog-modal-3" id="chiuhaha" class="dog" data-toggle="modal" data-target="dog-modal-3">
				<img src="<?php echo get_bloginfo('template_directory'); ?>/img/chiuhaha.png">
			</a>

			<a href="#dog-modal-4" id="frenchie" class="dog" data-toggle="modal" data-target="dog-modal-4">
				<img src="<?php echo get_bloginfo('template_directory'); ?>/img/frenchie.png">
			</a>

			<a href="#dog-modal-5" id="poodle" class="dog" data-toggle="modal" data-target="dog-modal-5">
				<img src="<?php echo get_bloginfo('template_directory'); ?>/img/poodle.png">
			</a>

			<a href="#dog-modal-6" id="pug" class="dog" data-toggle="modal" data-target="dog-modal-6">
				<img src="<?php echo get_bloginfo('template_directory'); ?>/img/pug.png">
			</a>
		</div>
	</div>

<?php wp_footer(); ?>

<?php if (get_field('analytics', 'option')) { echo get_field('analytics', 'option'); } ?>

</body>
</html>
