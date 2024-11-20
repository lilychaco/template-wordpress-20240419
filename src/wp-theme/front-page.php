<?php get_header(); ?>

<section class="fv">
	<div class="fv__slider-wrap">
		<div class="fv__slider swiper js-fv-swiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<figure class="fv__slider-img">
						<picture>
							<source srcset="<?php the_field('fv_image_1_pc'); ?>" media="(min-width: 768px)" />
							<img src="<?php the_field('fv_image_1_sp'); ?>" alt="ファーストビュー画像1" />
						</picture>
					</figure>
				</div>
				<div class="swiper-slide">
					<figure class="fv__slider-img">
						<picture>
							<source srcset="<?php the_field('fv_image_2_pc'); ?>" media="(min-width: 768px)" />
							<img src="<?php the_field('fv_image_2_sp'); ?>" alt="ファーストビュー画像2" />
						</picture>
					</figure>
				</div>
				<div class="swiper-slide">
					<figure class="fv__slider-img">
						<picture>
							<source srcset="<?php the_field('fv_image_3_pc'); ?>" media="(min-width: 768px)" />
							<img src="<?php the_field('fv_image_3_sp'); ?>" alt="ファーストビュー画像3" />
						</picture>
					</figure>
				</div>
				<div class="swiper-slide">
					<figure class="fv__slider-img">
						<picture>
							<source srcset="<?php the_field('fv_image_4_pc'); ?>" media="(min-width: 768px)" />
							<img src="<?php the_field('fv_image_4_sp'); ?>" alt="ファーストビュー画像4" />
						</picture>
					</figure>
				</div>
			</div>
		</div>
	</div>

	<div class="fv__copy">
		<h2 class="fv__main-title">diving</h2>
		<p class="fv__sub-title">into&nbsp;the&nbsp;ocean</p>
	</div>
</section>

<section class="top-campaign top-campaign-layout" id="campaign">
	<div class="top-campaign__inner inner">
		<div class="top-campaign__heading section-heading">
			<h3 class="section-heading__title">campaign</h3>
			<h2 class="section-heading__subtitle">キャンペーン</h2>
		</div>

		<!-- 前後の矢印 -->
		<div class="swiper-button custom-swiper-button-prev"></div>
		<div class="swiper-button custom-swiper-button-next"></div>

		<div class="top-campaign__cards-wrapper swiper js-campaign-swiper">
			<?php
				// カスタム投稿「campaign」を取得するためのWP_Query
				$args = [
		    'post_type' => 'campaign', // カスタム投稿タイプ「campaign」を指定
  		  'posts_per_page' => -1, // 全ての投稿を取得（必要に応じて数を変更）
				];

				$campaign_query = new WP_Query($args);
				if ($campaign_query->have_posts()) :
				?>

			<ul class="top-campaign__cards campaign-cards swiper-wrapper">
				<?php while ($campaign_query->have_posts()) : $campaign_query->the_post(); ?>
				<li class="campaign-cards__item campaign-card swiper-slide">
					<figure class="campaign-card__img">
						<?php if (has_post_thumbnail()) : ?>
						<!-- 投稿にサムネイルが設定されている場合 -->
						<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>" />
						<?php else : ?>
						<!-- 画像がない場合はデフォルト画像を表示 -->
						<img src="<?php echo esc_url(get_theme_file_uri('assets/images/campaign1.jpg')); ?>" alt="デフォルト画像" />
						<?php endif; ?>
					</figure>
					<div class="campaign-card__body">
						<div class="campaign-card__top">
							<div class="campaign-card__category">
								<?php echo (get_field('category')) ? esc_html(get_field('category')) : 'カテゴリ未設定'; ?></div>
							<div class="campaign-card__title"><?php the_title(); ?></div>
						</div>
						<div class="campaign-card__text">
							<p class="campaign-card__price-info">
								全部コミコミ(お一人様)
							</p>
							<p class="campaign-card__price-text">
								<?php
									// 古い価格を取得
									$old_price = get_field('campaign-price_old');
									// 新しい価格を取得
									$new_price = get_field('campaign-price_new');

									// 古い価格と新しい価格をそのまま表示
									if ($old_price && $new_price) {
											echo '<span>' . esc_html($old_price) . '</span> ' . esc_html($new_price);
									} else {
											echo '価格未設定';
									}
									?>
							</p>



						</div>
					</div>
				</li>
				<?php endwhile; ?>
			</ul>
			<?php
				else :
    		echo '<p>キャンペーン情報はありません。</p>';
				endif;
				wp_reset_postdata(); // クエリのリセット
				?>
		</div>

		<div class="top-campaign__button">
			<a href="<?php echo esc_url(home_url('/campaign')); ?>" class="button">View&nbsp;more</a>
		</div>
	</div>
</section>

<section class="top-aboutus inner top-aboutus-layout" id="aboutus">
	<div class="top-aboutus__heading section-heading">
		<h3 class="section-heading__title">about&nbsp;us</h3>
		<h2 class="section-heading__subtitle">私たちについて</h2>
	</div>
	<div class="top-aboutus__container">
		<div class="top-aboutus__sp-image u-mobile">
			<img src="<?php echo get_theme_file_uri(); ?>/assets/images/aboutus-image.jpg" alt="私たちについての画像" />
		</div>
		<div class="top-aboutus__pc-image u-desktop">
			<img src="<?php echo get_theme_file_uri(); ?>/assets/images/aboutus-ocean2.jpg" alt="私たちについての画像" />
			<img src="<?php echo get_theme_file_uri(); ?>/assets/images/aboutus-ocean1.jpg" alt="私たちについての画像" />
		</div>
		<div class="top-aboutus__main-wrapper">
			<div class="top-aboutus__main">
				<div class="top-aboutus__title">
					<span>d</span>ive&nbsp;into<br />
					the&nbsp;<span>o</span>cean
				</div>
				<div class="top-aboutus__body">
					<div class="top-aboutus__text">
						ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
						ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
					</div>
					<div class="top-aboutus__button">
						<a href="<?php echo esc_url(home_url('/aboutus')); ?>" class="button"> View more </a>
					</div>
				</div>
			</div>
		</div>
		<figure class="top-aboutus__sango-image u-desktop">
			<img src="<?php echo get_theme_file_uri(); ?>/assets/images/accent01.png" alt="サンゴのイラスト" />
		</figure>
	</div>
</section>

<section class="top-information top-information-layout" id="information">
	<div class="top-information__inner inner">
		<div class="top-information__heading section-heading">
			<h3 class="section-heading__title">information</h3>
			<h2 class="section-heading__subtitle">ダイビング情報</h2>
		</div>
		<div class="top-information__main">
			<figure class="top-information__image colorbox">
				<img src="<?php echo get_theme_file_uri(); ?>/assets/images/ocean3.jpg" alt="黄色い魚の写真" />
			</figure>
			<div class="top-information__body">
				<div class="top-information__top">
					<div class="top-information__title">ライセンス講習</div>
					<div class="top-information__text">
						当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />
						正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
					</div>
				</div>
				<div class="top-information__button">
					<a href="<?php echo esc_url(home_url('/information')); ?>" class="button"> View more </a>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="top-blog top-blog-layout" id="blog">
	<div class="top-blog__inner inner">
		<figure class="top-blog__fish-image u-desktop">
			<img src="<?php echo get_theme_file_uri(); ?>/assets/images/accent02.png" alt="魚のイラスト" />
		</figure>
		<div class="top-blog__heading section-heading">
			<h3 class="section-heading__title section-heading__title--top-blog">
				Blog
			</h3>
			<h2 class="section-heading__subtitle section-heading__subtitle--top-blog">
				ブログ
			</h2>
		</div>
		<ul class="top-blog__cards blog-cards">
			<li class="blog-cards__item blog-card">
				<a href="single-blog.html" class="blog-card__link">
					<figure class="blog-card__img">
						<img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog01.jpg" alt="サンゴの写真" />
					</figure>
					<div class="blog-card__body">
						<div class="blog-card__top">
							<time datetime="2023-11-17" class="blog-card__date">2023.11.17</time>
							<div class="blog-card__title">ライセンス取得</div>
						</div>
						<div class="blog-card__text">
							ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
							ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
						</div>
					</div>
				</a>
			</li>
			<li class="blog-cards__item blog-card">
				<a href="single-blog.html" class="blog-card__link">
					<figure class="blog-card__img">
						<img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog02.jpg" alt="ウミガメの写真" />
					</figure>
					<div class="blog-card__body">
						<div class="blog-card__top">
							<time datetime="2023-11-17" class="blog-card__date">2023.11.17</time>
							<div class="blog-card__title">ウミガメと泳ぐ</div>
						</div>
						<div class="blog-card__text">
							ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
							ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
						</div>
					</div>
				</a>
			</li>
			<li class="blog-cards__item blog-card">
				<a href="single-blog.html" class="blog-card__link">
					<figure class="blog-card__img">
						<img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog03.jpg" alt="カクレクマノミの写真" />
					</figure>
					<div class="blog-card__body">
						<div class="blog-card__top">
							<time datetime="2023-11-17" class="blog-card__date">2023.11.17</time>
							<div class="blog-card__title">カクレクマノミ</div>
						</div>
						<div class="blog-card__text">
							ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
							ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
						</div>
					</div>
				</a>
			</li>
		</ul>

		<div class="top-blog__button">
			<a href="<?php echo esc_url(home_url('/blog')); ?>" class="button"> View more</a>
		</div>
	</div>
</section>

<section class="top-voice top-voice-layout" id="voice">
	<div class="top-voice__inner inner">
		<figure class="top-voice__fish-image u-desktop">
			<img src="<?php echo get_theme_file_uri(); ?>/assets/images/accent03.png" alt="魚のイラスト" />
		</figure>
		<div class="top-voice__heading section-heading">
			<h3 class="section-heading__title"><span>V</span>oice</h3>
			<h2 class="section-heading__subtitle">お客様の声</h2>
		</div>
		<ul class="top-voice__cards voice-cards">
			<li class="voice-cards__item voice-card">
				<a href="#" class="voice-card__link">
					<div class="voice-card__body">
						<div class="voice-card__top">
							<div class="voice-card__meta">
								<div class="voice-card__tag">20代(女性)</div>
								<div class="voice-card__category">
									<span>ライセンス講習</span>
								</div>
							</div>
							<div class="voice-card__title">
								ここにタイトルが入ります。ここにタイトル
							</div>
						</div>
						<figure class="voice-card__img colorbox">
							<img src="<?php echo get_theme_file_uri(); ?>/assets/images/voice01.jpg" alt="女性の写真" />
						</figure>
					</div>
					<div class="voice-card__text">
						ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
						ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
						ここにテキストが入ります。ここにテキストが入ります。
					</div>
				</a>
			</li>
			<li class="voice-cards__item voice-card">
				<a href="#" class="voice-card__link">
					<div class="voice-card__body">
						<div class="voice-card__top">
							<div class="voice-card__meta">
								<div class="voice-card__tag">20代(男性)</div>
								<div class="voice-card__category">
									<span>ファンダイビング</span>
								</div>
							</div>
							<div class="voice-card__title">
								ここにタイトルが入ります。ここにタイトル
							</div>
						</div>
						<figure class="voice-card__img colorbox">
							<img src="<?php echo get_theme_file_uri(); ?>/assets/images/voice02.jpg" alt="男性の写真" />
						</figure>
					</div>
					<div class="voice-card__text">
						ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
						ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
						ここにテキストが入ります。ここにテキストが入ります。
					</div>
				</a>
			</li>
		</ul>
		<div class="top-voice__button">
			<a href="<?php echo esc_url(home_url('/voice')); ?>" class="button"> View more</a>
		</div>
		<figure class="top-voice__seahorse-image u-desktop">
			<img src="<?php echo get_theme_file_uri(); ?>/assets/images/accent04.png" alt="タツノオトシゴのイラスト" />
		</figure>
	</div>
</section>

<section class="top-price top-price-layout" id="price">
	<div class="inner">
		<div class="top-price__inner">
			<div class="top-price__heading section-heading">
				<h3 class="section-heading__title">Price</h3>
				<h2 class="section-heading__subtitle">料金一覧</h2>
			</div>
			<div class="top-price__main">
				<figure class="top-price__image colorbox">
					<picture>
						<source media="(min-width: 768px)"
							srcset="<?php echo get_theme_file_uri(); ?>/assets/images/price-pc.jpg" />
						<img src="<?php echo get_theme_file_uri(); ?>/assets/images/price-sp.jpg" alt="魚の写真" />
					</picture>
				</figure>
				<div class="top-price__lists price-lists">
					<div class="price-lists__item price-lists__item--first price-list">
						<div class="price-list__title">ライセンス講習</div>
						<ul class="price-list__items">
							<li class="price-list__item">
								<p class="price-list__name">
									オープンウォーターダイバーコース
								</p>
								<p class="price-list__number">¥50,000</p>
							</li>
							<li class="price-list__item">
								<p class="price-list__name">
									アドバンスドオープンウォーターコース
								</p>
								<p class="price-list__number">¥60,000</p>
							</li>
							<li class="price-list__item">
								<p class="price-list__name">レスキュー＋EFRコース</p>
								<p class="price-list__number">¥70,000</p>
							</li>
						</ul>
					</div>
					<div class="price-lists__item price-list">
						<div class="price-list__title">体験ダイビング</div>
						<ul class="price-list__items">
							<li class="price-list__item">
								<p class="price-list__name">ビーチ体験ダイビング(半日)</p>
								<p class="price-list__number">¥7,000</p>
							</li>
							<li class="price-list__item">
								<p class="price-list__name">ビーチ体験ダイビング(1日)</p>
								<p class="price-list__number">¥14,000</p>
							</li>
							<li class="price-list__item">
								<p class="price-list__name">ボート体験ダイビング(半日)</p>
								<p class="price-list__number">¥10,000</p>
							</li>
							<li class="price-list__item">
								<p class="price-list__name">ボート体験ダイビング(1日)</p>
								<p class="price-list__number">¥18,000</p>
							</li>
						</ul>
					</div>
					<div class="price-lists__item price-list">
						<div class="price-list__title">ファンダイビング</div>
						<ul class="price-list__items">
							<li class="price-list__item">
								<p class="price-list__name">ビーチダイビング(2ダイブ)</p>
								<p class="price-list__number">¥14,000</p>
							</li>
							<li class="price-list__item">
								<p class="price-list__name">ボートダイビング(2ダイブ)</p>
								<p class="price-list__number">¥18,000</p>
							</li>
							<li class="price-list__item">
								<p class="price-list__name">スペシャルダイビング(2ダイブ)</p>
								<p class="price-list__number">¥24,000</p>
							</li>
							<li class="price-list__item">
								<p class="price-list__name">ナイトダイビング(1ダイブ)</p>
								<p class="price-list__number">¥10,000</p>
							</li>
						</ul>
					</div>
					<div class="price-lists__item price-list">
						<div class="price-list__title">スペシャルダイビング</div>
						<ul class="price-list__items">
							<li class="price-list__item">
								<p class="price-list__name">貸切ダイビング(2ダイブ)</p>
								<p class="price-list__number">¥24,000</p>
							</li>
							<li class="price-list__item">
								<p class="price-list__name">1日ダイビング(3ダイブ)</p>
								<p class="price-list__number">¥32,000</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="top-price__button">
				<a href="<?php echo esc_url(home_url('/price')); ?>" class="button"> View more</a>
			</div>
			<figure class="top-price__fish-image u-desktop">
				<img src="<?php echo get_theme_file_uri(); ?>/assets/images/top-price-fish.png" alt="魚のイラスト" />
			</figure>
		</div>
	</div>
</section>

<div class="contact-wrapper">
	<?php get_template_part('common/contact') ?>
</div>


<?php get_footer(); ?>
