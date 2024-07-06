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
<?php get_template_part('common/breadcrumb') ?>

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
	<?php get_template_part('common/contact') ?>
</div>
<?php get_footer(); ?>
