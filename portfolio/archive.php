<!-- header -->
<?php get_header();?>

<!-- タイトル -->
  <h3 class="h3-works"><?php the_title();?></h3>

  <div class="archive-container">

    <!-- ループ処理 -->
    <?php if(have_the_posts()):
      while(have_posts(  )):the_post(  );
    ?>
    
      <?php setup_postdata($post); ?>
        
        <div class="works-item">
          <!-- aタグで投稿記事へのリンクを作成 -->
          <a href="<?php echo get_permalink(); ?>">
            <!-- 投稿記事のアイキャッチ画像とタイトルを表示 -->
            <div class="works-img">
              <?php the_post_thumbnail( ); ?><br><br>
            </div>
            <?php the_title(); ?>
          </a>
        </div>

    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?><!-- 使用した投稿データをリセット -->
    <?php endif; ?>
  </div>
  

<!--footer -->
<?php get_footer();?>
