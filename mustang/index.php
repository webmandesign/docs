<?php ob_start( 'ob_gzhandler' ); ?><!DOCTYPE html>

<html lang="en">

<!--

Development:
============

Documentation uses the `theme_name`, `theme_slug`, `version_since` and `version` from development notes (`development.md` file) to be replaced.

For on-line documentation rename the file to `index.php` and enable GZIP compression by including the `ob_start( 'ob_gzhandler' );` PHP before the HTML doctype declaration.

@since    1.0
@version  1.7

-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="WebMan Design, www.webmandesign.eu">

	<title>Mustang WordPress Theme User Manual</title>

	<!--

	CSS

	-->
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<!-- Custom styles -->
	<link rel="stylesheet" href="css/custom.css">
</head>

<body data-spy="scroll">

<!--

Navbar

-->
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">

		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Mustang</a>
		</div>

		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="https://vimeo.com/webmandesigneu/videos">Instructional videos</a></li>
				<li><a href="http://www.webmandesign.eu">Premium WordPress themes</a></li>
				<li><a href="https://profiles.wordpress.org/webmandesign#content-themes">Free WordPress themes</a></li>
				<li><a href="http://support.webmandesign.eu">Support Forum</a></li>
			</ul>
		</div>

	</div>
</nav>

<div class="container-fluid"><div class="row">





<!--

Sidebar

-->
<div class="col-sm-3 col-md-2 sidebar">
	<ul class="nav nav-sidebar">
		<li><a href="#wordpress">WordPress</a></li>
		<li><a href="#installation">Theme Installation</a></li>
		<li><a href="#update">Theme Update</a></li>
		<li><a href="#plugins">Plugins</a></li>
		<li><a href="#demo-content">Demo Content</a></li>
		<li><a href="#pages">Pages</a></li>
		<li><a href="#posts">Posts</a></li>
		<li><a href="#projects">Projects</a></li>
		<li><a href="#logos">Logos</a></li>
		<li><a href="#testimonials">Testimonials</a></li>
		<li><a href="#staff">Staff</a></li>
		<li><a href="#content-modules">Content Modules</a></li>
		<li><a href="#shortcodes">Shortcodes</a></li>
		<li><a href="#navigation">Navigation Menu</a></li>
		<li><a href="#widgets">Sidebars &amp; Widgets</a></li>
		<li><a href="#customizer">Customizer</a></li>
		<li><a href="#seo" title="Search Engine Optimization">SEO</a></li>
		<li><a href="#localization">Localization</a></li>
		<li><a href="#child-theme">Theme Modifications</a></li>
		<li><a href="#tips" title="Please choose from dropdown"><abbr title="Frequently Asked Questions">FAQ</abbr> &amp; Tips</a></li>
		<li><a href="#credits">Credits</a></li>
	</ul>
</div>





<!--

Content Container

-->
<section class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

	<!--

	Intro

	-->
	<header class="main-header"><div class="container-fluid">

			<div class="main-title">
				<h1 title="Mustang WordPress Theme by WebMan"><strong>Mustang</strong> WordPress Theme</h1>
				<h2><span>User Manual</span></h2>
			</div>

			<p class="lead">
				<strong>Thank you for using Mustang WordPress theme by <a href="http://www.webmandesign.eu" target="_blank">WebMan Design</a>!</strong>
			</p>

			<p>This user manual will teach you how to set up and use the <strong>Mustang</strong> WordPress theme. In case you have any questions<br />that are beyond the scope of the user manual, please join <a href="http://support.webmandesign.eu" target="_blank"><strong>WebMan Design Support Forum</strong></a>. Enjoy your <strong>Mustang</strong> theme!</p>

	</div></header><!-- /Intro Heading -->



	<!--

	Content

	-->
	<div class="main-content"><div class="container-fluid">

		<!--

		WordPress

		-->
		<h2 id="wordpress">Installing, Securing <strong>WordPress</strong> and First Steps</h2>
			<div class="section indented row">

				<div class="col-sm-12 col-md-4">

					<h3>Installing WordPress</h3>

					<p>If you need help installing WordPress, follow the instructions in <a href="http://codex.wordpress.org/Installing_WordPress" target="_blank">WordPress Codex</a>.</p>

				</div>

				<div class="col-sm-12 col-md-4">

					<h3>Securing WordPress</h3>

					<p>You can improve your WordPress installation security taking these steps:</p>
					<ul>
						<li>Set the <span class="label label-info">Authentication Unique Keys and Salts</span> in <code>wp-config.php</code> file.</li>
						<li>Set the <span class="label label-info">$table_prefix</span> variable in <code>wp-config.php</code> file (do not use the default value of "wp_").</li>
						<li>Do not use <code>admin</code> as user name and set strong passwords.</li>
						<li>After installation is done, remove <code>wp-admin/install.php</code> file.</li>
						<li>Keep backups of the database and WordPress files.</li>
						<li>Keep your WordPress installation, plugins and themes up to date.</li>
						<li>You can further strengthen the security of your site by using a specialized plugins and services.</li>
					</ul>

				</div>

				<div class="col-sm-12 col-md-4">

					<h3>First Steps With WordPress</h3>

					<p>Additional resources for WordPress beginners:</p>
					<ul>
						<li><a title="Getting Started with WordPress" href="http://codex.wordpress.org/Getting_Started_with_WordPress" target="_blank">Getting Started with WordPress</a></li>
						<li>Selection of Video courses:
						<ul>
							<li><a href="https://www.youtube.com/playlist?list=PLfOXCtnURNbZjLUyU_Isp39VdAjqEctNw" target="_blank">WordPress for Beginners</a></li>
							<li><a href="http://videos.wpbeginner.com/" target="_blank">WordPress Beginner Videos - Free WordPress Video Tutorials</a></li>
							<li><a href="http://leveluptuts.com/tutorials/wordpress-basics" target="_blank">WordPress Basics</a></li>
							<li><a href="https://www.udemy.com/getting-started-with-wordpress-a-beginners-guide/" target="_blank">Getting Started With WordPress - A Beginners Guide</a></li>
						</ul>
					</ul>

				</div>

			</div>



		<!--

		Theme Installation

		-->
		<h2 id="installation">Theme Installation</h2>
			<div class="section indented">

				<h3>How to Install the Theme?</h3>

				<div class="row">

					<div class="col-sm-12 col-md-6">

						<h4><strong>Theme purchased on a marketplace</strong></h4>

						<ol>
							<li>(Re)download the theme package ZIP folder from the marketplace where you've purchased the theme from.</li>
							<li>Log into your WordPress admin.</li>
							<li>In WordPress admin navigate to <strong><em>Appearance &raquo; Themes</em></strong> and click the <strong>[Add New]</strong> button next to "Themes" page title.</li>
							<li>On "Add Themes" screen click the <strong>[Upload Theme]</strong> button next to page title.</li>
							<li>On the next screen choose the theme ZIP package file you've downloaded in step 1 above and click the <strong>[Install Now]</strong> button.</li>
							<li>After the theme is installed, activate it by clicking the <strong>"Activate"</strong> link.</li>
						</ol>

					</div>

					<div class="col-sm-12 col-md-6">

						<h4><strong>Free theme available via <a href="https://profiles.wordpress.org/webmandesign#content-themes" target="_blank">WordPress.org repository</a></strong></h4>

						<ol>
							<li>Log into your WordPress admin.</li>
							<li>In WordPress admin navigate to <strong><em>Appearance &raquo; Themes</em></strong> and click the <strong>[Add New]</strong> button next to "Themes" page title.</li>
							<li>On "Add Themes" screen use a search field to search for "Mustang".</li>
							<li>Once you've found the theme in the search results list, click the <strong>[Install]</strong> button when hovering over the theme.</li>
							<li>After the theme is installed, activate it by clicking the <strong>"Activate"</strong> link.</li>
						</ol>

					</div>

				</div>

				<div class="alert alert-success">
					<h4>Tip:</h4>
					<p>After activating the theme, you can read the theme's welcome page navigating to <strong>Appearance &raquo; Welcome</strong> (you can disable this page in <strong><em>Appearance &raquo; Customize &raquo; Theme &raquo; Others</em></strong>).</p>
				</div>

				<div class="alert alert-info">
					<h4>Important:</h4>
					<p>It is strongly recommended to follow or subscribe to WebMan on <a href="http://www.facebook.com/webmandesigneu/" target="blank">Facebook</a> or <a href="http://www.twitter.com/webmandesigneu/" target="blank">Twitter</a> to get the most recent theme update notices as fast as possible.</p>
					<p><em>You should always keep your WordPress, themes and plugins up to date!</em></p>
				</div>

			</div>



		<!--

		Theme Update

		-->
		<h2 id="update">Theme Update</h2>
			<div class="section indented">

				<h3>How to Update the Theme?</h3>

					<p>You will be notified in the WordPress admin bar each time a new updated theme version is released. To install this updated theme version please follow the steps below.</p>

					<div class="alert alert-warning">
						<h4>IMPORTANT:</h4>
						If there is a specific procedure required for the theme update, this will be clearly stated on the WebMan's <a href="http://www.facebook.com/webmandesigneu/" target="blank">Facebook</a> and <a href="http://www.twitter.com/webmandesigneu/" target="blank">Twitter</a> pages.
					</div>

					<div class="alert alert-info">
						<h4>Updating main stylesheet</h4>
						After each theme update the main CSS stylesheet file gets regenerated to incorporate all the new style changes introduced in the updated theme version. You will get notified about this in the WordPress admin area.
					</div>

					<div class="alert alert-danger">
						<h4>Back Up!</h4>
						<p>It is strongly recommended to back up your theme settings before you update the theme. This is only a precaution procedure and a good practice.</p>
						<p>For backing up the theme <a href="#customizer">customizer</a> settings, please use the <a href="https://wordpress.org/plugins/customizer-export-import/" target="_blank"><strong>Customizer Export/Import</strong> plugin</a>.</p>
					</div>

					<h4 class="mt"><strong>Automatic Theme Update</strong></h4>

						<ul>
							<li>
								<p><strong>Have you obtained the theme from <a href="https://wordpress.org/themes/author/webmandesign/" target="_blank">WordPress.org themes repository</a>?</strong></p>
								<p>The WordPress itself will notify you about a new theme update. The only thing you need to do now is to proceed with update procedure suggested in your WordPress dashboard.</p>
							</li>
							<li>
								<p><strong>Have you obtained the theme from <a href="http://themeforest.net/user/webmandesign/portfolio" target="_blank">ThemeForest</a>?</strong></p>
								<p>You can obtain automatic theme updates with help of <a href="http://envato.github.io/wp-envato-market/" target="_blank"><strong>Envato Market</strong></a> or <a href="https://github.com/envato/envato-wordpress-toolkit" target="_blank"><strong>Envato WordPress Toolkit</strong></a> plugin.</p>
							</li>
						</ul>

						<div class="alert alert-warning">
							<strong>If none of these apply to you</strong>, you need to update the theme manually (see below).
						</div>


					<h4 class="mt"><strong>Manual Theme Update</strong></h4>

						<div class="alert alert-info">
							First you need to <strong>download the theme ZIP package from your marketplace.</strong>
						</div>

						<ul>
							<li>
								<p><strong>Updating via WordPress dashboard</strong></p>
								<p>A simple way of doing a manual theme update would be deleting and reinstalling the theme directly via WordPress dashboard. You can <a href="http://wptheming.com/2016/02/how-to-overwrite-a-theme/" target="_blank"><strong>read an article</strong></a> or <a href="https://www.youtube.com/watch?v=W3ntxBYZhg4" target="_blank"><strong>watch a video</strong></a> on how to do this.</p>
							</li>
							<li>
								<p><strong>Updating via FTP</strong></p>
								<p>This is a more advanced manual theme update procedure and you will need an FTP client (such as <a href="https://filezilla-project.org/" target="_blank">FileZilla</a>) to connect to your server:</p>
								<ol>
									<li>(Re)download the theme package ZIP folder from the marketplace where you've purchased the theme from and unpack the theme installation ZIP file on your computer.</li>
									<li>Now you will need an FTP client to connect to your server.</li>
									<li>On your server navigate to <code>YOUR_WORDPRESS_INSTALLATION_FOLDER/wp-content/themes/</code> folder.</li>
									<li>Delete the existing <code>mustang</code> folder (or create a backup just in case).</li>
									<li>Copy the unpacked theme <code>mustang</code> folder from your computer (from step 1. above) to the <code>YOUR_WORDPRESS_INSTALLATION_FOLDER/wp-content/themes/</code> on your server.</li>
									<li>Log into your WordPress admin area and check the version of the theme in <strong><em>Appearance &raquo; Themes</em></strong>. Your theme should be updated now.</li>
								</ol>
							</li>
						</ul>

			</div>



		<!--

		Plugins

		-->
		<h2 id="plugins">Installing Plugins</h2>
			<div class="section indented">

				<div class="row">

					<div class="col-sm-12 col-md-6">

						<h3>Why Do I Need Plugins?</h3>

						<p>Do you ask why do you need to use plugins when you expected the theme to have all the functionality in it?</p>
						<p>According to WordPress guidelines, the <strong>themes are meant for presentational purposes only</strong>, while <strong>plugins provide website functionality</strong>.</p>
						<p>The reason is simple. When you decide to update your website look in the future, you simply change the theme without loosing your website content and additional functionality such as shortcodes, e-shop or forum functionality among others.</p>
						<p><strong>This theme follows this basic WordPress philosophy and you can sleep assured your website is as future-proof as possible!</strong></p>
						<p>While you get beautiful look for your website with this theme, it also supports and integrates seamlessly with various plugins. For more info please read on.</p>

					</div>

					<div class="col-sm-12 col-md-6">

						<h3>Installing Recommended Plugins</h3>

						<p>The theme uses the <a href="https://github.com/thomasgriffin/TGM-Plugin-Activation" target="_blank">TGM Plugin Activation</a> script that prompts you to install recommended plugins after you activate the theme.</p>
						<p>The suggested recommended plugins are essential to provide the core functionality the theme relies on and/or to ease out the process of editing your website pages. You can still use the theme without these plugins, however, its functionality and your user experience would be limited.</p>
						<p>Other plugins than the recommended ones should work with the theme with no issues, though some <em>might</em> require additional tweaks to integrate them 100% with the theme (this is usually the case of more robust plugins such as e-shop or directory plugins).</p>
						<p>Please understand that there are thousands of plugins available for WordPress and it is not possible for any theme developer to test the theme with all of them. <strong>Mustang</strong> was tested with most of the popular plugins. You can install any custom plugin <a href="https://codex.wordpress.org/Managing_Plugins" target="_blank">following the WordPress instructions</a> (or following the plugin documentation).</p>
						<p>In case of any plugin incompatibility or error, please, <strong>contact the plugin support first</strong> before contacting <a href="http://support.webmandesign.eu">WebMan Design Support Forum</a>.</p>

					</div>

				</div>

				<div class="alert alert-warning">
					<h4>Premium plugins</h4>
					<p>If you are using a premium plugin(s), even the ones bundled with the theme in the past, you need a <strong>plugin license key to keep it up to date</strong>! <em>You can obtain the license key by purchasing the plugin.</em></p>
					<p>Please understand that I can not provide compatibility with outdated software. Please, update all your plugins to the most recent versions.</p>
				</div>

				<h3 id="plugins-recommended">Required and Recommended Plugins</h3>

					<p>Bellow you'll find a list of plugins that were successfully tested with the theme and works with it without any conflicts:</p>

					<div class="section indented plugins">

						<h4 id="webman-amplifier">
							<strong>WebMan Amplifier</strong><br />
							<small>(<a href="https://wordpress.org/plugins/webman-amplifier/" target="_blank">https://wordpress.org/plugins/webman-amplifier/</a>)</small>
						</h4>

							<p class="uppercase">This plugin extends the theme's functionality with additional content types, custom icon font, metaboxes, shortcodes (with page builder compatibility) and custom widgets.</p>
							<p>It also provides seamless integration with <a href="#beaver-builder"><strong>Beaver Builder</strong></a> page builder plugin (and also the Visual Composer plugin).</p>
							<p>This is essential plugin to provide advanced functionality for the theme and you will be prompted to install it after theme activation.</p>

							<div class="alert alert-warning">
								<h4>This plugin is required for <a href="#demo-content">demo content import</a></h4>
								Please install this plugin before importing the theme's demo content XML file. Otherwise the content included in theme's demo content XML file might not get imported in whole.
							</div>

						<h4 id="beaver-builder">
							<strong>Beaver Builder</strong><br />
							<small>(<a href="https://www.wpbeaverbuilder.com?fla=67" target="_blank">https://www.wpbeaverbuilder.com <span class="badge">Pro</span></a>, <a href="https://wordpress.org/plugins/beaver-builder-lite-version/" target="_blank">https://wordpress.org/plugins/beaver-builder-lite-version/ <span class="badge">Free</span></a>)</small>
						</h4>

							<p class="uppercase">If you need a page builder plugin to create your pages with ease with a <strong>front-end drag and drop editor</strong>, I highly recommend using the Beaver Builder plugin. The plugin is available both in free Lite version and payed Pro version. The theme is 100% compatible with this plugin.</p>
							<p>For more info on the plugin please visit the <a href="https://www.wpbeaverbuilder.com?fla=67" target="_blank">Beaver Builder website</a> where you can also find the instructional videos for this page builder plugin.</p>

							<div class="alert alert-info">
								<h4>Tutorials</h4>
								<p>If you are new to Beaver Builder page builder, you can <a href="https://vimeo.com/beaverbuilder" target="_blank">watch instructional videos</a> (check out <a href="https://www.wpbeaverbuilder.com/6-beaver-builder-tutorial-videos-awesome-community/" target="_blank">alternative courses</a>), or read the plugin's <a href="https://www.wpbeaverbuilder.com/kb/beaver-builder-plugin/" target="_blank">knowledge base</a>.</p>
							</div>

							<div class="alert alert-info">
								<h4>Extensions</h4>
								<p>If you would like to extend the Beaver Builder page builder with some fancy free custom modules, give a <a href="https://wordpress.org/plugins/cb-custom-modules/" target="_blank"><strong>CB Custom Modules</strong></a> plugin a try.</p>
							</div>

							<div class="alert alert-warning">
								<h4>This plugin is required for <a href="#demo-content">demo content import</a></h4>
								<p>Please install this plugin before importing the theme's demo content XML file. Otherwise the content included in theme's demo content XML will not be displayed correctly.</p>
								<p><small><strong>The theme demo content was build using free Beaver Builder Lite Version.</strong></small></p>
							</div>

						<h4 id="woocommerce">
							<strong>WooCommerce</strong><br />
							<small>(<a href="https://wordpress.org/plugins/woocommerce/" target="_blank">https://wordpress.org/plugins/woocommerce/</a>, <a href="https://woocommerce.com/" target="_blank">https://woocommerce.com</a>)</small>
						</h4>

							<p class="uppercase">WooCommerce is the world's most favorite eCommerce solution that allows you to sell anything, beautifully.</p>
							<p>This theme is fully compatible with WooCommerce e-commerce plugin out of the box, so you can start selling immediately. Just install, activate and setup the plugin and you are ready to go!</p>
							<p>When you activate the WooCommerce plugin, the theme creates a new "Floating cart" widget area. You can put a "WooCommerce Cart" into this widget area to make the cart always available on your website (the cart icon is created in the upper right corner of the browser window).</p>

							<div class="alert alert-warning">
								<h4>Tip: Image sizes</h4>
								<p>Set up the WooCommerce product image sizes for the best compatibility with the theme:<br /><br /></p>
								<table class="table">
									<tr><th>Catalog Images</th><td>520&times;520 px, hard crop</td></tr>
									<tr><th>Single Product Image</th><td>800&times;9999 px, disable hard crop</td></tr>
									<tr><th>Product Thumbnails</th><td>150&times;150 px, hard crop</td></tr>
								</table>
							</div>

							<div class="alert alert-info">
								<h4>Tutorials</h4>
								<p>If you are new to WooCommerce, you can <a href="https://docs.woocommerce.com/document/woocommerce-101-video-series/" target="_blank">watch instructional <strong>WooCommerce 101 video series</strong></a>, or read the <a href="https://docs.woocommerce.com/documentation/plugins/woocommerce/" target="_blank">plugin's documentation</a>.</p>
							</div>

							<div class="alert alert-info">
								<h4>Extensions</h4>
								<p>If you would like to extend the plugin with some fancy new functionality, check out the <a href="https://woocommerce.com/product-category/woocommerce-extensions/" target="_blank"><strong>official WooCommerce extensions list</strong></a>.</p>
							</div>

							<div class="alert alert-warning">
								<h4>This plugin is required for <a href="#demo-content">demo content import</a></h4>
								<p>Please install this plugin before importing the theme's demo content XML file. Otherwise the content included in theme's demo content XML file might not get imported in whole.</p>
							</div>

						<h4 id="bbpress">
							<strong>bbPress</strong><br />
							<small>(<a href="https://wordpress.org/plugins/bbpress/" target="_blank">https://wordpress.org/plugins/bbpress/</a>)</small>
						</h4>

							<p class="uppercase">Need a forum for your website? No problem with this plugin! The theme offers full integration for bbPress plugin.</p>

						<h4 id="jetpack">
							<strong>Jetpack</strong><br />
							<small>(<a href="https://wordpress.org/plugins/jetpack/" target="_blank">https://wordpress.org/plugins/jetpack/</a>)</small>
						</h4>

							<p class="uppercase">This plugin was built by <a href="http://automattic.com/" target="_blank">Automattic</a> (the company behind the WordPress) and contains a lot of very useful tools for your website.</p>
							<p>To choose some of the features included in this plugin: <strong>tiled galleries</strong>, image lightbox zooming effect, contact form, <strong>custom CSS</strong>, extra widgets, infinite scroll, better search, <strong>social networks sharing buttons</strong>, <strong>related posts display</strong>, <abbr title="Content Delivery Network">CDN</abbr>, site verification and others.</p>
							<p>For more info on the plugin usage and functionality please visit the <a href="http://jetpack.me/" target="_blank"><strong>Jetpack.me</strong></a> website.</p>

						<h4 id="breadcrumbs-navxt">
							<strong>Breadcrumbs NavXT</strong><br />
							<small>(<a href="https://wordpress.org/plugins/breadcrumb-navxt/" target="_blank">https://wordpress.org/plugins/breadcrumb-navxt/</a>)</small>
						</h4>

							<p class="uppercase">With this plugin you can create a perfect <a href="http://en.wikipedia.org/wiki/Breadcrumb_%28navigation%29" target="_blank">breadcrumbs navigation</a>.</p>

					</div>

				<h3>Other Great Plugins Worth Checking Out</h3>

					<p>You can <a href="https://themedemos.webmandesign.eu/mustang/theme-features/plugins/" target="_blank">use any plugin with this theme</a>. Here are some tested, used and recommended plugins by the <a href="http://www.webmandesign.eu">theme author</a>:</p>

					<dl class="list indented">

						<dt><a href="https://wordpress.org/plugins/caldera-forms/" target="_blank"><strong>Caldera Forms</strong></a></dt>
						<dd>A <strong>great</strong> form builder plugin for WordPress! Highly recommended!</dd>

						<dt><a href="https://wordpress.org/plugins/cpt-editor/" target="_blank"><strong>Custom Post Type Editor</strong></a></dt>
						<dd>Allows you to rename any post type.</dd>

						<dt><a href="https://wordpress.org/plugins/customizer-export-import/" target="_blank"><strong>Customizer Export/Import</strong></a></dt>
						<dd>Perfect plugin for backing up your theme's Customizer settings.</dd>

						<dt><a href="https://wordpress.org/plugins/disable-comments/" target="_blank"><strong>Disable Comments</strong></a></dt>
						<dd>Disables comments site-wide per post type.</dd>

						<dt><a href="https://wordpress.org/plugins/elementor/" target="_blank"><strong>Elementor Page Builder</strong></a></dt>
						<dd>Completely free frontend drag & drop page builder.</dd>

						<dt><a href="https://wordpress.org/plugins/wp-front-end-editor/" target="_blank"><strong>Front-end Editor</strong></a></dt>
						<dd>Edit your posts on the front-end of your site.</dd>

						<dt><a href="https://wordpress.org/plugins/imsanity/" target="_blank"><strong>Imsanity</strong></a></dt>
						<dd>Automatically resizes huge image uploads.</dd>

						<dt><a href="https://wordpress.org/plugins/intuitive-custom-post-order/" target="_blank"><strong>Intuitive Custom Post Order</strong></a></dt>
						<dd>For easy posts ordering.</dd>

						<dt><a href="https://wordpress.org/plugins/google-maps-builder/" target="_blank"><strong>Maps Builder - Google Maps Plugin</strong></a></dt>
						<dd>Let's you build a custom Google Maps to be used in your posts and pages.</dd>

						<dt><a href="https://wordpress.org/plugins/my-eyes-are-up-here/" target="_blank"><strong>My Eyes Are Up Here</strong></a></dt>
						<dd>Helps you control how WordPress generates thumbnails.</dd>

						<dt><a href="https://wordpress.org/plugins/page-links-to/" target="_blank"><strong>Page Links To</strong></a></dt>
						<dd>Lets you make a WordPress page (or other content type) link to a custom URL of your choosing.</dd>

						<dt><a href="https://wordpress.org/plugins/polylang/" target="_blank"><strong>Polylang</strong></a></dt>
						<dd>Making your WordPress website multilingual. A great free alternative to <a href="https://wpml.org/" target="_blank">paid WPML plugin</a>.</dd>

						<dt><a href="https://wordpress.org/plugins/rename-taxonomies/" target="_blank"><strong>Rename Taxonomies</strong></a></dt>
						<dd>Allows you to rename any taxonomy.</dd>

						<dt><a href="https://wordpress.org/plugins/smart-slider-3/" target="_blank"><strong>Smart Slider 3</strong></a></dt>
						<dd>Great free advanced, layered slider plugin.</dd>

						<dt><a href="https://wordpress.org/plugins/theme-check/" target="_blank"><strong>Theme Check</strong></a></dt>
						<dd>Checks your themes against the latest WordPress theme review standards.</dd>

						<dt><a href="https://wordpress.org/plugins/widget-css-classes/" target="_blank"><strong>Widget CSS Classes</strong></a></dt>
						<dd>Add custom classes to your widgets.</dd>

						<dt><a href="https://wordpress.org/plugins/wp-featherlight/" target="_blank"><strong>WP Featherlight</strong></a></dt>
						<dd>The best free image lightbox (zooming) plugin that just works!</dd>

					</dl>

			</div>



		<!--

		Demo Content

		-->
		<h2 id="demo-content">Installing Demo Content</h2>
			<div class="section indented row">

				<div class="col-sm-12 col-md-6">

					<h3>One-click Installation</h3>

					<div class="alert alert-danger">
						<h4>Warning</h4>
						<p>It is recommended to install theme demo content into <strong>empty, fresh WordPress installation</strong> only. Otherwise it might mess up your existing content!</p>
					</div>

					<p>For more info on automatic one-click demo content installation please read the <strong><em>Appearance &raquo; Welcome &raquo; "Installing the theme demo content"</em></strong>. After installing and activating required <a href="https://wordpress.org/plugins/one-click-demo-import/" target="_blank"><strong>One Click Demo Import</strong></a> plugin, head over to <strong><em>Appearance &raquo; Import Demo Data</em></strong> and run the import process.</p>

					<p>In case you experience an issue during the one-click demo content import, please <a href="https://github.com/proteusthemes/one-click-demo-import/blob/master/docs/import-problems.md" target="_blank">read the online information article</a>.</p>

				</div>

				<div class="col-sm-12 col-md-6">

					<h3>Manual Installation</h3>

					<div class="alert alert-danger">
						<h4>Warning</h4>
						<p>It is recommended to install theme demo content into <strong>empty, fresh WordPress installation</strong> only. Otherwise it might mess up your existing content!</p>
					</div>

					<p>For detailed instructions regarding each demo content file installation and download, please visit the <strong><a href="https://github.com/webmandesign/demo-content/tree/master/mustang/" target="_blank">theme demo files repository</a></strong> at Github.</p>

					<p>You can use this procedure in case the One-click Installation procedure fails. In that case it is recommended to delete (permanently) the imported media files from your media library and run the database reset with a plugin such as <a href="https://wordpress.org/plugins/advanced-wp-reset/screenshots/" target="_blank"><strong>Advanced WordPress Reset</strong></a>.</p>

					<p>Please check WordPress codex for <a href="https://codex.wordpress.org/FAQ_Working_with_WordPress#How_do_I_Import_a_WordPress_WXR_file_when_it_says_it_is_too_large_to_import.3F" target="_blank">information about manual demo XML file import issues</a>.</p>

				</div>

			</div>

			<div class="section indented">

				<div class="alert alert-info">
					<h4>Demo Images and Other Media Quality</h4>
					<p>Please understand that <strong>demo images, audio and video files are low quality</strong> due to copyright protection and you should replace them with your own, <a href="#credits">properly copyrighted images</a>.</p>
				</div>

				<div class="alert alert-warning">
					<h4>Demo Content Import Issues</h4>
					<p>Please note that there <em>might</em> occur some connection issues when downloading demo attachments (media files) from demo content servers during the demo content import process.</p>
					<p>These, however, are just demo attachments (images, videos, audio files) and you are perfectly fine (actually, you should) replacing them with your own assets.</p>
					<p>Other demo content (posts, pages and custom posts content) will be imported without any issues.</p>
				</div>

			</div>



		<!--

		Pages

		-->
		<h2 id="pages">Pages</h2>
			<div class="section indented row">

				<div class="col-sm-12 col-md-6">

					<h3>Setting Up Front and Blog Page</h3>

						<ol>
							<li>
								In WordPress admin navigate to <strong><em>Settings &raquo; Reading</em></strong>.
							</li>
							<li>
								For <em>"Front page displays"</em> option set <em>"A static page (select below)"</em>.
							</li>
							<li>
								Select the front page from dropdown list. This page will become your home page.<br />
								Select the posts page from dropdown list. This page will become your blog page.
							</li>
						</ol>

						<div class="alert alert-info">
							<strong>TIP:</strong> You can also do this in <a href="#customizer">theme customizer</a> where you get live preview of your settings.
						</div>

					<h3>Page Settings Tab</h3>

						<p>Each page contains a setting tabs with advanced page options. Just click the <strong><em>"Settings"</em> tab</strong> (and others) above the page content editor (if you enable a page builder, the page settings tab will be displayed in metabox below) and you will be able to set several different page options, depending on what page template is being used.</p>

						<img src="http://dl.dropboxusercontent.com/s/eu10p7bagd49bvz/page-settings-general.png" alt="" title="Setting a general page options" class="frame" />

					<h3>Page Builder</h3>

						<p>The theme is fully compatible with the best front-end page builder plugin for WordPress, the <a href="#beaver-builder">Beaver Builder</a>, which will help you create a complex page layouts with ease! Please, don't forget to set up a <strong>"Fullwidth sections" page layout</strong> when using a page builder!</p>

				</div>

				<div class="col-sm-12 col-md-6">

					<h3>Setting Up a Page Template</h3>

					<ol>
						<li>
							On page edit screen choose one of predefined page templates in <strong>Page attributes</strong> metabox on the right.
						</li>
						<li>
							Once you set the page template, notice how <strong>page options tabs</strong> changed to offer you only the options related to specific page template.
						</li>
					</ol>

					<img src="http://dl.dropboxusercontent.com/s/79764016m4if6v6/page-template-selection.png" alt="" title="Setting a page template" class="frame" />

					<div class="alert alert-info">
						<h4>Tip:</h4>
						<p>Read below for more info on included page templates.</p>
					</div>

				</div>

			</div>

			<div class="section indented row">

				<div class="col-sm-12 col-md-6">

					<h3 id="tpl-default">Page Template: Default</h3>

						<p>In <strong>page options tabs</strong> you can set these options:</p>

						<dl>
							<dt><strong>Settings</strong> tab</dt>
							<dd>
								<p>For fullwidth sections please set the "Fullwidth section" option from the <strong>"Page layout"</strong> dropdown.</p>
							</dd>
							<dt><strong>Slider</strong> tab</dt>
							<dd>
								<p>You can set a custom special slider (use any custom slider plugin) or featured image.</p>
							</dd>
						</dl>

					<h3 id="tpl-blank">Page Template: Blank</h3>

						<p>This page template displays no header and footer, only the page content. The page content is centered on the screen. Blank page template is best suited for under construction pages or special landing pages. It has no options to set.</p>

					<h3 id="tpl-blog">Page Template: Blog</h3>

						<p>With this theme you can set several blogs. Just use this page template and set its options:</p>

						<dl>
							<dt><strong>Blog</strong> tab</dt>
							<dd><img src="http://dl.dropboxusercontent.com/s/pa1jp7ycdkobpo2/page-settings-blog.png" alt="" title="Setting a blog page options" /></dd>
						</dl>

				</div>

				<div class="col-sm-12 col-md-6">

					<h3 id="tpl-onepage">Page Template: One page</h3>

						<p>You can set a custom menu for this page template. The special scrolling JavaScript will be used to scroll to the sections of this page.</p>
						<p>Don't forget to set up a HTML ID attribute for the sections of the page as otherwise your anchor navigation won't work. The best is to set up the ID attribute on page builder rows.</p>

						<p>In <strong>page options tabs</strong> you can set these options:</p>

						<dl>
							<dt><strong>One page</strong> tab</dt>
							<dd><img src="http://dl.dropboxusercontent.com/s/llt3av50go3090y/page-settings-onepage.png" alt="" title="Setting a one page options" /></dd>
						</dl>

						<img src="http://dl.dropboxusercontent.com/s/v6ow0ng5k9g5qs6/anchor-navigation.png" alt="" title="Setting up an anchor in website menu" class="frame" />

				</div>

			</div>



		<!--

		Posts

		-->
		<h2 id="posts">Posts</h2>
			<div class="section indented">

				<div class="row">

					<div class="col-sm-12 col-md-6">

						<h3>Post Excerpt</h3>

						<p>Post excerpt will be displayed in posts list. If no excerpt set, a portion of post content will take its place in posts list (if set, until <a href="http://codex.wordpress.org/Customizing_the_Read_More" target="_blank"><code>&lt;!--more--></code> tag</a>). Post excerpt will also be displayed at the top of the post content on single post page. Please note that you will probably have to enable post excerpt field in <strong>"Screen Options"</strong> first.</p>

						<p>If you set the <a href="http://codex.wordpress.org/Customizing_the_Read_More" target="_blank">"Read more" tag</a> inside the post content and you also set a post excerpt, first the post excerpt followed with post content (until "Read More" tag) will be displayed in posts list.</p>

					</div>

					<div class="col-sm-12 col-md-6">

						<h3>Table of Contents on Parted Post</h3>

						<p>If you are setting up a multipage post (using a "Page break" button in visual editor, or <code>&lt;!–nextpage–></code> tag in "Text" tab of visual editor), the automatic table of contents will be generated for the post/page for you.</p>

						<p>All you need to do is to set up a post parts titles at the top of each post part (so, immediately after <code>&lt;!–nextpage–></code> tag) with <strong>H2 heading</strong>.</p>

					</div>

				</div>

				<h3 id="posts-formats">Setting Up a Post Format</h3>

				<p>On the post edit screen choose one of the predefined post formats in <strong>Format</strong> metabox on the right. The theme supports these post formats:</p>

				<div class="section indented row">

					<div class="col-sm-12 col-md-6">

						<h3 id="posts-standard">Standard post <small>What is it?</small></h3>

							<p>This is basic standard blog post layout. It is recommended to set a featured image for this post format as it will be displayed in posts list alongside with post excerpt.</p>

						<h3 id="posts-audio">Audio post <small>What is it?</small></h3>

							<p>Displays audio player to play your audio files. Could be used for Podcasting. Please place the <code>[wm_audio]</code> shortcode as the first thing in post content. The audio description text can follow on next line.</p>

						<h3 id="posts-gallery">Gallery post <small>What is it?</small></h3>

							<p>A standard post with a gallery of images in post content. Slideshow will be displayed on blog page from the first gallery found in post content. If no gallery found, featured image is displayed.</p>

							<p>You can insert a <code>[gallery]</code> shortcode anywhere in the post. This shortcode will not be stripped out from the post content on the single post page.</p>

					</div>

					<div class="col-sm-12 col-md-6">

						<h3 id="posts-link">Link post <small>What is it?</small></h3>

							<p>Promotes interesting URL links. You can set the link anywhere in the post content. The link will be emphasized when post is displayed. Post title will not be displayed.</p>

						<h3 id="posts-quote">Quote post <small>What is it?</small></h3>

							<p>A quotation. Please place the actual quote (blockquote) directly into post content. To set a quote source use a <a href="http://www.w3schools.com/tags/tag_cite.asp" target="_blank"><code>&lt;cite></code> HTML tag</a>. Post title will not be displayed.</p>

						<h3 id="posts-status">Status post <small>What is it?</small></h3>

							<p>A short status update, similar to a Twitter status update. Please place the actual status text directly into post content area. Post title will not be displayed.</p>

						<h3 id="posts-video">Video post <small>What is it?</small></h3>

							<p>A single video. Please place the <code>[wm_video]</code> shortcode as the first thing in post content. The video description text can follow on next line.</p>

					</div>

				</div>

			</div>



		<!--

		Projects

		-->
		<h2 id="projects">Projects</h2>
			<div class="section indented">

				<h3>What Are They and How to Use Them?</h3>

				<div class="alert alert-info">
					This custom post type is provided via <a href="#webman-amplifier"><strong>WebMan Amplifier</strong></a> plugin.
				</div>

				<div class="alert alert-success">
					<h4>What <a href="#beaver-builder"><strong>Beaver Builder</strong></a> module to use to display Staff?</h4>
					<p>Please use <em>"WM Posts (custom posts)"</em> module and set the "Post type" option to "Projects".</p>
				</div>

				<div class="alert alert-warning">
					Before using <a href="#beaver-builder"><strong>Beaver Builder</strong> page builder</a> with this custom post type you need to enable it in Beaver Builder's settings first.<br />
					Navigate to <strong>Settings &raquo; Page Builder &raquo; Post Types</strong>.
				</div>

				<p class="uppercase">Projects custom post can be used to showcase your work. You can place any content into projects and create stunning complex layouts using <a href="#beaver-builder"><strong>Beaver Builder</strong> page builder plugin</a>.</p>

				<p>For each project you can optionally tweak the project settings (click the "Settings" tab above content editor). You can set project layout, project custom link URL and project custom link action.</p>

				<div class="alert alert-warning">
					<h4>Custom preview slider:</h4>
					<p>If you are setting up a <em>"Custom preview slider"</em> option, please don't use any links inside the slider. Instead, set up a custom link for the project itself.</p>
				</div>

				<p>Each project can be categorized and tagged and you can use these taxonomies for portfolio filtering in dedicated <strong>Beaver Builder</strong> "Posts (custom posts)" module.</p>

				<div class="alert alert-info">
					<p><strong>TIP:</strong> If you would like to rename this post type, use the <a href="https://wordpress.org/plugins/cpt-editor/" target="_blank"><strong>Custom Post Type Editor</strong></a> plugin. To rename the custom taxonomies, use the <a href="https://wordpress.org/plugins/rename-taxonomies/" target="_blank"><strong>Rename Taxonomies</strong></a> plugin.</p>
				</div>

			</div>



		<!--

		Logos

		-->
		<h2 id="logos">Logos</h2>
			<div class="section indented">

				<h3>What Are They and How to Use Them?</h3>

				<div class="alert alert-info">
					This custom post type is provided via <a href="#webman-amplifier"><strong>WebMan Amplifier</strong></a> plugin.
				</div>

				<div class="alert alert-success">
					<h4>What <a href="#beaver-builder"><strong>Beaver Builder</strong></a> module to use to display Staff?</h4>
					<p>Please use <em>"WM Posts (custom posts)"</em> module and set the "Post type" option to "Logos".</p>
				</div>

				<p class="uppercase">Logos custom post can be used to easily manage your clients and parthers logos.</p>

				<p>They can be grouped into categories, so you can create a separate category for clients and separate category for partners (and for others) and then display them on the website individually using a <a href="#beaver-builder"><strong>Beaver Builder</strong></a> module.</p>
				<p>For each logo you can set up an image, custom link URL, custom link action and assign it to a logo category.</p>

				<div class="alert alert-info">
					<p><strong>TIP:</strong> If you would like to rename this post type, use the <a href="https://wordpress.org/plugins/cpt-editor/" target="_blank"><strong>Custom Post Type Editor</strong></a> plugin. To rename the custom taxonomies, use the <a href="https://wordpress.org/plugins/rename-taxonomies/" target="_blank"><strong>Rename Taxonomies</strong></a> plugin.</p>
				</div>

			</div>



		<!--

		Testimonials

		-->
		<h2 id="testimonials">Testimonials</h2>
			<div class="section indented">

				<h3>What Are They and How to Use Them?</h3>

				<div class="alert alert-info">
					This custom post type is provided via <a href="#webman-amplifier"><strong>WebMan Amplifier</strong></a> plugin.
				</div>

				<div class="alert alert-success">
					<h4>What <a href="#beaver-builder"><strong>Beaver Builder</strong></a> module to use to display Testimonials?</h4>
					<p>Please use <em>"WM Testimonials"</em> module.</p>
				</div>

				<p class="uppercase">Testimonials posts can be used to display reviews you receive from your clients or customers.</p>

				<p>Besides the actual testimonial text you can also set its author details together with author photo or logo (featured image) and conveniently categorize testimonials for better organization.</p>

				<div class="alert alert-info">
					<p><strong>TIP:</strong> If you would like to rename this post type, use the <a href="https://wordpress.org/plugins/cpt-editor/" target="_blank"><strong>Custom Post Type Editor</strong></a> plugin. To rename the custom taxonomies, use the <a href="https://wordpress.org/plugins/rename-taxonomies/" target="_blank"><strong>Rename Taxonomies</strong></a> plugin.</p>
				</div>

			</div>



		<!--

		Staff

		-->
		<h2 id="staff">Staff</h2>
			<div class="section indented">

				<h3>What Are They and How to Use Them?</h3>

				<div class="alert alert-info">
					This custom post type is provided via <a href="#webman-amplifier"><strong>WebMan Amplifier</strong></a> plugin.
				</div>

				<div class="alert alert-success">
					<h4>What <a href="#beaver-builder"><strong>Beaver Builder</strong></a> module to use to display Staff?</h4>
					<p>Please use <em>"WM Posts (custom posts)"</em> module and set the "Post type" option to "Staff".</p>
				</div>

				<p class="uppercase">With staff custom post you can easily manage your company's team info.</p>

				<p>This post type provides just short basic information about your team members, however, you can link it to any page/post or external website for more details on the person.</p>

				<div class="alert alert-info">
					<p><strong>TIP:</strong> If you would like to rename this post type, use the <a href="https://wordpress.org/plugins/cpt-editor/" target="_blank"><strong>Custom Post Type Editor</strong></a> plugin. To rename the custom taxonomies, use the <a href="https://wordpress.org/plugins/rename-taxonomies/" target="_blank"><strong>Rename Taxonomies</strong></a> plugin.</p>
				</div>

			</div>



		<!--

		Content Modules

		-->
		<h2 id="content-modules">Content Modules</h2>
			<div class="section indented">

				<h3>What Are They and How to Use Them?</h3>

				<div class="alert alert-info">
					This custom post type is provided via <a href="#webman-amplifier"><strong>WebMan Amplifier</strong></a> plugin.
				</div>

				<div class="alert alert-success">
					<h4>What <a href="#beaver-builder"><strong>Beaver Builder</strong></a> module to use to display Content Modules?</h4>
					<p>Please use <em>"WM Content Module"</em> module.</p>
				</div>

				<p class="uppercase">Content Modules can be used as a content injection to various website areas. You can display it within any page or post content. Content Modules can be styled as <strong>icon boxes</strong>, so they are perfect for your services or benefits presentation.</p>

				<p>For each Content Module you can set up a title, description text, custom link URL, custom link action, featured image and/or font icon.</p>

				<p>If you use font icon, you can change the icon color and its background too.</p>

				<p>It is also possible to conveniently group Content Modules using dedicated tags.</p>

				<div class="alert alert-info">
					<p><strong>TIP:</strong> If you would like to rename this post type, use the <a href="https://wordpress.org/plugins/cpt-editor/" target="_blank"><strong>Custom Post Type Editor</strong></a> plugin. To rename the custom taxonomies, use the <a href="https://wordpress.org/plugins/rename-taxonomies/" target="_blank"><strong>Rename Taxonomies</strong></a> plugin.</p>
				</div>

			</div>



		<!--

		Shortcodes

		-->
		<h2 id="shortcodes">Shortcodes</h2>
			<div class="section indented">

				<div class="row">

					<div class="col-sm-12 col-md-6">

						<h3>Shortcodes</h3>

						<p><strong>Shortcodes</strong> are basically commands you place into page/post/text widget content that will create content elements that are not possible to create or would be otherwise complicated to create.</p>

						<p>WordPress offers couple of shortcodes natively and one of them is <code>[gallery /]</code> shortcode. This theme even enhaces this shortcode's functionality.</p>

						<p>You can <a href="http://codex.wordpress.org/Shortcode_API" target="_blank">read more on shortcodes in WordPress codex</a>.</p>

					</div>

					<div class="col-sm-12 col-md-6">

						<h3 id="shortcodes-generator">Shortcode Generator</h3>

						<p>With integrated <strong>Shortcode Generator</strong> it is very easy to insert any shortcode into the post or page content. Simply click the <strong>[S]</strong> button in visual editor, select a shortcode from dropdown and it will be inserted into the post content on the current cursor position.</p>

						<p>However, the theme supports a <a href="#beaver-builder">Beaver Builder page builder plugin</a> that lets you create a page/post content in drag and drop environment with ease. This is even more convenient way of creating post content that the Shortcode Generator.</p>

					</div>

				</div>

				<h3 id="gallery-shortcode">WordPress [gallery] shortcode enhancements</h3>

					<p>WordPress native <code>[gallery]</code> shortcode can be controlled by <a href="http://codex.wordpress.org/Gallery_Shortcode" target="_blank">several default attributes</a>. However, the theme adds these additional shortcode attributes to enhance gallery functionality:</p>

					<dl>
						<dt><code>flexible</code></dt>
							<dd>This is a boolean attribute, so set it to <code>0</code> (= "off"; or leave it blank, or don't set it at all) or <code>1</code> (= "on"). By turning this attribute "on" the gallery will be displayed in <a href="http://masonry.desandro.com/" target="_blank">masonry style</a>.</dd>
						<dt><code>class</code></dt>
							<dd>With this attribute you can set a custom class applied on <strong>each</strong> gallery image item. You can, for example, use a <code>frame</code> class to apply a frame arround the gallery images.</dd>
					</dl>

			</div>



		<!--

		Navigation

		-->
		<h2 id="navigation">Navigational Menus</h2>
			<div class="section indented row">

				<div class="col-sm-12 col-md-4">

					<h3>Using Navigational Menus</h3>

						<p><strong>Mustang</strong> supports WordPress Menus, so you can easily create custom navigational menus directly in <strong><em>Appearance &raquo; Menus</em></strong>.</p>

						<p>Custom menus may contain links to pages, categories, custom links or other content types (use the <strong>[Screen Options]</strong> button in upper right corner of the screen to decide which content types to show on the menu edit screen). You can specify a different navigation label for a menu item as well as other attributes.</p>

						<p>To display menus on your website you need to assign them to a menu locations or use them in conjunction with the Custom Menus widget.</p>

						<p>The theme allows you to create as many menus as you want. However these menus can be placed into predefined locations only. The theme defines these menu locations:</p>
						<ul>
							<li><strong>Main navigation</strong> - This is the main navigation area in the header of the website. The menu can be nested and hierarchically organised.</li>
							<li><strong>One page template menu overrides</strong> - You can set up a custom menu for <a href="#tpl-onepage">One page template</a>. This menu will override the main navigation menu for that specific page.</li>
						</ul>

					<h3>Creating a Menu</h3>

						<p>Please follow the <a href="http://codex.wordpress.org/WordPress_Menu_User_Guide" target="_blank">instructions in WordPress codex on how to create menus</a>.</p>

						<p>Helpful tutorial: <a href="#wordpress">WordPress video tutorials</a>.</p>

					<h3>Assigning Icons to Menu Items</h3>

						<div class="alert alert-warning">
							For this functionality you will need to set the menu item <em>CSS Classes</em> attributes. To enable this attribute, check it in <strong>[Screen Options]</strong> tab in the upper right corner of the screen.
						</div>

						<p>To add an icon to a menu item you need to assign one of the icon classes to it. You can display all the available icons and get their classes in <strong><em>Appearance &raquo; Icon Font &raquo; Click to display recent available icon classes</em></strong>.</p>

				</div>

				<div class="col-sm-12 col-md-8">

					<h3>Megamenu</h3>

						<div class="alert alert-warning">
							For this functionality you will need to set the menu item <em>CSS Classes</em> attributes. To enable this attribute, check it in <strong>[Screen Options]</strong> tab in the upper right corner of the screen.
						</div>

						<div class="row">

							<div class="col-sm-12 col-md-7">

								<p class="uppercase">With built in simple megamenu functionality you can display submenu items layed out into several columns.</p>

								<ol>
									<li>
										<p>To create a megamenu from submenu items please set a <code>megamenu columns-#</code> classes on the <strong style="color: #c66a53;">1st level menu item</strong>. The <code>#</code> in <code>columns-#</code> stands for a number of columns the megamenu should be splitted into: 2, 3 or 4. This <strong style="color: #c66a53;">1st level menu item</strong> essentially becomes a wrapper and trigger for your megamenu.</p>
										<img src="https://www.dropbox.com/s/6d62gfzxs018bmv/megamenu-1.png?dl=1" class="frame" alt="" title="Megamenu 1st level menu item display on the website" />
									</li>
									<li>
										<p>Then the <strong style="color: #0aac8e;">2nd level menu items</strong> (first children) becomes titles/headings of the megamenu columns.</p>
										<img src="https://www.dropbox.com/s/g1vp0m5o9e58mna/megamenu-2.png?dl=1" class="frame" alt="" title="Megamenu 2nd level menu item display on the website" />
									</li>
									<li>
										<p>Finally, the <strong style="color: #3b89af;">3rd level menu items</strong> (second children) within your megamenu are the actual column menu items. So, you should set these for each column (for each 2nd level menu item).</p>
										<img src="https://www.dropbox.com/s/oh6f8hpsahfh2qp/megamenu-3.png?dl=1" class="frame" alt="" title="Megamenu 3rd level menu item display on the website" />
									</li>
								</ol>

								<p>The 4th level menu items won't be displayed in megamenu.</p>

							</div>

							<div class="col-sm-12 col-md-5">

								<img src="https://www.dropbox.com/s/2y5kw9kg3uip9k5/megamenu-setup.png?dl=1" class="frame" alt="" title="Megamenu setup - read below for instructions" />

							</div>

						</div>

				</div>

			</div>



		<!--

		Widget Areas

		-->
		<h2 id="widgets">Widget Areas (Sidebars) and Widgets</h2>
			<div class="section indented row">

				<div class="col-sm-12 col-md-6">

					<h3>Widget Areas (Sidebars)</h3>

					<p>Widget areas can be used as sidebars, displayed using a shortcode or displayed in predefined website areas, such as footer.</p>

					<div class="alert alert-info">
						<h4>Custom Sidebars</h4>
						<p>You can create a custom sidebars and use them anywhere on the website with a help of <a href="https://wordpress.org/plugins/woosidebars/"><strong>WooSidebars</strong></a> plugin.</p>
					</div>

					<h3>Additional Widgets</h3>

					<p>The theme also supports several new WebMan Amplifier plugin's widgets (such as Contact, Content Module, Projects, Submenu, Tabbed Widgets and Twitter widget).</p>

				</div>

				<div class="col-sm-12 col-md-6">

					<h3 id="widgets-twitter" class="pt60">Twitter Widget Setup</h3>

					<p>Twitter (www.twitter.com) API allows to display tweets on your website only when you set up additional security variables. Here is how to get them from Twitter (you need to create an application):</p>

					<ol>
						<li>
							Head over to <a href="https://dev.twitter.com/apps" target="_blank">https://dev.twitter.com/apps</a> and click the <strong>[Create a new application]</strong> button.
						</li>
						<li>
							On the next screen fill out the form fields (no need to fill the "Callback URL" field) and press the <strong>[Create your Twitter application]</strong> button.
						</li>
						<li>
							On your application's details page scroll down and click the <strong>[Create my access token]</strong> button.
						</li>
						<li>
							Now you should be able to copy all the required variables (<em>Consumer key, Consumer secret, Access token, Access token secret</em>) and finish setting up the Twitter widget in your WordPress admin area.
						</li>
					</ol>

				</div>

			</div>



		<!--

		Customizer

		-->
		<h2 id="customizer">Theme Customizer</h2>
			<div class="section indented">

				<div class="row">

					<div class="col-sm-12 col-md-8">

						<h3>Theme Customization</h3>

						<p>The theme seamlessly integrates its options into the <strong>WordPress theme customizer</strong>.</p>

						<p>You can access it navigating to <strong><em>Appearance &raquo; Customize</em></strong> and all theme related settings can be found under <strong>"Theme"</strong> panel. All the changes you set in customizer will be immediately displayed in the theme preview. However, these changes will not be saved until you press the <strong>[Save &amp; Publish]</strong> button.</p>

						<p>You can set up your site's title, tagline and logo, manage <a href="#navigation">navigational menu locations</a> and <a href="#widgets">widget areas</a>, set up a <a href="#pages">front and blog page</a>, theme colors, layout, predefined texts and fonts.</p>

					</div>

					<div class="col-sm-12 col-md-4">

						<h3>Backing the Settings Up</h3>

						<div class="alert alert-info mt0">
							<p>Use <a href="#customizer-export-import"><strong>Customizer Export/Import</strong></a> plugin to back up your theme customizer settings.</p>
						</div>

					</div>

				</div>

			</div>



		<!--

		SEO

		-->
		<h2 id="seo">Search Engine Optimization and Traffic Tracking</h2>
			<div class="section indented row">

				<div class="col-sm-12 col-md-6">

					<h3>Search Engine Optimization</h3>

					<p>The theme is coded with best <abbr title="Search Engine Optimization">SEO</abbr> practices in mind, meaning it is ready to be displayed on top of search results in search engines such as Google.</p>
					<p>It also integrates <strong>Schema.org microformats</strong> automatically.</p>
					<p>Please note though, that this is just basic SEO optimization and you will have to push it further to make the real deal with SEO. For such cases I recommend <a href="http://wordpress.org/extend/plugins/wordpress-seo/" target="_blank">Yoast SEO</a> plugin.</p>

				</div>

				<div class="col-sm-12 col-md-6">

					<h3>Traffic Tracking</h3>

					<p>I recommend using <a href="http://wordpress.org/plugins/google-analytics-for-wordpress/" target="_blank">Google Analytics by MonsterInsights</a> plugin as it offers advanced customization of tracking of you website.</p>

				</div>

			</div>



		<!--

		Localization

		-->
		<h2 id="localization">Localization</h2>
			<div class="section indented">

				<h3>How to Translate the Theme?</h3>

				<div class="alert alert-warning">
					<h4>Free WordPress.org themes translation</h4>
					<p>If you have obtained the theme from <a href="https://wordpress.org/themes/author/webmandesign/" target="_blank"><strong>WordPress.org themes repository</strong></a>, please translate the theme by clicking the <a href="https://translate.wordpress.org/projects/wp-themes/mustang" target="_blank">Translate Mustang</a> link in theme page sidebar.</p>
				</div>

				<div class="alert alert-danger">
					<strong>REMINDER:</strong> Any translation files placed in the <code>mustang/languages</code> folder will be deleted when you update the theme.
				</div>

				<ol>
					<li>Make a copy of the original <code>mustang/languages/mustang.pot</code> file.</li>
					<li>You need to rename the copied file now. The naming convention is based on your language code locale and renaming the file extension to "po". So, the British English file would be named as <code>en_GB.po</code>.</li>
					<li>Use <a href="http://www.poedit.net/" target="_blank"><strong>Poedit</strong></a> to translate the file and export (save) translation also in "mo" translation file format.</li>
					<li>Upload translated <code>en_GB.mo</code> file into your WordPress language directory, such as <code>/wp-content/languages/themes/mustang/en_GB.mo</code>. Alternatively you can put translations in your child theme: <code>/wp-content/themes/your-child-theme/languages/en_GB.mo</code>.</li>
				</ol>

				<div class="alert alert-info">
					<h4>Contributing your translations back to the theme</h4>
					If you would like to help out translating the theme, please contribute on <a href="http://support.webmandesign.eu">WebMan Design Support Forum</a>. (If you have translated the theme at WordPress.org repository, you don't have to do anything :))
				</div>

			</div>



		<!--

		Theme Modifications

		-->
		<h2 id="child-theme">Theme Modifications <small>and Child Themes</small> <a href="https://github.com/webmandesign/child-theme" class="btn btn-success alignright">Download the sample child theme</a></h2>
			<div class="section indented">

				<h3>When and How to Use a Child Theme?</h3>

				<p>If you need to make any styling or functional changes to the theme, please use the WordPress native <strong>child theme</strong> functionality. This way you can continue updating the parent (original) <strong>Mustang</strong> theme without any worry of your changes being overwritten as all your custom styles and functionality are kept in a child theme. You can read more about <a href="http://codex.wordpress.org/Child_Themes" target="_blank">child themes on WordPress Codex pages</a>.</p>
				<p>You can put all your custom CSS styles into <code>YOUR_WORDPRESS_INSTALLATION/wp-content/themes/YOUR_CHILD_THEME/style.css</code> file. (You can alternatively use a plugin, such as Jetpack, to insert a custom CSS.)</p>
				<p>If you also want to change the functionality of the original <strong>Mustang</strong> theme, do so in <code>YOUR_WORDPRESS_INSTALLATION/wp-content/themes/YOUR_CHILD_THEME/functions.php</code> file. You can freely modify any theme's function or class method there by hooking onto the specific "pre" filter (see WordPress codex for more info on hot to use <a href="http://codex.wordpress.org/Plugin_API/Filter_Reference" target="_blank">filter</a> and <a href="http://codex.wordpress.org/Plugin_API/Action_Reference" target="_blank">action</a> hooks).</p>

				<h4 class="mt-m">Resources:</h4>
				<ul>
					<li><a href="https://github.com/webmandesign/child-theme" target="_blank"><strong>Download a sample child theme</strong></a></li>
					<li><a href="https://wordpress.org/plugins/child-theme-check/" target="_blank"><strong>Child Theme Check</strong> plugin</a> (<a href="https://wptavern.com/child-theme-check-plugin-helps-wordpress-users-navigate-parent-theme-updates" target="_blank">how it works?</a>)</li>
					<li><a href="http://codex.wordpress.org/Child_Themes" target="_blank">WordPress Codex on child themes</a></li>
					<li><a href="http://www.woothemes.com/2015/07/why-child-themes-matter/" target="_blank">Why child themes are so important</a></li>
					<li><a href="http://wpsites.net/wordpress-themes/how-to-make-your-own-child-theme-for-wordpress-beginners-guide/" target="_blank">How To Make A Child Theme for WordPress (Includes Video & Downloads)</a></li>
					<li><a href="https://wordpress.org/plugins/child-theme-configurator/" target="_blank">Child Theme Configurator plugin</a></li>
				</ul>

				<div class="alert alert-danger">
					<strong>Please note that <a href="http://support.webmandesign.eu" target="_blank">we do not provide support for custom theme modifications</a>, though.</strong> You are responsible for all the changes you apply to the theme on your website. If you are not comfortable coding, please, consider hiring someone who could help.
				</div>

			</div>



		<!--

		FAQ & Tips

		-->
		<h2 id="tips"><abbr title="Frequently Asked Questions">FAQ</abbr> and Tips and Tricks <small>Frequently Asked Questions and Additional tips for the theme</small></h2>
			<div class="section indented">

				<h3 id="faq">List of Frequently Asked Questions:</h3>

					<ol>
						<li><a href="#css-classes"><em>How to restyle elements with ease? (Using special predefined CSS classes.)</em></a></li>
						<li><a href="#fonts"><em>How to set up and use a custom font?</em></a></li>
						<li><a href="#icons"><em>How to set up custom icons set?</em></a></li>
						<li><a href="#cookies"><em>How to set up cookies notification?</em></a></li>
						<li><a href="#error404"><em>How to customize error 404 page?</em></a></li>
						<li><a href="#admin"><em>How to customize WordPress admin?</em></a></li>
						<li><a href="#tables"><em>How to create tables easily?</em></a></li>
						<li><a href="#image-sizes"><em>My images are blurry/small/of bad quality, what can I do?</em></a></li>
						<li><a href="#css"><em>How to edit the CSS or add your own?</em></a></li>
						<li><a href="#hooks"><em>How to use action and filter hooks?</em></a></li>
					</ol>

				<h3 id="css-classes">
					How to restyle elements with ease? (Using special predefined CSS classes.)
					<a href="#faq" class="btn alignright">Back to FAQ list &uarr;</a>
					<span class="badge alignleft"></span>
				</h3>

					<div class="row">

						<div class="col-sm-12 col-md-6">

							<p>As you can apply a custom CSS classes almost on all shortcodes used by the theme, there are some <strong>special classes</strong> that will style the content for you or add a specific layout. You can use these predefined CSS classes (plus you can easily define your own ones):</p>

							<dl>

								<dt id="class-animatecss"><code>CSS3 Animation classes</code></dt>

									<dd>The theme applies CSS3 animation of <a href="http://daneden.github.io/animate.css/" target="_blank">Animate.css</a> library. Please apply these animation with <code>animation-</code> class prefix (so, the full class would look like <code>animation-ANYMATION_TYPE</code>). This way the animation will be applied only when the element becomes visible on the screen. Example: <code>animation-sectionFlip</code>.</dd>

								<dt id="class-megamenu">Use in menu: <br /><code>megamenu</code>, <code>columns-2</code>, <code>columns-3</code>, <code>columns-4</code>, <code>columns-5</code></dt>

									<dd>These classes <a href="#menus-mega">set up the megamenu</a>.</dd>

								<dt id="class-frames">Frame classes: <br /><code>frame</code>, <code>frame-items</code></dt>

									<dd>Applies a border and a small padding around the item or items. With multi item shortcodes please apply the <code>frame-items</code> class on the shortcode itself to style its items (like posts or, testimonials, for example).</dd>

								<dt id="class-shadows">Shadow classes: <br /><code>drop-shadow</code>, <code>drop-shadow-items</code>, <code>inner-shadow</code>, <code>inner-shadow-items</code>, <code>bottom-shadow</code>, <code>bottom-shadow-items</code></dt>

									<dd>Applies different kind of shadows on item or items. With multi item shortcodes please apply the <code>SHADOW-items</code> class on the shortcode itself to style its items (like posts or, testimonials, for example).</dd>

								<dt id="class-uppercase">Text classes: <br /><code>uppercase</code></dt>

									<dd>Make the text uppercase.</dd>

								<dt id="class-text-align">Text align classes: <br /><code>text-left</code>, <code>text-center</code>, <code>text-right</code>, <code>mobile-text-left</code>, <code>mobile-text-right</code></dt>

									<dd>Align the text with these classes. If you apply mobile classes, you can control the text alignment on both desktops and mobiles.</dd>

								<dt id="class-masonry">Apply on posts lists shortcodes: <br /><code>masonry</code></dt>

									<dd>Enables masonry layout on Content Modules, Posts or Testimonial shortcodes.</dd>

								<dt id="class-modules">Apply on Content Modules: <br /><code>text-center</code>, <code>small-icons</code>, <code>no-icon-background</code></dt>

									<dd>These classes are useful for icon modules: <code>text-center</code> will apply centered layout on content module with icon above the module text. <code>small-icons</code> make the content module icon smaller. <code>no-icon-background</code> will remove the background from the content module icon.</dd>

								<dt id="class-tabs">Apply on tabs: <br /><code>center-tabs</code></dt>

									<dd>Use on top tabs to center them out.</dd>

								<dt id="class-testimonials">Apply on testimonials: <br /><code>text-center</code></dt>

									<dd>Creates large text-centered testimonials.</dd>

								<dt id="class-widgets">Apply on widget areas: <br /><code>widget-columns</code></dt>

									<dd>Puts the widgets in the widget area in a row.</dd>

							</dl>

						</div>

						<div class="col-sm-12 col-md-6">

							<img src="https://www.dropbox.com/s/8u4k9jciim63d83/beaver-builder-class.jpg?dl=1" alt="Selecting custom predefined CSS class easily in Beaver Builder page builder" title="Selecting custom predefined CSS class easily in Beaver Builder page builder" class="frame" />

						</div>

					</div>

				<h3 id="fonts">
					How to set up and use a custom font?
					<a href="#faq" class="btn alignright">Back to FAQ list &uarr;</a>
					<span class="badge alignleft"></span>
				</h3>

					<div class="row">

						<div class="col-sm-12 col-md-6">

							<p class="uppercase">The theme comes pre-packed with the selection of the most popular Google Fonts. You can set up fonts in <a href="#customizer"><strong>Appearance &raquo; Customize &raquo; Theme &raquo; Fonts</strong></a>.</p>

							<p>To preview the entire set of pre-packed fonts please <a href="https://goo.gl/PqO918" target="_blank">check out the Google Fonts collection</a>.</p>

						</div>

						<div class="col-sm-12 col-md-6">

							<p>You can extend the list with your own selection by hooking onto <code>wmhook_wm_helper_var_output</code> filter hook (found in <code>wm_helper_var</code> function of the <code>mustang/setup/setup.php</code> file) in your child theme's <code>functions.php</code> file. Info on adding filter hooks: <a href="http://codex.wordpress.org/Function_Reference/add_filter" target="_blank">WordPress <code>add_filter()</code> function</a>.</p>

						</div>

					</div>

				<h3 id="icons">
					How to set up custom icons set?
					<a href="#faq" class="btn alignright">Back to FAQ list &uarr;</a>
					<span class="badge alignleft"></span>
				</h3>

					<p class="uppercase">The theme uses <a href="http://fontello.com/" target="_blank"><strong>Fontello - icon fonts generator</strong></a> to insert custom icons font. All the icons in such icon fonts are high DPI / Retina screen ready, so they will look awesome on any device. There are hundreds of icons already prepacked with the theme, however, if you want to change them, follow the instructions below to upload your own icons selection.</p>

					<div class="alert alert-danger">
						<h4>Important:</h4>
						<p>If you've aplied predefined theme icons in your website's content previously and you've changed the icon font to custom one, you might need to go through the previously applied icons and change their classes to new ones.</p>
					</div>

					<ol>
						<li>
							Go to <a href="http://fontello.com/" target="_blank"><strong>Fontello - icon fonts generator</strong></a> website.
						</li>
						<li>
							Select the icons you want to use on your website by clicking on them (or click and drag for multiple selection). Deselect the icon by clicking the highlighted ones.

							<div class="alert alert-danger">
								Please don't forget to check the information about the specific icon font group licencing.
							</div>

							<div class="alert alert-info">
								Once you choose your icons, you can optionally tweak their class names and codes on "Customize Names" and "Customize Codes" tab.
							</div>
						</li>
						<li>
							Once you choose your icons click the red <strong>Download webfont (##)</strong> button in the upper right corner.
						</li>
						<li>
							Save the ZIP file on your computer (the name of the folder should look something like <code>fontello-46ca5140</code> for example).
						</li>
						<li>
							Navigate to <strong><em>Appearance &raquo; Icon Font</em></strong> and upload the new icon font ZIP file.
						</li>
						<li>
							Press <strong>[Save changes]</strong> button and your new icon set will be installed.<br />
							You can check if your new icon set was applied by clicking <strong><em>Appearance &raquo; Icon Font &raquo; Click to display recent available icon classes</em></strong> for preview (you might need to flush your browser's cache first).
						</li>
					</ol>
					<img src="http://dl.dropboxusercontent.com/s/9y7satxvhi1s4bc/iconfont.png" alt="" title="Custom icon font setup screen" class="frame" />

				<h3 id="cookies">
					How to set up cookies notification?
					<a href="#faq" class="btn alignright">Back to FAQ list &uarr;</a>
					<span class="badge alignleft"></span>
				</h3>

					<p>Every European website has to conform European Union guidelines on privacy and data protection and <a href="http://ec.europa.eu/ipg/basics/legal/cookies/index_en.htm" target="_blank">inform users about cookies</a> being set by the website. There are multiple ways to go about this with WordPress, you can <a href="https://wordpress.org/plugins/search.php?q=cookie" target="_blank">use a plugin for that</a>, or set the notification with <a href="https://silktide.com/tools/cookie-consent/" target="_blank">Silktide <strong>Cookie Consent</strong></a> script (there is also a <a href="https://wordpress.org/plugins/cc-cookie-consent/" target="_blank">plugin for this script</a>).</p>

				<h3 id="error404">
					How to customize error 404 page?
					<a href="#faq" class="btn alignright">Back to FAQ list &uarr;</a>
					<span class="badge alignleft"></span>
				</h3>

					<p>In case you would like to customize the theme's <a href="https://codex.wordpress.org/Creating_an_Error_404_Page" target="_blank">error 404 page</a> and you do not want to touch a line of code, you can do so easily with a help of a <a href="https://wordpress.org/plugins/404page/" target="_blank"><strong>404page</strong> plugin</a>.</p>

				<h3 id="admin">
					How to customize WordPress admin?
					<a href="#faq" class="btn alignright">Back to FAQ list &uarr;</a>
					<span class="badge alignleft"></span>
				</h3>

					<p>If you are building a website for a client using WordPress (and Mustang theme), you might want to adapt the WordPress admin area a bit to remove unnecessary things and maybe even rename some post types. In this case we provide some useful resources you would want to check out:</p>

					<ul>
						<li><a href="https://webdesign.tutsplus.com/courses/wordpress-admin-customization" target="_blank"><strong>WordPress Admin Customization</strong></a> video course</li>
						<li>Use <a href="https://wordpress.org/plugins/cpt-editor/" target="_blank"><strong>Custom Post Type Editor</strong></a> plugin to rename any post type</li>
						<li>Use <a href="https://wordpress.org/plugins/rename-taxonomies/" target="_blank"><strong>Rename Taxonomies</strong></a> plugin to rename any taxonomy</li>
						<li>For easier pages/post advanced settings use <a href="https://wordpress.org/plugins/advanced-custom-fields/" target="_blank"><strong>Advanced Custom Fields</strong></a> plugin. Once you activate this plugin, the theme will automatically creates a metaboxes for all the <a href="#custom-fields">custom fields</a> it uses for you.</li>
					</ul>

				<h3 id="tables">
					How to create tables easily?
					<a href="#faq" class="btn alignright">Back to FAQ list &uarr;</a>
					<span class="badge alignleft"></span>
				</h3>

					<p>There are times you need to display tabular data in your posts and/or pages. This is not an easy task in WordPress if you are not familiar with HTML coding as there is no out-of-the-box tool to create HTML tables in post editor. But, there is an easy fix for the issue: try using a great <a href="https://wordpress.org/plugins/tablepress/" target="_blank"><strong>TablePress</strong></a> plugin.

				<h3 id="image-sizes">
					My images are blurry/small/of bad quality, what can I do?
					<a href="#faq" class="btn alignright">Back to FAQ list &uarr;</a>
					<span class="badge alignleft"></span>
				</h3>

					<div class="row">

						<div class="col-sm-12 col-md-8">

							<p class="uppercase">During the theme setup it is highly recommended to choose which image aspect ratios will be used in various website sections. You can find this setting in <a href="#customizer"><strong>Appearance &raquo; Customize &raquo; Theme &raquo; Images</strong></a>. This setting will also affect the minimal image size that you upload into WordPress.</p>

							<p>As the theme scales and reorganizes the content depending on the screen resolution it is viewed on (the responsive design feature), it requires images of <strong>minimal width of 520 pixels</strong>. The best and recommended upload image width would, however, be at least equal to the width of the website which can be set in <a href="#customizer"><strong>Appearance &raquo; Customize &raquo; Theme &raquo; Layout</strong></a>.</p>

							<p>The height of the image depends on previously mentioned image formats selected. As an example, if you choose a blog list image to be displayed in 3:2 aspect ratio, you should upload images of minimal size of <code>YOUR_WEBSITE_WIDTH &times; ( YOUR_WEBSITE_WIDTH / 3 * 2 )</code> pixels for post featured images.</p>

							<p>WordPress will rescale and crop the images to selected formats (aspect ratios) automatically during the image upload process.</p>

							<p>The rule of thumb here: the bigger the image, the better (although, keep the actual storage size of the files to minimum).</p>

						</div>

						<div class="col-sm-12 col-md-4">

							<div class="alert alert-success mt0">
								<h4>High DPI / Retina display support</h4>

								<p>If you want your website to be fully high DPI (also called Retina) screen compatible, just double the sizes of uploaded images (you can lower the quality of JPEG images a bit to reduce the storage size of the image file). The theme itself is already optimized for high DPI screens.</p>

								<p>To make sure your content images are high DPI screen ready <a href="http://www.totorotimes.com/news/retina-display-wordpress-plugin/" target="_blank">you can read a tutorial</a> and <a href="http://wordpress.org/extend/plugins/wp-retina-2x/" target="_blank">use a specialized WordPress plugin</a>.</p>

								<p>If you want to dive more into high DPI screen problematics, I recommend reading <a href="http://retinafy.me/" target="_blank"><strong>Retinafy your web sites &amp; apps</strong></a> book.</p>
							</div>

						</div>

					</div>

				<h3 id="css">
					How to edit the CSS or add your own?
					<a href="#faq" class="btn alignright">Back to FAQ list &uarr;</a>
					<span class="badge alignleft"></span>
				</h3>

					<p>If you need to apply a custom CSS to override theme styles, please use a <a href="#child-theme" target="_blank">child theme</a> or custom CSS plugin (such as <em><a href="https://jetpack.me/support/custom-css/" target="_blank">Jetpack's Custom CSS</a></em> or <em>Reaktiv CSS Builder</em> or <em>Theme Junkie Custom CSS</em>).</p>

				<h3 id="hooks">
					How to use action and filter hooks? <small>Theme development and modifications</small>
					<a href="#faq" class="btn alignright">Back to FAQ list &uarr;</a>
					<span class="badge alignleft"></span>
				</h3>

					<div class="alert alert-danger">
						This topic is dedicated to WordPress developers who would like to modify the theme and alter or expand its functionality.<br>
						<strong>Please note that <a href="http://support.webmandesign.eu" target="_blank">we do not provide support for custom theme modifications</a>, though.</strong>
					</div>

					<p>The theme is <a href="https://wordpress.org/plugins/theme-check/" target="_blank">coded according to WordPress coding standards</a> and is full of action and filter hooks. You can easily hook onto these to alter functions outputs or alter parameters and variables, to add your own meta data, theme or design options, layouts and much more!</p>
					<p>Please check the theme's source code for which hook to use, or contact <a target="_blank" href="http://support.webmandesign.eu">WebMan Design Support Forum</a> for more details and tips.</p>
					<p>Mustang itself uses the <a href="https://github.com/zamoose/themehookalliance" target="_blank">Theme Hook Alliance</a> hooks too. This is useful to entirely rebuild the theme structure or add your own sections anywhere in the theme. The whole theme front-end structure setup can be found in files inside the <code>mustang/includes/front</code> folder.</p>
					<p>You can also watch an <a href="https://www.youtube.com/watch?v=AQrXcsc4CIw" target="_blank">instructional video on how to use WordPress hooks</a>.</p>

			</div>



		<!--

		Credits

		-->
		<h2 id="credits">Sources and Credits</h2>
			<div class="section indented row">

				<div class="col-sm-12 col-md-4">

					<h3>Scripts</h3>

					<ul class="columns" title="Sources and credits">
						<li><a href="https://github.com/thomasgriffin/TGM-Plugin-Activation" target="_blank">TGM-Plugin-Activation</a></li>

						<li><a href="http://jquery.com/" target="_blank">jQuery</a></li>
						<li><a href="http://masonry.desandro.com/" target="_blank">Masonry</a></li>
						<li><a href="http://isotope.metafizzy.co" target="_blank">Isotope</a></li>
						<li><a href="http://www.littlewebthings.com/projects/countdown/" target="_blank">lwtCountdown</a></li>
						<li><a href="http://www.no-margin-for-errors.com/projects/prettyphoto-jquery-lightbox-clone/" target="_blank">PrettyPhoto</a></li>
						<li><a href="http://www.ianlunn.co.uk/plugins/jquery-parallax/" target="_blank">jQuery Parallax</a></li>
						<li><a href="http://www.appelsiini.net/projects/viewport" target="_blank">Viewport</a></li>
						<li><a href="https://github.com/morr/jquery.appear/" target="_blank">jQuery Appear</a></li>

						<li><a href="https://github.com/necolas/normalize.css" target="_blank">normalize.css</a></li>

						<li><a href="http://getbootstrap.com/" target="_blank">Bootstrap</a></li>
					</ul>

				</div>

				<div class="col-sm-12 col-md-4">

					<h3>Fonts</h3>

					<ul class="columns" title="Sources and credits">
						<li><a href="http://www.google.com/fonts" target="_blank">Google Fonts</a></li>
						<li><a href="http://fontello.com/" target="_blank">Fontello - icon fonts generator</a></li>
					</ul>

				</div>

				<div class="col-sm-12 col-md-4">

					<h3>Images</h3>

					<ul class="columns" title="Sources and credits">
						<li><a href="http://www.pexels.com" target="_blank">Pexels</a></li>
						<li><a href="http://pixabay.com" target="_blank">Pixabay</a></li>
						<li><a href="http://unsplash.com" target="_blank">Unsplash</a></li>
						<li><a href="http://thepatternlibrary.com/" target="_blank">The Pattern Library</a></li>
						<li><a href="http://www.patternify.com/" target="_blank">Patternify</a></li>
					</ul>

				</div>


			</div>

	</div></div><!-- /Content -->



	<!--

	Footer

	-->
	<footer class="footer"><div class="container-fluid">

		<p>Once again, thank you for using Mustang WordPress theme. If you have any questions that are beyond the scope of this user manual, please join <a target="_blank" href="http://support.webmandesign.eu">WebMan Design Support Forum</a>. I will do my best to assist you.</p>
		<p>If you like the theme, please rate it on the marketplace where you've purchased the theme from. Thank you!</p>
		<p>&copy; <a href="http://www.webmandesign.eu">WebMan Design</a> | <a href="#">Back to top &uarr;</a></p>

	</div></footer><!-- /Footer -->

</section>





</div></div>





<!--

JavaScript

-->

	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</body>

<!-- This User Manual was created by (C) WebMan Design, Oliver Juhas, www.webmandesign.eu -->

</html>
