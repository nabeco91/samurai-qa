<?php get_header( ); ?>

    <!-- floater button -->
    <a href="<?php echo home_url( );?>/contact/"><button id="float-button">CONTACT</button>
    </a>

    <!-- main -->
    <section class="main">
      <img main-img src="<?php echo get_template_directory_uri( );?>/img/main2.jpg"  class="main-animation slideup" alt="image">
    </section>
    <!-- main finish -->
    
    <!-- works start -->
    <section id="works">
      <h2 class="h2-home">WORKS</h2>
        <div class="works-container">
          <?php
            //取得したい投稿記事などの条件を引数として渡す
            $args = array(
                // 投稿タイプ
                'post_type'      => 'post',
                // カテゴリー名
                'category_name' => 'work',
                // 1ページに表示する投稿数
                'posts_per_page' => 3,
            );
            // データの取得
            $posts = get_posts($args);
          ?>

          <!-- ループ処理 -->
          <?php foreach($posts as $post): ?>
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

            <?php endforeach; ?>
          </div>
          <?php wp_reset_postdata(); ?><!-- 使用した投稿データをリセット -->

          <!-- moreボタン　-->
      <a href="<?php echo home_url();?>/works/" class="works-button-link">
        <button class="works-button">WORKS一覧へ</button>
      </a>
    </section>
    <!-- works finish -->

    <!-- skill start -->
    <section id="skill">
      <h2 class="h2-home-beige">SKILL</h2>
        <div class="skill-container">
          <div class="skill-container-top">
            <div class="skill-item">
              <img src="<?php echo get_template_directory_uri( );?>/img/skills/html.png" alt="HTML/CSS">
              <div class="skill-text">
                <p><span>HTML/CSS</span></p>
                <p>スマホで見ても表示崩れのないレスポンシブ対応も可能です。</p>
              </div>
            </div>
            <div class="skill-item">
              <img src="<?php echo get_template_directory_uri( );?>/img/skills/wordpress.png" alt="WordPress">
              <div class="skill-text">
                <p><span>WordPress</span></p>
                <p>WordPress製の店舗HP・企業HP・メディアサイトなど、Webサイトを0から構築することが可能です。</p>
              </div>
            </div>
          </div>
        
        
          <div class="skill-container-bottom">
            <div class="skill-item">
              <img src="<?php echo get_template_directory_uri( );?>/img/skills/js.png" alt="JavaScript">
              <div class="skill-text">
                <p><span>JavaScript</span></p>
                <p>お問い合わせフォームやスクロール時のフェードインなど動きのあるWebサイトを作る事が可能です。</p>
              </div>
            </div>
            <div class="skill-item">
              <img src="<?php echo get_template_directory_uri( );?>/img/skills/photoshop.png" alt="Photoshop">
              <div class="skill-text">
                <p><span>Photoshop</span></p>
                <p>Webサイトに必要不可欠なクリエイティブバナーを作ることが可能です。</p>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- skill finish -->

    <!-- about start -->
    <section id="about">
      <h2 class="h2-home">ABOUT</h2>
      <div class="about-container">
        <p>フリーランスとしてホームページ・LPなどのWEBサイトの他、バナー・Instagram投稿画像・サムネイル制作を行なっております。<br>
        前職は商業施設の開発運営を主事業とする企業のプロモーション部門にて、企画〜実行・代理店との折衝・チームリーダーとしてチームの進捗管理を行なうほか、営業をしておりました。対面・非対面問わず、テキストコミュニケーションであっても、意思疎通をしっかりと図ります。<br>
        丁寧なヒアリングと持ち前の強い責任感で、ご依頼者様のご要望にとことん寄り添って対応させていただきます。お気軽にお問い合わせください。
        </p>
      </div>
    </section>
    <!-- about finish -->

    <!-- contact start -->
    <section class="contact">
      <h2 class="h2-home-beige">CONTACT</h2>
      <p>お問い合わせは、お問い合わせフォームよりお願いいたします。</p>
      <a href="<?php echo home_url();?>/contact/" class="contact-button-link">
        <button class="button-contact">お問い合わせフォームへ
        </button>
      </a>
    </section>

    <?php get_footer(); ?>