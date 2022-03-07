<?php get_header(); ?>
<?php if (wp_is_mobile()): ?>
	<?php get_template_part('mobile/single'); ?>
<?php else: ?>
	<?php get_template_part('desktop/single'); ?>
<?php endif; ?>
<?php get_footer(); ?>