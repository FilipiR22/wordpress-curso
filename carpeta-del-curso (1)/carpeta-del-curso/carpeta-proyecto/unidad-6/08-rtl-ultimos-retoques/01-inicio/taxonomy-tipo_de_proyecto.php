<?php get_header(); ?>
<main id="main" class="columns large-12 small-12">

	<h1 class="page-title"><?php the_archive_title() ?></h1>

	<?php get_template_part( 'template-parts/loop' ); ?>

</main>
<?php get_footer(); ?>
