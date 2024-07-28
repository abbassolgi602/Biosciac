<!doctype html>

<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="theme-color" content="" />

	<?php wp_head(); ?>

</head>

<body>
<header>
	<div class="container-fluid px-md-5 px-2">
    	<div class="col-12">
			 <div class="header">
				<div class="header-items header-logo">
					<?php $image = get_field('logo_site','option'); ?>
					<a href="<?php echo get_home_url(); ?>"><img src="<?php echo $image['url']; ?>" width="<?php echo $image['width']; ?>" height="<?php echo $image['height']; ?>" alt="<?php echo $image['alt']; ?>"></a>
				</div>
				<div class="header-items header-menu">
					<?php wp_nav_menu( array( 'theme_location' => 'header_page' ) ); ?>
				</div>
					<div class="menu-icon">
						<svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M4 6H20M4 12H20M4 18H20" stroke="#000000" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
					</div>
				<div class="header-items header-search">
					<div class="header-search-icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="33.789" height="33.789" viewBox="0 0 33.789 33.789"><path id="search" d="M25.634,23.461a13.828,13.828,0,1,0-2.173,2.173l8.7,8.7a1.537,1.537,0,0,0,2.173-2.173ZM14.829,25.6A10.771,10.771,0,1,1,25.6,14.829,10.771,10.771,0,0,1,14.829,25.6Z" transform="translate(-1 -1)" fill="#9a9a9a" fill-rule="evenodd"/></svg>
					</div>
					<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/">
						<input type="text" name="s" id="s" autocomplete="off" placeholder="جستجو کنید..." />
					</form>
				</div>
			 </div>
		</div>
	</div>
</header>

<div class="mobile-menu">
	<?php wp_nav_menu( array( 'theme_location' => 'header_page','depth' => 1, ) ); ?>
	<div class="menu-icon-close">
		<svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M20.7457 3.32851C20.3552 2.93798 19.722 2.93798 19.3315 3.32851L12.0371 10.6229L4.74275 3.32851C4.35223 2.93798 3.71906 2.93798 3.32854 3.32851C2.93801 3.71903 2.93801 4.3522 3.32854 4.74272L10.6229 12.0371L3.32856 19.3314C2.93803 19.722 2.93803 20.3551 3.32856 20.7457C3.71908 21.1362 4.35225 21.1362 4.74277 20.7457L12.0371 13.4513L19.3315 20.7457C19.722 21.1362 20.3552 21.1362 20.7457 20.7457C21.1362 20.3551 21.1362 19.722 20.7457 19.3315L13.4513 12.0371L20.7457 4.74272C21.1362 4.3522 21.1362 3.71903 20.7457 3.32851Z" fill="#0F0F0F"/></svg>
	</div>
</div>