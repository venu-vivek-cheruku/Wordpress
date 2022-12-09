

 <!-- Hero Container  -->
 <section
        class="product-hero-slider-container w-full h-full relative z-10 bg-transparent mt-32"
      >
        <div class="inner-container w-full h-full">

          <div class="products-slider h-full w-full relative">
            <div
              class="products-slider-arrows flex flex-row justify-between z-10"
            >
              <div
                id="products-prev"
                onclick="plusSlides(-1)"
                class="prev arrow-left"
              >
                <i
                  class="products-arrows fa-solid fa-chevron-left text-white bg-slate w-10 h-10 flex flex-col justify-center items-center rounded-full"
                ></i>
              </div>
              <div
                id="products-next"
                onclick="plusSlides(1)"
                class="next arrow-right"
              >
                <i
                  class="products-arrows fa-solid fa-chevron-right text-white bg-slate w-10 h-10 flex flex-col justify-center items-center rounded-full"
                ></i>
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
            <div
              class="products-slide h-full w-full flex-col lg:flex-row items-center p-10 gap-y-5"
            >
              <div class="product-image-container w-2/6 p-8">

                <img
                  class="w-full h-full"
                  src="<?php echo $productImage ?>"
                  alt=""
                />
              </div>

              <div
                class="products-slide-content w-full lg:w-4/6 text-slate text-center lg:text-left lg:p-6"
              >
                <h2 class="font-primaryBold text-2xl md:text-3xl lg:text-4xl">
                   <?php echo the_title(); ?>
                </h2>
                <p class="mt-4 text-primary text-base md:text-lg">
                   <?php echo $productDescription; ?>
                </p>
                
                <div
                  class="product-content-bottom-images flex flex-row justify-between items-center w-full mt-4"
                >
                  <div class="yum-doodle">
                    <img
                      class="w-3/4"
                      src="<?php echo get_template_directory_uri() ?>/images/yum-doodle.png"
                      alt=""
                    />
                  </div>
                  <div class="pigs">
                    <img
                      class="w-3/4"
                      src="<?php echo get_template_directory_uri() ?>/images/two-piglets.png"
                      alt=""
                    />
                  </div>
                </div>
              </div>
         
            <!--End of slider -->
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
              while($loop->have_posts()): $loop->the_post();      
              $productImage = get_field('product_image');
              $productDescription = get_field('product_description');
              $productColor = get_field('product_colour');
            ?>
            <div id="thumbnail" class="products-thumbnail <?php echo $productColor ?>">
              <img
                class="lg:w-3/4 object-cover drop-shadow-xl"
                 src="<?php echo $productImage ?>"
                alt=""
              />
            </div>
            <?php
              endwhile;
              wp_reset_query();
            ?>
          </div>

        </div>
          <!-- End of Inner Container -->
        </div>
        <!-- End of Hero Container -->
      </section>