<!DOCTYPE HTML>
<!--
	Miniport 2.0 by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php $settings->out( 'site-meta', 'title' ); ?></title>
		
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		
		<meta name="description" content="<?php $settings->out( 'site-meta', 'description' ); ?>">
		<meta name="author" content="<?php $settings->out( 'site-meta', 'author' ); ?>">
		
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,600,700" rel="stylesheet" />
		
		<script src="<?php $template->url( 'js/jquery.min.js' ); ?>"></script>
		<script src="<?php $template->url( 'js/config.js' ); ?>"></script>
		<script src="<?php $template->url( 'js/skel.min.js' ); ?>"></script>
	
		<link rel="stylesheet" href="<?php $template->url( 'css/skel-noscript.css' ); ?>" />
		<link rel="stylesheet" href="<?php $template->url( 'css/style.css' ); ?>" />
		<link rel="stylesheet" href="<?php $template->url( 'css/style-desktop.css' ); ?>" />
	
		<!--[if lte IE 9]><link rel="stylesheet" href="<?php $template->url( 'css/ie9.css' ); ?>" /><![endif]-->
		<!--[if lte IE 8]><script src="<?php $template->url( 'js/html5shiv.js' ); ?>"></script><link rel="stylesheet" href="<?php $template->url( 'css/ie8.css' ); ?>" /><![endif]-->
		<!--[if lte IE 7]><link rel="stylesheet" href="<?php $template->url( 'css/ie7.css' ); ?>" /><![endif]-->
	
	    <?php $hook->apply( 'head' ); ?>
	</head>
	<body>

		<!-- Nav -->
			<nav id="nav">
				<ul>
					<li><a href="#top">Top</a></li>
					<li><a href="#work">Work</a></li>
					<li><a href="#portfolio">Portfolio</a></li>
					<li><a href="#contact">Contact</a></li>
				</ul>
			</nav>

		<!-- Home -->
			<div data-lf-edit="intro" class="wrapper wrapper-style1 wrapper-first">
				<article class="container" id="top">
					<div class="row">
						<div class="4u">
							<span class="me image image-full"><?php if ( $photo = $content->get( 'intro', 'image' ) ) { echo $image->get( 'full', $photo ); } ?></span>
						</div>
						<div class="8u">
							<header>
								<h1><?php $content->out( 'intro', 'title' ); ?></h1>
							</header>
							<p><?php $content->out( 'intro', 'text' ); ?></p>
							<a href="#work" class="button button-big"><?php $content->out( 'intro', 'button' ); ?></a>
						</div>
					</div>
				</article>
			</div>

		<!-- Work -->
			<div data-lf-edit="work" class="wrapper wrapper-style2">
				<article id="work">
					<header>
						<h2><?php $content->out( 'work', 'title' ); ?></h2>
						<span><?php $content->out( 'work', 'header-text' ); ?></span>
					</header>
					<div class="container">
						<div class="row">
                            <?php $work_types = $content->get( 'work', 'work-types' ); ?>
                            <?php if ( $work_types ) : ?>
                                <?php foreach ( $work_types as $work ) : ?>
                                <div class="4u">
                                    <section class="box box-style1">
                                        <span class="icon featured-icon icon-thumbs-up"></span>
                                        <h3><?php echo $work['title']; ?></h3>
                                        <p><?php echo $work['text']; ?></p>
                                    </section>
                                </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
						</div>
					</div>
					<footer>
						<p><?php $content->out( 'work', 'footer-text' ); ?></p>
						<a href="#portfolio" class="button button-big"><?php $content->out( 'work', 'button' ); ?></a>
					</footer>
				</article>
			</div>

		<!-- Portfolio -->
			<div data-lf-edit="portfolio" class="wrapper wrapper-style3">
				<article id="portfolio">
					<header>
						<h2><?php $content->out( 'portfolio', 'title' ); ?></h2>
						<span><?php $content->out( 'portfolio', 'header-text' ); ?></span>
					</header>
					<div class="container">
						<div class="row">
						    <?php $items = $content->get( 'portfolio', 'items' ); ?>
						    <?php if ( $items ) : ?>
						        <?php foreach ( $items as $item ) : ?>
						        <div class="4u">
						            <section class="box box-style1">
						                <a href="<?php echo $item['link']; ?>" class="image image-full">
						                    <?php if ( isset( $item['screenshot'] ) && $item_screenshot = $image->get( 'portfolio', $item['screenshot'] ) ) { echo $item_screenshot; } ?>
						                </a>
						                <h3><a href="<?php echo $item['link']; ?>"><?php echo $item['title']; ?></a></h3>
						                <p><?php echo $item['text']; ?></p>
						            </section>
						        </div>
						        <?php endforeach; ?>
						    <?php endif; ?>
						</div>
					</div>
					<footer>
						<p><?php $content->out( 'portfolio', 'footer-text' ); ?></p>
						<a href="#portfolio" class="button button-big"><?php $content->out( 'portfolio', 'button' ); ?></a>
					</footer>
				</article>
			</div>

		<!-- Contact -->
			<div data-lf-edit="contact" class="wrapper wrapper-style4">
				<article id="contact">
					<header>
						<h2><?php $content->out( 'contact', 'title' ); ?></h2>
						<span><?php $content->out( 'contact', 'header-text' ); ?></span>
					</header>
					<div>
						<?php
						if ( isset( $contact_form ) ) :
						    include $contact_form->template_path();
						endif;
						?>
						<div class="row row-special">
							<div class="12u">
								<h3>Find me on ...</h3>
								<ul class="social">
								    <?php $contact = $content->get( 'contact' ); ?>
								    
								    <?php if ( $contact['twitter'] !== '' ) { ?>
								    <li class="twitter"><a href="<?php $content->out( 'contact', 'twitter' ); ?>" class="icon icon-twitter"><span>Twitter</span></a></li>
								    <?php } ?>
								    
								    <?php if ( $contact['facebook'] !== '' ) { ?>
								    <li class="facebook"><a href="<?php $content->out( 'contact', 'facebook' ); ?>" class="icon icon-facebook"><span>Facebook</span></a></li>
								    <?php } ?>
								    
								    <?php if ( $contact['dribbble'] !== '' ) { ?>
								    <li class="dribbble"><a href="<?php $content->out( 'contact', 'dribbble' ); ?>" class="icon icon-dribbble"><span>Dribbble</span></a></li>
								    <?php } ?>
								    
								    <?php if ( $contact['google'] !== '' ) { ?>
								    <li class="googleplus"><a href="<?php $content->out( 'contact', 'google' ); ?>" class="icon icon-google-plus"><span>Google+</span></a></li>
								    <?php } ?>
								    
								    <?php if ( $contact['github'] !== '' ) { ?>
								    <li class="github"><a href="<?php $content->out( 'contact', 'github' ); ?>" class="icon icon-github"><span>Github</span></a></li>
								    <?php } ?>
								    
								    <?php if ( $contact['instagram'] !== '' ) { ?>
								    <li class="instagram"><a href="<?php $content->out( 'contact', 'instagram' ); ?>" class="icon icon-instagram"><span>Instagram</span></a></li>
								    <?php } ?>
								    
								    <?php if ( $contact['skype'] !== '' ) { ?>
								    <li class="skype"><a href="<?php $content->out( 'contact', 'skype' ); ?>" class="icon icon-skype"><span>Skype</span></a></li>
								    <?php } ?>
								    
								    <?php if ( $contact['youtube'] !== '' ) { ?>
								    <li class="youtube"><a href="<?php $content->out( 'contact', 'yourtube' ); ?>" class="icon icon-youtube"><span>YouTube</span></a></li>
								    <?php } ?>
								    
								    <?php if ( $contact['vimeo'] !== '' ) { ?>
								    <li class="vimeo"><a href="<?php $content->out( 'contact', 'vimeo' ); ?>" class="icon icon-vimeo"><span>Vimeo</span></a></li>
								    <?php } ?>
								</ul>
							</div>
						</div>
					</div>
					<footer>
						<p id="copyright">
							<?php $content->out( 'contact', 'footer-text' ); ?>
						</p>
					</footer>
				</article>
			</div>

        <?php $hook->apply( 'footer' ); ?>
	</body>
</html>