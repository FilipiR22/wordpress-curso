<?php get_header(); ?>
<main id="main" class="columns large-<?php echo is_page() ? 12 : 9 ?> small-12">
	<?php get_template_part( 'template-parts/loop' ); ?>
</main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
