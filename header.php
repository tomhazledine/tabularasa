<?php include"head.php"; ?>

	<header id="masthead" class="site-header" role="banner">
		<div class="logo__wrapper">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="logo__link">
                <?php bloginfo( 'name' ); ?>
            </a>
        </div>

        <button class="js-menu__toggle main-menu__toggle">
            <span class="visuallyhidden">Menu</span>
            <svg class="main-menu__toggle-icon main-menu__toggle-icon--closed">
                <use xlink:href="#menu" />
            </svg>
            <svg class="main-menu__toggle-icon main-menu__toggle-icon--open">
                <use xlink:href="#cross" />
            </svg>
        </button>

        <div class="js-menu__wrapper main-menu__wrapper">
            <?php wp_nav_menu(array(
                'menu_class'      => 'main-menu clearfix',
                'theme_location'  => 'header_main'
            )); ?>
        </div>
	</header>

	<div id="content" class="site-content">
