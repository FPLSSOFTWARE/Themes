<div class="sidebar">
	<div class="sidebar-header">
		<h2 class="sidebar-title">New Post</h2>
	</div>
	<div class="sidebar-content">
		<ul class="list text-justify">
			<?php 
				$the_query = new WP_Query( 'posts_per_page=20' );
				while ($the_query -> have_posts()) : $the_query -> the_post(); 
			?>
			<a href="<?php the_permalink() ?>">
				<li>
					<p style="background-color: #e0e0e0; padding: 10px;"><?php the_author(); echo " | "; the_date();?></p>
					<p><?php the_title(); ?></p>
				</li>
			</a>
			<?php 
				endwhile;
				wp_reset_postdata();
			?>
		</ul>
	</div>
	<br/>
	<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .sidebar .widget-area -->
	<?php endif; ?>
	</br>
	
	
</div>