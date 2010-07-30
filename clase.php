<?php
/*
Template Name: Clase
*/
?>

<?php get_header(); ?>

<div class="text">

<h2>Arhiva</h2>
	<ul>
		<?php wp_list_categories('title_li=&show_count=1&hierarchical=0'); ?> 
	</ul>
</div>

<?php get_footer(); ?>
