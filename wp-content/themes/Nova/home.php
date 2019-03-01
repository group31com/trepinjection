<?php get_header(); ?>

<?php if ( is_home() && get_option('nova_featured') == 'false' ) { ?>
	<div class="et_pad"></div>
<?php } ?>

<?php if (get_option($shortname.'_services') == 'on') { ?>

	<div id="content">

		<div id="services" class="container clearfix">
			
			<div class="one-third">
				<?php query_posts('page_id=' . get_pageId(html_entity_decode(get_option($shortname.'_service_1')))); while (have_posts()) : the_post(); ?>
				<?php get_template_part('includes/service_content'); ?>
			<?php endwhile; wp_reset_query(); ?>
		</div> <!-- end .one-third -->

		<div class="one-third">
			<?php query_posts('page_id=' . get_pageId(html_entity_decode(get_option($shortname.'_service_2')))); while (have_posts()) : the_post(); ?>
			<?php get_template_part('includes/service_content'); ?>
		<?php endwhile; wp_reset_query(); ?>
	</div> <!-- end .one-third -->

	<div class="one-third">
		<?php query_posts('page_id=' . get_pageId(html_entity_decode(get_option($shortname.'_service_3')))); while (have_posts()) : the_post(); ?>
		<?php get_template_part('includes/service_content'); ?>
	<?php endwhile; wp_reset_query(); ?>
</div> <!-- end .one-third -->

</div> <!-- #services -->

</div> <!-- #content -->




<?php } ?>

<?php get_footer(); ?>