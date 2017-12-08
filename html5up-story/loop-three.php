					<section class="spotlight style1 orient-left content-align-left image-position-center onscroll-image-fade-in">
						<div class="content">
							<h2><?php the_title(); ?></h2>
							<p><?php the_excerpt(); ?></p>
							<ul class="actions vertical">
								<li><a href="<?php the_permalink(); ?>" class="button"><?php _e("Learn More", "html5up-story"); ?></a></li>
							</ul>
						</div>
						<div class="image">
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/main.css" />
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/spotlight02.jpg" alt="" />
						</div>
					</section>