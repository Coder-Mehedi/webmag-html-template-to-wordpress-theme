<?php get_header() ?>
		
<!-- section -->
<div class="section">
	<!-- container -->
	<div class="container">
		<div class="center">
			<h1>All posts from tag: 
				<span class="name"> <?php echo single_tag_title( $prefix = '', $display = true ) ?>
				</span>
			</h1>
		</div>
		<!-- row -->
		<div class="row">
			<div class="col-md-8">
				<div class="row">
												
												
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
								<?php the_category( $separator = ' ') ?>
								
								<a href="<?php bloginfo('url'); ?>/<?php the_time('Y') ?>/<?php the_time('m') ?>/<?php the_time('j') ?>"><?php echo get_the_date(); ?></a>

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
					
				</div>
			</div>
			
			<div class="col-md-4">
	
				<!-- catagories -->
			<?php if(dynamic_sidebar('sidebar-1')) : else: endif; ?>
				<!-- /catagories -->
				
				<!-- tags -->
				<div class="aside-widget">
					<div class="tags-widget">
						<h3>Tags</h3>

						<?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
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