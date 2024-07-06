<?php get_header(); ?>
<section class="mv">
	<figure class="mv__img">
		<picture>
			<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-blog.jpg" media="(min-width: 768px)" />
			<img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-blog-sp.jpg" alt="ファーストビュー画像" />
		</picture>
	</figure>

	<h2 class="mv__title">blog</h2>
</section>
<div class="breadcrumb-wrapper">
	<div class="breadcrumb-wrapper__inner inner">
		<div class="breadcrumb">
			<a href="./index.html">TOP</a>&nbsp;&nbsp;>&nbsp;&nbsp;<a href="#">ブログ一覧</a>&nbsp;&nbsp;>&nbsp;&nbsp;ブログ詳細
		</div>
	</div>
</div>
<div class="blog blog-layout">
	<div class="blog__inner inner">
		<div class="blog__container fish">
			<div class="blog__main single-blog">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

				<div class="single-blog__post">
					<div class="single-blog__top">
						<time datetime="<?php echo get_the_date('Y-m-d'); ?>"
							class="single-blog__date"><?php echo get_the_date(); ?></time>
						<div class="single-blog__title"><?php the_title(); ?></div>
						<figure class="single-blog__eyecatch">
							<?php if (has_post_thumbnail()) : ?>
							<?php the_post_thumbnail('full', ['alt' => esc_attr(get_the_title())]); ?> <?php else : ?> <img
								src="<?php echo esc_url(get_theme_file_uri('/assets/images/default.jpg')); ?>"
								alt="<?php esc_attr_e('Default Image', 'text-domain'); ?>" />
							<?php endif; ?>
						</figure>
					</div>

					<div class="single-blog__content">
						<?php the_content(); ?>
					</div>
				</div>

				<div class="single-blog__nav page-nav">
					<div class="page-nav__arrows">
						<?php
					$prev = get_previous_post();
					$prev_url = get_permalink($prev->ID);
					$next = get_next_post();
					$next_url = get_permalink($next->ID);
					?>
						<div class="page-nav__arrow">
							<?php if($prev): ?>
							<a href="<?php echo $prev_url; ?>" class="previouspostlink">＜</a>
							<?php endif; ?>
						</div>
						<div class="page-nav__arrow">
							<?php if($next): ?>
							<a href="<?php echo $next_url; ?>" class="nextpostlink">＞</a>
							<?php endif; ?>
						</div>
					</div>
				</div>
				<?php endwhile; endif; ?>
			</div>
			<div class=" blog__side">
				<section class="side-popular">
					<h2 class="side-popular__heading side-heading">人気記事</h2>
					<ul class="side-popular__cards">
						<?php
						$popular_posts = new WP_Query(array(
							'posts_per_page' => 3,
							'meta_key' => 'post_views_count',
							'orderby' => 'meta_value_num',
							'order' => 'DESC'
						));
						if ( $popular_posts->have_posts() ) :
							while ( $popular_posts->have_posts() ) : $popular_posts->the_post();
						?>

						<li class="side-popular__card popular-card">
							<div class="popular-card__img">
								<?php if ( has_post_thumbnail() ) {
									the_post_thumbnail();
								} ?>
							</div>
							<div class="popular-card__body">
								<time datetime="<?php echo get_the_date('Y-m-d'); ?>"
									class="popular-card__date"><?php echo get_the_date(); ?></time>
								<p class="popular-card__title"><?php the_title(); ?></p>
							</div>
						</li>
						<?php endwhile; wp_reset_postdata(); endif; ?>
					</ul>
				</section>
				<section class="side-voice">
					<h3 class="side-voice__heading side-heading">口コミ</h3>
					<div class="side-voice__content">
						<div class="side-voice__img">
							<img src="<?php echo get_theme_file_uri(); ?>/assets/images/side-voice.jpg" alt="" />
						</div>
						<p class="side-voice__caption">30代(カップル)</p>
						<div class="side-voice__title">
							ここにタイトルが入ります。ここにタイトル
						</div>
						<div class="side-voice__button">
							<a href="archive-voice.html" class="button"> View more</a>
						</div>
					</div>
				</section>
				<section class="side-campaign">
					<h3 class="side-campaign__heading side-heading">キャンペーン</h3>
					<ul class="side-campaign__items">
						<li class="side-campaign__item">
							<figure class="side-campaign__img">
								<img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign1.jpg" alt="キャンペーンの画像" />
							</figure>
							<div class="side-campaign__body">
								<div class="side-campaign__top">
									<div class="side-campaign__title">ライセンス取得</div>
								</div>
								<div class="side-campaign__text">
									<p class="side-campaign__price-info">
										全部コミコミ(お一人様)
									</p>
									<div class="side-campaign__price">
										<p class="side-campaign__price-before">¥56,000</p>
										<p class="side-campaign__price-after">¥46,000</p>
									</div>
								</div>
							</div>
						</li>
						<li class="side-campaign__item">
							<figure class="side-campaign__img">
								<img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign2.jpg" alt="キャンペーンの画像" />
							</figure>
							<div class="side-campaign__body">
								<div class="side-campaign__top">
									<div class="side-campaign__title">貸切体験ダイビング</div>
								</div>
								<div class="side-campaign__text">
									<p class="side-campaign__price-info">
										全部コミコミ(お一人様)
									</p>

									<div class="side-campaign__price">
										<p class="side-campaign__price-before">¥24,000</p>
										<p class="side-campaign__price-after">¥18,000</p>
									</div>
								</div>
							</div>
						</li>
					</ul>
					<div class="side-campaign__button">
						<a href="page-campaign.html" class="button">View&nbsp;more</a>
					</div>
				</section>

				<section class="side-archive">
					<h3 class="side-archive__heading side-heading">アーカイブ</h3>
					<div class="side-archive__contents">
						<?php
						$years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY post_date DESC");
						foreach($years as $year) :
						?>

						<div class="side-archive__year" data-year="<?php echo $year; ?>">
							<div class="side-archive__year-toggle js-year-toggle">
								<?php echo $year; ?>
							</div>
							<div class="side-archive__month-list">
								<?php
								$months = $wpdb->get_col("SELECT DISTINCT MONTH(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' AND YEAR(post_date) = '$year' ORDER BY post_date DESC");
								foreach($months as $month) :
								$month_name = date('F', mktime(0, 0, 0, $month, 10));
								?>

								<div class="side-archive__month">
									<a href="<?php echo get_month_link($year, $month); ?>"
										class="side-archive__link"><?php echo $month_name; ?></a>
								</div>
								<?php endforeach; ?>
							</div>
						</div>
						<?php endforeach; ?>

					</div>
				</section>
			</div>
			<!--blog__side終わり-->
		</div>
	</div>
</div>

<!--blog終わり-->
<div class="contact-wrapper">
	<?php get_template_part('common/contact') ?>
</div>

<?php get_footer(); ?>
