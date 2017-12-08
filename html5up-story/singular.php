<?php
get_header();
$count = 0;
if ( have_posts() ) : while ( have_posts() ) : the_post();
		get_template_part('loop', 'singular');

endwhile; endif;

get_footer(); 
?>