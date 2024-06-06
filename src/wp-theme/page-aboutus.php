<?php get_header(); ?>
<section class="mv">
	<figure class="mv__img">
		<picture>
			<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-aboutus.jpg" media="(min-width: 768px)" />
			<img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-aboutus-sp.jpg" alt="ファーストビュー画像" />
		</picture>
	</figure>
	<h2 class="mv__title">about us</h2>
</section>
<div class="breadcrumb-wrapper">
	<div class="breadcrumb-wrapper__inner inner">
		<div class="breadcrumb">
			<a href="./index.html">TOP</a>&nbsp;&nbsp;>&nbsp;&nbsp;私たちについて
		</div>
	</div>
</div>

<div class="page-aboutus page-aboutus-layout">
	<div class="page-aboutus__inner inner">
		<div class="page-aboutus__container">
			<div class="page-aboutus__sp-image u-mobile fish">
				<img src="<?php echo get_theme_file_uri(); ?>/assets/images/page-aboutus-ocean2.jpg" alt="私たちについての画像" />
				<div class="page-aboutus__title page-aboutus__title--sp u-mobile">
					<span>d</span>ive&nbsp;into<br />
					the&nbsp;<span>o</span>cean
				</div>
			</div>
			<div class="page-aboutus__pc-image u-desktop fish">
				<img src="<?php echo get_theme_file_uri(); ?>/assets/images/aboutus-ocean1.jpg" alt="私たちについての画像" />
				<img src="<?php echo get_theme_file_uri(); ?>/assets/images/aboutus-ocean2.jpg" alt="私たちについての画像" />
			</div>
			<div class="page-aboutus__main-wrapper">
				<div class="page-aboutus__main">
					<div class="page-aboutus__title u-desktop">
						<span>d</span>ive&nbsp;into<br />
						the&nbsp;<span>o</span>cean
					</div>
					<div class="page-aboutus__body">
						<div class="page-aboutus__text">
							ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />
							ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="gallery gallery-layout">
	<div class="gallery__inner inner">
		<div class="gallery__heading section-heading">
			<h3 class="section-heading__title">gallery</h3>
			<h2 class="section-heading__subtitle">フォト</h2>
		</div>
		<div class="gallery__content">
			<div class="gallery__item js-modal-open">
				<img src="<?php echo get_theme_file_uri(); ?>/assets/images/gallery1.jpg" alt="海の中の写真" />
			</div>
			<div class="gallery__item js-modal-open">
				<img src="<?php echo get_theme_file_uri(); ?>/assets/images/gallery2.jpg" alt="海の中の写真" />
			</div>
			<div class="gallery__item js-modal-open">
				<img src="<?php echo get_theme_file_uri(); ?>/assets/images/gallery3.jpg" alt="海の中の写真" />
			</div>
			<div class="gallery__item js-modal-open">
				<img src="<?php echo get_theme_file_uri(); ?>/assets/images/gallery4.jpg" alt="海の中の写真" />
			</div>
			<div class="gallery__item js-modal-open">
				<img src="<?php echo get_theme_file_uri(); ?>/assets/images/gallery5.jpg" alt="海の中の写真" />
			</div>
			<div class="gallery__item js-modal-open">
				<img src="<?php echo get_theme_file_uri(); ?>/assets/images/gallery6.jpg" alt="海の中の写真" />
			</div>
		</div>
		<!-- 画像のモーダル時のグレー背景 -->
		<div class="gallery__display" id="grayDisplay"></div>
	</div>
</section>

<div class="contact-wrapper">
	<section class="contact inner" id="contact">
		<div class="contact__inner">
			<div class="contact__container">
				<div class="contact__item contact-maparea">
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
				<div class="contact__item contact-verticalline"></div>
				<div class="contact__item contact__cta">
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
						<p class="section-heading__text">
							ご予約・お問い合わせはコチラ
						</p>
					</div>
					<div class="contact__button">
						<a href="./page-contact.html" class="button">Contact us</a>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<?php get_footer(); ?>
