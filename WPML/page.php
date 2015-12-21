<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<div class="post" id="post-<?php the_ID(); ?>">

			<h2><?php the_title(); ?></h2>

			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">

				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>

			<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>

		</div>
		
		<?php comments_template(); ?>

		<?php $pages = get_pages();
				foreach ($pages as $page_data) {
				    $content = apply_filters('the_content', $page_data->post_content);
				    $title = $page_data->post_title;
					$slug = $page_data->post_name;
				   	echo "<div id='$title' class='$slug'>";
					echo "<h2>$title</h2>";
					echo $content;
					echo "</div>";
				}
			?>

		<?php endwhile; endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
