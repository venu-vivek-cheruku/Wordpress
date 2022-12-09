<?php 
/* Template Name: Product Template */
get_header();
?>

<?php 
//  custom Fields    
  $grid = get_field('display_grid') 
 ?>

<!-- Slider  -->

<?php get_template_part( 'content', 'productSilder' ); ?>


<?php
if($grid == 'true')
 get_template_part( 'content', 'grid' ); ?>



<?php get_footer(); ?>