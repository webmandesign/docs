<?php ob_start( 'ob_gzhandler' ); //Enable GZIP ?><!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="WebMan Design, www.webmandesign.eu">

	<title>Receptar WordPress Theme User Manual</title>

	<!--

	CSS

	-->
	<!-- Google Fonts -->
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto|Roboto+Condensed:400,300|Alegreya:400,700" />
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
			<a class="navbar-brand" href="#">Receptar</a>
		</div>

		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="https://vimeo.com/webmandesigneu/videos">Instructional videos</a></li>
				<li><a href="http://www.webmandesign.eu">Premium WordPress themes</a></li>
				<li><a href="https://profiles.wordpress.org/webmandesign#content-themes">Free WordPress themes</a></li>
				<li><a href="http://support.webmandesign.eu">Support Forums</a></li>
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
		<li><a href="#demo-content">Demo Content</a></li>
		<li><a href="#pages">Pages</a></li>
		<li><a href="#posts">Posts</a></li>
		<li><a href="#featured-image">Featured Image</a></li>
		<li><a href="#navigation">Navigation Menu</a></li>
		<li><a href="#social-links">Social Links</a></li>
		<li><a href="#widgets">Sidebars and Widgets</a></li>
		<li><a href="#customizer">Customizer</a></li>
		<li><a href="#seo" title="Search Engine Optimization">SEO</a></li>
		<li><a href="#localization">Localization</a></li>
		<li><a href="#child-theme">Child theme</a></li>
		<li><a href="#tips" title="Please choose from dropdown">Useful Tips</a></li>
		<li><a href="#credits">Credits</a></li>
	</ul>
</div>





<!--

Content Container

-->
<section class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

	<!--

	Intro Heading

	-->
	<header class="main-header"><div class="container-fluid">

			<div class="main-title">
				<h1 title="Receptar WordPress Theme by WebMan"><strong>Receptar</strong> WordPress Theme</h1>
				<h2><span>User Manual</span></h2>
			</div>

			<p class="lead">
				<strong>Thank you for using the Receptar WordPress theme by <a href="http://www.webmandesign.eu" target="_blank">WebMan</a>!</strong>
			</p>

			<p>This user manual will teach you how to set up and use the <strong>Receptar</strong> WordPress theme. In case you have any questions<br />that are beyond the scope of the user manual, please join <a href="http://support.webmandesign.eu" target="_blank"><strong>WebMan Support Forums</strong></a>. Enjoy your <strong>Receptar</strong> theme!</p>

	</div></header><!-- /Intro Heading -->



	<!--

	Content

	-->
	<div class="main-content"><div class="container-fluid">

		<!--

		WordPress Installation

		-->
		<h2 id="wordpress">Installing, Securing <strong>WordPress</strong> and First Steps</h2>
			<div class="section indented row">

				<div class="col-sm-12 col-md-4">

					<h3>Installing WordPress</h3>

					<p>If you need help installing WordPress, follow the instructions in <a href="http://codex.wordpress.org/Installing_WordPress" target="_blank">WordPress Codex</a> or you can <a href="https://vimeo.com/17147778" target="_blank">watch the instructional video</a> (thanks to WooThemes).</p>

				</div>

				<div class="col-sm-12 col-md-4">

					<h3>Securing WordPress</h3>

					<p>You can improve your WordPress installation security taking these steps:</p>
					<ul>
						<li>Set the <span class="label label-info">Authentication Unique Keys and Salts</span> in <code>wp-config.php</code> file.</li>
						<li>Set the <span class="label label-info">$table_prefix</span> variable in <code>wp-config.php</code> file (do not use the default value of "wp_").</li>
						<li>Do not use <code>admin</code> as user name and set strong passwords.</li>
						<li>After installation is done, remove <code>wp-admin/install.php</code> file.</li>
						<li>Keep backups of the database and WordPress installation.</li>
						<li>Keep your WordPress installation up to date.</li>
					</ul>

				</div>

				<div class="col-sm-12 col-md-4">

					<h3>First Steps With WordPress</h3>

					<p>Additional resources for WordPress beginners:</p>
					<ul>
						<li><a title="First Steps With WordPress" href="http://codex.wordpress.org/First_Steps_With_WordPress" target="_blank">First Steps With WordPress</a></li>
						<li><a title="FAQ New To WordPress" href="http://codex.wordpress.org/FAQ_New_To_WordPress" target="_blank">FAQ New To WordPress</a></li>
						<li><a title="WordPress Video Course" href="http://expresstuts.com/free-wordpress-course/" target="_blank">WordPress Video Course</a> (thanks to ExpressTuts.com)</li>
					</ul>

				</div>

			</div>



		<!--

		Theme Installation

		-->
		<h2 id="installation">Theme Installation</h2>
			<div class="section indented row">

				<h3>How to Install the Theme?</h3>

				<ol>
					<li>In your WordPress dashboard navigate to <strong><em>Appearance &raquo; Themes</em></strong> and click the <strong>[Add New]</strong> button next to "Themes" page title.</li>
					<li>Insert "Receptar" into search field and press [Enter] on your keyboard.</li>
					<li>Once the theme is found, hover over the theme screenshot with your mouse cursor and click the <strong>[Install]</strong> button that appears below the screenshot image.</li>
					<li>Wait while the theme is installed and activate it by clicking the <strong>"Activate"</strong> link.</li>
				</ol>

				<div class="alert alert-info">
					<h4>Important:</h4>
					<p><em>You should always keep your WordPress, themes and plugins up to date!</em></p>
				</div>

			</div>



		<!--

		Demo Content Installation

		-->
		<h2 id="demo-content">Installing Demo Content <a href="https://www.dropbox.com/s/bef86hc5vo4ub7f/demo-content-receptar.xml?dl=1" class="btn btn-success alignright">Download the theme demo content XML file</a></h2>
			<div class="section indented row">

				<h3>How to Install Theme Demo Content?</h3>

				<p>Import <a href="https://www.dropbox.com/s/bef86hc5vo4ub7f/demo-content-receptar.xml?dl=1"><strong>downloaded demo content XML file</strong></a> according to <a href="http://codex.wordpress.org/Importing_Content#WordPress">WordPress Codex instructions</a>.</p>
				<p>The import process might take a while if you decide to import a demo attachments (images, audio and video files).</p>

				<div class="alert alert-warning">
					<p>Couple of posts in the theme demo content were created using <a href="https://wordpress.org/plugins/beaver-builder-lite-version/" target="_blank">the <strong>Beaver Builder</strong> page builder plugin</a>. You might consider installing this plugin to display all the demo content correctly.</p>
				</div>

				<div class="alert alert-danger">
					Please note that there might occur some connection issues when downloading demo attachments from my servers. These, however, are just demo attachments (images, videos, audio files) and you are perfectly fine replacing them with your own assets in case there is some import issue related to these attachments. Other demo content (posts and pages) will be imported without any issues.
				</div>

			</div>



		<!--

		Pages

		-->
		<h2 id="pages">Pages</h2>
			<div class="section indented row">

				<h3>Setting Up Home and Blog Page</h3>

				<div class="alert alert-info">
					<strong>TIP:</strong> If you want to use your website as a blog, <strong>you do not need to set up the front and posts page</strong>.
				</div>

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
					<strong>TIP:</strong> You can also do this in <a href="#customizer">Customizer</a> where you get live preview of your settings.
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

						<h3 id="posts-formats">Post Formats</h3>

						<p>Please note that this theme does not support WordPress post formats. You can only create standard posts with <strong>Receptar</strong> theme.</p>

					</div>

					<div class="col-sm-12 col-md-6">

						<h3>Table of Contents on Parted Post</h3>

						<p>If you are setting up a multipage post (using a "Page break" button in visual editor, or <code>&lt;!–nextpage–></code> tag in "Text" tab of visual editor), the automatic table of contents will be generated for the post/page for you.</p>
						<p>All you need to do is to set up a post parts titles at the top of each post part (so, immediately after <code>&lt;!–nextpage–></code> tag) with <strong>H2 heading</strong>.</p>

						<h3>Featured Posts</h3>

						<p>These posts will populate the front page (and blog page) banner slideshow area. To set up featured posts, please install and activate the <a href="#ns-featured-posts"><strong>NS Featured Posts</strong></a> plugin and easily mark selected posts as featured.</p>

					</div>

				</div>

			</div>



		<!--

		Pages

		-->
		<h2 id="featured-image">Featured Image</h2>
			<div class="section indented row">

				<h3>Setting Up Featured Image for Post or Page</h3>

				<p>Featured images are displayed in posts list and as a background for right section on a single post or page. To set up featured image, please <a href="https://codex.wordpress.org/Post_Thumbnails#Setting_a_Post_Thumbnail" target="_blank">follow the instructions in WordPress codex</a>.</p>
				<p>If there is no featured image set for post or page, the fallback image will be used. The fallback image is being cropped from the header image automatically. You can set up the header image in <strong><em>Appearance &raquo; Header</em></strong>.</p>

				<div class="alert alert-info">
					<strong>Image sizes:</strong> For the minimal size of the image you upload into your WordPress website please refer to <a href="#image-sizes">Tips and Tricks &raquo; Image Sizes</a>.
				</div>

			</div>



		<!--

		Navigation

		-->
		<h2 id="navigation">Navigational Menus</h2>
			<div class="section indented row">

				<h3>Using Navigational Menus</h3>

					<p><strong>Receptar</strong> supports WordPress Menus, so you can easily create custom navigational menus directly in <strong><em>Appearance &raquo; Menus</em></strong>.</p>
					<p>Custom menus may contain links to pages, categories, custom links or other content types (use the <strong>[Screen Options]</strong> button in upper right corner of the screen to decide which content types to show on the menu edit screen). You can specify a different navigation label for a menu item as well as other attributes. The theme supports menu item description text.</p>
					<p>To display menus on your website you need to assign them to a menu locations or use them in conjunction with the Custom Menus widget.</p>

					<p>The theme allows you to create as many menus as you want. However these menus can be placed into predefined locations only. The theme defines these menu locations:</p>
					<ul>
						<li><strong>Primary Menu</strong> - the main navigation area is hidden in the left sidebar. Click the menu hamburger icon on top of the left sidebar area control buttons to reveal the sidebar (and menu) content. The menu in this menu location can be nested and hierarchically organised.</li>
						<li><strong>Social Links Menu</strong> - see below for more info.</li>
					</ul>

				<h3>Creating a Menu</h3>

					<p>Please follow the <a href="http://codex.wordpress.org/WordPress_Menu_User_Guide" target="_blank">instructions in WordPress codex on how to create menus</a>.</p>
					<p>Helpful tutorial: <a href="#wordpress">WordPress video tutorials</a>.</p>

			</div>



		<!--

		Social Links

		-->
		<h2 id="social-links">Social Links</h2>
			<div class="section indented">

				<h3 id="social">Adding Social Networks Links Icons</h3>

				<p>Social icons linked to your social networks profiles can be displayed in the left sidebar of the website. Before these icons can appear in this location, you must set up a social links menu:</p>
				<ol>
					<li>Go to <strong><em>Appearance &raquo; Menus</em></strong> in the WordPress admin.</li>
					<li>Click <em>create a new menu</em> link.</li>
					<li>Give the menu a name, such as "Social Menu".</li>
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

			</div>



		<!--

		Widget Areas

		-->
		<h2 id="widgets">Widget Areas</h2>
			<div class="section indented">

				<h3>Widget Areas Contained in the Theme</h3>

				<ul>
					<li><strong>Sidebar</strong> widget area is the hidden area on the left of your website. To display the are you need to click the menu hamburger button on top of the left sidebar control buttons area. The widgets are displayed just below the primary navigation menu of your website.</li>
					<li><strong>Header Widgets</strong> display widgets in header area of the website right of the website logo. By default this area contains a search field. Once you add a widgets to this widget area, the search field will be replaced with your widgets.</li>
				</ul>

			</div>



		<!--

		Customizer

		-->
		<h2 id="customizer">Customizer</h2>
			<div class="section indented row">

				<div class="col-sm-12 col-md-6">

					<h3>What is Customizer and How to Use It</h3>

					<p>The theme seamlessly integrates its options into the <strong>WordPress Customizer</strong>.</p>
					<p>You can access it navigating to <strong><em>Appearance &raquo; Customize</em></strong>. All the changes you set in Customizer will be immediately displayed in the theme preview. However, these changes will not be saved until you press the <strong>[Save &amp; Publish]</strong> button.</p>
					<p>You can set up your site's title, tagline and logo (for logo image please install and activate the <a href="https://wordpress.org/plugins/jetpack/" target="_blank"><strong>Jetpack</strong></a> plugin), header images, manage <a href="#navigation">navigational menu locations</a> and <a href="#widgets">widget areas</a>, set up a <a href="#pages">front and blog page</a> and theme colors.</p>

				</div>

				<div class="col-sm-12 col-md-6">

					<h3 id="customizer-logo">Logo Image Setup</h3>

					<div class="alert alert-warning">
						For this feature you need to have <a href="https://wordpress.org/plugins/jetpack/" target="_blank"><strong>Jetpack</strong></a> plugin installed and activated.
					</div>

					<p>The theme displays a website title (logo) as a text by default. However, you can upload a logo image if you like. For instructions please see the <a href="http://jetpack.me/support/site-logo/" target="_blank">Jetpack documentation page</a>.</p>

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
					<p>Please note though, that this is just basic SEO optimization and you will have to push it further to make the real deal with SEO. For such cases I recommend <a href="http://wordpress.org/extend/plugins/wordpress-seo/" target="_blank">WordPress SEO by Yoast</a> plugin.</p>

				</div>

				<div class="col-sm-12 col-md-6">

					<h3>Traffic Tracking</h3>

					<p>Please use a plugin such as <a href="http://wordpress.org/plugins/google-analytics-for-wordpress/" target="_blank">Google Analytics for WordPress</a> or <a href="https://wordpress.org/plugins/google-analyticator/" target="_blank">Google Analyticator</a> to allow tracking your website with a tool such as <a href="http://www.google.com/analytics/" target="_blank">Google Analytics</a>.</p>

				</div>

			</div>



		<!--

		Localization

		-->
		<h2 id="localization">Localization</h2>
			<div class="section indented">

				<h3>How to Translate the Theme?</h3>

				<div class="alert alert-warning">
					Any translation files placed in the <code>receptar/languages</code> folder will be deleted when you update the theme.
				</div>

				<ol>
					<li>Make a copy of the original <code>xx_XX.pot</code> file.</li>
					<li>You need to rename the coppied file now. The naming convention is based on the language code (e.g. "pt" for Portuguese) followed with underscore and the country code (e.g. "BR" for Brazil). Also, rename the file extension to "po". So, the Brazilian Portuguese file would be named as <code>pt_BR.po</code>.</li>
					<li>Use <a href="http://www.poedit.net/" target="_blank"><strong>Poedit</strong></a> to translate the file and export (save) translation also in <code>MO</code> translation file format.</li>
					<li>Upload translated <code>pt_BR.mo</code> file into your WordPress language directory, such as <code>/wp-content/languages/themes/receptar/pt_BR.mo</code>. Alternatively you can put translations in your child theme: <code>/wp-content/themes/your-child-theme/languages/pt_BR.mo</code>.</li>
				</ol>

				<div class="alert alert-info">
					<h4>Contributing your translations back to the theme</h4>
					If you would like to help out translating the theme, please contribute on our <a href="http://support.webmandesign.eu/">support forum</a>.
				</div>

			</div>



		<!--

		Child Theme

		-->
		<h2 id="child-theme">Child theme</h2>
			<div class="section indented">

				<h3>When and How to Use a Child Theme?</h3>

				<p>If you need to make any styling or functional changes to the theme, please use the WordPress native <strong>child theme</strong> functionality. This way you can continue updating the parent (original) <strong>Receptar</strong> theme without any worry of your changes being overwritten as all your custom styles and functionality are kept in a child theme. You can read more about <a href="http://codex.wordpress.org/Child_Themes" target="_blank">child themes on WordPress Codex pages</a>.</p>
				<p>You can put all your custom CSS styles into <code>YOUR_WORDPRESS_INSTALLATION/wp-content/themes/YOUR_CHILD_THEME/style.css</code> file. (You can <a href="http://support.webmandesign.eu/forums/topic/css/" target="_blank">alternatively use a different way to insert a custom CSS</a>.)</p>
				<p>If you also want to change the functionality of the original <strong>Receptar</strong> theme, do so in <code>YOUR_WORDPRESS_INSTALLATION/wp-content/themes/YOUR_CHILD_THEME/functions.php</code> file. You can freely modify any theme's function here as they are all pluggable. Plus, you can use any <a href="http://codex.wordpress.org/Plugin_API/Filter_Reference" target="_blank">filter</a> and <a href="http://codex.wordpress.org/Plugin_API/Action_Reference" target="_blank">action</a> hooks available in the theme source code.</p>

			</div>



		<!--

		Tips

		-->
		<h2 id="tips">Tips and Tricks <small>Additional tips for the theme</small></h2>
			<div class="section indented">

				<h3 id="image-sizes">Image Sizes</h3>

					<p>The theme uses these image sizes:</p>
					<ul>
						<li>
							<strong>Thumbnail</strong> <code>480 &times; 640</code> (cropped)<br />
							This image size is used in posts lists.
						</li>
						<li>
							<strong>Medium</strong> <code>595 &times; (variable height)</code> (scaled)<br />
							This size actually depends on your website content width setting (<code>$content_width &times; 0.62</code>).
						</li>
						<li>
							<strong>Large</strong> <code>960 &times; (variable height)</code> (scaled)<br />
							This image size is used on single post page as a background for the right side of the screen.
						</li>
						<li>
							<strong>Banner</strong> <code>1920 &times; 640</code><br />
							This image size is used for images displayed in the front page (and blog page) banner slideshow area.
						</li>
						<li>
							<strong>Featured</strong> <code>960 &times; 640</code><br />
							Used in single post page on mobile devices only.
						</li>
					</ul>
					<p>WordPress will rescale and crop the images to selected formats automatically during the image upload process.</p>
					<p>If you already have some images on your wesbsite, these need to be rescaled when using the theme. Please use a plugin such as <a href="https://wordpress.org/plugins/force-regenerate-thumbnails/" target="_blank"><strong>Force Regenerate Thumbnails</strong></a> to do this for you.</p>

					<div class="alert alert-info">
						<h4>Tip:</h4>
						<p>You can change the basic WordPress image sizes (the Thumbnail, Medium and Large image size) settings in <strong><em>Settings &raquo; Media</em></strong> dashboard page.</p>
					</div>

				<h3 id="formats">WordPress Visual Editor Formats</h3>

					<div class="row">

						<div class="col-sm-12 col-md-4">

							<p>The theme adds a new <strong>Formats</strong> button to the visual editor of WordPress posts/pages. Please use this button to create a special elements, such as pullquotes, cite source, inline code, super/sub-scripts, uppercase text, hightlighted (marked) text.</p>

							<div class="alert alert-info">
								For all the formats please select a text in post/page content first. The format will be applied on this selected text then.
							</div>

						</div>

						<div class="col-sm-12 col-md-8 text-center">

							<img src="https://www.dropbox.com/s/qelf3z3u19g62ee/format-button.png?dl=1" alt="Visual editor Format button" title="Visual editor Format button" />

						</div>

					</div>

				<h3 id="css">Custom CSS and JavaScript</h3>

					<p>The theme can apply custom CSS styles and/or JavaScript scripts on singular pages or posts. All you need to do is set up a <code>custom_css</code> and/or <code>custom_js</code> (these are the names for custom fields) <a href="http://codex.wordpress.org/Custom_Fields#Usage" target="_blank">custom meta field in Custom Fields metabox</a> for a page/post.</p>
					<p>If you need to apply custom CSS globally, please use a <a href="#child-theme" target="_blank">child theme or custom CSS plugin</a>.</p>

				<h3 id="hooks">Development: Action and Filter Hooks</h3>

					<p class="uppercase">This topic is mostly for developers and for those who would like to alter or expand the theme functionality.</p>
					<p>The theme is coded according to WordPress coding standards and is full of action hooks and filters. You can easily hook onto these to alter functions outputs or parameters, to add your own meta data, theme or design options, layouts and much more! Please check the theme's source code to see what hook to use, or contact a <a target="_blank" href="http://support.webmandesign.eu">WebMan Support Forum</a> for more details and tips.</p>
					<p>Receptar itself uses the <a href="https://github.com/zamoose/themehookalliance" target="_blank">Theme Hook Alliance</a> hooks too. This is useful to entirely rebuild the theme structure or add your own sections anywhere in the theme.</p>

					<h4>Tutorials on using hooks:</h4>
					<ul>
						<li><a href="http://code.tutsplus.com/articles/the-beginners-guide-to-wordpress-actions-and-filters--wp-27373" target="_blank">The Beginner's Guide to WordPress Actions and Filters</a></li>
						<li><a href="http://doc.presscustomizr.com/customizr/wordpress-actions-filters-and-hooks-a-guide-for-non-developers/" target="_blank">WordPress Actions, Filters, and Hooks : A guide for non-developers</a></li>
						<li><a href="https://www.tipsandtricks-hq.com/wordpress-action-hooks-and-filter-hooks-an-introduction-4163" target="_blank">WordPress Action Hooks and Filter Hooks – An Introduction</a></li>
						<li><a href="http://www.smashingmagazine.com/2011/10/07/definitive-guide-wordpress-hooks/" target="_blank">WordPress Essentials: The Definitive Guide To WordPress Hooks</a></li>
					</ul>

					<div class="alert alert-info">
						<h4>Tip:</h4>
						<p>All the action and filter hooks in the theme starts with <code>wmhook_</code> prefix.</p>
					</div>

			</div>



		<!--

		Credits

		-->
		<h2 id="credits">Sources and Credits</h2>
			<div class="section indented row">

				<div class="col-sm-12 col-md-4">

					<h3>Scripts</h3>

					<ul class="columns" title="Sources and credits">
						<li><a href="http://underscores.me/" target="_blank">Underscores</a></li>

						<li><a href="http://jquery.com/" target="_blank">jQuery</a></li>
						<li><a href="http://kenwheeler.github.io/slick" target="_blank">Slick</a></li>

						<li><a href="https://github.com/necolas/normalize.css" target="_blank">normalize.css</a></li>

						<li><a href="http://getbootstrap.com/" target="_blank">Bootstrap</a></li>
					</ul>

				</div>

				<div class="col-sm-12 col-md-4">

					<h3>Fonts</h3>

					<ul class="columns" title="Sources and credits">
						<li><a href="https://www.google.com/fonts/specimen/Roboto" target="_blank">Roboto font</a></li>
						<li><a href="https://www.google.com/fonts/specimen/Roboto+Condensed" target="_blank">Roboto Condensed font</a></li>
						<li><a href="http://www.google.com/fonts/specimen/Alegreya" target="_blank">Alegreya font</a></li>
						<li><a href="http://genericons.com/" target="_blank">Genericons</a></li>
					</ul>

				</div>

				<div class="col-sm-12 col-md-4">

					<h3>Images</h3>

					<ul class="columns" title="Sources and credits">
						<li>Default <em>header.jpg</em>, <em>featured.jpg</em> image and images used in <em>screenshot.jpg</em> are provided via <a href="http://pixabay.com/" target="_blank">Pixabay.com</a></li>
						<li>Other theme demo images are provided via <a href="http://foodiesfeed.com/" target="_blank">Foodie's Feed</a></li>
					</ul>

				</div>


			</div>

	</div></div><!-- /Content -->



	<!--

	Footer

	-->
	<footer class="footer"><div class="container-fluid">

		<p>Once again, thank you for using the Receptar WordPress theme. If you have any questions that are beyond the scope of this user manual, please join <a target="_blank" href="http://support.webmandesign.eu">WebMan Support Forums</a>. I will do my best to assist you.</p>
		<p>If you like the theme, please <a href="https://wordpress.org/themes/receptar/" target="_blank">rate it on the WordPress.org</a>. Thank you!</p>
		<p>&copy; <a href="http://www.webmandesign.eu">WebMan</a> 2015 | <a href="#">Back to top &uarr;</a></p>

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

<!-- This User Manual was created by WebMan (Oliver Juhas) - http://www.webmandesign.eu, (C) 2015 All rights reserved -->

</html>