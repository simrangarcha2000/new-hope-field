<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package New_Hope
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700;900&display=swap" rel="stylesheet"> 

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'new-hope' ); ?></a>
	<div class="grid-container">
		<div class="grid-x grid-margin-x">
			<div class="cell socials">
									<a href="https://www.linkedin.com/in/jason-coulthard-4941826b/?originalSubdomain=ca"><img src="https://newhopefield.simrangarcha.com/group5/wp-content/uploads/2021/03/Asset-1-1.png" alt="linkdin logo"></a>
									<a href="https://www.instagram.com/newhopefieldofdreams/"><img src="https://newhopefield.simrangarcha.com/group5/wp-content/uploads/2021/03/Asset-3.png" alt="instagram logo"></a>
									<a href="https://m.facebook.com/New-Hope-Field-of-Dreams-110847084145642"><img src="https://newhopefield.simrangarcha.com/group5/wp-content/uploads/2021/03/Asset-2.png" alt="facebook logo"></a>
								</div>
		</div>
	</div>
	<header id="masthead" class="site-header">
		<div class="grid-container">
			<div class="grid-x grid-margin-x">
				
				<div class="cell  medium-3 mainLogo">
					<div class="site-branding">
						<?php
						the_custom_logo();
						if ( is_front_page() && is_home() ) :
							?>
							<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
						else :
							?>
							<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
						endif;
						$new_hope_description = get_bloginfo( 'description', 'display' );
						if ( $new_hope_description || is_customize_preview() ) :
							?>
							<p class="site-description"><?php echo $new_hope_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
						<?php endif; ?>
					</div><!-- .site-branding -->
				</div>
		
				<div class="cell medium-9">

					<div class="grid-x grid-margin-x">
						<div class="cell  medium-12">
							<nav id="site-navigation" class="main-navigation">
								<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'new-hope' ); ?></button>
								<?php
								wp_nav_menu(
									array(
										'theme_location' => 'menu-primary',
										'menu_id'        => 'primary-menu',
									)
								);
								?>
							</nav><!-- #site-navigation -->
						</div>
				</div>
			</div>
	</div>
		
	</header><!-- #masthead -->
