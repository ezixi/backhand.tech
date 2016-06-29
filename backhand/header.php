<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml"
    xmlns:og="http://ogp.me/ns#"
    xmlns:fb="http://www.facebook.com/2008/fbml" <?php language_attributes(); ?>>
    <head profile="http://gmpg.org/xfn/11">
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <title><?php wp_title(); ?> Short stories, flash fiction and creative writing online. </title>
        <meta name="description" content="<?php wp_title(); ?>" />
        <meta name="keywords" content="short story, creative writing, short stories, fiction, short fiction, non-fiction stories, short story blog, creative writing blog, submit a story, new writers" />
        <meta name="verify-v1" content="niXdEoBrgiaTeGk1x1dt46QiDrY8Ea112YAuZxoDSF0=" />
        <meta name="y_key" content="004a99a9334081ee" >
        <meta property="fb:page_id" content="115638515178061" />
        <meta property="og:title" content="Short stories and creative writing online: <?php wp_title(); ?>"/>
        <meta property="og:type" content="article"/>
        <meta property="og:url" content="<?php the_permalink() ?>"/>
        <meta property="og:image" content="http://www.backhandstories.com/wp-content/themes/backhand/images/mechHand.jpg"/>
        <meta property="og:site_name" content="Backhand Stories"/>
        <meta property="og:description" content="Read this story on Backhand Stories, the creative writing blog that publishes new short stories, flash fiction, non-fiction and essays by new and unpublished writers. Submit your own short story!"/>
        <meta property="fb:admins" content="618395819"/>
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:site" content="@backhandstories" />
        <meta name="twitter:creator" content="@backhandmedia" />
        <meta name="twitter:title" content="<?php wp_title(); ?>" />
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
        <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="amphtml" href="http://mercury.postlight.com/amp?url=<?php the_permalink() ?>"/>
        <?php wp_head(); ?>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <script>
        (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-3583480902555622",
        enable_page_level_ads: true
        });
        </script>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <script>
        window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
        ga('create', 'UA-275020-1', 'auto');
        ga('require', 'autotrack');
        ga('send', 'pageview');
        </script>
        <script async src='https://www.google-analytics.com/analytics.js'></script>
        <script async src="<?php bloginfo('template_url'); ?>/scripts/autotrack.js"></script>
    </head>
    <body>
            <nav class="navbar navbar-default navbar-static-top">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <h1 class="navbar-brand" >
                        <a href="<?php echo get_option('home'); ?>/">
                            <img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Short story writing and creative fiction, essays and non-fiction stories." />
                        </a>
                        </h1>
                        <button type="button" class="navbar-toggle collapsed navbar-left" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="main-nav">
                        <ul class="nav navbar-nav">
                            <li role="presentation"><a id="fiction" href="<?php echo get_option('home'); ?>/fiction/">Fiction</a></li>
                            <li role="presentation"><a id="nonFiction" href="<?php echo get_option('home'); ?>/non-fiction/">Non-Fiction</a></li>
                            <li role="presentation"><a id="essays" href="<?php echo get_option('home'); ?>/essays/">Essays</a></li>
                            <li role="presentation"><a id="submit" href="<?php echo get_option('home'); ?>/submission-guidelines/">Submit</a></li>
                        </ul>
                        <?php include (TEMPLATEPATH . '/searchform.php'); ?>
                    </div>
                </div>
            </nav>
            <div class="container-fluid">