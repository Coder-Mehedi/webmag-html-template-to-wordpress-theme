<?php get_header() ?>
<!-- Page Header -->
<?php while ( have_posts() ) :
	the_post();
 ?>
			<div id="post-header" class="page-header">
				<div class="background-img" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);"></div>
				<div class="container">
					<div class="row">
						<div class="col-md-10">
							<div class="post-meta">
								<?php the_category( $separator = '|') ?>

								<a href="<?php bloginfo('url'); ?>/<?php the_time('Y') ?>/<?php the_time('m') ?>/<?php the_time('j') ?>"><?php the_date(); ?></a>
								<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
											<?php echo get_the_author_meta('display_name') ?></a>
							</div>
							<h1><?php the_title() ?></h1>
						</div>
					</div>
				</div>
			</div>
			<!-- /Page Header -->
		<?php endwhile ?>

		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- Post content -->
					<div class="col-md-8">
						<div class="section-row sticky-container">
							<div class="main-post">
								<h3><?php the_title() ?></h3>
								<p><?php echo get_the_content(); ?></p>
								
								
							</div>
							<div class="post-shares sticky-shares">
								<a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a>
								<a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
								<a href="#" class="share-google-plus"><i class="fa fa-google-plus"></i></a>
								<a href="#" class="share-pinterest"><i class="fa fa-pinterest"></i></a>
								<a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a>
								<a href="#"><i class="fa fa-envelope"></i></a>
							</div>
						</div>

						<!-- ad -->
						<div class="section-row text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-2.jpg" alt="">
							</a>
						</div>
						<!-- ad -->
						
						<!-- author -->
						<div class="section-row">
							<div class="post-author">
								<div class="media">
									<div class="media-left">
										<?php echo get_avatar( get_the_author_meta('user_email')); ?>
									</div>
									<div class="media-body">
										<div class="media-heading">
											<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
											<h3><?php echo get_the_author_meta('display_name') ?></h3></a>
										</div>
										<p>Lorem ipsum dolor sit amet, consectetu
										<ul class="author-social">
											<li><a href="#"><i class="fa fa-facebook"></i></a></li>
											<li><a href="#"><i class="fa fa-twitter"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
											<li><a href="#"><i class="fa fa-instagram"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<!-- /author -->

						

						<!-- comments -->
						<?php 
						if( comments_open() || get_comments_number()):
							comments_template();
						endif;
						 ?>
						 <!-- /comments -->

					</div>
					<!-- /Post content -->

					<!-- aside -->
					<div class="col-md-4">
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-1.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->


						<!-- post widget -->
						
						<!-- category --> 
						<?php include_once 'cat.php' ?>
						<!-- end category -->
						
						<!-- tags -->
						<div class="aside-widget">
							<div class="tags-widget">

								<?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
							</div>
						</div>
						<!-- /tags -->
						
						<!-- archive -->
						<div class="aside-widget">
							
						</div>
						<!-- /archive -->
					</div>
					<!-- /aside -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->



<?php get_footer() ?>