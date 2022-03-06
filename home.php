<!-- head -->
<?php if (wp_is_mobile()): ?>
	<!-- header -->
	<?php get_template_part('mobile/home'); ?>
	<!-- footer -->
<?php else: ?>
	<!-- header -->
	<?php get_template_part('desktop/home'); ?>
	<!-- footer -->
<?php endif; ?>
