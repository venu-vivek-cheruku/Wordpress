<?php 
/* Template Name: Contact  Template */
get_header();
?>

<?php 
//  custom Fields
  $slider = get_field('display_slider');
  $grid = get_field('display_grid');
  $headerText = get_field('header');
  $subHeaderText = get_field('sub_header');
  $shortCode = get_field('short_code');
 ?>

<div class="contact-template-container">
    <!-- Slider  -->
    <?php 
if($slider == 'true')
get_template_part( 'content', 'slider' ); ?>

    <!-- Introduction Container  -->
    <?php if($headerText) : ?>
    <section class="pt-10 mb-20  intrdoduction-container mx-auto max-w-2xl text-slate">
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

    <?php if($shortCode) : ?>
    <section class="mt-20 mb-20 intrdoduction-container mx-auto text-slate hidden">
        <div class="inner-container">
            <div class="contact-form-container grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 place-content-center">
                <div class="contact-form "> <?php echo do_shortCode($shortCode) ?> </div>
                <div class="contact-image w-full md:pt-0">
                    <?php if (has_post_thumbnail( $post->ID ) ): 
            $thumbnail = get_the_post_thumbnail_url();
            ?>
                    <img class="w-3/4 object-contain mx-auto" src="<?php echo $thumbnail ?>" alt="" />
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-20 mb-20 intrdoduction-container mx-auto text-slate">
        <div class="inner-container">
            <div class="contact-form-container ">
                <div class="contact-form "> <?php echo do_shortCode($shortCode) ?> </div>

            </div>
        </div>
    </section>
    <?php endif; ?>

    <!-- Grid Container  -->
    <?php
if($grid == 'true')
 get_template_part( 'content', 'grid' ); ?>
</div>


<?php get_footer(); ?>