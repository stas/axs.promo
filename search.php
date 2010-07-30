<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<h1>Rezulate cautare</h1>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>


		<?php while (have_posts()) : the_post(); ?>
<div class="text">
<?php $key="poza"; $value =get_post_meta($post->ID, $key, true); echo "<img src=\"".$value."\" alt=\"Axentist 2007\" />"; ?>
				<h2 class="titlu"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2> <small><?php edit_post_link('Edit', '', ''); ?></small>
<?php the_content('<p>Citeste continuarea</p>'); ?>
</div>
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>

	<?php else : ?>

		<h1>Nu a fost gasit nimic. Mai incercati!</h1>

	<?php endif; ?>

<?php get_footer(); ?>