<!-- Hero Container  -->
<section class="product-hero-slider-container w-full h-full relative z-10 bg-transparent select-none">
    <div class="inner-container w-full h-full">
        <div class="products-slider relative">
            <div class="products-slider-arrows flex flex-row justify-between z-10">
                <div id="products-prev" class="prev arrow-left">
                    <i
                        class="products-arrows fa-solid fa-chevron-left text-white bg-slate w-10 h-10 flex flex-col justify-center items-center rounded-full"></i>
                </div>
                <div id="products-next" class="next arrow-right">
                    <i
                        class="products-arrows fa-solid fa-chevron-right text-white bg-slate w-10 h-10 flex flex-col justify-center items-center rounded-full"></i>
                </div>
            </div>

            <!-- slide one -->

            <?php
              $args = array(
              'post_type' => 'product',
              'orderby' => 'publish_date',
              'order' => 'ASC',
              'post_status' => 'publish',
              'orderby' => 'date_created',
              );
              $loop = new WP_Query($args);
              while($loop->have_posts()): $loop->the_post();      
              $productImage = get_field('product_image');
              $productDescription = get_field('product_description');
             
            ?>
            <div class="products-slide">
                <div id="product-slide-Image" class="product-image-container w-60 md:w-80 lg:w-80 px-6 py-2">
                    <img class="w-full " src="<?php echo $productImage ?>" alt="" />
                </div>
                <div class="products-slide-content md:w-4/6 text-slate text-center md:text-left md:p-6">
                    <h2 class="font-primaryBold text-2xl md:text-3xl lg:text-4xl">
                        <?php echo the_title(); ?>
                    </h2>
                    <p class="mt-4 text-primary text-base md:text-lg">
                        <?php echo $productDescription; ?>
                    </p>

                    <div class="product-content-bottom-images flex flex-row justify-between items-center w-full mt-4">
                        <div class="yum-doodle">
                            <img class="w-3/4" src="<?php echo get_template_directory_uri() ?>/images/yum-doodle.png"
                                alt="" />
                        </div>
                        <div class="stamp">
                            <img class="w-32" src="<?php echo get_template_directory_uri() ?>/images/footer-stamp.png"
                                alt="stamp" />

                        </div>
                    </div>
                </div>
            </div>

            <?php
                endwhile;
                wp_reset_query();
            ?>



            <div class="products-slider-thumbnails">
                <?php
                    $args = array(
                    'post_type' => 'product',
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
                <div id="thumbnail" class="products-thumbnail-container w-10 lg:w-14 <?php echo $productColor ?>"
                    data-value="<?php echo $dataNumber ?>">
                    <img class="products-thumbnail w-full object-cover drop-shadow-xl "
                        src="<?php echo $productImage ?>" alt="" />
                </div>
                <?php
                    endwhile;
                    wp_reset_query();
                ?>
            </div>


        </div>
        <!-- End of slider Container -->
    </div>
    <!-- End of inner Container -->
</section>