<?php get_header(); ?>
<?php if(have_posts()): the_post(); ?>
<article <?php post_class( 'article-content' ); ?>>
  <div class="article-info">
    <!--カテゴリ取得-->
    <?php if(has_category() ): ?>
    <span class="cat-data">
      <?php echo get_the_category_list( ' ' ); ?>
    </span>
    <?php endif; ?>
    <!--投稿日を取得-->
    <span class="article-date">
      <i class="far fa-clock"></i>
      <time
      datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
      <?php echo get_the_date(); ?>
      </time>
    </span>
    
  </div>
  <!--タイトル-->
  <h1><?php the_title(); ?></h1>
  <!--アイキャッチ取得-->
  <div class="article-img">
    <?php if( has_post_thumbnail() ): ?>
      <?php the_post_thumbnail( 'large' ); ?>
    <?php endif; ?>
  </div>
  <!--本文取得-->
  <?php the_content(); ?>
  <!--タグ-->
  <div class="article-tag">
    <?php the_tags('<ul><li>タグ: </li><li>','</li><li>','</li></ul>'
  ); ?>
  </div>
</article>
<?php endif; ?>

<div class="news__button">

  <a href="http://localhost/wp_shiicreer/wordpress/index.php/category/news/" class="a__btn">記事一覧</a>
</div>

<?php get_footer(); ?>