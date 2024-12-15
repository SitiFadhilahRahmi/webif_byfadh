<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Departemen Informatika Universitas Andalas</title>
    <script src="js\text.js"></script>
    <link rel="stylesheet" href="css\style2.css">
    <link rel="icon" href="pages\images\image.png" sizes="192x192" />
    <script type="text/javascript" src="js\jquery-core.js" id="jquery-core-js"></script>
</head>

<body class="news-template-default single single-news postid-7456 wp-embed-responsive mega-menu-primary has-page-hero no-js">
    <a class="skip-link show-for-sr" href="#main">Skip to content</a>
    <div class="site">
    <div class="header">
			<!-- header -->
			<?php include 'pages\header1.php'; ?>
		</div>
        <main id="main" class="site-content">
            <div class="page-content">
            <section class="section section--hero hero hero--boxed" is="hero-section">
                    <div class="hero__inner">
                        <div class="hero__image-container">
                            <img width="1440" height="765"
                                src="pages\images\slider1.jpg"
                                class="hero__image" alt="" decoding="async" fetchpriority="high">
                        </div>
                        <div class="hero__container">
                            <div class="hero__content">
                                <h1 class="hero__title">
                                    <span>News & Event</span>
                                </h1>
                        </div>
                    </div>
                </section>
                <section
                    id=""
                    class="section section--page-content">
                    <div class="container">
                        <div class="grid">
                            <aside class="sidebar widget-area">
                                <div class="sidebar__inner">
                                    <div class="widget widget_custom_menu_wizard">
                                        <h3 class="widget__title"></h3>
                                        <div class="menu-sidebar-menu-container">
                                            <ul id="menu-sidebar-menu" class="menu-widget" data-cmwv="3.3.1" data-cmws='{&quot;menu&quot;:118,&quot;title&quot;:&quot;In This Section&quot;,&quot;branch&quot;:1266,&quot;start_at&quot;:&quot;+1&quot;}'>
                                                <li id="menu-item-1267" class="menu-item menu-item-type-post_type menu-item-object-page cmw-level-1 menu-item-1267 current-menu-ancestor"><a href="newsevent.php">News</a></li>
                                                <li id="menu-item-1268" class="menu-item menu-item-type-post_type menu-item-object-page cmw-level-1 menu-item-1268"><a href="event.php">Events</a></li>
                                                <li id="menu-item-1269" class="menu-item menu-item-type-post_type menu-item-object-page cmw-level-1 menu-item-1269"><a href="video.php">Video</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </aside>
                            <div class="primary-content">
                                <header class="page-header page-header--default">
                                    <div class="page-header__kicker kicker">
                                        Breaking News<span class="separator">&bull;</span><span class='date'>Sep 18, 2024</span> </div>
                                    <h1 class="page-header__title">Breaking News: Advances in Artificial Intelligence</h1>
                                    <div class="page-header__intro-text intro-text">
                                        Artificial intelligence is revolutionizing industries across the globe</div>
                                </header>
                                <div class="content-section content-section--content">
                                    <?php include 'news\news1.php'; ?>

                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <section>
                    <?php include 'pages\content\contentcolums.php'; ?>
                </section>
            </div>
        </main>
        <?php include 'pages\footer.php'; ?>
    </div>
    <script type="text/javascript" src="js\philament.js" id="philament-scripts-js"></script>
    <script type="text/javascript" src="js\megamenu.js" id="megamenu-js"></script>
    <?php include 'symbol.php'; ?>
</body>

</html>