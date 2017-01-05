<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<title><?php echo get_bloginfo('name'); ?> - <?php echo get_bloginfo('description'); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="shortcut icon" href="favicon.png" />
	<?php wp_head(); ?>
</head>
<body>
	<div class="loader">
		<div class="loader_inner"></div>
	</div>
	<header class="main_head main_color_bg" data-parallax="scroll"  data-z-index="1" >
		<?php dynamic_sidebar('video'); ?>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="logo_container">
						<?php dynamic_sidebar('logo'); ?>
					</div>
					<!-- языки переключение -->
					<div class="group_language">
						<ul class="dropdown-menu">
							<li><a href="http://petergof/ru/" title="Русский">
								<img src="<?php echo get_template_directory_uri(); ?>/img/langl/russian1.png" alt="rus">
							</a>
							</li>
							<li><a href="http://petergof/en/" title="Английский">
								<img src="<?php echo get_template_directory_uri(); ?>/img/langl/us1.png" alt="eng">
							</a>
							</li>
							<li><a href="http://petergof/es/" title="Испанский">
								<img src="<?php echo get_template_directory_uri(); ?>/img/langl/Spain1.png" alt="esp">
							</a>
							</li>
						</ul>
						<?php dynamic_sidebar('languages'); ?>
					</div>
					<div class="language_list">
						<div id="btn"></div>
						
						<div class="language_text">
						
						</div>
					</div>

					<button class="toggle_mnu">
						<span class="sandwich">
							<span class="sw-topper"></span>
							<span class="sw-bottom"></span>
							<span class="sw-footer"></span>
						</span>
					</button>
					<nav class="top_mnu">
						<ul>
							<?php if ( have_posts() ) : query_posts('p=220');
							while (have_posts()) : the_post(); ?>

							<li><a href="#about"><?php echo get_post_meta($post->ID, '1s_menu', true); ?></a></li>
							<li><a href="#why_russia"><?php echo get_post_meta($post->ID, '2s_menu', true); ?></a></li>
							<li><a href="#teaching"><?php echo get_post_meta($post->ID, '3s_menu', true); ?></a></li>
							<li><a href="#live"><?php echo get_post_meta($post->ID, '4s_menu', true); ?></a></li>
							<li><a href="#clients"><?php echo get_post_meta($post->ID, '5s_menu', true); ?></a></li>
							<li><a href="#contacts"><?php echo get_post_meta($post->ID, '6s_menu', true); ?></a></li>

						<? endwhile; endif; wp_reset_query(); ?>

					</ul>
				</nav>
			</div>
		</div>
	</div>
	<div class="top_wrapper">
		<div class="top_descr">
			<div class="top_centered">
				<div class="top_text">
					<h1><?php echo get_bloginfo('name'); ?></h1>
					<p><?php echo get_bloginfo('description'); ?></p>
				</div>
			</div>
		</div>
	</div>
</header>