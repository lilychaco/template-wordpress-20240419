<?php get_header(); ?>
<section class="mv">
	<figure class="mv__img">
		<picture>
			<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-sitemap.jpg" media="(min-width: 768px)" />
			<img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-sitemap-sp.jpg" alt="ファーストビュー画像" />
		</picture>
	</figure>

	<!-- タイトルの出力 -->
	<h2 class="mv__title">
		<?php
        if (is_page('privacy-policy')) {
            echo 'Privacy&nbsp;Policy';
        } elseif (is_page('terms-of-service')) {
            echo 'Terms&nbsp;of&nbsp;Service';
        } else {
            the_title(); // 他のページの場合はページタイトルを出力
        }
        ?>
	</h2>
</section>
<?php get_template_part('common/breadcrumb') ?>


<div class="content-wrapper">
	<div class="inner">
		<?php if (is_page('privacypolicy')) : ?>
		<!-- プライバシーポリシーのコンテンツ -->
		<h3 class="page-privacy__title fish">プライバシーポリシー</h3>
		<div class="page-privacy__box">
			<p class="page-privacy__text">
				以下は、Webサイトで使用するための一般的なプライバシーポリシーの例です。
			</p>

			<ol class="page-privacy__number-list page-privacy__number-list--01">
				<li>
					概要 当社は、お客様の個人情報を大切に扱<br class="u-mobile" />い、個人情報保護に努めています。本プライバシーポリシーには、当社がどのように個人情報を収集し、使用するかについて説明しています。
				</li>
				<li>
					収集する情報
					当社は、お客様が当社のサービスを利用する際に、お名前、住所、電話番号、メールアドレスなどの個人情報を収集する場合があります。
				</li>
			</ol>

			<p class="page-privacy__text">
				また、当社のサイトを閲覧する際に、IPアドレス、ブラウザの種類、言語設定、アクセス日時などの情報も収集する場合があります。
			</p>
			<ol class="page-privacy__number-list">
				<li>
					情報の使用
					当社は、お客様から収集した個人情報を、以下の目的で使用することがあります。
				</li>
			</ol>

			<p class="page-privacy__text">
				・お客様からのお問い合わせやサポートの提供
				・当社のサービスや製品の提供
				・当社のサイトの改善や新しいサービスの開発
				・法律や規制に基づく義務の履行
			</p>
			<ol class="page-privacy__number-list">
				<li>
					情報の共有
					当社は、お客様から収集した個人情報を、以下の場合に限り第三者に提供することがあります。
				</li>
			</ol>

			<p class="page-privacy__text">
				・お客様の同意がある場合 ・法律や規制に基づく場合
				・当社が信頼できると判断した業務委託先に必要な範囲で提供する場合
			</p>
			<ol class="page-privacy__number-list">
				<li>
					セキュリティ
					当社は、お客様の個人情報を適切に保護するために、適切な安全対策を講じます。個人情報への不正アクセス、紛失、改ざん、漏洩等を防止するための措置を講じます。
				</li>
				<li>
					Cookieの使用
					当社は、お客様により良いサイトの利用体験を提供するために、Cookieを使用する場合があります。Cookieは、お客様が当社のサイトを訪れた際に、お客様のブラウザに保存される小さなデータファイルです。Cookieには個人情報は含まれません。
				</li>
				<li>
					お問い合わせ先 当社のプライバシーポリ<br class="u-mobile" />シーに関するご質問やご意見は、以下の連絡先までお問い合わせください。
					&lbrack;会社名&rbrack; &lbrack;住所&rbrack;
					&lbrack;電話番号&rbrack; &lbrack;メールアドレス&rbrack;
				</li>
				<li>
					プライバシーポリシーの変更
					当社は、必要に応じて本プライバシーポリシーを変更することがあります。変更後のプライバシーポリシーは、当社のサイトに掲載された時点から効力を有するものとします。変更があった場合、当社は適切な手段でお知らせします。
				</li>
			</ol>
			<p class="page-privacy__text">
				以上が、当社のプライバシーポリシーの概要です。お客様の個人情報保護のために、常に努めてまいります。
			</p>
		</div>
		<?php elseif (is_page('terms-of-service')) : ?>
		<!-- 利用規約のコンテンツ -->
		<h3 class="page-service__title fish">利用規約</h3>
		<div class="page-service__box">
			<p class="page-service__text">
				以下は、Webサイトで使用する一般的な利用規約の例です。
			</p>

			<ol class="page-service__number-list">
				<li>
					概要 この利用規約は、当社が提供するサー<br
						class="u-mobile" />ビスの利用に関する条件を定めたものです。本規約に同意いただくことで、当社のサービスを利用いただけます。なお、本規約に違反した場合、当社はサービスの提供を中止することがあります。
				</li>
				<li>
					サービスの利用 当社のサービスは、お客様<br
						class="u-mobile" />が自己責任において利用するものとし、当社はその利用に対して責任を負いません。また、当社はいつでも、サービスの提供を中止することができるものとします。
				</li>
				<li>禁止事項 お客様は、以下の行為を禁止します。</li>
			</ol>
			<p class="page-service__text page-service__text--line">
				・当社のサービスに対して不正なアクセスをすること
				・当社のサービスにおいて、他のユー<br class="u-mobile" />ザーに対して迷惑をかける行為をすること
				・当社のサービスを商業目的で利用すること
				・当社のサービスに関する知的財産権を侵害する行為をすること
				・その他、法律や公序良俗に反する行為をすること
			</p>

			<ol class="page-service__number-list">
				<li>
					知的財産権 当社のサービスに関する知的財<br
						class="u-mobile" />産権は、当社または当社にライセンスを許諾している者に帰属します。お客様は、当社の事前の承諾なしに、当社のサービスに関する知的財産権を使用することはできません。
				</li>
				<li>
					免責事項 当社は、当社のサービスに関連し<br class="u-mobile" />て発生した損害について、一切の責任を負わないものとします。また、当社は、当社の<br
						class="u-mobile" />サービスにより提供される情報の正確性、信頼性、完全性、適時性についても一切保証しません。
				</li>
				<li>
					プライバシー 当社は、お客様の個人情報を<br class="u-mobile" />適切に保護するために、個人情報保護方針に従って適切な取扱いを行います。
				</li>
				<li>
					その他の規定 本規約は、日本法に準拠して<br
						class="u-mobile" />解釈されるものとし、当社とお客様は、本規約に関する紛争が生じた場合、東京地方裁判所を第一審の専属的合意管轄裁判所とすることに同意します。
				</li>
				<li>
					利用規約の変更 当社は、必要に応じて本利<br
						class="u-mobile" />用規約を変更することがあります。変更後の利用規約は、当社のサイトに掲載された時点から効力を有するものとします。変更があった場合、当社は適切な手段でお知らせします。
				</li>
			</ol>
			<p class="page-service__text page-service__text--end">
				以上が、当社の利用規約の概要です。お客様のサービス利用にあたっては、本規約をお読みいただき、同意いただける場合のみサービスをご利用ください。
			</p>
		</div>
		<?php else : ?>
		<!-- 他のページの場合、一般的なテンプレート内容を表示 -->
		<h3 class="page-default__title"><?php the_title(); ?></h3>
		<div class="page-content">
			<?php the_content(); ?>
		</div>
		<?php endif; ?>
	</div>
</div>








<div class="contact-wrapper">
	<?php get_template_part('common/contact') ?>
</div>



<?php get_footer(); ?>
