
<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <!-- Meta Content -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <?php wp_head(); ?>

</head>


<body>
    <div class="main-container w-full h-full overflow-hidden">
    <header id="header" class="main-header bg-lincolnshireSky pt-4 lg:pb-24">
        <div
          class="logo-container flex flex-row justify-center items-center relative z-10"
        >

        <a id="logo" href="<?php echo esc_url( home_url( '/' ) ); ?>"
                        title="<?php echo get_theme_mod( 'lpc_company_name' ); ?>">
                        <img class="w-40 md:w-52 lg:w-64" src="<?php echo get_theme_mod( 'lpc_logo' ); ?>"
                            alt="<?php echo get_theme_mod( 'lpc_company_name' ); ?>_logo" />
        </a>

        </div>
        <div class="inner-container">
          <nav
            class="mt-4 h-12 px-12 font-secondary bg-slate text-white list-none flex flex-row justify-between items-center relative z-10"
          >
            <!-- desktop links -->

            <?php

              $defaults = array(
              'container' => 'ul',
              'theme_location' => 'main-menu',
              'menu_class' => 'nav-links lg:flex flex-row space-x-8 items-center h-full hidden',  
              
              'add_li_class'  => 'nav-link uppercase flex flex-row items-center text-lg'
              );

              wp_nav_menu( $defaults );

              ?>

            
            <!-- social links -->

            <?php dynamic_sidebar( 'social_icons' ) ?>
 
            <!-- Mobile links -->
            <div
              id="humburger-menu"
              onclick="openMenu()"
              class="mobile-menu lg:hidden"
            >
            <div class="icon"></div>
            </div>
            <div class="mobile-nav-container lg:hidden fixed z-50">
              <div
                class="mobile-nav-links flex flex-col items-start pl-5 pt-14 h-full space-y-10 text-left"
              >
                       <?php

                          $defaults = array(
                          'container' => 'ul',
                          'theme_location' => 'main-menu',
                          'menu_class' => 'mobile-nav-links flex flex-col items-start pl-5 pt-14 h-full space-y-10 text-left',  

                          'add_li_class'  => '"mobile-nav-link uppercase flex flex-row items-center'
                          );

                          wp_nav_menu( $defaults );

                          ?>

              
              </div>    
            </div>
          </nav>
        </div>
      </header>

 