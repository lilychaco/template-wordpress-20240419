<?php get_header(); ?>

<?php if (is_post_type_archive('campaign')) : ?>

<section class="mv">
	<figure class="mv__img">
		<picture>
			<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-campaign.jpg" media="(min-width: 768px)" />
			<img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-campaign-sp.jpg" alt="ファーストビュー画像" />
		</picture>
	</figure>

	<h2 class="mv__title">campaign</h2>
</section>
<?php get_template_part('common/breadcrumb'); ?>
<?php get_template_part('content', 'campaign'); ?>

<?php elseif (is_post_type_archive('voice')) : ?>
<section class="mv">
	<figure class="mv__img">
		<picture>
			<source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/mv-voice.jpg" media="(min-width: 768px)" />
			<img src="<?php echo get_theme_file_uri(); ?>/assets/images/mv-voice-sp.jpg" alt="ファーストビュー画像" />
		</picture>
	</figure>
	<h2 class="mv__title">voice</h2>
</section>
<?php get_template_part('common/breadcrumb'); ?>
<?php get_template_part('content', 'voice'); ?>
<?php else : ?>
<!-- 他のアーカイブページのための汎用テンプレート -->
<h1><?php post_type_archive_title(); ?></h1>
<?php endif; ?>

<div class="contact-wrapper">
	<?php get_template_part('common/contact'); ?>
</div>

<?php get_footer(); ?>
