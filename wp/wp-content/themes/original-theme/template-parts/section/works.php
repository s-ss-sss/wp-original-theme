<section id="works" class="p-works u-section u-bg-surface-alt">
	<div class="l-inner">
		<div class="p-works__header c-section-head">
			<h2 class="c-section-head__title">
				<span class="c-section-head__title-main">WORKS</span>
				<span class="c-section-head__title-sub">制作事例</span>
			</h2>
			<p class="c-section-head__intro">実際の制作事例をご紹介します。</p>
		</div>
	</div>
	<?php
	$works_query = new WP_Query([
		'post_type'      => 'works',
		'posts_per_page' => 10,
		'post_status'    => 'publish',
		'orderby'        => 'menu_order',
		'order'          => 'ASC',
	]);
	$is_slider = $works_query->post_count > 1;
	?>
	<?php if ($works_query->have_posts()) : ?>
		<div class="p-works__slider<?php echo $is_slider ? ' swiper js-works-slider' : ''; ?>">
			<div class="p-works__list<?php echo $is_slider ? ' swiper-wrapper' : ' p-works__list--single'; ?>">
				<?php while ($works_query->have_posts()) : ?>
				<?php $works_query->the_post(); ?>
				<?php $work_url = get_field('work_url'); ?>
				<div class="p-works__slide<?php echo $is_slider ? ' swiper-slide' : ''; ?>">
					<?php if ($work_url) : ?>
					<a
						href="<?php echo esc_url($work_url); ?>"
						target="_blank"
						rel="noopener noreferrer"
						class="p-works__link"
					>
						<?php else : ?>
						<div class="p-works__link">
							<?php endif; ?>
							<figure class="p-works__image">
								<?php if (has_post_thumbnail()) : ?>
									<?php
									the_post_thumbnail('large', [
										'alt'      => esc_attr(get_the_title()),
										'loading'  => 'lazy',
										'decoding' => 'async',
									]);
									?>
								<?php else : ?>
									<img
										src="<?php echo esc_url('https://placehold.jp/000000/ffffff/800x537.png?text=Dummy%20Image'); ?>"
										alt=""
										width="800"
										height="537"
										loading="lazy"
										decoding="async"
									>
								<?php endif; ?>
							</figure>
							<?php if ($work_url) : ?>
					</a>
					<?php else : ?>
				</div>
			<?php endif; ?>
			</div>
			<?php endwhile; ?>
		</div>
		<?php if ($is_slider) : ?>
			<div class="p-works__pagination"></div>
		<?php endif; ?>
		</div>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>
</section>
