<body>
  <div id="home">
    <svg class="orangeBackground">
      <rect id="orangeBackground" rx="0" ry="0" x="0" y="0" width="1920" height="325">
      </rect>
    </svg>
    <div id="Logo">
      <img id="n_26" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_26.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_26.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_26@2x.png 2x">      </svg>
    </div>
    <div id="Text">
      <span>慶應義塾大学</span>
    </div>
    <div id="Text_s">
      <span>第３３回七夕祭</span>
    </div>
    <div id="n_1">
      <!-- トップの投稿。手書き部分始め -->
      <div id="sidebar">
        <div>
          <?php 
            $args = array(
              'posts_per_page' => 10,
              'orderby' => 'ID',
              'order' => 'DESC',
              'category_name' => 'TOP',
            );
            $datas = get_posts($args);
            if ($datas):
              foreach ($datas as $post):
                setup_postdata($post);
          ?>
            <a href="<?php echo the_permalink(); ?>" class="post">
              <?php 
                $tags = get_the_tags();
                if ($tags):
                  $tag = $tags[0]->name;
                else:
                  $tag = "NO TAG";
                endif;

                $color_map = array(
                  "ABOUT US" => "#007CAA",
                  "ARCHIVES" => "#3DBBBC",
                  "NO TAG"   => "#AFAFAF",
                );
                if (array_key_exists($tag, $color_map)):
                  $color = $color_map[$tag];
                else:
                  $color = "#F8C363";
                endif;
              ?>
              
              <span class="post_tag" style="background-color: <?php echo $color; ?>"><?php echo $tag; ?></span>
              <span class="post_title"><?php echo the_title(); ?></span>
              <?php the_post_thumbnail(array(250, 60), array("class" => "post_thumnail"))?>
            </a>
          <?php
              endforeach;
            else:
          ?>
            <span id="no_post">まだ投稿はありません</span>
          <?php
            endif;
            wp_reset_postdata();
          ?>
        </div>
      </div>
      <!-- 手書き部分終わり -->
    </div>
    <?php if (count($datas) > 4): ?>
      <script>
        function scroll_top_posts(x) {
          const topPosts = document.getElementById("sidebar");
          topPosts.scroll({
            left: topPosts.scrollLeft + x,
            behavior: 'smooth'
          });
        }
      </script>
      <div id="left_scroll_button" class="scroll_button" onclick="scroll_top_posts(-370);" style="visibility: hidden">
        <img id="n_35" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_35.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_35.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_35@2x.png 2x">      </svg>
      </div>
      <div id="right_scroll_button" class="scroll_button" onclick="scroll_top_posts(370);">
        <img id="n_35" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_35.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_35.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_35@2x.png 2x">      </svg>
      </div>
      <script>
        const topPosts = document.getElementById("sidebar");
        topPosts.onscroll = function() {
          const leftButton = document.getElementById("left_scroll_button");
          const rightButton = document.getElementById("right_scroll_button");
          console.log(`scrollWidth: ${this.scrollWidth}`)
          console.log(`offsetWidth: ${this.offsetWidth}`)
          if (this.scrollLeft === 0) {
            leftButton.style.visibility = "hidden";
          } else if (this.scrollLeft === (this.scrollWidth - this.offsetWidth)) {
            rightButton.style.visibility = "hidden";
          } else {
            leftButton.style.visibility = "visible";
            rightButton.style.visibility = "visible";
          }
        }
      </script>
    <?php endif; ?>
    <div id="n_147">
      <img id="n_146" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_146.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_146.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_146@2x.png 2x">      </svg>
    </div>
    <div id="n_132">
      <div id="n_123">
        <img id="n_122" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_122.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_122.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_122@2x.png 2x">        </svg>
      </div>
      <svg class="n_81">
        <rect id="n_81" rx="20" ry="20" x="0" y="0" width="600" height="594">
        </rect>
      </svg>
      <div id="n_131">
      <?php
        // 取得したい内容を配列に記載します（不要箇所は省略可）
        $args = array(
	    'posts_per_page'   => -1, // 読み込みしたい記事数（全件取得時は-1）
	    'orderby'          => 'ID', // 何順で記事を読み込むか（省略時は日付順）
	    'order'            => 'DESC', // 昇順(ASC)か降順か(DESC）
        );
    
        // 配列で指定した内容で、記事情報を取得
        $datas = get_posts( $args );
    
        // 取得した記事情報の表示
        if ( $datas ): // 記事情報がある場合はforeachで記事情報を表示
            // ↓ ループ開始 ↓
            foreach ( $datas as $post ): // $datas as $post の $datas は取得時に設定した変数名、$postは変更不可
                setup_postdata( $post ); // アーカイブページ同様にthe_titleなどで記事情報を表示できるようにする
    ?>
      <div class="single_content">
        <div class="single_date">
            <span><?php echo mysql2date('Y/n/j', $post->post_date); ?></span>
        </div>
        <div class="single_title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </div>
      </div>
    <?php
        endforeach; 
        // ↑ ループ終了 ↑
        else: // 記事情報がなかったら
    ?>
    <?php
        endif;
        // 一覧情報取得に利用したループをリセットする
        wp_reset_postdata();
    ?>
      </div>
    </div>
    <div id="n_133">
      <svg class="n_80">
        <rect id="n_80" rx="20" ry="20" x="0" y="0" width="485" height="594">
        </rect>
      </svg>
      <div id="n_121">
        <img id="n_120" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_120.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_120.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_120@2x.png 2x">        </svg>
      </div>
      <div class="n_84">
        <a class="twitter-timeline" data-lang="ja" data-dnt="true" data-height="490px" href="https://twitter.com/tanabata_fes?ref_src=twsrc%5Etfw">Tweets by tanabata_fes</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>
      <div id="text22pt595757_e" class="text22pt_595757">
      </div>
    </div>
    <svg class="n_81_e">
      <rect id="n_81_e" rx="20" ry="20" x="0" y="0" width="600" height="300">
      </rect>
    </svg>
    <div id="n_135">
      <img id="n_134" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_134.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_134.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_134@2x.png 2x">      </svg>
    </div>
    <div id="text22pt595757_fa" class="text22pt_595757">
      <div id="Text_fa">
      <div class="countDown">七夕祭まであと
        <span class="countDownText">
          <script language="JavaScript">
            var now = new Date();
            var point = new Date("2022/07/2");
            var countdown = Math.ceil((point.getTime() - now.getTime()) / (1000 * 60 * 60 * 24));
            if (countdown > 0) {
              document.write(countdown);
            }
          </script>
        </span>日
      </div>
      </div>
    </div>
    <div id="n_137">
      <img id="n_136" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_136.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_136.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_136@2x.png 2x">      </svg>
    </div>
    <svg class="n_93">
      <rect id="n_93" rx="20" ry="20" x="0" y="0" width="600" height="488">
      </rect>
    </svg>
    <div id="n_139">
      <div id="text22pt595757_ff" class="text22pt_595757">
        <div id="Text_fg">
          <span>より詳しい七夕祭の情報はこちら</span>
        </div>
      </div>
      <a href="https://tanabata-fes.com/pr.pdf" id="n_138">
        <svg class="n_38_fi">
          <rect id="n_38_fi" rx="20" ry="20" x="0" y="0" width="300" height="87">
          </rect>
        </svg>
        <div id="MB_">
          広報資料（7.3MB）<br/>ダウンロード
        </div>
      </a>
    </div>
    <div id="n_140">
      <div id="text22pt595757_fl" class="text22pt_595757">
        <div id="Text_fm">
          <span>バナー出稿・協賛をお考えの方はこちら</span>
        </div>
      </div>
      <a href="https://tanabata-fes.com/biz.pdf" id="n_138_fn">
        <svg class="n_38_fo">
          <rect id="n_38_fo" rx="20" ry="20" x="0" y="0" width="300" height="87">
          </rect>
        </svg>
        <div id="MB__fp">
          渉外資料（2.7MB）<br/>ダウンロード
        </div>
      </a>
    </div>
    <div id="footer" class="footer">
      <div id="footerMenu">
        <a href="privacy" id="text18pt595757_fs" class="text18pt_595757">
          <div id="Text_ft">
            <span>プライバシーポリシー</span>
          </div>
        </a>
        <a href="donation" id="text18pt595757_fu" class="text18pt_595757">
          <div id="Text_fv">
            <span>ご協賛・ご寄付</span>
          </div>
        </a>
        <a href="access" id="text18pt595757_fw" class="text18pt_595757">
          <div id="Text_fx">
            <span>アクセス</span>
          </div>
        </a>
        <a href="contact" id="text18pt595757_fy" class="text18pt_595757">
          <div id="Text_fz">
            <span>お問い合わせ</span>
          </div>
        </a>
        <div id="n_16">
          <svg class="n_8" viewBox="5.082 7.828 0.136 1.724">
            <path id="n_8" d="M 5.081999778747559 9.552000045776367 L 5.217999935150146 7.828000068664551 L 5.081999778747559 9.552000045776367 Z">
            </path>
          </svg>
          <div id="n_7">
            <img id="n_6" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_6.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_6.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_6@2x.png 2x">            </svg>
          </div>
          <svg class="n_9" viewBox="1 5.674 1.647 0.457">
            <path id="n_9" d="M 1 6.13100004196167 L 2.647000074386597 5.673999786376953 L 1 6.13100004196167 Z">
            </path>
          </svg>
          <div id="n_9_f">
            <img id="n_8_f" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_8_f.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_8_f.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_8_f@2x.png 2x">            </svg>
          </div>
          <svg class="n_10" viewBox="3.074 0.999 0.88 1.443">
            <path id="n_10" d="M 3.953999996185303 2.441999912261963 L 3.073999881744385 0.9990000128746033 L 3.953999996185303 2.441999912261963 Z">
            </path>
          </svg>
          <div id="n_11">
            <img id="n_10_f" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_10_f.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_10_f.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_10_f@2x.png 2x">            </svg>
          </div>
          <svg class="n_25" viewBox="0 0 1.101 1.349">
            <path id="n_25" d="M 1.101000308990479 0 L 0 1.348999977111816">
            </path>
          </svg>
          <div id="n_13">
            <img id="n_12" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_12.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_12.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_12@2x.png 2x">            </svg>
          </div>
          <svg class="n_11_gd" viewBox="8.11 5.928 1.562 0.61">
            <path id="n_11_gd" d="M 9.671999931335449 6.538000106811523 L 8.109999656677246 5.927999973297119 L 9.671999931335449 6.538000106811523 Z">
            </path>
          </svg>
          <div id="n_15">
            <img id="n_14" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_14.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_14.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_14@2x.png 2x">            </svg>
          </div>
        </div>
        <div id="n_18_gg">
          <img id="n_17_gh" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_17_gh.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_17_gh.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_17_gh@2x.png 2x">          </svg>
        </div>
        <div id="n_20">
          <img id="n_19" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_19.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_19.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_19@2x.png 2x">          </svg>
        </div>
      </div>
      <div id="Copyright__2023___All_Rights_R">
        <span>Copyright ©️ 2022 慶應義塾大学 七夕祭 All Rights Reserved. </span>
      </div>
    </div>
    <div id="text22pt595757_gl" class="text22pt_595757">
      <div id="Text_gm">
      </div>
    </div>
    <div id="n_169">
    <img src="<?php bloginfo('template_url'); ?>/desktop/images/home/banner_1.png">
      <div id="Text_gp">
        <span></span>
      </div>
    </div>
    <div id="n_170">
      <svg class="n_86_gr">
        <rect id="n_86_gr" rx="0" ry="0" x="0" y="0" width="485" height="121">
        </rect>
      </svg>
      <div id="Text_gs">
        <span>バナー広告</span>
      </div>
    </div>
    <div id="text22pt595757_gt" class="text22pt_595757">
      <div id="Text_gu">
        <span>バナー広告</span>
      </div>
    </div>
    <div id="n_171">
      <svg class="n_86_gw">
        <rect id="n_86_gw" rx="0" ry="0" x="0" y="0" width="485" height="121">
        </rect>
      </svg>
      <div id="Text_gx">
        <span>バナー広告</span>
      </div>
    </div>
    <div id="n_172">
      <svg class="n_86_gz">
        <rect id="n_86_gz" rx="0" ry="0" x="0" y="0" width="485" height="121">
        </rect>
      </svg>
      <div id="Text_g">
        <span>バナー広告</span>
      </div>
    </div>
    <div id="text22pt595757_g" class="text22pt_595757">
      <div id="Text_ha">
        <span>バナー広告</span>
      </div>
    </div>
    <div id="n_173">
      <svg class="n_86_g">
        <rect id="n_86_g" rx="0" ry="0" x="0" y="0" width="485" height="121">
        </rect>
      </svg>
      <div id="Text_hb">
        <span>バナー広告</span>
      </div>
    </div>
    <div id="n_174">
      <svg class="n_86_ha">
        <rect id="n_86_ha" rx="0" ry="0" x="0" y="0" width="485" height="121">
        </rect>
      </svg>
      <div id="Text_hc">
        <span>バナー広告</span>
      </div>
    </div>
    <div id="n_197">
      <svg class="n_115">
        <rect id="n_115" rx="0" ry="0" x="0" y="0" width="1920" height="159">
        </rect>
      </svg>
      <div id="n_196">
        <div id="header" class="header">
          <a href="contact" id="n_186">
            <img id="n_23" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_23.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_23.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_23@2x.png 2x">            </svg>
            <div id="CONTACT_US">
              <span>CONTACT US!</span>
            </div>
          </a>
          <a href="..">
            <img id="n_26_hg" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_26_hg.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_26_hg.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_26_hg@2x.png 2x">          </svg>
          </a>
          <div id="n_177">
            <a href="about" id="text18pt595757_hi" class="text18pt_595757">
              <div id="Text_hj">
                <span>七夕祭について</span>
              </div>
            </a>
            <div id="n_16_hk">
              <svg class="n_8_hl" viewBox="5.082 7.828 0.136 1.724">
                <path id="n_8_hl" d="M 5.081999778747559 9.552000045776367 L 5.217999935150146 7.828000068664551 L 5.081999778747559 9.552000045776367 Z">
                </path>
              </svg>
              <div id="n_7_hm">
                <img id="n_6_hn" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_6_hn.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_6_hn.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_6_hn@2x.png 2x">                </svg>
              </div>
              <svg class="n_9_ho" viewBox="1 5.674 1.647 0.457">
                <path id="n_9_ho" d="M 1 6.13100004196167 L 2.647000074386597 5.673999786376953 L 1 6.13100004196167 Z">
                </path>
              </svg>
              <div id="n_9_hp">
                <img id="n_8_hq" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_8_hq.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_8_hq.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_8_hq@2x.png 2x">                </svg>
              </div>
              <svg class="n_10_hr" viewBox="3.074 0.999 0.88 1.443">
                <path id="n_10_hr" d="M 3.953999996185303 2.441999912261963 L 3.073999881744385 0.9990000128746033 L 3.953999996185303 2.441999912261963 Z">
                </path>
              </svg>
              <div id="n_11_hs">
                <img id="n_10_ht" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_10_ht.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_10_ht.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_10_ht@2x.png 2x">                </svg>
              </div>
              <svg class="n_25_hu" viewBox="0 0 1.101 1.349">
                <path id="n_25_hu" d="M 1.101000308990479 0 L 0 1.348999977111816">
                </path>
              </svg>
              <div id="n_13_hv">
                <img id="n_12_hw" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_12_hw.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_12_hw.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_12_hw@2x.png 2x">                </svg>
              </div>
              <svg class="n_11_hx" viewBox="8.11 5.928 1.562 0.61">
                <path id="n_11_hx" d="M 9.671999931335449 6.538000106811523 L 8.109999656677246 5.927999973297119 L 9.671999931335449 6.538000106811523 Z">
                </path>
              </svg>
              <div id="n_15_hy">
                <img id="n_14_hz" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_14_hz.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_14_hz.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_14_hz@2x.png 2x">                </svg>
              </div>
            </div>
            <div id="n_18_h">
              <img id="n_17_h" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_17_h.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_17_h.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_17_h@2x.png 2x">              </svg>
            </div>
            <div id="n_20_h">
              <img id="n_19_h" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_19_h.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_19_h.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_19_h@2x.png 2x">              </svg>
            </div>
            <div id="n_22_h">
              <img id="n_21" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_21.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_21.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_21@2x.png 2x">              </svg>
            </div>
            <div id="n_164">
              <svg class="n_8_h" viewBox="5.082 7.828 0.136 1.724">
                <path id="n_8_h" d="M 5.081999778747559 9.552000045776367 L 5.217999935150146 7.828000068664551 L 5.081999778747559 9.552000045776367 Z">
                </path>
              </svg>
              <div id="n_7_h">
                <img id="n_6_h" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_6_h.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_6_h.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_6_h@2x.png 2x">                </svg>
              </div>
              <svg class="n_9_ia" viewBox="1 5.674 1.647 0.457">
                <path id="n_9_ia" d="M 1 6.13100004196167 L 2.647000074386597 5.673999786376953 L 1 6.13100004196167 Z">
                </path>
              </svg>
              <div id="n_9_ib">
                <img id="n_8_ic" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_8_ic.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_8_ic.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_8_ic@2x.png 2x">                </svg>
              </div>
              <svg class="n_10_id" viewBox="3.074 0.999 0.88 1.443">
                <path id="n_10_id" d="M 3.953999996185303 2.441999912261963 L 3.073999881744385 0.9990000128746033 L 3.953999996185303 2.441999912261963 Z">
                </path>
              </svg>
              <div id="n_11_ie">
                <img id="n_10_if" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_10_if.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_10_if.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_10_if@2x.png 2x">                </svg>
              </div>
              <svg class="n_25_ig" viewBox="0 0 1.101 1.349">
                <path id="n_25_ig" d="M 1.101000308990479 0 L 0 1.348999977111816">
                </path>
              </svg>
              <div id="n_13_ih">
                <img id="n_12_ii" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_12_ii.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_12_ii.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_12_ii@2x.png 2x">                </svg>
              </div>
              <svg class="n_11_ij" viewBox="8.11 5.928 1.562 0.61">
                <path id="n_11_ij" d="M 9.671999931335449 6.538000106811523 L 8.109999656677246 5.927999973297119 L 9.671999931335449 6.538000106811523 Z">
                </path>
              </svg>
              <div id="n_15_ik">
                <img id="n_14_il" src="<?php bloginfo('template_url'); ?>/desktop/images/home/n_14_il.png" srcset="<?php bloginfo('template_url'); ?>/desktop/images/home/n_14_il.png 1x, <?php bloginfo('template_url'); ?>/desktop/images/home/n_14_il@2x.png 2x">                </svg>
              </div>
            </div>
            <a href="committee" id="text18pt595757_im" class="text18pt_595757">
              <div id="Text_in">
                <span>実行委員会</span>
              </div>
            </a>
            <a href="group" id="text18pt595757_io" class="text18pt_595757">
              <div id="Text_in">
                <span>参加団体の方へ</span>
              </div>
            </a>
            <a href="donation" id="text18pt595757_iq" class="text18pt_595757">
              <div id="Text_in">
                <span>ご協賛・ご寄付</span>
              </div>
            </a>
            <a href="access" id="text18pt595757_iu" class="text18pt_595757">
              <div id="Text_in">
                <span>アクセス</span>
              </div>
            </a>
            <a href="<?php echo get_recently_post(); ?>" id="text18pt595757_iw" class="text18pt_595757">
              <div id="Text_in">
                <span>お知らせ</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
