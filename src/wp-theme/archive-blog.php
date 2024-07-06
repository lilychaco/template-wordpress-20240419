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
<?php get_template_part('common/breadcrumb') ?>

<div class="blog blog-layout">
	<div class="blog__inner inner">
		<div class="blog__container fish">
			<div class="blog__main">
				<ul class="blog__items blog-cards blog-cards--2col">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<!-- ループ処理(例) -->
					<li class="blog-card">
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
					<?php endwhile; endif;?>
				</ul>
				<div class="blog__nav page-nav">
					<div class="page-nav__arrow">
						<a href="#" class="previouspostlink">＜</a>
					</div>
					<ul class="page-nav__pager">
						<li class="page-nav__page">
							<a href="#" class="page-nav__link is-current">1</a>
						</li>
						<li class="page-nav__page">
							<a href="#" class="page-nav__link">2</a>
						</li>
						<li class="page-nav__page">
							<a href="#" class="page-nav__link">3</a>
						</li>
						<li class="page-nav__page">
							<a href="#" class="page-nav__link">4</a>
						</li>
						<li class="page-nav__page u-desktop">
							<a href="#" class="page-nav__link">5</a>
						</li>
						<li class="page-nav__page u-desktop">
							<a href="#" class="page-nav__link">6</a>
						</li>
					</ul>
					<div class="page-nav__arrow">
						<a href="#" class="nextpostlink">＞</a>
					</div>
				</div>
			</div>
			<div class="blog__side side">
				<section class="side-popular">
					<h2 class="side-popular__heading side-heading">人気記事</h2>
					<ul class="side-popular__cards">
						<li class="side-popular__card popular-card">
							<div class="popular-card__img">
								<img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog04.jpg" alt="" />
							</div>
							<div class="popular-card__body">
								<time datetime="2023-11-17" class="popular-card__date">2023.11.17</time>
								<p class="popular-card__title">ライセンス取得</p>
							</div>
						</li>
						<li class="side-popular__card popular-card">
							<div class="popular-card__img">
								<img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog02.jpg" alt="" />
							</div>
							<div class="popular-card__body">
								<time datetime="2023-11-17" class="popular-card__date">2023.11.17</time>
								<p class="popular-card__title">ウミガメと泳ぐ</p>
							</div>
						</li>
						<li class="side-popular__card popular-card">
							<div class="popular-card__img">
								<img src="<?php echo get_theme_file_uri(); ?>/assets/images/blog03.jpg" alt="" />
							</div>
							<div class="popular-card__body">
								<time datetime="2023-11-17" class="popular-card__date">2023.11.17</time>
								<p class="popular-card__title">カクレクマノミ</p>
							</div>
						</li>
					</ul>
				</section>
				<section class="side-voice">
					<h2 class="side-voice__heading side-heading">口コミ</h2>
					<div class="side-voice__content">
						<div class="side-voice__img">
							<img src="<?php echo get_theme_file_uri(); ?>/assets/images/side-voice.jpg" alt="" />
						</div>
						<p class="side-voice__caption">30代(カップル)</p>
						<div class="side-voice__title">
							ここにタイトルが入ります。ここにタイトル
						</div>
						<div class="side-voice__button">
							<a href="./archive-voice.html" class="button"> View more</a>
						</div>
					</div>
				</section>
				<section class="side-campaign">
					<h2 class="side-campaign__heading side-heading">キャンペーン</h2>
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
						<a href="./archive-campaign.html" class="button">View&nbsp;more</a>
					</div>
				</section>
				<section class="side-archive">
					<h2 class="side-archive__heading side-heading">アーカイブ</h2>
					<div class="side-archive__contents">
						<div class="side-archive__year" data-year="2023">
							<div class="side-archive__year-toggle js-year-toggle">
								2023
							</div>
							<div class="side-archive__month-list">
								<div class="side-archive__month">
									<a href="#" class="side-archive__link">3月</a>
								</div>
								<div class="side-archive__month">
									<a href="#" class="side-archive__link">2月</a>
								</div>
								<div class="side-archive__month">
									<a href="#" class="side-archive__link">1月</a>
								</div>
							</div>
						</div>
						<div class="side-archive__year" data-year="2022">
							<div class="side-archive__year-toggle js-year-toggle">
								2022
							</div>
							<div class="side-archive__month-list">
								<div class="side-archive__month">
									<a href="#" class="side-archive__link">3月</a>
								</div>
								<div class="side-archive__month">
									<a href="#" class="side-archive__link">2月</a>
								</div>
								<div class="side-archive__month">
									<a href="#" class="side-archive__link">1月</a>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
			<!--blog__side終わり-->
		</div>
		<!--blog終わり-->
	</div>
</div>

<div class="contact-wrapper">
	<?php get_template_part('common/contact') ?>
</div>
<?php get_footer(); ?>
