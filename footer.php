<div class="footer">
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-4">
			<div class="footer-head">
				<h3><span class="glyphicon glyphicon-info-sign"></span> About Author</h3>
				<hr/>
			</div>
			<div class="footer-content text-justify">
				<p><a href="<?php the_author_meta('user_url');?>"><?php the_author_meta( 'user_firstname' ); echo " "; the_author_meta( 'user_lastname' );?></p></a>
				
				<p><?php the_author_meta( 'description' ); ?></p>
			</div>
		</div>
		
		<div class="col-lg-4">
			<div class="footer-head">
				<h3>Navigation</h3>
				<hr/>
			</div>
			<div class="footer-content">
				<ul class="nav"><?php wp_list_pages( '&title_li=' ); ?></ul>
			</div>
		</div>
		
		<div class="col-lg-4">
			<div class="footer-head">
				<h3>Find us On</h3>
				<hr/>
			</div>
			<div class="footer-content">
				<div class="social-media-icon">
					<a href="#" class="social-media-link"> <span class="fa fa-facebook"></span> Facebook</a>
				</div>
				<div class="social-media-icon">
					<a href="#" class="social-media-link"> <span class="fa fa-twitter"></span> Twitter</a>
				</div>
				<div class="social-media-icon">
					<a href="#" class="social-media-link"> <span class="fa fa-linkedin"></span> LinkedIn</a>
				</div>
				<div class="social-media-icon">
					<a href="#" class="social-media-link"> <span class="fa fa-youtube"></span> Youtube</a>
				</div>
			</div>
		</div>
		
	</div>
</div>
</div>
<div class="text-center credit">
	Design by <a href="https://fplstutorial47.wordpress.com/download/" target="_blank">FPLS-TUTORIAL</a> , Powered by <a href="https://wordpress.com" target="_blank">Wordpress</a>
</div>
</body>
</html>