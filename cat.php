<?php function cat(){ ?>
	<div class="aside-widget">
		<div class="section-title">
			<h2>Catagories</h2>
		</div>
		<div class="category-widget">
			<ul>
				<?php wp_list_categories(['title_li'=> '','show_count' => true]) ;?>
			</ul>	
		</div>
	</div>
<?php } ?>

<?php cat() ?>