<?php get_header() ?>
		
		<!-- section -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<div class="center">
					<h1>All posts by the author: <?php the_author() ?></h1>
				</div>
				<!-- row -->
				<div class="row">
					<div class="col-md-8">
						<div class="row">
														
														
							<!-- post -->
							<?php if (have_posts()): ?>
							<?php while(have_posts()): ?>
      						<?php the_post(); ?>
							<!-- post -->
							<div class="col-md-12">
								<div class="post post-row">
									<a class="post-img" href="<?php echo get_permalink() ?>"><img src="<?php echo get_the_post_thumbnail_url(); ?>" alt=""></a>
									<div class="post-body">
										<div class="post-meta">
											<a class="post-category cat-2" href=""><?php echo get_the_category()[0]->name; ?></a>

											<span class="post-date"><?php echo get_the_date() ?></span>
										</div>
										<h3 class="post-title"><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h3>
										<p><?php echo substr(get_the_content(), 0, 100) . " ...";?></p>
									</div>
								</div>
							</div>
							<?php endwhile ?>
							<?php endif ?>
							<!-- /post -->
							
						</div>
					</div>
					
					<div class="col-md-4">
						<!-- ad -->
						<div class="aside-widget text-center">
							<a href="#" style="display: inline-block;margin: auto;">
								<img class="img-responsive" src="./img/ad-1.jpg" alt="">
							</a>
						</div>
						<!-- /ad -->

						
						<!-- catagories -->
					<?php if(dynamic_sidebar('sidebar-1')) : else: endif; ?>
						<!-- /catagories -->
						
						<!-- tags -->
						<div class="aside-widget">
							<div class="tags-widget">
								<?php 
									if(is_author()){
										echo 'yeah its author';
									} else {
										echo 'not author';
									}

								 ?>
							</div>
						</div>
						<!-- /tags -->
						
						<!-- archive -->
						<!-- <div class="aside-widget">
							<div class="section-title">
								<h2>Archive</h2>
							</div>
							<div class="archive-widget">
								<ul>
									<li><a href="#">Jan 2018</a></li>
									<li><a href="#">Feb 2018</a></li>
									<li><a href="#">Mar 2018</a></li>
								</ul>
							</div>
						</div> -->
						<!-- /archive -->
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /section -->

	
<?php get_footer() ?>