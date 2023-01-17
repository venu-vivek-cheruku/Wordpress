function openMenu() {
  const humburger = document.querySelector("#humburger-menu");
  const mobileMenu = document.querySelector(".mobile-nav-container");
  const menuLinks = document.querySelectorAll(".mobile-nav-container li ");
  humburger.classList.toggle("open");
  mobileMenu.classList.toggle("open");
  menuLinks.forEach((cl) => cl.classList.toggle("slide-in-top"));
}

//slider

var Autoplay = {
  timerId: null,
  interval: 8000,
  start: function () {
    this.timerId = setInterval(function () {
      if (slide[0] !== undefined) {
        if (nextBtn.classList.contains("disabled")) {
          currentImage = 1;
          theChecker();
        } else {
          currentImage++;
          theChecker();
        }
      }
    }, this.interval);
  },

  reset: function () {
    clearInterval(this.timerId);
    this.start();
  },
};

var autoplay = true;
var autoplayInterval = 8000;
var autoplayTimer = null;

if (autoplay) {
  Autoplay.start();
}

if (document.querySelectorAll(".slider .slide")) {
  var slide = Array.from(document.querySelectorAll(".slider .slide")),
    slideLength = slide.length,
    currentImage = 1;
}

if (document.getElementById("next")) {
  var nextBtn = document.getElementById("next");
}
if (document.getElementById("prev")) {
  var prevBtn = document.getElementById("prev");
}

if (slideLength > 0) {
  theChecker();

  nextBtn.onclick = function () {
    if (nextBtn.classList.contains("disabled")) {
      currentImage = 1;
      theChecker();
    } else {
      currentImage = currentImage + 1;
      theChecker();
    }
  };

  prevBtn.onclick = function () {
    if (prevBtn.classList.contains("disabled")) {
      currentImage++;
      theChecker();
    } else {
      currentImage = currentImage - 1;
      theChecker();
    }
  };
}

function theChecker() {
  if (autoplay) {
    Autoplay.reset();
  }
  removeAttributes();
  if (slide[0] !== undefined) {
    slide[currentImage - 1].classList.add("active");

    if (currentImage == 1) {
      prevBtn.classList.add("disabled");
    } else {
      prevBtn.classList.remove("disabled");
    }

    if (currentImage == slideLength) {
      nextBtn.classList.add("disabled");
    } else {
      nextBtn.classList.remove("disabled");
    }
  }
}
function removeAttributes() {
  slide.forEach(function (img) {
    img.classList.remove("active");
  });
}

// Play the checker function auto-matically..

// if (slideLength > 0) {
//   setInterval(function autoPlay() {
//     if (nextBtn.classList.contains("disabled")) {
//       currentImage = 1;
//       theChecker();
//     } else {
//       currentImage++;
//       theChecker();
//     }
//   }, 6000);
// }

// Gsap Animations

gsap.registerPlugin(ScrollTrigger);

ScrollTrigger.batch(".grid-item", {
  batchMax: 3,
  markers: false,
  start: "top bottom",

  onEnter: (batch) => {
    gsap.to(batch, {
      autoAlpha: 1,
      start: "top bottom",
      stagger: 0.15,
      opacity: 1,
      y: 0,
      ease: "power3",
    });
  },
});

navLinksTl = gsap.timeline({
  scrollTrigger: {
    trigger: ".main-header",
  },
});

navLinksTl.from(".nav-link", {
  x: -300,
  opacity: 0,
  stagger: {
    from: "left",
    amount: 0.25,
  },
});
navLinksTl.from("#header-social .social-icons a", {
  opacity: 0,
  stagger: {
    from: "center",
    amount: 0.15,
  },
});

const pinImage = gsap.timeline({
  scrollTrigger: {
    trigger: ".contact-form-container",
    pin: ".contact-image",
    pinSpacing: false,
    start: "top 100",
    endTrigger: ".contact-form",
    end: "bottom 300",
    markers: false,
  },
});

gsap.to(".stockist-item", {
  opacity: 1,
  scale: 1,
  stagger: {
    from: "random",
    amount: 0.25,
  },
});

//Product Slider

// Get the elements for the productSlide, thumbnails, and controls
var productSlide = document.getElementsByClassName("products-slide");
var thumbnails = document.getElementsByClassName("products-thumbnail");
var thumbnailContainer = document.getElementsByClassName(
  "products-thumbnail-container"
);
var prevButton = document.getElementById("products-prev");
var nextButton = document.getElementById("products-next");
let headerbg = document.getElementById("header");
let productsSliderArrows = document.getElementsByClassName("products-arrows");

// Set the initial index and the interval for the autoplay
var currentIndex = 0;
var autoplayInterval = setInterval(nextSlide, 12000);

// Add event listeners for the thumbnails
for (var i = 0; i < thumbnailContainer.length; i++) {
  productSlide[0].classList.add("active");
  thumbnails[0].classList.add("active");
  thumbnailContainer[i].addEventListener("click", function () {
    clearInterval(autoplayInterval);
    currentIndex = parseInt(this.getAttribute("data-value"));
    updateSlide();
  });
}
if (thumbnailContainer[0] !== undefined) {
  thumbnailContainer[0].classList.add("active");

  // Add event listeners for the controls
  prevButton.addEventListener("click", prevSlide);
  nextButton.addEventListener("click", nextSlide);
}
// Function to go to the previous productSlide
function prevSlide() {
  currentIndex--;
  if (currentIndex < 0) {
    currentIndex = thumbnails.length - 1;
  }
  updateSlide();
}

// Function to go to the next productSlide
function nextSlide() {
  currentIndex++;
  if (currentIndex >= thumbnails.length) {
    currentIndex = 0;
  }
  updateSlide();
}

// Function to update the productSlide and the thumbnails
function updateSlide() {
  for (var i = 0; i < thumbnailContainer.length; i++) {
    thumbnailContainer[i].classList.remove("active");
    productSlide[i].classList.remove("active");
  }
  if (thumbnailContainer[0] !== undefined) {
    thumbnailContainer[currentIndex].classList.add("active");
    thumbnailcolorchecker();
    productSlide[currentIndex].classList.add("active");
  }
}
function thumbnailcolorchecker() {
  const productThumbnail = document.getElementsByClassName(
    "products-thumbnail-container"
  );
  for (let i = 0; i < productThumbnail.length; i++) {
    if (productThumbnail[i].classList.contains("active")) {
      if (productThumbnail[i].classList.contains("redArrow")) {
        headerbg.style.backgroundColor = "#EF6079";
        for (let i = 0; i < productsSliderArrows.length; i++) {
          productsSliderArrows[i].style.backgroundColor = "#EF6079";
        }
      } else if (productThumbnail[i].classList.contains("farmhousegreen")) {
        headerbg.style.backgroundColor = "#a0AB4D";
        for (let i = 0; i < productsSliderArrows.length; i++) {
          productsSliderArrows[i].style.backgroundColor = "#a0AB4D";
        }
      } else if (productThumbnail[i].classList.contains("lincolnshireSky")) {
        headerbg.style.backgroundColor = "#72B0BD";
        for (let i = 0; i < productsSliderArrows.length; i++) {
          productsSliderArrows[i].style.backgroundColor = "#72B0BD";
        }
      } else if (productThumbnail[i].classList.contains("slate")) {
        headerbg.style.backgroundColor = "#3F4444";
        for (let i = 0; i < productsSliderArrows.length; i++) {
          productsSliderArrows[i].style.backgroundColor = "#3F4444";
        }
      } else if (productThumbnail[i].classList.contains("blackPepper")) {
        headerbg.style.backgroundColor = "#A39382";
        for (let i = 0; i < productsSliderArrows.length; i++) {
          productsSliderArrows[i].style.backgroundColor = "#A39382";
        }
      } else if (productThumbnail[i].classList.contains("footerGreen")) {
        headerbg.style.backgroundColor = "#395442";
        for (let i = 0; i < productsSliderArrows.length; i++) {
          productsSliderArrows[i].style.backgroundColor = "#395442";
        }
      } else if (productThumbnail[i].classList.contains("mustard")) {
        headerbg.style.backgroundColor = "#ED9B33";
        for (let i = 0; i < productsSliderArrows.length; i++) {
          productsSliderArrows[i].style.backgroundColor = "#ED9B33";
        }
      } else {
        headerbg.style.backgroundColor = "#72B0BD";
        for (let i = 0; i < productsSliderArrows.length; i++) {
          productsSliderArrows[i].style.backgroundColor = "#72B0BD";
        }
      }
    }
  }
}
