<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="七夕祭">
    <meta name="theme-color" content="#333333">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <meta charset="UTF-8">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png"> <title>七夕祭</title>
    <meta name="theme-color" content="#f2f2f2">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-46PZZ4BQXW"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-46PZZ4BQXW');
    </script>

    <?php if (wp_is_mobile()): ?>
        <script id="applicationScript" type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/mobile/script.js"></script>
    <?php else: ?>
        <script id="applicationScript" type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/desktop/script.js"></script>
    <?php endif; ?>

    <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" media="all" />
    <?php if ( is_home() ): ?>
        <?php if (wp_is_mobile()): ?>
            <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="<?php echo get_template_directory_uri(); ?>/mobile/css/home.css">
        <?php else: ?>
            <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="<?php echo get_template_directory_uri(); ?>/desktop/css/home.css">
        <?php endif; ?>
    <?php endif; ?>
    <?php if ( is_page('about') ): ?>
        <?php if (wp_is_mobile()): ?>
            <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="<?php echo get_template_directory_uri(); ?>/mobile/css/about.css">
        <?php else: ?>
            <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="<?php echo get_template_directory_uri(); ?>/desktop/css/about.css">
        <?php endif; ?>
    <?php endif; ?>
    <?php if ( is_page('access') ): ?>
        <?php if (wp_is_mobile()): ?>
            <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="<?php echo get_template_directory_uri(); ?>/mobile/css/access.css">
        <?php else: ?>
            <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="<?php echo get_template_directory_uri(); ?>/desktop/css/access.css">
        <?php endif; ?>
    <?php endif; ?>
    <?php if ( is_page('committee') ): ?>
        <?php if (wp_is_mobile()): ?>
            <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="<?php echo get_template_directory_uri(); ?>/mobile/css/committee.css">
        <?php else: ?>
            <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="<?php echo get_template_directory_uri(); ?>/desktop/css/committee.css">
        <?php endif; ?>
    <?php endif; ?>
    <?php if ( is_page('contact') ): ?>
        <?php if (wp_is_mobile()): ?>
            <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="<?php echo get_template_directory_uri(); ?>/mobile/css/contact.css">
        <?php else: ?>
            <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="<?php echo get_template_directory_uri(); ?>/desktop/css/contact.css">
        <?php endif; ?>
    <?php endif; ?>
    <?php if ( is_page('donation') ): ?>
        <?php if (wp_is_mobile()): ?>
            <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="<?php echo get_template_directory_uri(); ?>/mobile/css/donation.css">
        <?php else: ?>
            <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="<?php echo get_template_directory_uri(); ?>/desktop/css/donation.css">
        <?php endif; ?>
    <?php endif; ?>
    <?php if ( is_page('group') ): ?>
        <?php if (wp_is_mobile()): ?>
            <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="<?php echo get_template_directory_uri(); ?>/mobile/css/group.css">
        <?php else: ?>
            <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="<?php echo get_template_directory_uri(); ?>/desktop/css/group.css">
        <?php endif; ?>
    <?php endif; ?>
    <?php if ( is_page('privacy') ): ?>
        <?php if (wp_is_mobile()): ?>
            <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="<?php echo get_template_directory_uri(); ?>/mobile/css/privacy.css">
        <?php else: ?>
            <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="<?php echo get_template_directory_uri(); ?>/desktop/css/privacy.css">
        <?php endif; ?>
    <?php endif; ?>    
    <?php if ( is_single() ): ?>
        <?php if (wp_is_mobile()): ?>
            <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="<?php echo get_template_directory_uri(); ?>/mobile/css/single.css">
        <?php else: ?>
            <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="<?php echo get_template_directory_uri(); ?>/desktop/css/single.css">
        <?php endif; ?>
    <?php endif; ?>

    <?php if (is_page('menu')): ?>
        <link rel="stylesheet" type="text/css" id="applicationStylesheet" href="<?php echo get_template_directory_uri(); ?>/mobile/css/menu.css">
    <?php endif; ?>
    <?php wp_head(); ?>
    <script>
        (function(d) {
            var config = {
                kitId: 'noa8zzv',
                scriptTimeout: 3000,
                async: true
            },
            h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
        })(document);
    </script>
</head>