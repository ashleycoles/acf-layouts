<?php 
/*
Available variables:
$layout - The row layout name
*/

$image = get_sub_field('image');

?>

<div class="layout <?php echo $layout; ?>">
	<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" />
</div>