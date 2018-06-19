<?php get_header(); ?>
	<div class="content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-9">
					<?php 
						if ( have_posts() ) : while ( have_posts() ) : the_post();
							get_template_part("content", get_post_format());
						endwhile; endif;
					?>
				</div>
				<div class="col-lg-3">
					<div class="sidebar">
						<?php get_sidebar(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php get_footer(); ?>