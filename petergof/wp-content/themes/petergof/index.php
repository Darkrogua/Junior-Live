<?php get_header(); ?>



																						<!-- секция обо мне -->


<section id="about" class="s_about bg_light">
	<div class="section_header">
		<h2>
		<?php if ( have_posts() ) : query_posts('p=208');
			while (have_posts()) : the_post(); ?>
				<?php the_title(); ?>
		</h2>
		<div class="s_descr_wrap">
			<div class="s_descr">
				<?php the_excerpt(); ?> 
			</div>
		</div>
	</div>

	<div class="section_content">
		<div class="container">
			<div class="row">
			
				<div class="col-md-4 col-md-push-4 animation_1">
					<h3><?php the_content(); ?></h3>
						<? endwhile; endif; wp_reset_query(); ?>
						<?php if ( have_posts() ) : query_posts('p=5');
					while (have_posts()) : the_post();
				?>
					<div class="person">
						<?php if ( has_post_thumbnail() ) : ?>
						<a class="popup" href="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); echo $large_image_url[0]; ?>" title="<?php the_title_attribute(); ?>">
						<img src="<?php the_post_thumbnail_url(array(220, 220)); ?>"/></a>
						<?php endif; ?>
					</div>
				</div>
				<div class="col-md-4 col-md-pull-4 animation_2">
					<h3><?php the_title(); ?></h3>
					<?php the_content(); ?>
				</div>
				<?php endwhile; endif; wp_reset_query(); ?>
				<div class="col-md-4 animation_3 personal_last_block">
					<?php 
						if ( have_posts() ) : query_posts('p=10');
						while (have_posts()) : the_post(); 
					?>
					<h3><?php the_title(); ?></h3>
					<h2 class="personal_header"><?php echo get_post_meta($post->ID, 'name', true); ?></h2>
					<?php the_content(); ?>
					<?php endwhile; endif; wp_reset_query(); ?>
				<div class="social_wrap">
					<ul>
						<?php
							if ( have_posts() ) : query_posts('cat=62');
							while (have_posts()) : the_post(); 
						?>
						<li><a href="<?php echo get_post_meta($post->ID, 'soc_url', true); ?>" target="_blank" title="	<?php 	the_title(); ?>"><i class="fa <?php echo get_post_meta($post->ID, 'fonts_awesome', true); ?>"></i></a></li>
						<?php endwhile; endif; wp_reset_query(); ?>
					</ul>
				</div>
				</div>
			</div>
		</div>
	</div>
</section>

																				<!-- конец секции обо мне -->


																				<!-- СЕКЦИЯ ПОЧЕМУ РОССИЯ? -->
<section id="why_russia" class="s_resume bg_light">
	<div class="section_header">
		<h2><?php echo get_cat_name(4) ?></h2>
		<div class="s_descr_wrap">
			<div class="s_descr"><?php echo category_description(4); ?></div>
		</div>
	</div>
	<div class="section_content">
		<div class="container">
			<?php 
				if ( have_posts() ) : query_posts('cat=4');
				while (have_posts()) : the_post(); 
			?>
			<div class="row">
				<div class="resume_container">
					<div class="col-md-6 col-sm-6 col-xs-12 left">
						<div class="resume_item">
							<div class="year"><?php the_title(); ?></div>
							<div class="resume_description"><?php echo get_post_meta($post->ID, 'descr', true); ?></div>
							<?php the_content(); ?>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 right">
						<div class="resume_item">
							<div class="sider_container">
								<div class="carousel<?php the_ID(); ?>">
									<div class="slide_item"><img src="<?php echo get_post_meta($post->ID, 'img_1', true); ?>" alt="1"></div>
									<div class="slide_item"><img src="<?php echo get_post_meta($post->ID, 'img_2', true); ?>" alt="2"></div>
									<div class="slide_item"><img src="<?php echo get_post_meta($post->ID, 'img_3', true); ?>" alt="3"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<script>
				$(document).ready(function() {
					var owl<?php the_ID(); ?> = $(".carousel<?php the_ID(); ?>");
					owl<?php the_ID(); ?>.owlCarousel({
						navigation : true,
						items: 1,
						autoHeight : true,
						stopOnHover: true
					});
					owl<?php the_ID(); ?>.on("mousewheel", ".owl-wrapper", function (e) {
						if (e.deltaY > 0) {
							owl<?php the_ID(); ?>.trigger("owl.prev");
						} else {
							owl<?php the_ID(); ?>.trigger("owl.next");
						}
						e.preventDefault();
					});
					$(".next_button").click(function(){
						owl<?php the_ID(); ?>.trigger("owl.next");
					});
					$(".prev_button").click(function(){
						owl<?php the_ID(); ?>.trigger("owl.prev");
					});
				});
			</script>
		<?php endwhile; endif; wp_reset_query(); ?>
	</div>
</section>

																	<!-- КОНЕЦ СЕКЦИИ ПОЧЕМУ РОССИЯ? -->




																		<!-- СЕКЦИЯ ОБРАЗОВАНИЕ В РОССИИ -->
<section id="teaching" class="s_resume bg_light">
	<div class="section_header">
		<h2><?php echo get_cat_name(5) ?></h2>
		<div class="s_descr_wrap">
			<div class="s_descr"><?php echo category_description(5); ?></div>
		</div>
	</div>
	<div class="section_content">
		<div class="container">
			<?php
				if ( have_posts() ) : query_posts('cat=5');
				while (have_posts()) : the_post(); 
			?>
			<div class="row">
				<div class="resume_container">
					<div class="col-md-6 col-sm-6 col-xs-12 left">
						<div class="resume_item">
							<div class="year"><?php the_title(); ?></div>
							<div class="resume_description"><?php echo get_post_meta($post->ID, 'descr', true); ?></div>
							<?php the_content(); ?>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 right">
						<div class="resume_item">
							<div class="sider_container">
								<div class="carousel<?php the_ID(); ?>">
									<div class="slide_item"><img src="<?php echo get_post_meta($post->ID, 'img_1', true); ?>" alt="1"></div>
									<div class="slide_item"><img src="<?php echo get_post_meta($post->ID, 'img_2', true); ?>" alt="2"></div>
									<div class="slide_item"><img src="<?php echo get_post_meta($post->ID, 'img_3', true); ?>" alt="3"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<script>
				$(document).ready(function() {
					var owl<?php the_ID(); ?> = $(".carousel<?php the_ID(); ?>");
					owl<?php the_ID(); ?>.owlCarousel({
						navigation : true,
						items: 1,
						autoHeight : true,
						stopOnHover: true
					});
					owl<?php the_ID(); ?>.on("mousewheel", ".owl-wrapper", function (e) {
						if (e.deltaY > 0) {
							owl<?php the_ID(); ?>.trigger("owl.prev");
						} else {
							owl<?php the_ID(); ?>.trigger("owl.next");
						}
						e.preventDefault();
					});
					$(".next_button").click(function(){
						owl<?php the_ID(); ?>.trigger("owl.next");
					});
					$(".prev_button").click(function(){
						owl<?php the_ID(); ?>.trigger("owl.prev");
					});
				});
			</script>
		<?php endwhile; endif; wp_reset_query(); ?>
	</div>
</section>
																	<!-- КОНЕЦ СЕКЦИИ ОБРАЗОВАНИЕ В РОССИИ -->




																			<!-- СЕКЦИЯ ЖИЗНЬ В РОССИИ -->

<section id="live" class="s_resume bg_light">
	<div class="section_header">
		<h2><?php echo get_cat_name(6) ?></h2>
		<div class="s_descr_wrap">
			<div class="s_descr"><?php echo category_description(6); ?></div>
		</div>
	</div>
	<div class="section_content">
		<div class="container">
			<?php
				if ( have_posts() ) : query_posts('cat=6');
				while (have_posts()) : the_post();
			?>
			<div class="row">
				<div class="resume_container">
					<div class="col-md-6 col-sm-6 col-xs-12 left">
						<div class="resume_item">
							<div class="year"><?php the_title(); ?></div>
							<div class="resume_description"><?php echo get_post_meta($post->ID, 'descr', true); ?></div>
							<?php the_content(); ?>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 right">
						<div class="resume_item">
							<div class="sider_container">
								<div class="carousel<?php the_ID(); ?>">
									<div class="slide_item"><img src="<?php echo get_post_meta($post->ID, 'img_1', true); ?>" alt="1"></div>
									<div class="slide_item"><img src="<?php echo get_post_meta($post->ID, 'img_2', true); ?>" alt="2"></div>
									<div class="slide_item"><img src="<?php echo get_post_meta($post->ID, 'img_3', true); ?>" alt="3"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<script>
				$(document).ready(function() {
					var owl<?php the_ID(); ?> = $(".carousel<?php the_ID(); ?>");
					owl<?php the_ID(); ?>.owlCarousel({
						navigation : true,
						items: 1,
						autoHeight : true,
						stopOnHover: true
					});
					owl<?php the_ID(); ?>.on("mousewheel", ".owl-wrapper", function (e) {
						if (e.deltaY > 0) {
							owl<?php the_ID(); ?>.trigger("owl.prev");
						} else {
							owl<?php the_ID(); ?>.trigger("owl.next");
						}
						e.preventDefault();
					});
					$(".next_button").click(function(){
						owl<?php the_ID(); ?>.trigger("owl.next");
					});
					$(".prev_button").click(function(){
						owl<?php the_ID(); ?>.trigger("owl.prev");
					});
				});
			</script>
		<?php endwhile; endif; wp_reset_query(); ?>
	</div>
</section>
																	<!-- КОНЕЦ СЕКЦИИ ЖИЗНЬ В РОССИИ -->




																			<!-- СЕКЦИЯ НАШИ КЛИЕНТЫ -->

<section id="clients" class="s_portfolio bg_dark">
	<div class="section_header">
		<h2><?php echo get_cat_name(7) ?></h2>
		<div class="s_descr_wrap">
			<div class="s_descr"><?php echo category_description(7); ?></div>
		</div>
	</div>
	<div class="section_content">
		<div class="container">
			<div class="row">
				<div class="filter_div controls">
					<ul>
						<li class="filter active" data-filter="all">Все клиенты</li>
						<li class="filter" data-filter=".graduates">Выпускники</li>
						<li class="filter" data-filter=".latin_america">Латинская Америка</li>
						<li class="filter" data-filter=".india">Индия</li>
					</ul>
				</div>

				<div id="portfolio_grid">
					<?php 
						if ( have_posts() ) : query_posts('cat=7');
						while (have_posts()) : the_post(); 
					?>
					<div class="mix col-md-3 col-sm-6 col-xs-12 portfolio_item <?php $tags = wp_get_post_tags($post->ID);
					if ($tags) {
						foreach($tags as $tag) {
							echo '' . $tag->name;
						}
					}
					?>">
					<?php the_post_thumbnail(array(300, 200)); ?>
					<div class="port_item_cont">
						<h3><?php the_title(); ?></h3>
						<?php the_excerpt(); ?>
						<a href="#" class="popup_content">Посмотреть</a>
					</div>
					<div class="hidden">
						<div class="podrt_descr">
							<div class="modal-box-content">
								<button class="mfp-close" type="button" title="Закрыть (Esc)">×</button>
								<h3><?php the_title(); ?></h3>
								<?php the_content(); ?>
								<img src="<?php $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'large' ); echo $large_image_url[0]; ?>" alt="<?php the_title(); ?>" />
							</div>
						</div>
					</div>
					</div>
					<? endwhile; endif; wp_reset_query(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
																	<!-- КОНЕЦ СЕКЦИИ ОБРАЗОВАНИЕ В РОССИИ -->




																			<!-- СЕКЦИЯ ЖИЗНЬ В РОССИИ -->
<section id="contacts" class="s_contacts bg_light">
	<div class="section_header">
		<h2><?php echo get_cat_name(8) ?></h2>
		<div class="s_descr_wrap">
			<div class="s_descr"><?php echo category_description(8); ?></div>
		</div>
	</div>
	<div class="section_content">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="contact_box">
						<div class="contacts_icon icon-basic-geolocalize-05"></div>
						<h3>Адрес:</h3>
						<?php echo get_post_meta(90, 'adress', true); ?>
					</div>
					<div class="contact_box">
						<div class="contacts_icon icon-basic-smartphone"></div>
						<h3>Телефон:</h3>
						<?php echo get_post_meta(90, 'phone', true); ?>
					</div>
					<div class="contact_box">
						<div class="contacts_icon icon-basic-webpage-img-txt"></div>
						<h3>Веб-сайт:</h3>
						<p><a href="//<?php echo get_post_meta(90, 'web_sute', true); ?>" target="_blank"><?php echo get_post_meta(90, 'web_sute', true); ?></a></p>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<form action="http://formspree.io/darkrogua@inbox.ru" class="main_form" novalidate target="_blank" method="post">
						<label class="form-group">
							<span class="color_element">*</span> Ваше имя:
							<input type="text" name="name" placeholder="Ваше имя" data-validation-required-message="Вы не ввели имя" required />
							<span class="help-block text-danger"></span>
						</label>
						<label class="form-group">
							<span class="color_element">*</span> Ваш E-mail:
							<input type="email" name="email" placeholder="Ваш E-mail" data-validation-required-message="Не корректно введен E-mail" required />
							<span class="help-block text-danger"></span>
						</label>
						<label class="form-group">
							<span class="color_element">*</span> Ваше сообщение:
							<textarea name="message" placeholder="Ваше сообщение" data-validation-required-message="Вы не ввели сообщение" required></textarea>
							<span class="help-block text-danger"></span>
						</label>
						<button>Отправить</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>