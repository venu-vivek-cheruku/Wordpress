<?php get_header(); ?>


<?php 
//  custom Fields
  $slider = get_field('display_slider');
  $grid = get_field('display_grid');
  $headerText = get_field('header');
  $subHeaderText = get_field('sub_header');
  $shortCode = get_field('short_code');
  $optionalHeader = get_field('optional_header');
 ?>


<!-- Slider  -->
<?php 
if($slider == 'true')
get_template_part( 'content', 'slider' ); ?>


<!-- Introduction Container  -->
<?php if($headerText) : ?>
<section class="mt-20 mb-20 intrdoduction-container mx-auto max-w-2xl text-slate">
    <div class="inner-container">
        <h1 class="font-primaryBold text-2xl text-center md:text-3xl lg:text-4xl">
            <?php echo $headerText ?>
        </h1>
        <p class="font-primary text-base text-center mt-2 md:text-lg md:mt-4 lg:text-xl">
            <?php echo $subHeaderText ?>
        </p>
    </div>
</section>
<?php endif; ?>

<?php if($optionalHeader): ?>
<h1 class="font-primaryBold text-slate text-2xl text-center md:text-3xl lg:text-4xl">
    <?php echo $optionalHeader ?>
</h1>
<?php endif; ?>

<?php if($shortCode) : ?>
<section class="mt-20 mb-20 intrdoduction-container mx-auto max-w-2xl text-slate">
    <div class="inner-container">
        <?php echo do_shortCode($shortCode) ?>
    </div>
</section>
<?php endif; ?>

<!-- Grid Container  -->
<?php
if($grid == 'true')
 get_template_part( 'content', 'grid' ); ?>



<?php get_footer(); ?>