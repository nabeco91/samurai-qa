<?php get_header( ); ?>

<body>
    <!-- floater button -->
    <a href="contact.html"><button id="float-button">CONTACT</button>
    </a>

    <!-- main -->
    <section class="main">
      <img main-img src="<?php echo get_template_directory_uri( );?>/img/main2.jpg"  class="main-animation slideup" alt="image">
    </section>
    <!-- main finish -->

    <!-- works start -->
    <section class="works">
      <h2 class="h2-home">WORKS</h2>
      <!-- WP投稿をスライダー表示 -->
      <a href="<?php echo get_template_directory_uri( );?>/works.html" class="works-button-link">
        <button class="works-button">WORKS一覧へ</button>
      </a>
    </section>
    <!-- works finish -->

    <!-- skill start -->
    <section id="skill">
      <h2 class="h2-home-beige">SKILL</h2>
        <div class="skill.container">
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
                <p>スマホで見ても表示崩れのないレスポンシブ対応も可能です。</p>
              </div>
            </div>
          </div>
        
        
          <div class="skill-container-bottom">
            <div class="skill-item">
              <img src="<?php echo get_template_directory_uri( );?>/img/skills/js.png" alt="JavaScript">
              <div class="skill-text">
                <p><span>JavaScript</span></p>
                <p>スマホで見ても表示崩れのないレスポンシブ対応も可能です。</p>
              </div>
            </div>
            <div class="skill-item">
              <img src="<?php echo get_template_directory_uri( );?>/img/skills/photoshop.png" alt="Photoshop">
              <div class="skill-text">
                <p><span>Photoshop</span></p>
                <p>スマホで見ても表示崩れのないレスポンシブ対応も可能です。</p>
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
      <a href="contact.html" class="contact-button-link">
        <button class="button-contact">お問い合わせフォームへ
        </button>
      </a>
    </section>

    <?php get_footer(); ?>