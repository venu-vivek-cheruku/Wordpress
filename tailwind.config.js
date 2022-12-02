/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.{html,js,php}",
    "./template-parts/**/*.php",
    "./*.php",
    "./*.html",
    "./js/*.js",
    "./php",
  ],
  theme: {
    extend: {
      fontFamily: {
        primaryBold: ["Gill Sans Bold"],
        primarySemiBold: ["Gill Sans SemiBold"],
        primary: ["Gill Sans Regular"],
        primaryLight: ["Gill Sans Light"],
        secondary: ["ALTERNATE GOTHIC COMPRESSED ATF"],
        calibriBold: ["Calibri Bold"],
        calibri: ["Calibri Regular"],
      },
      colors: {
        transparent: "transparent",
        lincolnshireSky: "#72B0BD",
        slate: "#3F4444",
        farmhousegreen: "#a0AB4D",
        redArrow: "#EF6079",
        blackPepper: "#A39382",
        mustard: "#ED9B33",
        footerGreen: "#395442",
      },
    },
  },
  plugins: [],
};
