<?php get_header(); ?>

	<div class="text pagina">

	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>
				<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h2> <small><?php edit_post_link('Edit', '', ''); ?></small>
<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
		<?php endwhile; endif; ?>
	</div>

<?php get_footer(); ?>