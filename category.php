<?php get_header() ?>
		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-12">
								<div class="section-title center">
									<h2>All posts from category: <?php the_category()?></h2>
								</div>
							</div>
							<!-- post -->
							<?php if (have_posts()): ?>
							<?php while(have_posts()): ?>
      						<?php the_post(); ?>
							<div class="col-md-12">
								<div class="post post-row">
									<a class="post-img" href="<?php echo get_permalink() ?>">
										<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<?php the_category( $separator = '|') ?>
											
											<a href="<?php bloginfo('url'); ?>/<?php the_time('Y') ?>/<?php the_time('m') ?>/<?php the_time('j') ?>"><?php echo the_date(); ?></a>

											<a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>">
											<?php echo get_the_author_meta('display_name') ?></a>

										</div>

										<h3 class="post-title"><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3>
										<p><?php echo substr(get_the_content(), 0, 200) . " ...";?></p>
									</div>
								</div>
							</div>
							<?php endwhile; ?>
							<?php endif; ?>
							<!-- /post -->

							
							
							<div class="col-md-12">
								<div class="section-row">
									<!-- <button class="primary-button center-block">Load More</button> -->
									<?php echo paginate_links() ?>
								</div>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/ad-1.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->
						
						<!-- category include -->
						<!-- <?php include_once 'cat.php' ?> -->
						<?php if(dynamic_sidebar('sidebar-1')) : else: endif; ?>
						<!-- category end -->
						
						<!-- tags -->
						<div class="aside-widget">
							<div class="tags-widget">
								
								<?php wp_tag_cloud(); ?>
							</div>
						</div>
						<!-- /tags -->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->



<?php get_footer() ?>