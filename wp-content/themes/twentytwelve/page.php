<?php

get_header(); ?>



	<div id="primary" class="site-content">
		<div id="content" role="main">
			<!-- below code is to populate page with other pages -->
			<?php $pages = get_pages();
				foreach ($pages as $page_data) {
				    $content = apply_filters('the_content', $page_data->post_content);
				    $title = $page_data->post_title;
					$slug = $page_data->post_name;
				   	echo "<div id='$title' class='$slug'>";
					//echo "<h2>$title</h2>";
					echo $content;
					echo "</div>";
				}
			?>

		</div><!-- #content -->
	</div><!-- #primary -->


<?php get_footer(); ?>