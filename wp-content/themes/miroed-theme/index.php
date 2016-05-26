<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
	<body>

	<header class="navigation">
		<a href="/" title="Michael Edmond | UI Designer | Front-end Developer"><span class="icon-mre-logo"></span></a>
	</header> <!-- End of Navigation Section -->

	<section class="introduction">
		<div class="container">
			<div class="row">
				<p class="introduction__lead">Hey, I'm Michael, your friendly neighborhood web guy.
					<small>I design and code for humans, like you. Let's build.</small>
				</p>
				
			</div> <!-- End Row -->
		</div> <!-- End of the Container -->
	</section> <!-- End of Introduction Section -->

	<section class="work">
		<div class="work__meta">
			<header class="work__meta__header">
				<h2 class="work--big">
					Things I've Done
					<small>(and thought about doing&hellip;)</small>
				</h2>
			</header>
		</div> <!-- End of Work Meta Information -->

		<div class="work__showcase">
			
		</div> <!-- End of Work Showcase -->
	</section> <!-- End of Pieces of Work -->

	<section class="blog">
		
	</section> <!-- End of Blog Section -->

	<section class="contact">
		
	</section> <!-- End of Contact Section -->
		
	<?php wp_footer(); ?>
	</body>
</html>