<?php get_header();?>

  <h3 class="h3-works"><?php the_title();?></h3>

  <!-- 投稿ページの表示 -->
  <div class="works-post-container">

    <?php if(have_posts()):
      while(have_posts(  )):the_post( );
        the_content();
    ?>
    <?php endwhile; endif;?>
  </div>

  <!-- 前ページ、次ページのリンク -->
    <ul class="post-link">
      <li><?php previous_post_link('%link', '< 前の作品へ'); ?></li>
      <li><?php next_post_link('%link', '次の作品へ >'); ?></li>
    </ul>
  </div>


<?php get_footer();?>
