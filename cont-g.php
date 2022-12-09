<?php
	//Custom Fields
  $gridBoxOne = get_field('grid_box_one');
  $gridBoxTwo = get_field('grid_box_two');
  $gridBoxThree = get_field('grid_box_three');
  $gridBoxFour = get_field('grid_box_four');
  $gridBoxFive = get_field('grid_box_five');
  $gridBoxSix = get_field('grid_box_six');
  $gridBoxSeven = get_field('grid_box_seven');
  $gridBoxEight = get_field('grid_box_eight');


?>

<section
        class="grid-container mt-10 overflow-hidden w-full h-full"
      >
        <div class="inner-container overflow-hidden">
          <div
            class="grid-items grid grid-cols-2 gap-2 w-full h-full lg:grid-cols-3 lg:gap-4 overflow-hidden" 
          >

           <!-- Grid Item -->
           <?php
          
              $gridBoxOne = get_field('grid_box_one'); //  is your parent group
              $grid_background = $gridBoxOne['grid_background']; //  is your child group 
              $grid_title_field = $gridBoxOne['grid_title_field']; //  is your child group 
              $grid_background_image = $grid_background['grid_background_image']['url']; //  is your child group 
          ?>
           <?php if( $grid_background['grid_background_image'] OR $grid_background['grid_background_colour'] !=='none') : ?>
            <div id="gridOne" class="grid-item col-span-2 w-full h-52 relative md:h-80 lg:h-94">
          
          
            <div
                class="grid-item-content absolute bottom-0 z-10 p-4 text-white lg:max-w-2xl"
              >
                <h2 class="text-xl font-primaryBold md:text-2xl lg:text-4xl">
                   <?php echo $grid_title_field['grid_key_point']; // is a subfield of your child group ?>
                </h2>
                <h2 class="text-xl font-primaryBold md:text-2xl lg:text-4xl">
                   <?php echo $grid_title_field['grid_title']; // is a subfield of your child group ?>
                </h2>
                <p
                  class="text-sm font-primary mt-1 md:text-lg lg:text-xl lg:mt-2"
                >
                <?php echo $gridBoxOne['grid_content']; // is a subfield of your child group ?>
                </p>
              </div>
            <style type="text/css">
            #gridOne {
              background-color:<?php echo esc_attr($grid_background['grid_background_colour']) ?>;
            }
           </style>
            </div>
            <?php endif; ?>

            <!-- Grid Item -->
           
            <?php if( $grid_background['grid_background_image'] OR $grid_background['grid_background_colour'] !=='none') : ?>
            <div  id="gridTwo" class="grid-item w-full h-52 relative md:h-80 lg:h-94" >
         
           <?php if($grid_background['grid_background_image']['url']) : ?>
            <img class="w-full h-full object-cover" src="<?php echo esc_url($grid_background['grid_background_image']['url'])?>" alt="" />
            <?php endif; ?>

              
              <style type="text/css">
            #gridTwo {
              background-color:<?php echo esc_attr($grid_background['grid_background_colour']) ?>;
            }
           </style>
            </div>
            <?php endif; ?>
                    
            <!-- Grid Item -->
            <?php
              $gridBoxThree = get_field('grid_box_three'); //  is your parent group
              $grid_title_field = $gridBoxThree['grid_title_field']; 
              $grid_background = $gridBoxThree['grid_background']; //  is your child group 
            ?>
            <?php if( $grid_background['grid_background_image'] OR $grid_background['grid_background_colour'] !=='none') : ?>
            <div  id="gridThree" class="grid-item w-full h-52 relative md:h-80 lg:h-94" >
          
           <?php if($grid_background['grid_background_image']) : ?>
            <img class="w-full h-full object-cover" src="<?php echo esc_url($grid_background['grid_background_image'])?>" alt="" />
            <?php endif; ?>

              <div
                class="grid-item-content absolute bottom-0 z-10 p-4 text-white lg:max-w-sm"
              >
              <h2 class="text-xl font-primaryBold md:text-2xl lg:text-4xl">
                   <?php echo $grid_title_field['grid_key_point']; // is a subfield of your child group ?>
                </h2>
                <h2 class="text-xl font-primaryBold md:text-2xl lg:text-4xl">
                   <?php echo $grid_title_field['grid_title']; // is a subfield of your child group ?>
                </h2>
                <p
                  class="text-sm font-primary mt-1 md:text-lg lg:text-xl lg:mt-2"
                >
                <?php echo $gridBoxThree['grid_content']; // is a subfield of your child group ?>
                </p>
              </div>
              <style type="text/css">
            #gridThree {
              background-color:<?php echo esc_attr($grid_background['grid_background_colour']) ?>;
            }
           </style>
            </div>
            <?php endif; ?>

          <!-- Grid Item -->

          <?php
              $gridBoxFour = get_field('grid_box_four'); //  is your parent group
              $grid_title_field = $gridBoxFour['grid_title_field']; 
              $grid_background = $gridBoxFour['grid_background']; //  is your child group 
            ?>
          <?php if( $grid_background['grid_background_image'] OR $grid_background['grid_background_colour'] !=='none') : ?>

         <div  id="gridFour" class="grid-item w-full h-52 col-span-2 relative md:h-80 lg:h-94" >
               <?php if($grid_background['grid_background_image']) : ?>
            <img class="w-full h-full object-cover" src="<?php echo esc_url($grid_background['grid_background_image'])?>" alt="" />
            <?php endif; ?>

              <div
                class="grid-item-content absolute bottom-0 z-10 p-4 text-white lg:max-w-2xl"
              >
              <h2 class="text-xl font-primaryBold md:text-2xl lg:text-4xl">
                   <?php echo $grid_title_field['grid_key_point']; // is a subfield of your child group ?>
                </h2>
                <h2 class="text-xl font-primaryBold md:text-2xl lg:text-4xl">
                   <?php echo $grid_title_field['grid_title']; // is a subfield of your child group ?>
                </h2>
                <p
                  class="text-sm font-primary mt-1 md:text-lg lg:text-xl lg:mt-2"
                >
                <?php echo $gridBoxFour['grid_content']; // is a subfield of your child group ?>
                </p>
              </div>
              <style type="text/css">
            #gridFour {
              background-color:<?php echo esc_attr($grid_background['grid_background_colour']) ?>;
            }
           </style>
            </div>
            <?php endif; ?>

          <!-- Grid Item -->

          <?php
              $gridBoxFive = get_field('grid_box_five'); //  is your parent group
              $grid_title_field = $gridBoxFive['grid_title_field']; 
              $grid_background = $gridBoxFive['grid_background']; //  is your child group 
            ?>
          <?php if( $grid_background['grid_background_image'] OR $grid_background['grid_background_colour'] !=='none') : ?>

         <div  id="gridFive" class="grid-item w-full col-span-2 h-52 relative md:h-80 lg:h-94" >
          
               <?php if($grid_background['grid_background_image']) : ?>
            <img class="w-full h-full object-cover" src="<?php echo esc_url($grid_background['grid_background_image'])?>" alt="" />
            <?php endif; ?>

              <div
                class="grid-item-content absolute bottom-0 z-10 p-4 text-white lg:max-w-2xl"
              >
              <h2 class="text-xl font-primaryBold md:text-2xl lg:text-4xl">
                   <?php echo $grid_title_field['grid_key_point']; // is a subfield of your child group ?>
                </h2>
                <h2 class="text-xl font-primaryBold md:text-2xl lg:text-4xl">
                   <?php echo $grid_title_field['grid_title']; // is a subfield of your child group ?>
                </h2>
                <p
                  class="text-sm font-primary mt-1 md:text-lg lg:text-xl lg:mt-2"
                >
                <?php echo $gridBoxFive['grid_content']; // is a subfield of your child group ?>
                </p>
              </div>
              <style type="text/css">
            #gridFive {
              background-color:<?php echo esc_attr($grid_background['grid_background_colour']) ?>;
            }
           </style>
            </div>
            <?php endif; ?>

          <!-- Grid Item -->
          
          <?php
              $gridBoxSix = get_field('grid_box_six'); //  is your parent group
              $grid_title_field = $gridBoxSix['grid_title_field']; 
              $grid_background = $gridBoxSix['grid_background']; //  is your child group 
            ?>
        <?php if( $grid_background['grid_background_image'] OR $grid_background['grid_background_colour'] !=='none') : ?>
         <div  id="gridSix" class="grid-item w-full h-52 relative md:h-80 lg:h-94" >
       
         <?php if($grid_background['grid_background_image']) : ?>
            <img class="w-full h-full object-cover" src="<?php echo esc_url($grid_background['grid_background_image'])?>" alt="" />
            <?php endif; ?>

              <div
                class="grid-item-content absolute bottom-0 z-10 p-4 text-white lg:max-w-2xl"
              >
              <h2 class="text-xl font-primaryBold md:text-2xl lg:text-4xl">
                   <?php echo $grid_title_field['grid_key_point']; // is a subfield of your child group ?>
                </h2>
                <h2 class="text-xl font-primaryBold md:text-2xl lg:text-4xl">
                   <?php echo $grid_title_field['grid_title']; // is a subfield of your child group ?>
                </h2>
                <p
                  class="text-sm font-primary mt-1 md:text-lg lg:text-xl lg:mt-2"
                >
                <?php echo $gridBoxSix['grid_content']; // is a subfield of your child group ?>
                </p>
              </div>
              <style type="text/css">
            #gridSix {
              background-color:<?php echo esc_attr($grid_background['grid_background_colour']) ?>;
            }
           </style>
            </div>
            <?php endif; ?>


          <!-- Grid Item -->
          <?php
              $gridBoxSeven = get_field('grid_box_seven'); //  is your parent group
              $grid_title_field = $gridBoxSeven['grid_title_field']; 
              $grid_background =  $gridBoxSeven['grid_background']; //  is your child group 
            ?>
          <?php if( $grid_background['grid_background_image'] OR $grid_background['grid_background_colour'] !=='none') : ?>

         <div  id="gridSeven" class="grid-item w-full h-52 relative md:h-80 lg:h-94" >
         
               <?php if($grid_background['grid_background_image']) : ?>
            <img class="w-full h-full object-cover" src="<?php echo esc_url($grid_background['grid_background_image'])?>" alt="" />
            <?php endif; ?>

              <div
                class="grid-item-content absolute bottom-0 z-10 p-4 text-white lg:max-w-2xl"
              >
              <h2 class="text-xl font-primaryBold md:text-2xl lg:text-4xl">
                   <?php echo $grid_title_field['grid_key_point']; // is a subfield of your child group ?>
                </h2>
                <h2 class="text-xl font-primaryBold md:text-2xl lg:text-4xl">
                   <?php echo $grid_title_field['grid_title']; // is a subfield of your child group ?>
                </h2>
                <p
                  class="text-sm font-primary mt-1 md:text-lg lg:text-xl lg:mt-2"
                >
                <?php echo $gridBoxSeven['grid_content']; // is a subfield of your child group ?>
                </p>
              </div>
              <style type="text/css">
            #gridSeven {
              background-color:<?php echo esc_attr($grid_background['grid_background_colour']) ?>;
            }
           </style>
            </div>
            <?php endif; ?>

          <!-- Grid Item -->

          <?php
              $gridBoxEight = get_field('grid_box_eight'); //  is your parent group
              $grid_title_field = $gridBoxEight['grid_title_field']; 
              $grid_background = $gridBoxEight['grid_background']; //  is your child group 
            ?>
          <?php if( $grid_background['grid_background_image'] OR $grid_background['grid_background_colour'] !=='none') : ?>

         <div  id="gridEight" class="grid-item w-full h-52 col-span-2 relative md:h-80 lg:h-94" >
           
               <?php if($grid_background['grid_background_image']) : ?>
            <img class="w-full h-full object-cover" src="<?php echo esc_url($grid_background['grid_background_image'])?>" alt="" />
            <?php endif; ?>

              <div
                class="grid-item-content absolute bottom-0 z-10 p-4 text-white lg:max-w-2xl"
              >
              <h2 class="text-xl font-primaryBold md:text-2xl lg:text-4xl">
                   <?php echo $grid_title_field['grid_key_point']; // is a subfield of your child group ?>
                </h2>
                <h2 class="text-xl font-primaryBold md:text-2xl lg:text-4xl">
                   <?php echo $grid_title_field['grid_title']; // is a subfield of your child group ?>
                </h2>
                <p
                  class="text-sm font-primary mt-1 md:text-lg lg:text-xl lg:mt-2"
                >
                <?php echo $gridBoxEight['grid_content']; // is a subfield of your child group ?>
                </p>
              </div>
              <style type="text/css">
            #gridEight {
              background-color:<?php echo esc_attr($grid_background['grid_background_colour']) ?>;
            }
           </style>
            </div>

            <?php endif; ?>

            

            
          </div>
        </div>
      </section>