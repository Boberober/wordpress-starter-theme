<?php get_header(); ?>

<section class="front-page-splash">
	<div class="container">
		<div class="row">
			<div class="col-md-12 black">
				<?php 
				if(has_post_thumbnail()){	
					// the_post_thumbnail('front-splash');
				} ?>
			</div>
		</div>
	</div>
</section>
<section class="">
	<div class="container">
		<div class="row">
			<?php
			if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<!-- post -->
			<?php endwhile; ?>
			<!-- post navigation -->
			<?php else: ?>
			<!-- no posts found -->
			<?php endif; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
