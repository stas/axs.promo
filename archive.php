<?php get_header(); ?>

		<?php if (have_posts()) : ?>

		 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category Arhiva */ if (is_category()) { ?>
		<h1>Arhiva pentru &#8216;<?php echo single_cat_title(); ?>&#8217;</h1>

 	  <?php /* If this is a daily Arhiva */ } elseif (is_day()) { ?>
		<h1>Arhiva pentru <?php the_time('F jS, Y'); ?></h1>

	 <?php /* If this is a monthly Arhiva */ } elseif (is_month()) { ?>
		<h1>Arhiva pentru <?php the_time('F, Y'); ?></h1>

		<?php /* If this is a yearly Arhiva */ } elseif (is_year()) { ?>
		<h1>Arhiva pentru <?php the_time('Y'); ?></h1>

	  <?php /* If this is an author Arhiva */ } elseif (is_author()) { ?>
		<h1>Arhiva Autorului</h2>

		<?php /* If this is a paged Arhiva */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h1>Arhiva</h2>

		<?php } ?>


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

		<h1>Nu a fost gasit nimic!</h1>

	<?php endif; ?>

<?php get_footer(); ?>
