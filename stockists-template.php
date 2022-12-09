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
          <div class="main-heading text-center mt-20">
            <h1
              class="text-2xl text-slate font-primaryBold md:text-3xl lg:text-4xl"
            >
             <?php echo $headerText ?>
            </h1>
            <p class="text-base text-slate font-primary lg:text-lg mt-2">
             <?php echo $subHeaderText ?>
            </p>
          </div>

          <div class="alphabetical-order mt-10 w-full">
           
            <div id="main-area">
		    <div class="wrapper">
			<div class="flex flex-col">
			
			<?php 
			$filter_args = array
			(
				'post_type' => 'stockists',
				'posts_per_page' => -1,
				'orderby' => 'title',
				'order' => 'ASC',
			);
			$tutorial_posts = new WP_Query($filter_args);
			$posts_array = array();

			// Get all posts
			while ( $tutorial_posts->have_posts() ) : $tutorial_posts->the_post(); 
				$posts_array[] = strtolower(get_the_title()[0]);
			endwhile; ?>
				
				
			<?php // ?>
			<ul id="a-z">
				<?php 
				$alphabet_array = range('a', 'z');
				$number_array = range(0, 9); 
				//$build_li = '';
				
				// Check if number
				if(count(array_intersect($posts_array, $number_array)) > 0){
					echo "<li class=\"active\" data-letter=\"#\">#</li>";
				}
				else 
				{
					echo "<li data-letter=\"#\">#</li>";
				}
				//echo "<li $build_li>" . '#' . '</li>';
				
				foreach ($alphabet_array as $letter)
				{
					if (in_array($letter, $posts_array)) 
					{	
						echo "<li class=\"active\" data-letter=".$letter.">$letter</li>";
					}
					else 
					{
						echo "<li data-letter=".$letter.">$letter</li>";
					}
				} 
				?>
			</ul>
				
			<div id="title-status">
				<p>Showing: <span></span></p>
				<p id="show-all">Show all Stockists</p>
			</div>
				
			<?php 
			$i = -1;
			?>
				
			<ul id="posts-results" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
			<?php while ( $tutorial_posts->have_posts() ) : $tutorial_posts->the_post(); 
				$i++;
				
				if(is_numeric($posts_array[$i])) 
				{
					echo "<li data-letter=\"#\">";
						echo "<a href=".get_the_permalink().">";
							echo get_the_title();
						echo "</a>";
					echo "</li>";
				}
				else 
				{
					echo "<li data-letter=".$posts_array[$i].">";
						// echo "<a href=".get_the_permalink().">";
						// 	echo get_the_title();
						// echo "</a>"; ?>
			
				<div
              
                class="flex flex-col items-center bg-gray-100 w-full p-2 lg:w-52 h-32"
              >
                <img
                  class="flex-1 object-contain"
                  src="<?php echo get_field('stockists_image') ?>"
                  alt=""
                />
                <p class="text-lg font-secondary uppercase font-normal text-center">
                   <?php echo get_the_title(); ?>
                </p>
              </div>
				
				<?php
					echo "</li>";
				} ?>
				
			<?php endwhile; ?>
			</ul>
			 
			</div>
			
		</div>
	</div>

          </div>
          <!-- End of Inner Container -->
        </div>
        <!-- End of Hero Container -->
      </section>



<?php
if($grid == 'true')
 get_template_part( 'content', 'grid' ); ?>


<script type="text/javascript"> 

jQuery(document).ready(function()
{	
	"use strict";
	
	let initial_first_letter = jQuery('#a-z li.active:eq(0)').data('letter');
	let click_first_char;
	let title_showing = jQuery('#title-status span');
	let az_li = jQuery('#a-z li');
	let title_show_all = jQuery('p#show-all');
	let posts_results_li = jQuery("#posts-results li");
	
	// Initial load
	jQuery("#posts-results li[data-letter="+initial_first_letter+"]").addClass('show');
	jQuery('az_li:eq(0)').addClass('current');
	title_showing.text(initial_first_letter);
	
	// Click A-Z menu item
	jQuery('#a-z li.active').click(function()
	{
		jQuery("#posts-results li").removeClass('show');
		click_first_char = jQuery(this).data('letter');
		jQuery('#a-z li.active').removeClass('current');
		title_showing.text(click_first_char);
		title_show_all.show();
		jQuery(this).addClass('current');
		jQuery("#posts-results li[data-letter="+click_first_char+"]").addClass('show');
	});
	
	// Show all posts
	title_show_all.click(function()
	{
		posts_results_li.addClass('show');
		title_showing.text('all');
		az_li.removeClass('current');
		jQuery(this).hide(); 
	}); 

});


</script>



<?php get_footer(); ?>