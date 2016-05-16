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
		
	</header> <!-- End of Navigation Section -->

	<section class="introduction">
		<div class="container">
			<div class="row">
				<p class="introduction__lead">What's Up? I'm Michael, your friendly neighborhood web guy.</p>
				<p>I design and code for humans, like you. Let's build.</p>
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

	<section class="skills">
		<div class="skills__groups">
			<ul>
				<li>
					<h3>Design <small>(Making the functional, useful.)</small></h3>
					<ul>
						<li>
							<h4>Use cases and scenarios</h4>
							<ul class="skills__elements">
								<li class="skills--design">Pencil &amp; Paper</li>
								<li class="skills--design">Whiteboard</li>
							</ul>
						</li>
						<li>
							<h4>Sketches</h4>
							<ul class="skills__elements">
								<li class="skills--design">Pencil &amp; Paper</li>
								<li class="skills--design">Whiteboard</li>
								<li class="skills--design">Illustrator</li>
							</ul>
						</li>
						<li>
							<h4>Wireframing</h4>
							<ul class="skills__elements">
								<li class="skills--design">Photoshop</li>
								<li class="skills--design">Axure</li>
								<li class="skills--design">Illustrator</li>
								<li class="skills--design">Pencil &amp; Paper</li>
								<li class="skills--design">Whiteboard</li>
							</ul>
						</li>
						<li>
							<h4>High-Fedility Mockups</h4>
							<ul class="skills__elements">
								<li class="skills--design">Photoshop</li>
								<li class="skills--design">Illustrator</li>
							</ul>
						</li>
						<li>
							<h4>Prototyping</h4>
							<ul class="skills__elements">
								<li class="skills--design">Axure</li>
								<li class="skills--design">InVision</li>
								<li class="skills--design">Javascript</li>
								<li class="skills--design">HTML &amp; CSS</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<h3>Develop <small>(Making it do, what it do.)</small></h3>
					<ul>
						<li><h4>UI Architecture</h4></li>
						<li><h4>Responsive Implementations</h4></li>
						<li><h4>Javascript Development</h4></li>
						<li><h4>Wordpress Theme Development</h4></li>
					</ul>
				</li>
			</ul>
		</div>
	</section> <!-- End of Skills Section -->

	<section class="contact">
		
	</section> <!-- End of Contact Section -->
		
	<?php wp_footer(); ?>
	</body>
</html>