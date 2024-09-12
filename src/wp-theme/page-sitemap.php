<?php get_header(); ?>
<section class="mv">
	<figure class="mv__img">
		<picture>
			<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-sitemap.jpg" media="(min-width: 768px)" />
			<img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-sitemap-sp.jpg" alt="ファーストビュー画像" />
		</picture>
	</figure>
	<h2 class="mv__title">site MAP</h2>
</section>

<?php get_template_part('common/breadcrumb') ?>

<div class="page-sitemap page-sitemap-layout">
	<div class="page-sitemap__inner inner">
		<div class="fish u-mobile"></div>

		<div class="page-sitemap__nav nav-menu">
			<!-- ブロック1 -->
			<div class="nav-menu__box nav-menu__box--01">
				<div class="nav-menu__item">
					<a href="archive-campaign.html">
						<p class="starfish-icon02">キャンペーン</p>
					</a>
					<ul>
						<li><a href="#">ライセンス取得</a></li>
						<li><a href="#">貸切体験ダイビング</a></li>
						<li><a href="#">ナイトダイビング</a></li>
					</ul>
				</div>
				<div class="nav-menu__item nav-menu__item--01">
					<a href="page-aboutus.html">
						<p class="starfish-icon02">私たちについて</p>
					</a>
				</div>
			</div>

			<!-- ブロック2 -->
			<div class="nav-menu__box nav-menu__box--02">
				<div class="nav-menu__item">
					<a href="page-information.html">
						<p class="starfish-icon02">ダイビング情報</p>
					</a>
					<ul>
						<li>
							<a href="page-information.html#license-training">ライセンス講習</a>
						</li>
						<li>
							<a href="page-information.html#trial-diving">体験ダイビング</a>
						</li>
						<li>
							<a href="page-information.html#fun-diving">ファンダイビング</a>
						</li>
					</ul>
				</div>
				<div class="nav-menu__item nav-menu__item--01">
					<a href="archive-blog.html">
						<p class="starfish-icon02">ブログ</p>
					</a>
				</div>
			</div>

			<!-- ブロック3 -->
			<div class="nav-menu__box nav-menu__box--05">
				<div class="nav-menu__item">
					<a href="archive-voice.html">
						<p class="starfish-icon02">お客様の声</p>
					</a>
				</div>
				<div class="nav-menu__item">
					<a href="page-price.html">
						<p class="starfish-icon02">料金一覧</p>
					</a>
					<ul>
						<li>
							<a href="page-information.html#license-training">ライセンス講習</a>
						</li>
						<li>
							<a href="page-information.html#trial-diving">体験ダイビング</a>
						</li>
						<li>
							<a href="page-information.html#fun-diving">ファンダイビング</a>
						</li>
					</ul>
				</div>
			</div>

			<!-- ブロック4 -->
			<div class="nav-menu__box nav-menu__box--06">
				<div class="nav-menu__item">
					<a href="page-faq.html">
						<p class="starfish-icon02">よくある質問</p>
					</a>
				</div>
				<div class="nav-menu__item">
					<a href="page-privacy.html">
						<p class="starfish-icon02">
							プライバシー<br class="u-mobile" />ポリシー
						</p>
					</a>
				</div>
				<div class="nav-menu__item">
					<a href="page-service.html">
						<p class="starfish-icon02">利用規約</p>
					</a>
				</div>
				<div class="nav-menu__item">
					<a href="page-contact.html">
						<p class="starfish-icon02">お問い合わせ</p>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="contact-wrapper">
	<?php get_template_part('common/contact') ?>
</div>
<?php get_footer(); ?>
