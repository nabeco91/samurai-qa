<?php get_header();?>

  <h2 class="h2-home">WORKS</h2>

  <!-- WP投稿機能 -->
  <?php if(have_posts)?>
    <?php while(have_posts(  )):the_post(  );?>
      <a href="<?php echo the_permalink( ); ?>">
        <?php
          the_post_thumbnail(  );
          the_title(  );
          echo wp_trim_words( get_the_content(  ), 50, '...' );
          ?>
      </a>
    <?php endwhile; ?>
    <?php wp_reset_postdata(  );?>
  <?php endif; ?>

<?php get_footer( ); ?>