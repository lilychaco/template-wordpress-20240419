<?php
$class_element = $args['class-element'] ;
?>
<?php if (function_exists('bcn_display')) { ?>
<div class="<?= $class_element ?> breadcrumb" vocab="http://schema.org/" typeof="BreadcumbList">
	<div class=" breadcrumb__inner">
		<?php bcn_display();?>
	</div>
</div>
<?php } ?>
