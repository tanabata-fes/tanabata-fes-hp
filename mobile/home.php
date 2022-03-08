<body>
<div id="home">
	<div id="n_199">
		<img id="n_146" src="<?php bloginfo('template_url'); ?>/mobile/images/home/n_146.png" srcset="<?php bloginfo('template_url'); ?>/mobile/images/home/n_146.png 1x, <?php bloginfo('template_url'); ?>/mobile/images/home/n_146@2x.png 2x">		</svg>
	</div>
	<div id="Logo">
		<img id="n_26" src="<?php bloginfo('template_url'); ?>/mobile/images/home/n_26.png" srcset="<?php bloginfo('template_url'); ?>/mobile/images/home/n_26.png 1x, <?php bloginfo('template_url'); ?>/mobile/images/home/n_26@2x.png 2x">		</svg>
	</div>
	<svg class="orangeBackground">
		<rect id="orangeBackground" rx="0" ry="0" x="0" y="0" width="390" height="325">
		</rect>
	</svg>
	<div id="n_245">
		<div id="n_121">
			<img id="n_120" src="<?php bloginfo('template_url'); ?>/mobile/images/home/n_120.png" srcset="<?php bloginfo('template_url'); ?>/mobile/images/home/n_120.png 1x, <?php bloginfo('template_url'); ?>/mobile/images/home/n_120@2x.png 2x">			</svg>
		</div>
		<div id="n_244">
			<svg class="n_80">
				<rect id="n_80" rx="20" ry="20" x="0" y="0" width="300" height="367">
				</rect>
			</svg>
			<div class="n_84">
				<a class="twitter-timeline" data-lang="ja" data-dnt="true" data-height="305px" href="https://twitter.com/tanabata_fes?ref_src=twsrc%5Etfw">Tweets by tanabata_fes</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			</div>
		</div>
	</div>
	<div id="n_250">
		<div id="n_246">
			<div id="n_123">
				<img id="n_122" src="<?php bloginfo('template_url'); ?>/mobile/images/home/n_122.png" srcset="<?php bloginfo('template_url'); ?>/mobile/images/home/n_122.png 1x, <?php bloginfo('template_url'); ?>/mobile/images/home/n_122@2x.png 2x">				</svg>
			</div>
			<svg class="n_81">
				<rect id="n_81" rx="20" ry="20" x="0" y="0" width="300" height="310">
				</rect>
			</svg>
		</div>
		<div id="n_249">
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
	<div id="n_247">
		<svg class="n_81_bw">
			<rect id="n_81_bw" rx="20" ry="20" x="0" y="0" width="300" height="151">
			</rect>
		</svg>
		<img id="n_134" src="<?php bloginfo('template_url'); ?>/mobile/images/home/n_134.png" srcset="<?php bloginfo('template_url'); ?>/mobile/images/home/n_134.png 1x, <?php bloginfo('template_url'); ?>/mobile/images/home/n_134@2x.png 2x">		</svg>
	</div>
	<div id="Text_by">
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
	<div id="n_248">
		<div id="n_197">
			<img id="n_136" src="<?php bloginfo('template_url'); ?>/mobile/images/home/n_136.png" srcset="<?php bloginfo('template_url'); ?>/mobile/images/home/n_136.png 1x, <?php bloginfo('template_url'); ?>/mobile/images/home/n_136@2x.png 2x">			</svg>
		</div>
		<div id="n_198">
			<svg class="n_115">
				<rect id="n_115" rx="20" ry="20" x="0" y="0" width="298.587" height="237">
				</rect>
			</svg>
			<div id="Text_b">
				<span>より詳しい七夕祭の情報はこちら</span>
			</div>
			<div id="n_138">
				<svg class="n_38">
					<rect id="n_38" rx="10" ry="10" x="0" y="0" width="148.882" height="42.773">
					</rect>
				</svg>
				<div id="MB_">
				    <a href="tanabata-fes.com/pr.pdf"><span>広報資料（7.3MB）<br/>ダウンロード</span></a>
				</div>
			</div>
			<div id="Text_ca">
				<span>バナー出稿・協賛をお考えの方はこちら</span>
			</div>
			<div id="n_138_b">
				<svg class="n_38_ca">
					<rect id="n_38_ca" rx="10" ry="10" x="0" y="0" width="148.882" height="43.595">
					</rect>
				</svg>
				<div id="MB__cb">
				    <a href="tanabata-fes.com/biz.pdf"><span>渉外資料（2.7MB）<br/>ダウンロード</span></a>
				</div>
			</div>
		</div>
	</div>
	<div id="n_200">
		<div id="text22pt595757_cd" class="text22pt_595757">
			<div id="Text_ce">
				<span>バナー広告</span>
			</div>
		</div>
		<div id="n_169">
			<svg class="n_86">
				<rect id="n_86" rx="0" ry="0" x="0" y="0" width="299" height="75">
				</rect>
			</svg>
			<div id="Text_ch">
				<span>バナー広告</span>
			</div>
		</div>
		<div id="n_170">
			<svg class="n_86_cj">
				<rect id="n_86_cj" rx="0" ry="0" x="0" y="0" width="299" height="75">
				</rect>
			</svg>
			<div id="Text_ck">
				<span>バナー広告</span>
			</div>
		</div>
		<div id="text22pt595757_cl" class="text22pt_595757">
			<div id="Text_cm">
				<span>バナー広告</span>
			</div>
		</div>
		<div id="n_171">
			<svg class="n_86_co">
				<rect id="n_86_co" rx="0" ry="0" x="0" y="0" width="299" height="74">
				</rect>
			</svg>
			<div id="Text_cp">
				<span>バナー広告</span>
			</div>
		</div>
		<div id="n_172">
			<svg class="n_86_cr">
				<rect id="n_86_cr" rx="0" ry="0" x="0" y="0" width="299" height="75">
				</rect>
			</svg>
			<div id="Text_cs">
				<span>バナー広告</span>
			</div>
		</div>
		<div id="text22pt595757_ct" class="text22pt_595757">
			<div id="Text_cu">
				<span>バナー広告</span>
			</div>
		</div>
		<div id="n_173">
			<svg class="n_86_cw">
				<rect id="n_86_cw" rx="0" ry="0" x="0" y="0" width="299" height="75">
				</rect>
			</svg>
			<div id="Text_cx">
				<span>バナー広告</span>
			</div>
		</div>
		<div id="n_174">
			<svg class="n_86_cz">
				<rect id="n_86_cz" rx="0" ry="0" x="0" y="0" width="299" height="75">
				</rect>
			</svg>
			<div id="Text_c">
				<span>バナー広告</span>
			</div>
		</div>
	</div>
	<div id="n_24__1" class="________24___1">
		<div id="Copyright__2023___All_Rights_R">
			<span>Copyright ©️ 2022 慶應義塾大学 七夕祭 All Rights Reserved. </span>
		</div>
		<div id="n_201">
			<a href="../donation" id="headerMenu" class="headerMenu">
				<div id="Text_da">
					<span>ご協賛・ご寄付</span>
				</div>
			</a>
			<div id="n_16">
				<svg class="n_8" viewBox="5.082 7.828 0.136 1.724">
					<path id="n_8" d="M 5.081999778747559 9.552000045776367 L 5.217999935150146 7.828000068664551 L 5.081999778747559 9.552000045776367 Z">
					</path>
				</svg>
				<div id="n_7">
					<img id="n_6" src="<?php bloginfo('template_url'); ?>/mobile/images/home/n_6.png" srcset="<?php bloginfo('template_url'); ?>/mobile/images/home/n_6.png 1x, <?php bloginfo('template_url'); ?>/mobile/images/home/n_6@2x.png 2x">					</svg>
				</div>
				<svg class="n_9" viewBox="1 5.674 1.647 0.457">
					<path id="n_9" d="M 1 6.13100004196167 L 2.647000074386597 5.673999786376953 L 1 6.13100004196167 Z">
					</path>
				</svg>
				<div id="n_9_db">
					<img id="n_8_dc" src="<?php bloginfo('template_url'); ?>/mobile/images/home/n_8_dc.png" srcset="<?php bloginfo('template_url'); ?>/mobile/images/home/n_8_dc.png 1x, <?php bloginfo('template_url'); ?>/mobile/images/home/n_8_dc@2x.png 2x">					</svg>
				</div>
				<svg class="n_10" viewBox="3.074 0.999 0.88 1.443">
					<path id="n_10" d="M 3.953999996185303 2.441999912261963 L 3.073999881744385 0.9990000128746033 L 3.953999996185303 2.441999912261963 Z">
					</path>
				</svg>
				<div id="n_11">
					<img id="n_10_df" src="<?php bloginfo('template_url'); ?>/mobile/images/home/n_10_df.png" srcset="<?php bloginfo('template_url'); ?>/mobile/images/home/n_10_df.png 1x, <?php bloginfo('template_url'); ?>/mobile/images/home/n_10_df@2x.png 2x">					</svg>
				</div>
				<svg class="n_25" viewBox="0 0 1.101 1.349">
					<path id="n_25" d="M 1.101000308990479 0 L 0 1.348999977111816">
					</path>
				</svg>
				<div id="n_13">
					<img id="n_12" src="<?php bloginfo('template_url'); ?>/mobile/images/home/n_12.png" srcset="<?php bloginfo('template_url'); ?>/mobile/images/home/n_12.png 1x, <?php bloginfo('template_url'); ?>/mobile/images/home/n_12@2x.png 2x">					</svg>
				</div>
				<svg class="n_11_dj" viewBox="8.11 5.928 1.562 0.61">
					<path id="n_11_dj" d="M 9.671999931335449 6.538000106811523 L 8.109999656677246 5.927999973297119 L 9.671999931335449 6.538000106811523 Z">
					</path>
				</svg>
				<div id="n_15">
					<img id="n_14" src="<?php bloginfo('template_url'); ?>/mobile/images/home/n_14.png" srcset="<?php bloginfo('template_url'); ?>/mobile/images/home/n_14.png 1x, <?php bloginfo('template_url'); ?>/mobile/images/home/n_14@2x.png 2x">					</svg>
				</div>
			</div>
			<a href="../access" id="Text_dm">
				<span>アクセス</span>
			</a>
			<div id="n_18">
				<img id="n_17" src="<?php bloginfo('template_url'); ?>/mobile/images/home/n_17.png" srcset="<?php bloginfo('template_url'); ?>/mobile/images/home/n_17.png 1x, <?php bloginfo('template_url'); ?>/mobile/images/home/n_17@2x.png 2x">				</svg>
			</div>
			<a href="../privacy" id="Text_dp">
				<span>プライバシーポリシー</span>
			</a>
			<div id="n_20">
				<img id="n_19" src="<?php bloginfo('template_url'); ?>/mobile/images/home/n_19.png" srcset="<?php bloginfo('template_url'); ?>/mobile/images/home/n_19.png 1x, <?php bloginfo('template_url'); ?>/mobile/images/home/n_19@2x.png 2x">				</svg>
			</div>
			<a href="contact" id="Text_ds">
				<span>お問い合わせ</span>
			</a>
		</div>
	</div>
	<div id="n_6_dt">
		<!-- 手書き始め -->
		<div id="sidebar">
			<div>
				<?php 
					$args = array(
						'posts_per_page' => 4,
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
								"NO TAG"   => "#C0C0C0",
							);
							$color = $color_map[$tag];
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
		<!-- 手書き終わり -->
	</div>
	<div id="header" class="header">
		<svg class="n_119">
			<rect id="n_119" rx="0" ry="0" x="0" y="0" width="390" height="110">
			</rect>
		</svg>
		<div id="header_fr">
			<a href="." id="Logo_fs">
				<img id="n_26_ft" src="<?php bloginfo('template_url'); ?>/mobile/images/home/n_26_ft.png" srcset="<?php bloginfo('template_url'); ?>/mobile/images/home/n_26_ft.png 1x, <?php bloginfo('template_url'); ?>/mobile/images/home/n_26_ft@2x.png 2x">				</svg>
			</a>
			<a href="." id="n_233">
				<div id="n_191">
					<div id="Text_fw">
						<span>慶應義塾大学</span>
					</div>
					<div id="Text_fx">
						<span>第３３回七夕祭</span>
					</div>
				</div>
			</a>
			<a href="../menu" id="n_190">
				<div id="n_189">
					<svg class="n_1">
						<ellipse id="n_1" rx="25" ry="25" cx="25" cy="25">
						</ellipse>
					</svg>
					<div id="n_188">
						<svg class="n_44" viewBox="0 0 21.5 2">
							<path id="n_44" d="M 0 0 L 21.5 0">
							</path>
						</svg>
						<svg class="n_45" viewBox="0 0 21.5 2">
							<path id="n_45" d="M 0 0 L 21.5 0">
							</path>
						</svg>
						<svg class="n_46" viewBox="0 0 21.5 2">
							<path id="n_46" d="M 0 0 L 21.5 0">
							</path>
						</svg>
					</div>
				</div>
				<div id="MENU">
					<span>MENU</span>
				</div>
			</a>
		</div>
	</div>
</div>
</body>