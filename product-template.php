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






<?php get_footer(); ?>