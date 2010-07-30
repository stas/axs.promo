<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="text">
<?php $key="poza"; $value =get_post_meta($post->ID, $key, true); echo "<img src=\"".$value."\" alt=\"Axentist 2007\"  />"; ?>
				<h2 class="titlu"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2> <small><?php edit_post_link('Edit', '', ''); ?></small>
<?php the_content('<p>Citeste continuarea</p>'); ?>
</div>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>


	<?php endwhile; else: ?>

		<h1>Ne pare rau, insa nu a fost gasit nimic.</h1>

<?php endif; ?>

		<div class="navigation">
			<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>
			<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>
		</div>

<?php get_footer(); ?>
