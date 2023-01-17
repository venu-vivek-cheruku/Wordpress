<?php 
/* Template Name: Stockists  Template */
get_header();
?>

<?php
	//Custom Fields
  $headerText = get_field('header');
  $subHeaderText = get_field('sub_header');
  $silder = get_field('display_slider');
  $grid = get_field('display_grid');
?>

<!-- Slider  -->

<section class="stockists-container w-full h-full relative z-10">
    <div class="inner-container w-full h-full">


        <div class="stockists-thumbnails flex flex-row flex-wrap gap-4 items-center justify-center">
            <?php
                    $args = array(
                    'post_type' => 'stockists',
                    'orderby' => 'publish_date',
                    'order' => 'ASC',
                    'post_status' => 'publish',
                    'orderby' => 'date_created',
                    'posts_per_page' => -1 // this will retrive all the post that is published
                    );
                    $loop = new WP_Query($args);
                    $dataNumber = -1;
                    while($loop->have_posts()): $loop->the_post();      
                    $productImage = get_field('product_image');
                    $productDescription = get_field('product_description');
                    $productColor = get_field('product_colour');
                    $dataNumber = $dataNumber + 1;
                ?>
            <div class="stockist-item flex flex-col items-center bg-gray-100 w-full p-2 lg:w-52 h-52">
                <img class="flex-1 object-contain w-44" src="<?php echo get_field('stockists_image') ?>" alt="" />
                <p class="text-lg font-secondary uppercase font-normal text-center">
                    <?php echo get_the_title(); ?>
                </p>
            </div>
            <?php
                    endwhile;
                    wp_reset_query();
                ?>
            <!-- End of stockists-thumbnails -->
        </div>
        <!-- End of Inner Container -->
    </div>
    <!-- End of Hero Container -->
</section>





<?php get_footer(); ?>