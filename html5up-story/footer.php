					<footer class="wrapper style1 align-center">
						<div class="inner">
							<?php 
							$args = array(
								'theme_location'  => 'Social-menu',
								'container'       => null,
								//'container_class' => 'my-menu-class',
								'menu_class' => 'icons',
							);
							wp_nav_menu( $args );
							?>
							<ul class="icons">
								<li><a href="#" class="icon style2 fa-twitter"><span class="label">Twitter</span></a></li>
								<li><a href="#" class="icon style2 fa-facebook"><span class="label">Facebook</span></a></li>
								<li><a href="#" class="icon style2 fa-instagram"><span class="label">Instagram</span></a></li>
								<li><a href="#" class="icon style2 fa-linkedin"><span class="label">LinkedIn</span></a></li>
								<li><a href="#" class="icon style2 fa-envelope"><span class="label">Email</span></a></li>
							</ul>

							<p><?php _e("&copy; Untitled. Design: ","html5up-story"); ?><a href="https://html5up.net">HTML5 UP</a>.</p>
						</div>
					</footer>
				</div>

				<!-- Scripts -->

				<?php wp_footer(); ?> 
			</body>
			</html>