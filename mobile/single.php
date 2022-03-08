<body>
<div id="single">
	<div id="n_217">
		<div id="n_216">
			<img id="n_215" src="<?php bloginfo('template_url'); ?>/mobile/images/single/n_215.png" srcset="<?php bloginfo('template_url'); ?>/mobile/images/single/n_215.png 1x, <?php bloginfo('template_url'); ?>/mobile/images/single/n_215@2x.png 2x">
				
			</svg>
		</div>
		<div id="Text">
			<span>お知らせ</span>
		</div>
	</div>
	<div id="n_3">
		<span><?php the_title();?></span>
	</div>
	<svg class="n_43" viewBox="0 0 300 2">
		<path id="n_43" d="M 0 0 L 300 0">
		</path>
	</svg>
	<div id="n_0220210">
		<span><?php echo mysql2date('Y/n/j', $post->post_date); ?></span>
	</div>
	<div id="n_021121______7_10__">
		<span><?php the_content(); ?></span>
	</div>
	<svg class="n_126">
		<rect id="n_126" rx="20" ry="20" x="0" y="0" width="300" height="560">
		</rect>
	</svg>
	<img id="n_165" src="<?php bloginfo('template_url'); ?>/mobile/images/single/n_165.png" srcset="<?php bloginfo('template_url'); ?>/mobile/images/single/n_165.png 1x, <?php bloginfo('template_url'); ?>/mobile/images/single/n_165@2x.png 2x">
		
	</svg>
	<svg class="n_127">
		<rect id="n_127" rx="0" ry="0" x="0" y="0" width="250" height="466">
		</rect>
	</svg>
	<div id="n_232">
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
        <div class="single_title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </div>
        <div class="single_date">
            <span><?php echo mysql2date('Y/n/j', $post->post_date); ?></span>
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
	<div id="n_24__10" class="________24___10">
		<div id="Copyright__2023___All_Rights_R">
			<span>Copyright ©️ 2022 慶應義塾大学 七夕祭 All Rights Reserved. </span>
		</div>
		<div id="n_201">
			<a href="../donation" id="headerMenu" class="headerMenu">
				<div id="Text_bp">
					<span>ご協賛・ご寄付</span>
				</div>
			</a>
			<div id="n_16">
				<svg class="n_8" viewBox="5.082 7.828 0.136 1.724">
					<path id="n_8" d="M 5.081999778747559 9.552000045776367 L 5.217999935150146 7.828000068664551 L 5.081999778747559 9.552000045776367 Z">
					</path>
				</svg>
				<div id="n_7">
					<img id="n_6" src="<?php bloginfo('template_url'); ?>/mobile/images/single/n_6.png" srcset="<?php bloginfo('template_url'); ?>/mobile/images/single/n_6.png 1x, <?php bloginfo('template_url'); ?>/mobile/images/single/n_6@2x.png 2x">
						
					</svg>
				</div>
				<svg class="n_9" viewBox="1 5.674 1.647 0.457">
					<path id="n_9" d="M 1 6.13100004196167 L 2.647000074386597 5.673999786376953 L 1 6.13100004196167 Z">
					</path>
				</svg>
				<div id="n_9_bv">
					<img id="n_8_bw" src="<?php bloginfo('template_url'); ?>/mobile/images/single/n_8_bw.png" srcset="<?php bloginfo('template_url'); ?>/mobile/images/single/n_8_bw.png 1x, <?php bloginfo('template_url'); ?>/mobile/images/single/n_8_bw@2x.png 2x">
						
					</svg>
				</div>
				<svg class="n_10" viewBox="3.074 0.999 0.88 1.443">
					<path id="n_10" d="M 3.953999996185303 2.441999912261963 L 3.073999881744385 0.9990000128746033 L 3.953999996185303 2.441999912261963 Z">
					</path>
				</svg>
				<div id="n_11">
					<img id="n_10_bz" src="<?php bloginfo('template_url'); ?>/mobile/images/single/n_10_bz.png" srcset="<?php bloginfo('template_url'); ?>/mobile/images/single/n_10_bz.png 1x, <?php bloginfo('template_url'); ?>/mobile/images/single/n_10_bz@2x.png 2x">
						
					</svg>
				</div>
				<svg class="n_25" viewBox="0 0 1.101 1.349">
					<path id="n_25" d="M 1.101000308990479 0 L 0 1.348999977111816">
					</path>
				</svg>
				<div id="n_13">
					<img id="n_12" src="<?php bloginfo('template_url'); ?>/mobile/images/single/n_12.png" srcset="<?php bloginfo('template_url'); ?>/mobile/images/single/n_12.png 1x, <?php bloginfo('template_url'); ?>/mobile/images/single/n_12@2x.png 2x">
						
					</svg>
				</div>
				<svg class="n_11_b" viewBox="8.11 5.928 1.562 0.61">
					<path id="n_11_b" d="M 9.671999931335449 6.538000106811523 L 8.109999656677246 5.927999973297119 L 9.671999931335449 6.538000106811523 Z">
					</path>
				</svg>
				<div id="n_15">
					<img id="n_14" src="<?php bloginfo('template_url'); ?>/mobile/images/single/n_14.png" srcset="<?php bloginfo('template_url'); ?>/mobile/images/single/n_14.png 1x, <?php bloginfo('template_url'); ?>/mobile/images/single/n_14@2x.png 2x">
						
					</svg>
				</div>
			</div>
			<a href="../access" id="Text_b">
				<span>アクセス</span>
			</a>
			<div id="n_18">
				<img id="n_17" src="<?php bloginfo('template_url'); ?>/mobile/images/single/n_17.png" srcset="<?php bloginfo('template_url'); ?>/mobile/images/single/n_17.png 1x, <?php bloginfo('template_url'); ?>/mobile/images/single/n_17@2x.png 2x"></svg>
			</div>
			<a href="../privacy" id="Text_ca">
				<span>プライバシーポリシー</span>
			</a>
			<div id="n_20">
				<img id="n_19" src="<?php bloginfo('template_url'); ?>/mobile/images/single/n_19.png" srcset="<?php bloginfo('template_url'); ?>/mobile/images/single/n_19.png 1x, <?php bloginfo('template_url'); ?>/mobile/images/single/n_19@2x.png 2x"></svg>
			</div>
			<a href="../contact" id="Text_cc">
				<span>お問い合わせ</span>
			</a>
		</div>
	</div>
	<div id="header" class="header">
		<svg class="n_119">
			<rect id="n_119" rx="0" ry="0" x="0" y="0" width="390" height="110">
			</rect>
		</svg>
		<div id="header_cf">
			<a href=".." id="Logo">
				<img id="n_26" src="<?php bloginfo('template_url'); ?>/mobile/images/single/n_26.png" srcset="<?php bloginfo('template_url'); ?>/mobile/images/single/n_26.png 1x, <?php bloginfo('template_url'); ?>/mobile/images/single/n_26@2x.png 2x">
					
				</svg>
			</a>
			<a href=".." id="n_233">
				<div id="n_191">
					<div id="Text_ck">
						<span>慶應義塾大学</span>
					</div>
					<div id="Text_cl">
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