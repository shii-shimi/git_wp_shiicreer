<?php get_header(); ?>
<!-- 記事ループ -->
<?php if (have_posts()) :
	while (have_posts()) :
		the_post(); ?>

		<!-- 記事のリンク -->
		<div class="news__items">
			<a href="<?php the_permalink(); ?>">

					<!-- 投稿日 -->
					<time datetime="<?php echo get_the_date('Y-m-d'); ?>">
						<?php echo get_the_date(); ?>
					</time>

				<!-- アイキャッチ画像 -->
				<?php the_post_thumbnail('full'); ?>
				<!-- タイトル -->
				
					<p>
						<?php the_title(); ?>
					</p>
				

				
			</a>
		</div>
<?php endwhile;
endif; ?>
<?php get_footer(); ?>