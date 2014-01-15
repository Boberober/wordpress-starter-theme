<?php 
get_header();
?>
<section class="content">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content page-content">
					<?php
					if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<h1 class="title post-title"><?php the_title(); ?></h1>
					<?php the_post_thumbnail( 'page-thumbnail' ); ?>
					<?php the_content(); ?>
					<?php endwhile; ?>
					<!-- post navigation -->
					<?php else: ?>
					
					<p><?php _e('Inga poster hittades'); ?></p>
					<?php endif;  ?>
				</div>
			</div>
		</div>

	</div>

</section>

get_footer();
?>
