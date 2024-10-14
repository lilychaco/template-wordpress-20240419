<div class="archive-voice archive-voice-layout">
	<div class="archive-voice__inner inner">

		<div class="archive-voice__container fish">

			<!-- カテゴリリスト部分 -->
			<ul class="archive-voice__category-list category-list">
				<li class="category-list__item">
					<!-- すべてのアーカイブページで「ALL」リンクを表示 -->
					<a href="?term=all"
						class="category-list__link <?php echo (!isset($_GET['term']) || $_GET['term'] == 'all') ? 'is-current' : ''; ?>">
						ALL
					</a>
				</li>
				<?php
					// 'voice_category'タクソノミーの用語を取得
					$terms = get_terms(array(
							'taxonomy' => 'voice_category',
							'hide_empty' => false,
					));
					?>
				<?php if (!empty($terms)) : ?>
				<?php foreach ($terms as $term) : ?>
				<li class="category-list__item">
					<!-- カテゴリーリンク -->
					<a href="?term=<?php echo esc_attr($term->slug); ?>"
						class="category-list__link <?php echo (isset($_GET['term']) && $_GET['term'] == $term->slug) ? 'is-current' : ''; ?>">
						<?php echo esc_html($term->name); ?>
					</a>
				</li>
				<?php endforeach; ?>
				<?php endif; ?>
			</ul>

			<!-- 投稿リスト部分 -->
			<ul class="archive-voice__content voice-cards">
				<?php
				if (have_posts()) : while (have_posts()) : the_post();
				?>
				<li class="voice-cards__item voice-card">
					<a href="#" class="voice-card__link">
						<div class="voice-card__body">
							<div class="voice-card__top">
								<div class="voice-card__meta">
									<div class="voice-card__tag">
										<?php
                            $voice_tags = get_the_terms(get_the_ID(), 'voice_tag');
                            if (!empty($voice_tags) && !is_wp_error($voice_tags)) {
                                foreach ($voice_tags as $tag) {
                                    echo '<span>' . esc_html($tag->name) . '</span> ';
                                }
                            } else {
                                echo '<span>タグなし</span>';
                            }
                            ?>
									</div>
									<div class="voice-card__category">
										<?php
                            $terms = get_the_terms(get_the_ID(), 'voice_category');
                            if (!empty($terms) && !is_wp_error($terms)) {
                                foreach ($terms as $term) {
                                    echo '<span>' . esc_html($term->name) . '</span> ';
                                }
                            } else {
                                echo '<span>カテゴリなし</span>';
                            }
                            ?>
									</div>
								</div>
								<div class="voice-card__title">
									<?php the_title(); ?>
								</div>
							</div>
							<figure class="voice-card__img colorbox">
								<?php
                    $thumbnail = get_the_post_thumbnail(get_the_ID(), 'full', array('alt' => get_the_title()));
                    if ($thumbnail) {
                        echo $thumbnail;
                    } else {
                        echo '<img src="' . esc_url(get_theme_file_uri() . '/assets/images/voice01.jpg') . '" alt="' . esc_attr(get_the_title()) . 'の画像" />';
                    }
                    ?>
							</figure>
						</div>
						<div class="voice-card__text">
							<?php the_excerpt(); ?>
						</div>
					</a>
				</li>
				<?php endwhile; endif; ?>
			</ul>

			<div class="archive-voice__nav page-nav">
				<ul class="page-nav__pager">
					<?php if (function_exists('wp_pagenavi')) {
            wp_pagenavi(); } ?>
				</ul>
			</div>
		</div>
	</div>
