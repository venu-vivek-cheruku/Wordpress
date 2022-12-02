
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
      <header class="main-header bg-lincolnshireSky pt-4 lg:pb-24">
        <div
          class="logo-container flex flex-row justify-center items-center relative z-10"
        >
          <img
            class="w-40 md:w-52 lg:w-64"
            src="<?php echo get_template_directory_uri(  )?>/images/site-logo.png"
            alt=""
          />
        </div>
        <div class="inner-container">
          <nav
            class="mt-4 h-12 px-12 font-secondary bg-slate text-white list-none flex flex-row justify-between items-center relative z-10"
          >
            <!-- desktop links -->
            <div
              id="nav-links"
              class="nav-links lg:flex flex-row space-x-8 items-center h-full hidden"
            >
              <li class="nav-link uppercase flex flex-row items-center">
                <a href="./pages/ourStory.html">OUR STORY</a>
              </li>
              <li class="nav-link uppercase flex flex-row items-center">
                <a href="./pages/ourProducts.html">OUR PRODUCTS</a>
              </li>
              <li class="nav-link uppercase flex flex-row items-center">
                OUR PIGS
              </li>
              <li class="nav-link uppercase flex flex-row items-center">
                OUR SUSTAINABILITY
              </li>
              <li class="nav-link uppercase flex flex-row items-center">
                <a href="../pages/ourStockists.html">OUR STOCKISTS</a>
              </li>
              <li class="nav-link uppercase flex flex-row items-center">
                <a href="../pages/joinUs.html">JOIN US</a>
              </li>
            </div>
            <!-- social links -->
            <div class="nav-social-links flex flex-row space-x-6">
              <li class="nav-social-link">
                <i class="fa-brands fa-facebook-f"></i>
              </li>
              <li class="nav-social-link">
                <i class="fa-brands fa-instagram"></i>
              </li>
              <li class="nav-social-link">
                <i class="fa-brands fa-linkedin-in"></i>
              </li>
              <li class="nav-social-link">
                <i class="fa-brands fa-twitter"></i>
              </li>
            </div>
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
                <li
                  class="mobile-nav-link uppercase flex flex-row items-center"
                >
                  OUR STORY
                </li>
                <li
                  class="mobile-nav-link uppercase flex flex-row items-center"
                >
                  OUR PRODUCTS
                </li>
                <li
                  class="mobile-nav-link uppercase flex flex-row items-center"
                >
                  OUR PIGS
                </li>
                <li
                  class="mobile-nav-link uppercase flex flex-row items-center"
                >
                  OUR SUSTAINABILITY
                </li>
                <li
                  class="mobile-nav-link uppercase flex flex-row items-center"
                >
                  OUR STOCKISTS
                </li>
                <li
                  class="mobile-nav-link uppercase flex flex-row items-center"
                >
                  JOIN US
                </li>
              </div>
            </div>
          </nav>
        </div>
      </header>

 