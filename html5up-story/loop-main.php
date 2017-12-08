					<section class="banner style1 orient-left content-align-left image-position-right fullscreen onload-image-fade-in onload-content-fade-right">
						<div class="content">
							<h1><?php the_title(); ?></h1>
							<p class="major"><?php the_excerpt(); ?></p>
							<ul class="actions vertical">
								<li><a href="<?php the_permalink(); ?>"><?php _e("Get Started", "html5up-story"); ?></a></li>
							</ul>
						</div>
						<div class="image">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.css" />
							<?php the_post_thumbnail( 'spotlight' ); ?>
						</div>
					</section>