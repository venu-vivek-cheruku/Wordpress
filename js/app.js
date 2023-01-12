function openMenu() {
  const humburger = document.querySelector("#humburger-menu");
  const mobileMenu = document.querySelector(".mobile-nav-container");
  const menuLinks = document.querySelectorAll(".mobile-nav-container li ");
  humburger.classList.toggle("open");
  mobileMenu.classList.toggle("open");
  menuLinks.forEach((cl) => cl.classList.toggle("slide-in-top"));
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
  removeAttributes();

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

function removeAttributes() {
  slide.forEach(function (img) {
    img.classList.remove("active");
  });
}

// Play the checker function auto-matically..

if (slideLength > 0) {
  setInterval(function autoPlay() {
    if (nextBtn.classList.contains("disabled")) {
      currentImage = 1;
      theChecker();
    } else {
      currentImage++;
      theChecker();
    }
  }, 12000);
}

// product slider

var slideIndex = 1;

showSlides(slideIndex);

function plusSlides(n) {
  showSlides((slideIndex += n));
  thumbnailcolorchecker();
}

let headerbg = document.getElementById("header");
let productsSliderArrows = document.getElementsByClassName("products-arrows");
function thumbnailcolorchecker() {
  const productThumbnail =
    document.getElementsByClassName("products-thumbnail");

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

function currentSlide(n) {
  showSlides((slideIndex = n));
  thumbnailcolorchecker();
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("products-slide");
  var dots = document.getElementsByClassName("products-thumbnail");
  if (n > slides.length) {
    slideIndex = 1;
    thumbnailcolorchecker();
  }
  if (n < 1) {
    thumbnailcolorchecker();
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  if (slides.length > 0) {
    slides[slideIndex - 1].style.display = "flex";
    dots[slideIndex - 1].className += " active";
  }
}

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
navLinksTl.from("#header-social ul li", {
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
