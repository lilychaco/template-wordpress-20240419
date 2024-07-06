<?php get_header(); ?>
<section class="mv">
	<figure class="mv__img">
		<picture>
			<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-price.jpg" media="(min-width: 768px)" />
			<img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-price-sp.jpg" alt="ファーストビュー画像" />
		</picture>
	</figure>
	<h2 class="mv__title">price</h2>
</section>

<?php get_template_part('common/breadcrumb') ?>

<div class="page-price page-price-layout">
	<div class="page-price__inner inner">
		<div class="page-price__item page-price-list fish">
			<div class="page-price-list__title">
				<div class="page-price-list__heading">
					<div class="page-price-list__icon">
						<img src="<?php echo get_theme_file_uri(); ?>/assets/images/icon01.png" alt="" />
					</div>
					<p>ライセンス講習</p>
				</div>
			</div>
			<ul class="page-price-list__items">
				<li class="page-price-list__item">
					<p class="page-price-list__name">
						オープンウォーター<br class="u-mobile" />ダイバーコース
					</p>
					<p class="page-price-list__number">¥50,000</p>
				</li>
				<li class="page-price-list__item">
					<p class="page-price-list__name">
						アドバンスド<br class="u-mobile" />オープンウォーターコース
					</p>
					<p class="page-price-list__number">¥60,000</p>
				</li>
				<li class="page-price-list__item">
					<p class="page-price-list__name">レスキュー＋EFRコース</p>
					<p class="page-price-list__number">¥70,000</p>
				</li>
			</ul>
		</div>
		<div class="page-price__item page-price-list">
			<div class="page-price-list__title">
				<div class="page-price-list__heading">
					<div class="page-price-list__icon">
						<img src="<?php echo get_theme_file_uri(); ?>/assets/images/icon01.png" alt="" />
					</div>
					<p>体験ダイビング</p>
				</div>
			</div>
			<ul class="page-price-list__items">
				<li class="page-price-list__item">
					<p class="page-price-list__name">
						ビーチ体験ダイビング<br class="u-mobile" />(半日)
					</p>
					<p class="page-price-list__number">¥7,000</p>
				</li>
				<li class="page-price-list__item">
					<p class="page-price-list__name">
						ビーチ体験ダイビング<br class="u-mobile" />(1日)
					</p>
					<p class="page-price-list__number">¥14,000</p>
				</li>
				<li class="page-price-list__item">
					<p class="page-price-list__name">
						ボート体験ダイビング<br class="u-mobile" />(半日)
					</p>
					<p class="page-price-list__number">¥10,000</p>
				</li>
				<li class="page-price-list__item">
					<p class="page-price-list__name">
						ボート体験ダイビング<br class="u-mobile" />(1日)
					</p>
					<p class="page-price-list__number">¥18,000</p>
				</li>
			</ul>
		</div>
		<div class="page-price__item page-price-list">
			<div class="page-price-list__title">
				<div class="page-price-list__heading">
					<div class="page-price-list__icon">
						<img src="<?php echo get_theme_file_uri(); ?>/assets/images/icon01.png" alt="" />
					</div>
					<p>ファンダイビング</p>
				</div>
			</div>
			<ul class="page-price-list__items">
				<li class="page-price-list__item">
					<p class="page-price-list__name">
						ビーチダイビング<br class="u-mobile" />(2ダイブ)
					</p>
					<p class="page-price-list__number">¥14,000</p>
				</li>
				<li class="page-price-list__item">
					<p class="page-price-list__name">
						ボートダイビング<br class="u-mobile" />(2ダイブ)
					</p>
					<p class="page-price-list__number">¥18,000</p>
				</li>
				<li class="page-price-list__item">
					<p class="page-price-list__name">
						スペシャルダイビング<br class="u-mobile" />(2ダイブ)
					</p>
					<p class="page-price-list__number">¥24,000</p>
				</li>
				<li class="page-price-list__item">
					<p class="page-price-list__name">
						ナイトダイビング<br class="u-mobile" />(1ダイブ)
					</p>
					<p class="page-price-list__number">¥10,000</p>
				</li>
			</ul>
		</div>
		<div class="page-price__item page-price-list">
			<div class="page-price-list__title">
				<div class="page-price-list__heading">
					<div class="page-price-list__icon">
						<img src="<?php echo get_theme_file_uri(); ?>/assets/images/icon01.png" alt="" />
					</div>
					<p>スペシャルダイビング</p>
				</div>
			</div>
			<ul class="page-price-list__items">
				<li class="page-price-list__item">
					<p class="page-price-list__name">
						貸切ダイビング<br class="u-mobile" />(2ダイブ)
					</p>
					<p class="page-price-list__number">¥24,000</p>
				</li>
				<li class="page-price-list__item">
					<p class="page-price-list__name">
						1日ダイビング<br class="u-mobile" />(3ダイブ)
					</p>
					<p class="page-price-list__number">¥32,000</p>
				</li>
				<li class="page-price-list__item">
					<p class="page-price-list__name">
						ナイトダイビング<br class="u-mobile" />(3ダイブ)
					</p>
					<p class="page-price-list__number">¥14,000</p>
				</li>
			</ul>
		</div>
	</div>
</div>

<div class="contact-wrapper">
	<?php get_template_part('common/contact') ?>
</div>

<?php get_footer(); ?>
