<?php 

 $bannerButton = get_field('banner_button');
 $subtitle = get_field('subtitle');
?>

     <!-- Hero Container  -->
     <section class="hero-slider-container w-full h-full relative z-10">
        <div class="inner-container w-full h-full">
          <div class="slider h-full w-full">
            <div class="slider-arrows flex flex-row justify-between z-10">
              <div id="prev" class="arrow-left">
                <i
                  class="fa-solid fa-chevron-left text-white bg-slate w-10 h-10 flex flex-col justify-center items-center rounded-full"
                ></i>
              </div>
              <div id="next" class="arrow-right">
                <i
                  class="fa-solid fa-chevron-right text-white bg-slate w-10 h-10 flex flex-col justify-center items-center rounded-full"
                ></i>
              </div>
            </div>
            <div class="slide h-full w-full absolute">
              <img
                class="w-full h-full object-cover"
                src="<?php echo get_template_directory_uri(  )?>/images/header-image.jpg"
                alt=""
              />
            </div>
            <div class="slide h-full w-full absolute">
              <img
                class="w-full h-full object-cover"
                src="<?php echo get_template_directory_uri(  )?>/images/from-family-beginnings.jpg"
                alt=""
              />
            </div>
            <div class="slide h-full w-full absolute">
              <img
                class="w-full h-full object-cover"
                src="<?php echo get_template_directory_uri(  )?>/images/from-family-beginnings.jpg"
                alt=""
              />
            </div>
            <div class="slide h-full w-full absolute">
              <img
                class="w-full h-full object-cover"
                src="<?php echo get_template_directory_uri(  )?>/images/header-image.jpg"
                alt=""
              />
            </div>
          </div>
          <!-- End of Inner Container -->
        </div>
        <!-- End of Hero Container -->
      </section>