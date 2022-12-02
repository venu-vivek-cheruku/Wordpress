<?php get_header(); ?>
<?php
	//Custom Fields
 
  $pageFeaturedImage = get_the_post_thumbnail_url();
  $bodycontent= get_the_content();
  $heroContentExcerpt= get_the_excerpt();
  $contactSection = get_field('contact_section');
  $shortcode = get_field('short_code');
 
?>


     <!-- Hero Container  -->

     <?php get_template_part( 'content', 'mainSilder' ); ?>

      <!-- Introduction Container  -->

      <section
        class="section-starts intrdoduction-container mx-auto max-w-2xl text-slate"
      >
        <div class="inner-container">
          <h1
            class="font-primaryBold text-2xl text-center md:text-3xl lg:text-4xl"
          >
            Welcome to Lincolnshire Pork Co,
          </h1>
          <p
            class="font-primary text-base text-center mt-2 md:text-lg md:mt-4 lg:text-xl"
          >
            our British family business on a mission to give you responsible and
            sustainable pork products with perfect Lincolnshire provenance.
          </p>
        </div>
      </section>



      <!-- Grid Container -->

      <?php echo get_template_part('content', 'grid'); ?>


<?php get_footer(); ?>