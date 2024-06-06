<?php get_header(); ?>
<section class="mv">
	<figure class="mv__img">
		<picture>
			<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-contact.jpg" media="(min-width: 768px)" />
			<img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-contact-sp.jpg" alt="ファーストビュー画像" />
		</picture>
	</figure>
	<h2 class="mv__title">contact</h2>
</section>

<div class="breadcrumb-wrapper">
	<div class="breadcrumb-wrapper__inner inner">
		<div class="breadcrumb">
			<a href="./index.html">TOP</a>&nbsp;&nbsp;>&nbsp;&nbsp;<a
				href="./page-contact.html">お問い合わせ</a>&nbsp;&nbsp;>&nbsp;&nbsp;お問い合わせエラー
		</div>
	</div>
</div>

<div class="page-error page-error-layout">
	<div class="page-error__inner inner">
		<div class="page-error__warning fish">
			<p>
				※必須項目が入力されていません。<br class="u-mobile" />入力してください。
			</p>
		</div>
		<div class="page-error__content form-wrapper">
			<form class="form" method="post">
				<dl class="form__row">
					<dt>お名前<span>必須</span></dt>
					<dd>
						<input type="text" name="name" />
					</dd>
				</dl>
				<dl class="form__row">
					<dt>メールアドレス<span>必須</span></dt>
					<dd>
						<input type="email" name="email" />
					</dd>
				</dl>
				<dl class="form__row">
					<dt>電話番号<span>必須</span></dt>
					<dd>
						<input type="phone" name="phone" />
					</dd>
				</dl>
				<dl class="form__row form__row--radio">
					<dt>お問合せ項目<span>必須</span></dt>
					<dd class="form__radio-wrapper">
						<label class="form__radio" for="divingseminar">
							<input type="radio" name="kinds" id="divingseminar" />
							<span class="form__radio-mark form__radio-mark--error"></span>ダイビング講習について
						</label>
						<label class="form__radio" for="fundiving">
							<input type="radio" name="kinds" id="fundiving" />
							<span class="form__radio-mark form__radio-mark--error"></span>ファンダイビングについて
						</label>
						<label class="form__radio" for="testdiving">
							<input type="radio" name="kinds" id="testdiving" />
							<span class="form__radio-mark form__radio-mark--error"></span>体験ダイビングについて</label>
						<label class="form__radio" for="testdiving">
							<input type="radio" name="kinds" id="testdiving" />
							<span class="form__radio-mark form__radio-mark--error"></span>スペシャルダイビングについて</label>
					</dd>
				</dl>
				<dl class="form__row form__row--select">
					<dt>キャンペーン</dt>
					<dd class="form__select">
						<div class="form__select-items">
							<select id="campaign-select" name="campaign" class="form__select-item">
								<option value="">キャンペーン内容を選択</option>
								<option value="seminar">ライセンス講習</option>
								<option value="fundiving">ファンダイビング</option>
								<option value="testdiving">体験ダイビング</option>
							</select>
						</div>
					</dd>
				</dl>
				<dl class="form__row form__row--message">
					<dt>お問合せ内容<span>必須</span></dt>
					<dd>
						<textarea name="message" id=""></textarea>
					</dd>
				</dl>
				<div class="form__outside">
					<label for="form-privacy" class="form__privacy-label">
						<input type="checkbox" name="privacy" id="form-privacy" value="個人情報保護方針に同意する" />
						<span class="form__privacy-mark"></span>
						個人情報の取り扱いについて同意のうえ送信します。
					</label>
					<div class="form__btn">
						<button type="submit" class="button button--send">Send</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<?php get_footer(); ?>
