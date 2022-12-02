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

// underline active on page

// window.onload = setActive;

// function setActive() {
//   aObj = document.querySelectorAll(".nav-link");
//   for (i = 0; i < aObj.length; i++) {
//     if (document.location.href.indexOf(aObj[i].href) >= 0) {
//       aObj[i].classList.toggle("active");
//     }
//   }
// }

// Play the checker function auto-matically..

// setInterval(function autoPlay() {
//   if (nextBtn.classList.contains("disabled")) {
//     currentImage = 1;
//   } else {
//     currentImage++;
//   }
// }, 4000);

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

const random = (min, max) => {
  return Math.floor(Math.random() * (max - min) + min);
};
const initialiseBlade = (num) => {
  gsap.set("#blade_" + num + "-1", {
    transformOrigin: "center bottom",
  });
  gsap.set("#blade_" + num + "-2", {
    transformOrigin: "right top",
  });
  gsap.set("#blade_" + num + "-3", {
    transformOrigin: "left top",
  });
};
const rotateMill = (num) => {
  initialiseBlade(num);
  var tl = new gsap.timeline();
  tl.to("#blade_" + num + "-1, #blade_" + num + "-2, #blade_" + num + "-3", {
    rotateZ: 360,
    duration: 10,
    ease: Linear.easeIn,
  });
  return tl;
};

var master = new gsap.timeline({ repeat: -1 });
master.add("start");
master.add(rotateMill(1), "start");

gsap.from(".birds svg", {
  x: 100,
  y: 100,
  duration: 3,
  scale: 0.1,
  scrollTrigger: {
    trigger: ".footer-bg",
    start: "top 900",
    end: "bottom bottom",
    markers: false,
  },
  stagger: {
    from: "center",
    amount: 1,
  },
});

let footerTl = gsap.timeline({
  scrollTrigger: {
    trigger: ".footer-bg",
    start: "top center", // when the top of the trigger hits the top of the viewport
    end: "center bottom", // end after scrolling 500px beyond the start
    // smooth scrubbing, takes 1 second to "catch up" to the scrollbar
    markers: true,
    // once: true,
  },
  duration: 0.5,
});

var currentDuration = footerTl.duration();
console.log(currentDuration);

footerTl.from(".footer-logo-container", {
  scale: 0.1,
  opacity: 0,
});
footerTl.from(".footer-links-contianer h2", {
  scale: 0.1,
  opacity: 0,
});
footerTl.from(".footer-links li", {
  x: 500,
  opacity: 0,
  stagger: {
    from: "top",
    amount: 0.15,
  },
});
footerTl.from(".social-icons-container h2", {
  scale: 0.1,
  opacity: 0,
});

footerTl.from(".social-icons li", {
  x: 500,
  opacity: 0,
  stagger: {
    from: "top",
    amount: 0.15,
  },
});

footerTl.from(".stamp-container", {
  scale: 2.5,
  opacity: 0,
  y: -500,
  x: -500,
  ease: "back",
});

ScrollTrigger.batch(".grid-item", {
  batchMax: 3,
  markers: false,

  onEnter: (batch) => {
    gsap.to(batch, {
      autoAlpha: 1,
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
navLinksTl.from(".nav-social-link", {
  opacity: 0,
  stagger: {
    from: "center",
    amount: 0.15,
  },
});
