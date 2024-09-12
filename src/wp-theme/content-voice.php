<div class="archive-voice archive-voice-layout">
	<div class="archive-voice__inner inner">

		<div class="archive-voice__container fish">
			<?php if (!empty($terms) && !is_wp_error($terms)) : ?>
			<!-- カテゴリリスト部分 -->
			<ul class="archive-voice__category-list category-list">
				<li class="category-list__item">
					<!-- すべてのアーカイブページで「ALL」リンクを表示 -->
					<a href="<?php echo esc_url($voice); ?>" class="category-list__link <?php echo esc_attr($is_current); ?>">
						ALL
					</a>
				</li>
				<?php
					// 'voice_category'タクソノミーの用語を取得
					$terms = get_terms(array(
							'taxonomy' => 'voice-category',
							'hide_empty' => false,
					));
					// 現在のクエリオブジェクトを取得
					$current_term = get_queried_object();
					?>
				<?php foreach ($terms as $term) :
						// 用語のリンクを取得
						$term_link = get_term_link($term);
						// リンクがWP_Errorでないことを確認
						if (!is_wp_error($term_link)) {
								$term_name = $term->name;
								// 現在表示されている用語かどうかを判定
								$is_current = '';
								if (is_a($current_term, 'WP_Term')) {
										$is_current = ($term->term_id == $current_term->term_id) ? 'is-current' : '';
								}
						?>
				<li class="category-list__item">
					<!-- カテゴリーリンク -->
					<a href="<?php echo esc_url($term_link); ?>" class="category-list__link <?php echo esc_attr($is_current); ?>">
						<?php echo esc_html($term_name); ?>
					</a>
				</li>
				<?php } ?>
				<?php endforeach; ?>
			</ul>
			<?php endif; ?>
			<!-- 投稿リスト部分 -->
			<ul class="archive-voice__content voice-cards">
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
				<li class="voice-cards__item voice-card">
					<a href="#" class="voice-card__link">
						<div class="voice-card__body">
							<div class="voice-card__top">
								<div class="voice-card__meta">
									<div class="voice-card__tag">
										<?php
                            $voice_tags = get_the_terms( get_the_ID(), 'voice_tag' );
                            if ( ! empty( $voice_tags ) && ! is_wp_error( $voice_tags ) ) {
                                foreach( $voice_tags as $tag ) {
                                    echo '<span>' . esc_html( $tag->name ) . '</span> ';
                                }
                            } else {
                                echo '<span>タグなし</span>';
                            }
                            ?>
									</div>
									<div class="voice-card__category">
										<?php
                                $terms = get_the_terms( get_the_ID(), 'voice-category' );
                                if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
                                    foreach( $terms as $term ) {
                                        echo '<span>' . esc_html( $term->name ) . '</span> ';
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
                    // アイキャッチ画像を取得して変数に格納
                    $thumbnail = get_the_post_thumbnail(get_the_ID(), 'full', array('alt' => get_the_title()));
										// アイキャッチ画像がある場合は表示し、ない場合はデフォルト画像を表示
								if ( $thumbnail ) {
                        echo $thumbnail;
                    } else {
                        // デフォルトの画像のalt属性を投稿タイトルに変更
                        echo '<img src="' . esc_url( get_theme_file_uri() . '/assets/images/voice01.jpg' ) . '" alt="' . esc_attr( get_the_title() ) . 'の画像" />';
                    }
                    ?>
							</figure>
						</div>
						<div class="voice-card__text">
							<?php the_excerpt(); // 抜粋を表示 ?>
						</div>
					</a>
				</li>
				<?php endwhile; endif; ?>
			</ul>
		</div>
		<div class="archive-voice__nav page-nav">
			<ul class="page-nav__pager">
				<?php if (function_exists('wp_pagenavi')) {
            wp_pagenavi(); } ?>
			</ul>
		</div>
	</div>
</div>
