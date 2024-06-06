<?php get_header(); ?>

<section class="fv">
	<div class="fv__slider-wrap">
		<div class="fv__slider swiper js-fv-swiper">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<figure class="fv__slider-img">
						<picture>
							<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/FV-pc1.jpg"
								media="(min-width: 768px)" />
							<img src="<?php echo get_theme_file_uri(); ?>/assets/images/FV-sp1.jpg" alt="ファーストビュー画像1" />
						</picture>
					</figure>
				</div>
				<div class="swiper-slide">
					<figure class="fv__slider-img">
						<picture>
							<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/FV-pc2.jpg"
								media="(min-width: 768px)" />
							<img src="<?php echo get_theme_file_uri(); ?>/assets/images/FV-sp2.jpg" alt="ファーストビュー画像2" />
						</picture>
					</figure>
				</div>
				<div class="swiper-slide">
					<figure class="fv__slider-img">
						<picture>
							<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/FV-pc3.jpg"
								media="(min-width: 768px)" />
							<img src="<?php echo get_theme_file_uri(); ?>/assets/images/FV-sp3.jpg" alt="ファーストビュー画像3" />
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
			<ul class="top-campaign__cards campaign-cards swiper-wrapper">
				<li class="campaign-cards__item campaign-card swiper-slide">
					<figure class="campaign-card__img">
						<img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign1.jpg" alt="キャンペーンの画像" />
					</figure>
					<div class="campaign-card__body">
						<div class="campaign-card__top">
							<div class="campaign-card__category">ライセンス講習</div>
							<div class="campaign-card__title">ライセンス取得</div>
						</div>
						<div class="campaign-card__text">
							<p class="campaign-card__price-info">
								全部コミコミ(お一人様)
							</p>
							<p class="campaign-card__price-text">
								<span>¥56,000</span>¥46,000
							</p>
						</div>
					</div>
				</li>
				<li class="campaign-cards__item campaign-card swiper-slide">
					<figure class="campaign-card__img">
						<img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign2.jpg" alt="キャンペーンの画像" />
					</figure>
					<div class="campaign-card__body">
						<div class="campaign-card__top">
							<div class="campaign-card__category">体験ダイビング</div>
							<div class="campaign-card__title">貸切体験ダイビング</div>
						</div>
						<div class="campaign-card__text">
							<div class="campaign-card__price-info">
								全部コミコミ(お一人様)
							</div>
							<div class="campaign-card__price-text">
								<span>¥24,000</span>¥18,000
							</div>
						</div>
					</div>
				</li>
				<li class="campaign-cards__item campaign-card swiper-slide">
					<figure class="campaign-card__img">
						<img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign3.jpg" alt="キャンペーンの画像" />
					</figure>
					<div class="campaign-card__body">
						<div class="campaign-card__top">
							<div class="campaign-card__category">体験ダイビング</div>
							<div class="campaign-card__title">ナイトダイビング</div>
						</div>
						<div class="campaign-card__text">
							<div class="campaign-card__price-info">
								全部コミコミ(お一人様)
							</div>
							<div class="campaign-card__price-text">
								<span>¥10,000</span>¥8,000
							</div>
						</div>
					</div>
				</li>
				<li class="campaign-cards__item campaign-card swiper-slide">
					<figure class="campaign-card__img">
						<img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign4.jpg" alt="キャンペーンの画像" />
					</figure>
					<div class="campaign-card__body">
						<div class="campaign-card__top">
							<div class="campaign-card__category">ファンダイビング</div>
							<div class="campaign-card__title">貸切ファンダイビング</div>
						</div>
						<div class="campaign-card__text">
							<div class="campaign-card__price-info">
								全部コミコミ(お一人様)
							</div>
							<div class="campaign-card__price-text">
								<span>¥56,000</span>¥46,000
							</div>
						</div>
					</div>
				</li>
				<li class="campaign-cards__item campaign-card swiper-slide">
					<figure class="campaign-card__img">
						<img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign1.jpg" alt="キャンペーンの画像" />
					</figure>
					<div class="campaign-card__body">
						<div class="campaign-card__top">
							<div class="campaign-card__category">ライセンス講習</div>
							<div class="campaign-card__title">ライセンス取得</div>
						</div>
						<div class="campaign-card__text campaign-price">
							<div class="campaign-card__price-info">
								全部コミコミ(お一人様)
							</div>
							<div class="campaign-card__price-text">
								<span>¥56,000</span>¥46,000
							</div>
						</div>
					</div>
				</li>
				<li class="campaign-cards__item campaign-card swiper-slide">
					<figure class="campaign-card__img">
						<img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign1.jpg" alt="キャンペーンの画像" />
					</figure>
					<div class="campaign-card__body">
						<div class="campaign-card__top">
							<div class="campaign-card__category">ライセンス講習</div>
							<div class="campaign-card__title">ライセンス取得</div>
						</div>
						<div class="campaign-card__text">
							<div class="campaign-card__price-info">
								全部コミコミ(お一人様)
							</div>
							<div class="campaign-card__price-text">
								<span>¥56,000</span>¥46,000
							</div>
						</div>
					</div>
				</li>
				<li class="campaign-cards__item campaign-card swiper-slide">
					<figure class="campaign-card__img">
						<img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign1.jpg" alt="キャンペーンの画像" />
					</figure>
					<div class="campaign-card__body">
						<div class="campaign-card__top">
							<div class="campaign-card__category">ライセンス講習</div>
							<div class="campaign-card__title">ライセンス取得</div>
						</div>
						<div class="campaign-card__text">
							<div class="campaign-card__price-info">
								全部コミコミ(お一人様)
							</div>
							<div class="campaign-card__price-text">
								<span>¥56,000</span>¥46,000
							</div>
						</div>
					</div>
				</li>
				<li class="campaign-cards__item campaign-card swiper-slide">
					<figure class="campaign-card__img">
						<img src="<?php echo get_theme_file_uri(); ?>/assets/images/campaign2.jpg" alt="キャンペーンの画像" />
					</figure>
					<div class="campaign-card__body">
						<div class="campaign-card__top">
							<div class="campaign-card__category">体験ダイビング</div>
							<div class="campaign-card__title">貸切体験ダイビング</div>
						</div>
						<div class="campaign-card__text">
							<div class="campaign-card__price-info">
								全部コミコミ(お一人様)
							</div>
							<div class="campaign-card__price-text">
								<span>¥24,000</span>¥18,000
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>

		<div class="top-campaign__button">
			<a href="archive-campaign.html" class="button">View&nbsp;more</a>
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
						<a href="aboutus.html" class="button"> View more </a>
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
					<a href="./page-information.html" class="button"> View more </a>
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
			<a href="archive-blog.html" class="button"> View more</a>
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
								<div class="voice-card__generation">20代(女性)</div>
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
								<div class="voice-card__generation">20代(男性)</div>
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
			<a href="./page-voice.html" class="button"> View more</a>
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
				<a href="<?php echo get_theme_file_uri(); ?>/page-price.html" class="button"> View more</a>
			</div>
			<figure class="top-price__fish-image u-desktop">
				<img src="<?php echo get_theme_file_uri(); ?>/assets/images/top-price-fish.png" alt="魚のイラスト" />
			</figure>
		</div>
	</div>
</section>

<section class="contact-layout contact inner" id="contact">
	<div class="contact__inner">
		<div class="contact__container">
			<div class="contact-maparea">
				<div class="contact-maparea__top">
					<div class="contact-maparea__logo">
						<a href="#">
							<picture>
								<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/codeups-contact-logo-pc.jpg"
									media="(min-width: 768px)" />
								<img src="<?php echo get_theme_file_uri(); ?>/assets/images/codeups-contact-logo-sp.jpg"
									alt="コンタクトーロゴ" />
							</picture>
						</a>
					</div>
				</div>
				<div class="contact-maparea__body">
					<div class="contact-maparea__address">
						<p>沖縄県那覇市1-1</p>
						<p>TEL:0120-000-0000</p>
						<p>営業時間:8:30-19:00</p>
						<p>定休日:毎週火曜日</p>
					</div>
					<div class="contact-maparea__map-wrapper">
						<div class="contact-maparea__map">
							<iframe
								src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3506.2808799997147!2d129.6873916108525!3d28.50119587563551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x351f9e89e0a00569%3A0xb48efef363eb23ad!2z44OA44Kk44OT44Oz44Kw44K344On44OD44OX44ON44OQ44O844Op44Oz44OJ!5e0!3m2!1sja!2sjp!4v1702196498890!5m2!1sja!2sjp"
								width="100%" height="auto" style="border: 0" allowfullscreen="" loading="lazy"
								referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					</div>
				</div>
			</div>
			<div class="contact__cta">
				<div class="contact__heading section-heading">
					<h3 class="section-heading__title section-heading__title--contact">
						Contact
					</h3>
					<h2 class="section-heading__subtitle section-heading__subtitle--contact u-desktop">
						お問い合わせ
					</h2>
					<h2 class="section-heading__subtitle section-heading__subtitle--contact u-mobile">
						お問合せ
					</h2>
					<p class="section-heading__text">ご予約・お問い合わせはコチラ</p>
				</div>
				<div class="contact__button">
					<a href="./page-contact.html" class="button">Contact us</a>
				</div>
			</div>
		</div>

		<figure class="contact__fish-image">
			<img src="<?php echo get_theme_file_uri(); ?>/assets/images/contact-fish.png" alt="魚のイラスト" />
		</figure>
	</div>
</section>

<?php get_footer(); ?>
