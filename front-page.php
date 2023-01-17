<?php get_header(); ?>
<?php
	//Custom Fields
 
 
  $headerText = get_field('header');
  $subHeaderText = get_field('sub_header');
  $silder = get_field('display_slider');
  $grid = get_field('display_grid');
 
?>


<!-- Hero Container  -->


<?php 
     if($silder == 'true')
     get_template_part( 'content', 'slider' ); ?>

<!-- Introduction Container  -->

<section class="mt-20 mb-20 intrdoduction-container mx-auto max-w-2xl text-slate">
    <div class="inner-container">
        <h1 class="font-primaryBold text-3xl text-center md:text-4xl lg:text-5xl">
            <?php echo $headerText ?>
        </h1>
        <p class="font-primary text-lg text-center mt-2 md:text-xl md:mt-4 lg:text-2xl">
            <?php echo $subHeaderText ?>
        </p>
    </div>
</section>

<!-- Grid Container -->

<?php 
      if($grid == 'true')
      echo get_template_part('content', 'grid'); ?>


<?php get_footer(); ?>