<!--Hero Slider  -->
<section class="hero-slider-container w-full h-full relative z-10">
    <div class="inner-container w-full h-full">
        <div class="slider h-full w-full">
            <div class="slider-arrows flex flex-row justify-between z-10">
                <div id="prev" class="prev arrow-left">
                    <i
                        class="fa-solid fa-chevron-left text-white bg-slate w-10 h-10 flex flex-col justify-center items-center rounded-full"></i>
                </div>
                <div id="next" class="next arrow-right">
                    <i
                        class="fa-solid fa-chevron-right text-white bg-slate w-10 h-10 flex flex-col justify-center items-center rounded-full"></i>
                </div>
            </div>

            <!-- Slide  -->
            <?php
              $silderOne = get_field('slider_one'); //  is your parent group
              $slideImage = $silderOne['slider_image']; //  is your child group 
              $slideTitle = $silderOne['slider_title']; //  is your child group 
              $slideContent = $silderOne['slider_description']; //  is your child group 
              $slideBackgroundColor = $silderOne['slider_content_background']; //  is your child group 
            ?>
            <?php if( $slideImage && $slideTitle) : ?>
            <div class="slide h-full w-full absolute flex flex-col lg:flex-row">

                <?php if($slideImage) : ?>
                <img class="slide-image lg:w-3/4 h-full object-cover" src="<?php echo esc_url($slideImage)?>" alt="" />
                <?php endif; ?>
                <div class="slide-content w-full p-4  <?php echo $slideBackgroundColor ?> text-white lg:w-1/4 lg:p-6">
                    <h2 class="font-primaryBold text-xl md:text-2xl lg:text-3xl">
                        <?php echo  $slideTitle ?>
                    </h2>
                    <p class="mt-2 text-primary text-base md:text-lg">
                        <?php echo  $slideContent ?>
                    </p>
                </div>
            </div>
            <?php else : ?>
            <?php if($slideImage) : ?>
            <div class="slide h-full w-full absolute flex flex-col lg:flex-row">
                <img class="w-full h-full object-cover" src="<?php echo esc_url($slideImage)?>" alt="" />
            </div>
            <?php endif; ?>
            <?php endif; ?>

            <!-- Slide  -->
            <?php
              $silderTwo = get_field('slider_two'); //  is your parent group
              $slideImage = $silderTwo['slider_image']; //  is your child group 
              $slideTitle = $silderTwo['slider_title']; //  is your child group 
              $slideContent = $silderTwo['slider_description']; //  is your child group 
              $slideBackgroundColor = $silderTwo['slider_content_background']; //  is your child group 
            ?>
            <?php if(  $slideImage && $slideTitle) : ?>
            <div class="slide h-full w-full absolute flex flex-col lg:flex-row">

                <?php if($slideImage) : ?>
                <img class="slide-image lg:w-3/4 h-full object-cover" src="<?php echo esc_url($slideImage)?>" alt="" />
                <?php endif; ?>
                <div class="slide-content w-full p-4  <?php echo $slideBackgroundColor ?> text-white lg:w-1/4 lg:p-6">
                    <h2 class="font-primaryBold text-xl md:text-2xl lg:text-3xl">
                        <?php echo  $slideTitle ?>
                    </h2>
                    <p class="mt-2 text-primary text-base md:text-lg">
                        <?php echo  $slideContent ?>
                    </p>
                </div>
            </div>
            <?php else : ?>
            <?php if($slideImage) : ?>
            <div class="slide h-full w-full absolute flex flex-col lg:flex-row">
                <img class="w-full h-full object-cover" src="<?php echo esc_url($slideImage)?>" alt="" />
            </div>
            <?php endif; ?>
            <?php endif; ?>



            <!-- Slide  -->
            <?php
              $silderThree = get_field('slider_three'); //  is your parent group
              $slideImage = $silderThree['slider_image']; //  is your child group 
              $slideTitle = $silderThree['slider_title']; //  is your child group 
              $slideContent = $silderThree['slider_description']; //  is your child group 
              $slideBackgroundColor = $silderThree['slider_content_background']; //  is your child group 
            ?>
            <?php if( $slideImage && $slideTitle) : ?>
            <div class="slide h-full w-full absolute flex flex-col lg:flex-row">

                <?php if($slideImage) : ?>
                <img class="slide-image lg:w-3/4 h-full object-cover" src="<?php echo esc_url($slideImage)?>" alt="" />
                <?php endif; ?>
                <div class="slide-content w-full p-4  <?php echo $slideBackgroundColor ?> text-white lg:w-1/4 lg:p-6">
                    <h2 class="font-primaryBold text-xl md:text-2xl lg:text-3xl">
                        <?php echo  $slideTitle ?>
                    </h2>
                    <p class="mt-2 text-primary text-base md:text-lg">
                        <?php echo  $slideContent ?>
                    </p>
                </div>
            </div>
            <?php else : ?>
            <?php if($slideImage) : ?>
            <div class="slide h-full w-full absolute flex flex-col lg:flex-row">
                <img class="w-full h-full object-cover" src="<?php echo esc_url($slideImage)?>" alt="" />
            </div>
            <?php endif; ?>
            <?php endif; ?>

            <!-- Slide  -->
            <?php
              $silderFour = get_field('slider_four'); //  is your parent group
              $slideImage = $silderFour['slider_image']; //  is your child group 
              $slideTitle = $silderFour['slider_title']; //  is your child group 
              $slideContent = $silderFour['slider_description']; //  is your child group 
              $slideBackgroundColor = $silderFour['slider_content_background']; //  is your child group 
            ?>
            <?php if(  $slideImage && $slideTitle) : ?>
            <div class="slide h-full w-full absolute flex flex-col lg:flex-row">

                <?php if($slideImage) : ?>
                <img class="slide-image lg:w-3/4 h-full object-cover" src="<?php echo esc_url($slideImage)?>" alt="" />
                <?php endif; ?>
                <div class="slide-content w-full p-4  <?php echo $slideBackgroundColor ?> text-white lg:w-1/4 lg:p-6">
                    <h2 class="font-primaryBold text-xl md:text-2xl lg:text-3xl">
                        <?php echo  $slideTitle ?>
                    </h2>
                    <p class="mt-2 text-primary text-base md:text-lg">
                        <?php echo  $slideContent ?>
                    </p>
                </div>
            </div>
            <?php else : ?>
            <?php if($slideImage) : ?>
            <div class="slide h-full w-full absolute flex flex-col lg:flex-row">
                <img class="w-full h-full object-cover" src="<?php echo esc_url($slideImage)?>" alt="" />
            </div>
            <?php endif; ?>
            <?php endif; ?>

            <!-- Slide  -->
            <?php
              $silderFive = get_field('slider_five'); //  is your parent group
              $slideImage = $silderFive['slider_image']; //  is your child group 
              $slideTitle = $silderFive['slider_title']; //  is your child group 
              $slideContent = $silderFive['slider_description']; //  is your child group 
              $slideBackgroundColor = $silderFive['slider_content_background']; //  is your child group 
            ?>
            <?php if(  $slideImage && $slideTitle) : ?>
            <div class="slide h-full w-full absolute flex flex-col lg:flex-row">

                <?php if($slideImage) : ?>
                <img class="slide-image lg:w-3/4 h-full object-cover" src="<?php echo esc_url($slideImage)?>" alt="" />
                <?php endif; ?>
                <div class="slide-content w-full p-4  <?php echo $slideBackgroundColor ?> text-white lg:w-1/4 lg:p-6">
                    <h2 class="font-primaryBold text-xl md:text-2xl lg:text-3xl">
                        <?php echo  $slideTitle ?>
                    </h2>
                    <p class="mt-2 text-primary text-base md:text-lg">
                        <?php echo  $slideContent ?>
                    </p>
                </div>
            </div>
            <?php else : ?>
            <?php if($slideImage) : ?>
            <div class="slide h-full w-full absolute flex flex-col lg:flex-row">
                <img class="w-full h-full object-cover" src="<?php echo esc_url($slideImage)?>" alt="" />
            </div>
            <?php endif; ?>
            <?php endif; ?>


            <!-- Slide  -->
            <?php
              $silderSix = get_field('slider_six'); //  is your parent group
              $slideImage = $silderSix['slider_image']; //  is your child group 
              $slideTitle = $silderSix['slider_title']; //  is your child group 
              $slideContent = $silderSix['slider_description']; //  is your child group 
              $slideBackgroundColor = $silderSix['slider_content_background']; //  is your child group 
            ?>
            <?php if( $slideImage && $slideTitle) : ?>
            <div class="slide h-full w-full absolute flex flex-col lg:flex-row">

                <?php if($slideImage) : ?>
                <img class="slide-image lg:w-3/4 h-full object-cover" src="<?php echo esc_url($slideImage)?>" alt="" />
                <?php endif; ?>
                <div class="slide-content w-full p-4  <?php echo $slideBackgroundColor ?> text-white lg:w-1/4 lg:p-6">
                    <h2 class="font-primaryBold text-xl md:text-2xl lg:text-3xl">
                        <?php echo  $slideTitle ?>
                    </h2>
                    <p class="mt-2 text-primary text-base md:text-lg">
                        <?php echo  $slideContent ?>
                    </p>
                </div>
            </div>
            <?php else : ?>
            <?php if($slideImage) : ?>
            <div class="slide h-full w-full absolute flex flex-col lg:flex-row">
                <img class="w-full h-full object-cover" src="<?php echo esc_url($slideImage)?>" alt="" />
            </div>
            <?php endif; ?>
            <?php endif; ?>

            <!-- Slide  -->
            <?php
              $silderSeven = get_field('slider_seven'); //  is your parent group
              $slideImage = $silderSeven['slider_image']; //  is your child group 
              $slideTitle = $silderSeven['slider_title']; //  is your child group 
              $slideContent = $silderSeven['slider_description']; //  is your child group 
              $slideBackgroundColor = $silderSeven['slider_content_background']; //  is your child group 
            ?>
            <?php if(  $slideImage && $slideTitle) : ?>
            <div class="slide h-full w-full absolute flex flex-col lg:flex-row">

                <?php if($slideImage) : ?>
                <img class="slide-image lg:w-3/4 h-full object-cover" src="<?php echo esc_url($slideImage)?>" alt="" />
                <?php endif; ?>
                <div class="slide-content w-full p-4  <?php echo $slideBackgroundColor ?> text-white lg:w-1/4 lg:p-6">
                    <h2 class="font-primaryBold text-xl md:text-2xl lg:text-3xl">
                        <?php echo  $slideTitle ?>
                    </h2>
                    <p class="mt-2 text-primary text-base md:text-lg">
                        <?php echo  $slideContent ?>
                    </p>
                </div>
            </div>
            <?php else : ?>
            <?php if($slideImage) : ?>
            <div class="slide h-full w-full absolute flex flex-col lg:flex-row">
                <img class="w-full h-full object-cover" src="<?php echo esc_url($slideImage)?>" alt="" />
            </div>
            <?php endif; ?>
            <?php endif; ?>

            <!-- Slide  -->
            <?php
              $silderEight = get_field('slider_eight'); //  is your parent group
              $slideImage = $silderEight['slider_image']; //  is your child group 
              $slideTitle = $silderEight['slider_title']; //  is your child group 
              $slideContent = $silderEight['slider_description']; //  is your child group 
              $slideBackgroundColor = $silderEight['slider_content_background']; //  is your child group 
            ?>
            <?php if( $slideImage && $slideTitle) : ?>
            <div class="slide h-full w-full absolute flex flex-col lg:flex-row">
                <?php if($slideImage) : ?>
                <img class="slide-image lg:w-3/4 h-full object-cover" src="<?php echo esc_url($slideImage)?>" alt="" />
                <?php endif; ?>
                <div class="slide-content w-full p-4  <?php echo $slideBackgroundColor ?> text-white lg:w-1/4 lg:p-6">
                    <h2 class="font-primaryBold text-xl md:text-2xl lg:text-3xl">
                        <?php echo  $slideTitle ?>
                    </h2>
                    <p class="mt-2 text-primary text-base md:text-lg">
                        <?php echo  $slideContent ?>
                    </p>
                </div>
            </div>
            <?php else : ?>
            <?php if($slideImage) : ?>
            <div class="slide h-full w-full absolute flex flex-col lg:flex-row">
                <img class="w-full h-full object-cover" src="<?php echo esc_url($slideImage)?>" alt="" />
            </div>
            <?php endif; ?>
            <?php endif; ?>

        </div>
        <!-- End of Inner Container -->
    </div>
    <!-- End of Hero Container -->
</section>