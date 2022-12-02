<?php
	//Custom Fields
  $benefitMainTitle = get_field('title');
  $benefitSubTitle = get_field('sub_title');
  $benefitOneImage = get_field('benefit_one');
  $benefitOneTitle = get_field('benefit_one_title');
  $benefitOneDescription = get_field('benefit_one_description');
  $benefitTwoImage = get_field('benefit_two');
  $benefitTwoTitle = get_field('benefit_two_title');
  $benefitTwoDescription = get_field('benefit_two_description');
  $benefitThreeImage = get_field('benefit_three');
  $benefitThreetitle = get_field('benefit_three_title');
  $benefitThreeDescription = get_field('benefit_three_description');
?>

<section
        class="grid-container section-starts overflow-hidden w-full h-full"
      >
        <div class="inner-container overflow-hidden">
          <div
            class="grid-items grid grid-cols-2 gap-2 w-full h-full lg:grid-cols-3 lg:gap-4 overflow-hidden"
          >
        
            <div class="grid-item col-span-2 w-full h-52 relative md:h-80 lg:h-full">
              <img
                class="w-full h-full object-cover"
                src="<?php echo get_template_directory_uri(  )?>/images/sausages-image.jpg"
                alt=""
              />
            </div>
            <div class="grid-item w-full h-52 relative md:h-80 lg:h-full">
              <img
                class="w-full h-full object-cover"
                src="<?php echo get_template_directory_uri(  )?>/images/family-values-image.png"
                alt=""
              />
              <div
                class="grid-item-content absolute bottom-0 z-10 p-4 text-white lg:max-w-sm"
              >
                <h2 class="text-xl font-primaryBold md:text-2xl lg:text-4xl">
                  Family Values
                </h2>
                <p
                  class="text-sm font-primary mt-1 md:text-lg lg:text-xl lg:mt-2"
                >
                  All our pigs have a health plan with a personal vet
                </p>
              </div>
            </div>
            <div class="grid-item w-full h-52 relative md:h-80 lg:h-full">
              <img
                class="w-full h-full object-cover"
                src="<?php echo get_template_directory_uri(  )?>/images/renewable-energy-image.png"
                alt=""
              />

              <div
                class="grid-item-content absolute top-0 z-10 p-4 text-slate lg:max-w-sm"
              >
                <h2 class="text-xl font-primaryBold md:text-2xl lg:text-4xl">
                  Renewable Energy
                </h2>
                <p
                  class="text-sm mt-1 font-primary md:text-lg lg:text-xl lg:mt-2"
                >
                  our production facilities and coldstores are all powered by
                  100% renewable grid electricity.
                </p>
              </div>
            </div>
            <div
              class="grid-item col-span-2 bg-slate w-full h-52 relative md:h-80 lg:h-full"
            >
              <div
                class="grid-item-content absolute top-0 z-10 p-4 text-white lg:max-w-xl"
              >
                <h2 class="text-xl font-primaryBold md:text-2xl lg:text-4xl">
                  Food from the heart of Lincolnshire
                </h2>
                <p
                  class="text-sm font-primary mt-2 md:text-lg lg:text-xl lg:mt-3"
                >
                  We have always had a passion for delivering great food and are
                  known for our fantastic ethically created sausages. Since all
                  of our food comes from the heart of Lincolnshire including the
                  food our pigs eat, we felt we needed a brand that really
                  captured the Lincolnshire provinence that we are so proud of
                  and so Lincolnshire Pork Co. was created.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>