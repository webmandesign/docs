<?php ob_start( 'ob_gzhandler' ); //Enable GZIP ?><!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Modern WordPress Theme User Manual</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author" content="WebMan">
	<link rel="profile" href="http://gmpg.org/xfn/11" />

	<!-- styles -->
	<!-- <link href="http://fonts.googleapis.com/css?family=Fira+Sans&#038;subset=latin" rel="stylesheet"> -->
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="bootstrap/css/custom.css?ver=1.0" rel="stylesheet">
	<link href="bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">

	<!-- HTML5 shim -->
	<!--[if lt IE 9]>
	<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
</head>

<body data-spy="scroll">

	<!-- Navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top"><div class="navbar-inner"><div class="container">
		<a class="brand" href="#top" title="Modern - back to begining of this User Manual">Modern</a>

		<div class="nav-collapse"><ul class="nav">

			<li class="dropdown"><a href="#install-wp">Install</a>
				<ul class="dropdown-menu">
					<li class="dropdown-submenu">
						<a href="#install-wp">Install WordPress</a>
						<ul class="dropdown-menu">
							<li><a href="#install-wp">Installing WordPress</a></li>
							<li><a href="#secure-wp">Securing WordPress</a></li>
							<li><a href="#help-wp">Starting with WordPress</a></li>
						</ul>
					</li>
					<li><a href="#install-theme">Install Modern</a></li>
					<li><a href="#install-plugins">Plugins</a></li>
					<li><a href="#install-demo">Demo content</a></li>
				</ul>
			</li>

			<li class="dropdown"><a href="#pages-home">Pages</a>
				<ul class="dropdown-menu">
					<li><a href="#pages-home">Home and Blog page</a></li>
					<li class="dropdown-submenu">
						<a href="#pages-templates">Page templates</a>
						<ul class="dropdown-menu">
							<li><a href="#pages-templates">Set up page template</a></li>
							<li><a href="#tpl-default">Default template</a></li>
							<li><a href="#tpl-front">Front page template</a></li>
							<li><a href="#tpl-sidebar">Page with sidebar template</a></li>
						</ul>
					</li>
				</ul>
			</li>

			<li class="dropdown"><a href="#posts">Posts</a>
				<ul class="dropdown-menu">
					<li><a href="#posts">Post excerpt</a></li>
					<li><a href="#posts-table-of-content">Paged post table of contents</a></li>
					<li><a href="#posts-formats">Setting up post format</a></li>
					<li><a href="#posts-standard">Standard posts</a></li>
					<li><a href="#posts-audio">Audio posts</a></li>
					<li><a href="#posts-gallery">Gallery posts</a></li>
					<li><a href="#posts-image">Image posts</a></li>
					<li><a href="#posts-link">Link posts</a></li>
					<li><a href="#posts-quote">Quote posts</a></li>
					<li><a href="#posts-status">Status posts</a></li>
					<li><a href="#posts-video">Video posts</a></li>
				</ul>
			</li>

			<li class="dropdown"><a href="#contents">Other content</a>
				<ul class="dropdown-menu">
					<li><a href="#contents">Additional content</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#banner">Banner</a></li>
				</ul>
			</li>

			<li class="dropdown"><a href="#menus">Menus</a>
				<ul class="dropdown-menu">
					<li><a href="#social">Social links</a></li>
				</ul>
			</li>

			<li><a href="#widgets">Widgets</a></li>

			<li><a href="#formats">Formats</a></li>

			<li><a href="#customizer">Customizer</a></li>

			<li><a href="#seo" title="Search Engine Optimization">SEO</a></li>

			<li><a href="#localization">Localization</a></li>

			<li><a href="#child-theme">Child theme</a></li>

			<li class="dropdown"><a href="#tips" title="Please choose from dropdown">Tips</a>
				<ul class="dropdown-menu">
					<li><a href="#banner">Banner slideshow</a></li>
					<li><a href="#css" target="_blank" title="Requires Jetpack plugin">Custom CSS and JS</a></li>
					<li><a href="#hooks">Development: hooks</a></li>
					<li><a href="#image-sizes">Image sizes</a></li>
					<li><a href="#jetpack" title="Requires Jetpack plugin">Infinite scroll</a></li>
					<li><a href="#customizer-logo" title="Requires Jetpack plugin">Logo image setup</a></li>
					<li><a href="http://jetpack.me/support/site-icon/" title="Requires Jetpack plugin">Site icon / favicon setup</a></li>
					<li><a href="#social">Social links</a></li>
				</ul>
			</li>

			<li><a href="#credits">Credits</a></li>

		</ul></div>
	</div></div></div> <!-- /Navbar -->



	<!-- Main Header -->
	<header class="main-header" id="top">
		<div class="container">

			<div class="main-title">
				<h1 title="Modern WordPress Theme by WebMan">Modern<br /><span>WordPress Theme</span></h1>
				<h2><span>User Manual</span></h2>
			</div>

			<p class="lead">
				<strong>Thank you for using the Modern WordPress theme by <a href="http://www.webmandesign.eu" target="_blank">WebMan</a>!</strong>
			</p>

			<p>This user manual will teach you how to set up and use the <strong>Modern</strong> WordPress theme. In case you have any questions<br />that are beyond the scope of the user manual, please join <a href="http://support.webmandesign.eu" target="_blank"><strong>WebMan Support Forums</strong></a>. Enjoy your <strong>Modern</strong> theme!</p>

			<p>
				<br />
				<a href="http://support.webmandesign.eu/" class="btn btn-large btn-danger" target="_blank">Support forum</a>&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;<a href="http://www.webmandesign.eu" class="btn btn-large btn-info" target="_blank">Other WebMan's themes</a>
			</p>

		</div>
	</header> <!-- Main Header -->



	<!-- Main Container -->
	<section class="main-content">
	<div class="container">



		<h2 id="install-wp">Installing, Securing WordPress and First Steps</h2>
			<div class="row-fluid"><div class="span11 offset1">

				<h3>Installing WordPress</h3>
					<p><a href="http://codex.wordpress.org/Installing_WordPress" target="_blank" class="alignleft"><img src="https://dl.dropboxusercontent.com/s/75zb4rfsb78w702/wordpress.png" class="plain" alt="" /></a> If you need help installing WordPress, follow the instructions in <a href="http://codex.wordpress.org/Installing_WordPress" target="_blank">WordPress Codex</a> or you can <a href="https://vimeo.com/17147778" target="_blank">watch the instructional video</a> (thanks to WooThemes).</p>

				<h3 class="pt40" id="secure-wp">Securing WordPress</h3>
					<p>You can improve your WordPress installation security taking these steps:</p>
					<ul>
						<li>Set the <span class="label label-info">Authentication Unique Keys and Salts</span> in <code>wp-config.php</code> file.</li>
						<li>Set the <span class="label label-info">$table_prefix</span> variable in <code>wp-config.php</code> file (do not use the default value of "wp_").</li>
						<li>Do not use "admin" as user name and set strong passwords.</li>
						<li>After installation is done, remove <code>wp-admin/install.php</code> file.</li>
						<li>Keep backups of the database and WordPress installation.</li>
						<li>Keep your WordPress installation up to date.</li>
					</ul>

				<h3 class="pt40" id="help-wp">Starting with WordPress</h3>
					<p>Additional resources for WordPress beginners:</p>
					<ul>
						<li><a title="First Steps With WordPress" href="http://codex.wordpress.org/First_Steps_With_WordPress" target="_blank">First Steps With WordPress</a></li>
						<li><a title="FAQ New To WordPress" href="http://codex.wordpress.org/FAQ_New_To_WordPress" target="_blank">FAQ New To WordPress</a></li>
						<li><a title="WordPress Video Course" href="http://expresstuts.com/free-wordpress-course/" target="_blank">WordPress Video Course</a> (thanks to ExpressTuts.com)</li>
						<li><a title="WPBeginner - WordPress Tutorials" href="https://www.youtube.com/user/wpbeginner/videos" target="_blank">WPBeginner - WordPress Tutorials</a></li>
					</ul>

			</div></div>



		<h2 id="install-theme">Installing Modern Theme</h2>
			<div class="row-fluid"><div class="span11 offset1">

				<p>To install <strong>Modern</strong> WordPress theme please follow these steps:</p>
				<ol>
					<li>Log into your WordPress admin.</li>
					<li>In WordPress admin navigate to <strong><em>Appearance &raquo; Themes</em></strong> and click the <strong>[Add New]</strong> button next to "Themes" page title.</li>
					<li>On "Add Themes" screen use a search field to search for "Modern".</li>
					<li>Once you've found the theme in the search results list, click the <strong>[Install]</strong> button when hovering over the theme.</li>
					<li>After the theme is installed, activate it by clicking the <strong>"Activate"</strong> link.</li>
				</ol>

			</div></div>



		<h2 id="install-plugins">Installing Plugins</h2>
			<div class="row-fluid"><div class="span11 offset1">

				<p>The theme uses the <a href="https://github.com/thomasgriffin/TGM-Plugin-Activation" target="_blank">TGM Plugin Activation</a> script that prompts you to install recommended plugins after you activate the theme. With recommended plugins you get the peace of mind that the theme was tested with these plugins and even provides a design and functionality integration for these plugins. Other plugins will work too, but they might require additional tweaks to integrate them 100% with the theme.</p>
				<p>Other than that you can install a custom plugins <a href="https://codex.wordpress.org/Managing_Plugins" target="_blank">following the WordPress instructions</a>.</p>

				<p class="mt40">Bellow you'll find a list of plugins that were successfully tested with the theme and works with it without any conflicts:</p>

				<h3 class="pt40" id="supported-plugins">Supported plugins</h3>

				<div class="row-fluid"><div class="span11 offset1">

					<h3 class="pt40" id="jetpack"><strong>Jetpack</strong> <small>(<strong>RECOMMENDED PLUGIN</strong>)</small><br /><small>(<a href="https://wordpress.org/plugins/jetpack/" target="_blank">https://wordpress.org/plugins/jetpack/</a>)</small></h3>
						<p class="uppercase">This plugin extends the theme's functionality supplying features like Portfolio posts, featured content setup, tiled galleries, image lightbox zooming effect, contact form, custom CSS, extra widgets, infinite scroll, better search, sharing buttons, related posts section, site icons and favicons, image logos, CDN and many others.</p>

						<div class="alert alert-info">
							Please install this plugin before importing the theme's demo content XML file. Also, activate the Jetpack's "Custom Content Types" in <strong><em>Jetpack &raquo; Settings</em></strong>. Otherwise the content included in theme's demo content XML file will not get imported in whole.
						</div>

						<p>For more info on plugin's usage please see <a href="http://jetpack.me/" target="_blank">jetpack.me</a> website.</p>

					<h3 class="pt40" id="ns-featured-posts"><strong>NS Featured Posts</strong> <small>(<strong>SUPPORTED PLUGIN</strong>)</small><br /><small>(<a href="https://wordpress.org/plugins/ns-featured-posts/" target="_blank">https://wordpress.org/plugins/ns-featured-posts/</a>)</small></h3>
						<p class="uppercase">Use this plugin to easily populate the theme's front page banner slideshow.</p>

					<h3 class="pt40" id="baw-post-views-count"><strong>Post Views Count</strong> <small>(<strong>SUPPORTED PLUGIN</strong>)</small><br /><small>(<a href="https://wordpress.org/plugins/baw-post-views-count/" target="_blank">https://wordpress.org/plugins/baw-post-views-count/</a>)</small></h3>
						<p class="uppercase">This plugin counts views for post and pages.</p>

					<h3 class="pt40" id="zillalikes"><strong>ZillaLikes</strong> <small>(<strong>SUPPORTED PLUGIN</strong>)</small><br /><small>(<a href="http://www.themezilla.com/plugins/zillalikes" target="_blank">http://www.themezilla.com/plugins/zillalikes</a>)</small></h3>
						<p class="uppercase">This plugin can not be obtained from WordPress.org plugins repository, but is distributed for free via ThemeZilla.com website. By installing this plugin you allow your website's visitors to like your posts locally, not just on social networks. The plugin also provides custom widget to display most popular (liked) posts.</p>

					<h4 class="pt40"><em>&hellip;and feel free to use any other plugin.</em></h4>

				</div></div>

			</div></div>



		<h2 id="install-demo">Installing Demo Content <a href="https://www.dropbox.com/s/om7c6yxvrqsyki5/demo-content-modern.xml?dl=1" class="btn alignright">Download the theme demo content XML file</a></h2>
			<div class="row-fluid"><div class="span11 offset1">

				<p>Import <a href="https://www.dropbox.com/s/om7c6yxvrqsyki5/demo-content-modern.xml?dl=1">downloaded file</a> according to <a href="http://codex.wordpress.org/Importing_Content#WordPress">WordPress Codex instructions</a>.</p>
				<p>The import process might take a while if you decide to import a demo attachments (images, audio and video files).</p>

				<div class="alert alert-error">
					You need to have <a href="#jetpack">Jetpack plugin</a> installed and activated and its <strong>Custom Content Types</strong> module enabled to allow importing all demo data.
				</div>

				<div class="alert alert-error">
					Please note that I do not provide any support for importing the demo content data. There might occur some connection issues when downloading demo attachments from my servers. These, however, are just demo images and you are perfectly fine replacing them with your own assets.
				</div>

			</div></div>



		<h2 id="pages-home">Setting Up Home and Blog Page</h2>
			<div class="row-fluid"><div class="span11 offset1">

					<div class="alert alert-info">If you want to use your website as a blog, you do not need to set up the front and posts page.</div>

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

			</div></div>



		<h2 id="pages-templates">Page Templates</h2>
			<div class="row-fluid"><div class="span11 offset1">

				<h3>Assigning a Page Template</h3>
					<ol>
						<li>
							On page edit screen choose one of predefined page templates in <strong>Page attributes</strong> metabox on the right. See <a href="http://codex.wordpress.org/Page_Templates" target="_blank">WordPress Codex</a> for more info. The theme contains these page templates:
						</li>
					</ol>

				<div class="row-fluid"><div class="span11 offset1">

					<h3 id="tpl-default" class="pt60">
						Default/standard page template
						<a href="http://themedemos.webmandesign.eu/modern/about/" target="_blank" class="alignright btn">Demo</a>
					</h3>
						<p>This page template will display fullwidth, without any sidebar. If you set a featured image, this will be displayed above the page's content.</p>

					<h3 id="tpl-front" class="pt60">
						Front page template
						<a href="http://themedemos.webmandesign.eu/modern/" target="_blank" class="alignright btn">Demo</a>
					</h3>
						<p>This is a special page template designed for your homepage (or front page). It displays <strong>6 most recent portfolio projects</strong>, <strong>6 most recent blog posts</strong> and <strong>page content</strong> (with featured image, if set).</p>
						<div class="alert alert-info">If you want to use your website as a blog, you do not need to set up this page template for any page.</div>

					<h3 id="tpl-sidebar" class="pt60">
						Page with sidebar template
						<a href="http://themedemos.webmandesign.eu/modern/contact/" target="_blank" class="alignright btn">Demo</a>
					</h3>
						<p>This is a standard page with a sidebar displayed on the right. The theme supports sidebar only for this page template.</p>

				</div></div>

			</div></div>



		<h2 id="posts">Posts</h2>
			<div class="row-fluid"><div class="span11 offset1">

				<h3 id="posts-excerpt">Post excerpt</h3>
					<p>Post excerpt will be displayed in posts list. If no excerpt set, a portion of post content will take its place in posts list (if set, up to <a href="http://codex.wordpress.org/Customizing_the_Read_More" target="_blank"><code>&lt;!--more--></code> tag</a>). Post excerpt will also be displayed at the top of the post content on single post page. Please note that you will probably have to enable post excerpt field in <strong>"Screen Options"</strong> first.</p>
						<p>If you set the <a href="http://codex.wordpress.org/Customizing_the_Read_More" target="_blank">"Read more" tag</a> inside the post content and you also set a post excerpt, first the post excerpt followed with post content (until "Read More" tag) will be displayed in posts list.</p>

				<h3 id="posts-table-of-content" class="pt60">
					Paged post table of contents
					<a href="http://themedemos.webmandesign.eu/modern/post-parts/" target="_blank" class="alignright btn">Demo</a>
				</h3>
					<p>If you are setting up a multipage post (using a "Page break" button in visual editor, or <code>&lt;!–nextpage–></code> tag in "Text" tab of visual editor), the automatic table of contents will be generated for the post/page for you. All you need to do is to set up a post parts titles at the top of each post part (so, immediately after <code>&lt;!–nextpage–></code> tag) with <strong>H2 heading</strong>.</p>

				<h3 id="posts-formats" class="pt60">Setting up a Post Format</h3>
					<ol>
						<li>
							On post edit screen choose one of predefined post formats in <strong>Format</strong> metabox on the right. The theme support these post formats:
						</li>
					</ol>

				<div class="row-fluid"><div class="span11 offset1">

					<h3 id="posts-standard" class="pt60">
						Standard post <small>What is it?</small>
						<a href="http://themedemos.webmandesign.eu/modern/category/standards/" target="_blank" class="alignright btn">Demo</a>
					</h3>
						<p>This is basic standard blog post layout. Featured image, if set, is displayed above the post content.</p>

					<h3 id="posts-audio" class="pt60">
						Audio post <small>What is it?</small>
						<a href="http://themedemos.webmandesign.eu/modern/type/audio/" target="_blank" class="alignright btn">Demo</a>
					</h3>
						<p>Displays audio player to play your audio files. Could be used for Podcasting.</p>
						<p>To set the audio, use an <code>[audio]</code> (or <code>[playlist]</code>) shortcode in the content. The first <code>[audio]</code> (<code>[playlist]</code>) shortcode will be used in post media area above post content and will be removed from the original post content when displaying. If no <code>[audio]</code> or <code>[playlist]</code> shortcode used, but <a href="http://codex.wordpress.org/Embeds#Okay.2C_So_What_Sites_Can_I_Embed_From.3F" target="_blank">oembed media URL</a> found, this media will be displayed instead of the featured image in posts lists.</p>
						<div class="alert alert-info">
							<h5 class="mt20">Post display in posts list:</h5>
								<ul>
									<li>featured image (only when <code>[audio]</code> shortcode used)</li>
									<li>post media</li>
									<li>title</li>
									<li>excerpt</li>
								</ul>
								<hr />
							<h5>Single post page display:</h5>
								<ul>
									<li>featured image</li>
									<li>post media</li>
									<li>title</li>
									<li>excerpt when excerpt field set and not paged</li>
									<li>content</li>
								</ul>
						</div>

					<h3 id="posts-gallery" class="pt60">
						Gallery post <small>What is it?</small>
						<a href="http://themedemos.webmandesign.eu/modern/type/gallery/" target="_blank" class="alignright btn">Demo</a>
					</h3>
						<p>Just add a <code>[gallery]</code> shortcode anywhere in the content. The first <code>[gallery]</code> shortcode images are used to create a slideshow in posts list display.</p>
						<div class="alert alert-info">
							<h5 class="mt20">Post display in posts list:</h5>
								<ul>
									<li>post media (fallback to featured image)</li>
									<li>title</li>
									<li>excerpt</li>
								</ul>
								<hr />
							<h5>Single post page display:</h5>
								<ul>
									<li>featured image</li>
									<li>title</li>
									<li>excerpt when excerpt field set and not paged</li>
									<li>content</li>
								</ul>
						</div>

					<h3 id="posts-image" class="pt60">
						Image post <small>What is it?</small>
						<a href="http://themedemos.webmandesign.eu/modern/type/image/" target="_blank" class="alignright btn">Demo</a>
					</h3>
						<p>On single post page it acts like standard post, in posts list it displays an image followed by "Excerpt" field content or post title if no "Excerpt" field content set.</p>
						<div class="alert alert-info">
							<h5 class="mt20">Post display in posts list:</h5>
								<ul>
									<li>featured image (falls back to first image found in the content)</li>
									<li>excerpt (falls back to post title)</li>
								</ul>
								<hr />
							<h5>Single post page display:</h5>
								<ul>
									<li>featured image</li>
									<li>title</li>
									<li>excerpt when excerpt field set and not paged</li>
									<li>content</li>
								</ul>
						</div>

					<h3 id="posts-link" class="pt60">
						Link post <small>What is it?</small>
						<a href="http://themedemos.webmandesign.eu/modern/type/link/" target="_blank" class="alignright btn">Demo</a>
					</h3>
						<p>Enhances any links in the post content. No post title is displayed.</p>
						<div class="alert alert-info">
							<h5 class="mt20">Post display in posts list:</h5>
								<ul>
									<li>featured image</li>
									<li>content</li>
								</ul>
								<hr />
							<h5>Single post page display:</h5>
								<ul>
									<li>featured image</li>
									<li>content</li>
								</ul>
						</div>

					<h3 id="posts-quote" class="pt60">
						Quote post <small>What is it?</small>
						<a href="http://themedemos.webmandesign.eu/modern/type/quote/" target="_blank" class="alignright btn">Demo</a>
					</h3>
						<p>Displays the post content as blockquote (any blockquotes in the content will be removed and replaced with single wrapping blockquote). Use <code>&lt;cite&gt;</code> to set the quote source, or set the <code>quote_source</code> custom field, or the post title will be used as quote source. No post title and featured image is displayed.</p>
						<div class="alert alert-info">
							<h5 class="mt20">Post display in posts list:</h5>
								<ul>
									<li>content</li>
								</ul>
								<hr />
							<h5>Single post page display:</h5>
								<ul>
									<li>content</li>
								</ul>
						</div>

					<h3 id="posts-status" class="pt60">
						Status post <small>What is it?</small>
						<a href="http://themedemos.webmandesign.eu/modern/type/status/" target="_blank" class="alignright btn">Demo</a>
					</h3>
						<p>A short status update, similar to a Twitter status update. The whole post content is displayed without excerpt and post title.</p>
						<div class="alert alert-info">
							<h5 class="mt20">Post display in posts list:</h5>
								<ul>
									<li>featured image (fallback to post author avatar)</li>
									<li>content</li>
								</ul>
								<hr />
							<h5>Single post page display:</h5>
								<ul>
									<li>featured image (fallback to post author avatar)</li>
									<li>content</li>
								</ul>
						</div>

					<h3 id="posts-video" class="pt60">
						Video post <small>What is it?</small>
						<a href="http://themedemos.webmandesign.eu/modern/type/video/" target="_blank" class="alignright btn">Demo</a>
					</h3>
						<p>Displays video player to play your video files. Could be used for video blogging.</p>
						<p>To set the video, use a <code>[video]</code> (or <code>[playlist]</code>) shortcode in the content. The first <code>[video]</code> (<code>[playlist]</code>) shortcode will be used in post media area and will be removed from the original post content when displaying. If no <code>[video]</code> or <code>[playlist]</code> shortcode used, but <a href="http://codex.wordpress.org/Embeds#Okay.2C_So_What_Sites_Can_I_Embed_From.3F" target="_blank">oembed media URL</a> found, this media will be displayed instead of the featured image. Also, the oembed media URL will be removed from the original post content when displaying. Supports also <code>[wpvideo]</code> shortcode when using <a href="#jetpack"><strong>Jetpack</strong> plugin</a>.</p>
						<div class="alert alert-info">
							<h5 class="mt20">Post display in posts list:</h5>
								<ul>
									<li>post media (fallback to featured image)</li>
									<li>title</li>
									<li>excerpt</li>
								</ul>
								<hr />
							<h5>Single post page display:</h5>
								<ul>
									<li>post media (no fallback)</li>
									<li>title</li>
									<li>excerpt when excerpt field set and not paged</li>
									<li>content</li>
								</ul>
						</div>

				</div></div>

			</div></div>



		<h2 id="contents">Additional Content Types</h2>
			<div class="row-fluid"><div class="span11 offset1">

				<p class="uppercase"><strong>Modern</strong> theme supports a <a href="#jetpack"><strong>Jetpack</strong></a> plugin that adds a custom content types (custom post types). All of this functionality is provided within this free professional plugin, so you won't loose your content once you decide to switch the theme.</p>

				<h3 id="portfolio" class="pt60">Portfolio <small>What is it and how to use it?</small></h3>
					<p class="uppercase">Portfolio projects custom posts can be used to showcase your work. For more info on how to use portfolio post type please see <a href="http://en.support.wordpress.com/portfolios/" target="_blank">Portfolios on WordPress.com support</a>.</p>
					<p>You can display the portfolio of your projects by navigating to a portfolio post type archive page, which is usually <code>YOUR_WEBSITE_URL/portfolio/</code>.</p>

				<h3 id="banner" class="pt60">Banner <small>What is it and how to use it?</small></h3>
					<p class="uppercase">On front (home) page of your website, the theme displays a banner area with an image and text or the slideshow of banner images and text.</p>
					<p>By default it displays <a href="#customizer">Header Images</a> (<strong><em>Appearance &raquo; Header</em></strong>) and <a href="#customizer">custom text</a>.</p>
					<p>If you <a href="#pages-home">set a Static Front Page</a>, the page title will be displayed as banner text and page featured image as banner image (or, if not set, the header image will be used). You can override the text by setting <code>banner_text</code> <a href="http://codex.wordpress.org/Custom_Fields#Usage" target="_blank">custom field</a> for your front page.</p>
					<p>Or, finally, you can display a slideshow of the featured posts in banner area. To set up a featured posts you need to activate <a href="#jetpack">Jetpack plugin's <strong>Featured Content</strong> module</a>. Posts slideshow will be displayed from featured posts featured images and titles. If you don't set up a featured image for the post, the header image will be used. If you want to override the featured post title, which will be used as banner text, please set up the <code>banner_text</code> <a href="http://codex.wordpress.org/Custom_Fields#Usage" target="_blank">custom field</a> for the post.</p>
					<p>If you need to override the banner/header image for a page or post, you can set the <code>banner_image</code> <a href="http://codex.wordpress.org/Custom_Fields#Usage" target="_blank">custom field</a> for your page/post. If you set the field to <code>-</code>, the default website header image will be used.</p>

					<div class="alert alert-info">
						<h5>Easier banner slideshow creation</h5>
						Since the theme update <strong>version 1.2</strong> it is possible to populate the front page banner slideshow even easier. You can simply <strong>use the intuitive <a href="#ns-featured-posts">NS Featured Posts</a> plugin</strong>.
					</div>

					<div class="alert alert-info video-instructions">
						<span class="badge badge-warning">&nbsp;<i class="icon-facetime-video icon-white"></i>&nbsp;</span>&nbsp; <strong>Video instruction: "Setting up the banner slideshow"</strong>
					</div>
					<div class="video-container">
						<iframe src="https://player.vimeo.com/video/118494445"></iframe>
					</div>

			</div></div>



		<h2 id="menus">Menu <small>Creating and Using Navigational Menus</small></h2>
			<div class="row-fluid"><div class="span11 offset1">

				<p><strong>Modern</strong> supports WordPress Menus, so you can easily create custom navigational menus directly in <strong><em>Appearance &raquo; Menus</em></strong>.</p>
				<p>Custom menus may contain links to pages, categories, custom links or other content types (use the <strong>[Screen Options]</strong> button in upper right corner of the screen to decide which content types to show on the menu edit screen). You can specify a different navigation label for a menu item as well as other attributes. The theme supports menu item description text. To display menus on website you need to assign them to a menu locations or use them in conjunction with the Custom Menus widget.</p>

				<p>The theme allows you to create as many menus as you want. However these menus can be placed only into predefined locations. The main predefined menu locations are:</p>

				<h3 class="pt40">Primary Menu</h3>
				<p>This is the main navigation area in the header of the website. The menu can be nested and hierarchically organised.</p>

				<h3 id="social" class="pt40">Social Links Menu</h3>
				<p>Social icons linked to your social profiles can be displayed in the header and footer. Before these icons can appear in both locations, you must set up a social links menu:</p>
				<ol>
					<li>Go to <strong><em>Appearance &raquo; Menus</em></strong> in the WordPress admin.</li>
					<li>Click <em>create a new menu</em> link.</li>
					<li>Give the menu a name like "Social Menu".</li>
					<li>Click <strong>[Create Menu]</strong> button.</li>
					<li>Click the <em>Links</em> header on the left side of the page.</li>
					<li>Type a link (such as <code>https://www.facebook.com/webmandesigneu</code>) to one of your social profiles in the <em>URL</em> field.</li>
					<li>Give the link a title by typing the name of the service into the <em>Link Text</em> field.</li>
					<li>Click <strong>[Add to Menu]</strong>.</li>
					<li>Repeat the above steps to add additional social profiles.</li>
					<li>In the <em>Menu Settings</em> section at the bottom, check the "Social Links Menu" box for <em>Theme locations</em>.</li>
					<li>Click <strong>[Save Menu]</strong> button.</li>
				</ol>
				<p>Adding your social links as a custom menu allows you to sort your profiles and add as many as you want. The theme currently supports icons for following services: <em>website</em>, <em>email</em>, <em>Codepen</em>, <em>Digg</em>, <em>Dribbble</em>, <em>Dropbox</em>, <em>Facebook</em>, <em>Flickr</em>, <em>Foursquare</em>, <em>Github</em>, <em>Google Plus</em>, <em>Instagram</em>, <em>LinkedIn</em>, <em>Pinterest</em>, <em>Pocket</em>, <em>Polldaddy</em>, <em>Reddit</em>, <em>RSS</em>, <em>Skype</em>, <em>Spotify</em>, <em>StumbleUpon</em>, <em>Tumblr</em>, <em>Twitch</em>, <em>Twitter</em>, <em>Vimeo</em>, <em>WordPress</em>, <em>Youtube</em>. If none of these social services is recognized, <a href="http://genericons.com/#website" target="_blank">the fallback icon</a> is displayed.</p>

				<h3 class="pt60">Creating a Menu</h3>
					<p>Please follow the <a href="http://codex.wordpress.org/WordPress_Menu_User_Guide" target="_blank">instructions in WordPress codex on how to create menus</a>.</p>
					<p>Helpful tutorial: <a href="http://bobwp.com/create-navigation-menus-wordpress/" target="_blank">How To Create Your Navigation Menus in WordPress</a>.</p>

			</div></div>



		<h2 id="widgets">Widget Areas</h2>
			<div class="row-fluid"><div class="span11 offset1">

				<p>The theme contains 2 widget areas:</p>
				<ul>
					<li><strong>Sidebar</strong> is displayed on <a href="#tpl-sidebar">Page with sidebar</a> page template.</li>
					<li><strong>Footer Widgets</strong> display widgets in footer area of the website. Widgets will be aligned into columns automatically depending on the number of widgets in the widget area. If you set more than 3 widgets in this widget area, they will be spread into 3 columns, and masonry layout will apply.</li>
				</ul>

			</div></div>



		<h2 id="formats">Formats</h2>
			<div class="row-fluid"><div class="span11 offset1">

				<p>The theme adds a new <strong>Formats</strong> button to the visual editor of WordPress posts/pages. Please use this button to create a special elements, such as pullquotes, cite source, inline code, super/sub-scripts, uppercase text, hightlighted (marked) text or buttons.</p>
				<div class="alert alert-info">
					For all the formats please select a text in post/page content first. The format will be applied on this selected text then. The only difference is with "Button link" format: you need to create a link first, then select it and apply the format.
				</div>
				<img src="bootstrap/img/format-button.png" alt="Visual editor Format button" title="Visual editor Format button" />

			</div></div>



		<h2 id="customizer">Customizer</h2>
			<div class="row-fluid"><div class="span11 offset1">

				<p>The theme seamlessly integrates its options into the <strong>WordPress customizer</strong>. You can access it in <strong><em>Appearance &raquo; Customize</em></strong>. All the changes you set in customizer will be immediately displayed in the theme preview. However, these changes will not be saved until you press the <strong>[Save &amp; Publish]</strong> button.</p>
				<p>You can set up your site's title, tagline and logo, <a href="#banner">header images, featured content and banner default text</a>, manage <a href="#menus">menu locations</a> and <a href="#widgets">widget areas</a>, set up a <a href="#pages-home">home and blog page</a>, theme colors and fonts.</p>

				<h3 id="customizer-logo" class="pt60">Logo image setup</h3>
					<div class="alert alert-error">
						For this feature you need to have <a href="#jetpack">Jetpack</a> plugin installed and activated.
					</div>
					<p>The theme displays a website title as a text by default. However, you can upload a logo image if you like. Here is how:</p>
					<ol>
						<li>Navigate to <strong><em>Appearance &raquo; Customize &raquo; Site Title, Tagline, and Logo</em></strong>.</li>
						<li>Click the <strong>[Add logo]</strong> button and upload your logo image.</li>
						<li>Click <strong>[Save & Publish]</strong> button to apply your changes.</li>
						<li>You can use Jetpack's <a href="http://jetpack.me/support/custom-css/" target="_blank" title="Requires Jetpack plugin">Custom CSS module</a> to add additional CSS styles required to position your logo correctly. Please use <code>.site-title</code> CSS class to target the logo.</li>
					</ol>

			</div></div>



		<h2 id="seo">Search Engine Optimization and Traffic Tracking</h2>
			<div class="row-fluid"><div class="span11 offset1">

				<h3>Search Engine Optimization</h3>
					<p>The theme is coded with best <abbr title="Search Engine Optimization">SEO</abbr> practices in mind, meaning it is ready to be displayed on top of search results in search engines such as Google.</p>
					<p>It also integrates <strong>Schema.org microformats</strong> automatically.</p>
					<p>Please note though, that this is just basic SEO optimization and you will have to push it further to make the real deal with SEO. For such cases I recommend <a href="http://wordpress.org/extend/plugins/wordpress-seo/" target="_blank">WordPress SEO by Yoast</a> plugin.</p>

				<h3 class="pt60">Traffic Tracking</h3>
					<p>I recommend using <a href="http://wordpress.org/plugins/google-analytics-for-wordpress/" target="_blank">Google Analytics for WordPress</a> plugin as it offers advanced customization of tracking of you website.</p>

			</div></div>



		<h2 id="localization">Localization <small>How to translate the theme?</small></h2>
			<div class="row-fluid"><div class="span11 offset1">

				<div class="alert alert-error">
					Any translation files placed in the <code>modern/languages</code> folder will be deleted when you update the theme.
				</div>

				<ol>
					<li>Make a copy of the original wm_domain.pot file.</li>
					<li>You need to rename the coppied file now. The naming convention is based on the language code (e.g. "pt" for Portuguese) followed with underscore and the country code (e.g. "BR" for Brazil). So, the Brazilian Portuguese file would be named as pt_BR.po.</li>
					<li>Use <a href="http://www.poedit.net/" target="_blank"><strong>Poedit</strong></a> to translate the file and export (save) it as MO translation file format.</li>
					<li>Upload translated <code>pt_BR.mo</code> file into your WordPress language directory, such as <code>/wp-content/languages/themes/modern/pt_BR.mo</code>. Alternatively you can put translations in your child theme: <code>/wp-content/themes/your-child-theme/languages/pt_BR.mo</code>.</li>
				</ol>

			</div></div>



		<h2 id="child-theme">Child theme</h2>
			<div class="row-fluid"><div class="span11 offset1">

				<p>If you need to make any styling or functional changes to the theme, please use the WordPress native <strong>child theme</strong> functionality. You can read more about <a href="http://codex.wordpress.org/Child_Themes" target="_blank">child themes on WordPress Codex pages</a>.</p>
				<p>You can put all your custom CSS styles into <code>YOUR_WORDPRESS_INSTALLATION/wp-content/themes/YOUR_CHILD_THEME/style.css</code> file.</p>
				<p>If you also want to change the functionality of the original <strong>Modern</strong> theme, do so in <code>YOUR_WORDPRESS_INSTALLATION/wp-content/themes/YOUR_CHILD_THEME/functions.php</code> file. You can freely modify any theme's function here as they are all pluggable.</p>
				<p>This way you can continue updating the parent (original) <strong>Modern</strong> theme without any worry of your changes being overwritten as all your custom styles and functionality are kept in a child theme.</p>

			</div></div>



		<h2 id="tips" class="pb0">Tips and Tricks <small>Additional tips for the theme</small></h2>
			<div class="row-fluid"><div class="span11 offset1">

				<h3 id="css" class="pt60">Custom CSS and JavaScript</h3>
					<p>The theme can apply custom CSS styles and/or JavaScript scripts on singular pages or posts. All you need to do is set up a <code>custom_css</code> and/or <code>custom_js</code> (these are the names for custom fields) <a href="http://codex.wordpress.org/Custom_Fields#Usage" target="_blank">custom meta field in Custom Fields metabox</a> for a page/post.</p>
					<p>If you need to apply custom CSS globally, please use Jetpack's <a href="http://jetpack.me/support/custom-css/" target="_blank" title="Requires Jetpack plugin">Custom CSS module</a>.</p>

				<h3 id="hooks" class="pt60">Development: Action and Filter hooks</h3>
					<p class="uppercase">This topic is mostly for developers and for those who would like to alter or expand the theme functionality.</p>
					<p>The theme is coded according to WordPress coding standards and is full of action hooks and filters. You can easily hook onto these to alter functions outputs or parameters, to add your own meta data, theme or design options and much more! Please check the theme's source code to see what hook to use, or contact a <a target="_blank" href="http://support.webmandesign.eu">WebMan Support Forum</a> for more details and tips.</p>
					<p>Modern itself uses the <a href="https://github.com/zamoose/themehookalliance" target="_blank">Theme Hook Alliance</a> hooks too. You can find these hooks in <code>modern/inc/hooks.php</code> file. This is useful to entirely rebuild the theme structure or add your own sections anywhere in the theme.</p>

				<h3 id="image-sizes" class="pt60">Image sizes</h3>
					<p>The theme uses 4 different image sizes:</p>
					<ul>
						<li>
							<strong>Thumbnail</strong> <code>420 &times; (variable height)</code><br />
							This image size is used in posts lists.
						</li>
						<li>
							<strong>Medium</strong> <code>744 &times; (variable height)</code><br />
							The image of this size is perfectly fitted into the post/page content area as it has the width of the content area.
						</li>
						<li>
							<strong>Large</strong> <code>1200 &times; (variable height)</code><br />
							This image size is used for post/page featured image display.
						</li>
						<li>
							<strong>Banner</strong> <code>1920 &times; 1080</code><br />
							This full HD image size is used for images displayed in the <a href="#banner">banner area</a>.
						</li>
					</ul>
					<p>WordPress will rescale and crop the images to selected formats automatically during the image upload process.</p>
					<p>If you already have some images on your wesbsite, these need to be rescaled when using the theme. Please use a plugin such as <a href="https://wordpress.org/plugins/regenerate-thumbnails/" target="_blank">Regenerate Thumbnails</a> to do this for you.</p>

			</div></div>



		<h2 id="credits">Sources and Credits <small>Scripts, images, icons used to build Modern</small></h2>
			<div class="row-fluid"><div class="span11 offset1">

				<ul class="columns" title="Sources and credits">
					<li><a href="http://underscores.me/" target="_blank">Underscores</a></li>

					<li><a href="http://jquery.com/" target="_blank">jQuery</a></li>
					<li><a href="http://kenwheeler.github.io/slick/" target="_blank">Slick jQuery slider</a></li>
					<li><a href="http://desandro.github.io/imagesloaded/" target="_blank">ImagesLoaded</a></li>
					<li><a href="http://masonry.desandro.com/" target="_blank">Masonry</a></li>

					<li><a href="http://www.google.com/fonts" target="_blank">Google Fonts</a></li>
					<li><a href="http://genericons.com/" target="_blank">Genericons</a></li>

					<li><a href="https://github.com/necolas/normalize.css" target="_blank">normalize.css</a></li>

					<li><a href="https://github.com/thomasgriffin/TGM-Plugin-Activation" target="_blank">TGM-Plugin-Activation</a></li>

					<li><a href="http://unsplash.com/" target="_blank">Unsplash</a></li>
				</ul>

			</div></div>



	</div>
	</section><!-- /Main Content -->



	<!-- Footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">

				<div class="span2">
					<a class="brand alignleft" href="#top" title="Modern - back to begining of this User Manual">Modern</a>
				</div>

				<div class="span10">
					<p>Once again, thank you for using the Modern WordPress theme. If you have any questions that are beyond the scope of this user manual, please join <a target="_blank" href="http://support.webmandesign.eu">WebMan Support Forums</a>. I will do my best to assist you. If you like the theme, please rate it on <a href="https://wordpress.org/support/view/theme-reviews/modern">WordPress.org</a>. Thank you!</p>
					&copy; <a href="http://www.webmandesign.eu">WebMan</a> 2014
				</div>

			</div>
		</div>
	</footer><!-- /Footer -->



	<!-- Javascript -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/jquery.scrollTo-1.4.2-min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/scripts.js"></script>

</body>

<!-- This User Manual was created by WebMan (Oliver Juhas) - http://www.webmandesign.eu, (C) 2014 All rights reserved -->

</html>
