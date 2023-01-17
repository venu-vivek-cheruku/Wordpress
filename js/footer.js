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
    markers: false,
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

footerTl.from(".footer-social-icons .social-icons a", {
  x: 0,
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
