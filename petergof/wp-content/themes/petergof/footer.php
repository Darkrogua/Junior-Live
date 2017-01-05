<footer class="main_footer bg_dark">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				&copy; <?php echo date("Y"); ?> <?php echo get_bloginfo('name'); ?>
				<div class="social_wrap">
					<ul>
						<?php if ( have_posts() ) : query_posts('cat=62');
						while (have_posts()) : the_post(); ?>
						<li><a href="<?php echo get_post_meta($post->ID, 'soc_url', true); ?>" target="_blank" title="<?php the_title(); ?>"><i class="fa <?php echo get_post_meta($post->ID, 'fonts_awesome', true); ?>"></i></a></li>
						<?php endwhile; endif; wp_reset_query(); ?>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
	<!--[if lt IE 9]>
	<script src="libs/html5shiv/es5-shim.min.js"></script>
	<script src="libs/html5shiv/html5shiv.min.js"></script>
	<script src="libs/html5shiv/html5shiv-printshiv.min.js"></script>
	<script src="libs/respond/respond.min.js"></script>
	<![endif]-->
	<?php wp_footer(); ?>
	<!-- Yandex.Metrika counter --><!-- /Yandex.Metrika counter -->
	<!-- Google Analytics counter --><!-- /Google Analytics counter -->
</body>
</html>