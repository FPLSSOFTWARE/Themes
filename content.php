<div class="blog-post">
	<div class="post-header">
		<h1 class="blog-post-title"> <?php the_title(); ?></h1>
		<p class="blog-post-meta"> 
		<?php echo get_bloginfo( 'name' ); echo " | "; the_date(); ?> | <a href="#"> <?php the_author(); ?> </a>
		</p>
	</div>
	
	<div class="post">
		<?php the_content(); ?>
	</div>
	<hr/>
	<div class="post-footer">
		<?php comments_template( '/custom-templates/alternative-comments.php' ); ?>
	</div>
</div>

<br/><br/>