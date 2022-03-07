<?php get_header(); ?>
<!-- 記事ループ -->
<?php if (have_posts()) :
	while (have_posts()) :
		the_post(); ?>

		<!-- 記事のリンク -->
		<div class="news__items">
			
			
				<!-- アイキャッチ画像 -->
				<?php the_post_thumbnail('full'); ?>


				<div class="news__lite">
					<!-- 投稿日 -->
					<div class="news__time">
						<time datetime="<?php echo get_the_date('Y-m-d'); ?>">
							<?php echo get_the_date(); ?>
						</time>
					</div>
					<a href="<?php the_permalink(); ?>">
					<!-- タイトル -->
						<div class="news__tittle">
							<p>
								<?php the_title(); ?>
							</p>
						</div>
					</a>
				</div>
				
		</div>
<?php endwhile;
endif; ?>

	<div class="btnbox">
            <a href="http://localhost/wp_shiicreer/wordpress/" class="btn btn--orange btn--circle btn--circle-a btn--shadow">
                home
                <img src="<?php bloginfo('template_url'); ?>/img/streamline-icon-interface-edit-pin-3@48x48.png" alt="" class="pin">
            </a>
    </div>


<?php get_footer(); ?>