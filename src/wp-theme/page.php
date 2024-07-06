<?php get_header(); ?>

<section class="mv">
	<figure class="mv__img">
		<picture>
			<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-information.jpg"
				media="(min-width: 768px)" />
			<img src="./assets/images/mv-information-sp.jpg" alt="ファーストビュー画像" />
		</picture>
	</figure>
	<h2 class="mv__title">information</h2>
</section>
<div class="inner">
	<div class="breadcrumb-wrapper">
		<div class="breadcrumb">
			<a href="./index.html">TOP</a>&nbsp;&nbsp;>&nbsp;&nbsp;<a href="#">ダイビング情報</a>
		</div>
	</div>
	<div class="tab tab-layout">
		<figure class="tab__fish-image">
			<img src="./assets/images/container-fish.png" alt="魚のイラスト" />
		</figure>


		<ul class="tab__list">
			<li class="tab__menu js-tab current">
				<p class="tab__text tab__text--01">
					ライセンス<br class="u-mobile" />講習
				</p>
			</li>
			<li class="tab__menu js-tab">
				<p class="tab__text tab__text--02">
					ファン<br class="u-mobile" />ダイビング
				</p>
			</li>
			<li class="tab__menu js-tab">
				<p class="tab__text tab__text--03">
					体験<br class="u-mobile" />ダイビング
				</p>
			</li>
		</ul>
		<div class="tab__contents">
			<div class="tab__content js-content info-card">
				<div class="info-card__container">
					<div class="info-card__body">
						<div class="info-card__title">ライセンス講習</div>
						<div class="info-card__text">
							泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
						</div>
					</div>
					<div class="info-card__img">
						<img src="./assets/images/info-card-img01.jpg" alt="ダイバーが海に浮かんでるのを空から撮影している写真" />
					</div>
				</div>
			</div>
			<div class="tab__content js-content info-card">
				<div class="info-card__container">
					<div class="info-card__body">
						<div class="info-card__title">ファンダイビング</div>
						<div class="info-card__text">
							ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
						</div>
					</div>
					<div class="info-card__img">
						<img src="./assets/images/info-card-img02.jpg" alt="" />
					</div>
				</div>
			</div>
			<div class="tab__content js-content info-card">
				<div class="info-card__container">
					<div class="info-card__body">
						<div class="info-card__title">体験ダイビング</div>
						<div class="info-card__text">
							ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
						</div>
					</div>
					<div class="info-card__img">
						<img src="./assets/images/info-card-img03.jpg" alt="" />
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<section class="contact contact-layout contact-layout--page-information inner" id="contact">
	<div class="contact__inner">
		<div class="contact__container">
			<div class="contact-maparea">
				<div class="contact-maparea__top">
					<div class="contact-maparea__logo">
						<a href="#">
							<picture>
								<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/codeups-contact-logo-pc.jpg"
									media="(min-width: 768px)" />
								<img src="./assets/images/codeups-contact-logo-sp.jpg" alt="コンタクトーロゴ" />
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
					<h2 class="section-heading__subtitle section-heading__subtitle--contact">
						お問い合せ
					</h2>
					<p class="section-heading__text">ご予約・お問い合わせはコチラ</p>
				</div>
				<div class="contact__button">
					<a href="./page-contact.html" class="button">Contact us</a>
				</div>
			</div>
		</div>


	</div>
</section>


<?php get_footer(); ?>
