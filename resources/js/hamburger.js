"use strict";

const burger = document.querySelector(".hamburger");
const burger_white = document.querySelector(".hamburger-white");
const header = document.querySelector(".paralax .header");
const header_white = document.querySelector(".header-white");

const middleLine = document.querySelectorAll(".line.middle");
const topLine = document.querySelectorAll(".line.top");
const bottomLine = document.querySelectorAll(".line.bottom");

let isTransparent = false;
let bckColor;

const hamburgerEffects = function (middle, top, bottom) {
  if (!isTransparent) {
    bckColor = "transparent";
    isTransparent = true;
  } else {
    bckColor = "";
    isTransparent = false;
  }

  top.forEach((el) => {
    el.classList.toggle("rotate-top");
    if (isTransparent) {
      el.style.top = 0;
    } else {
      el.style.top = "";
    }
  });

  bottom.forEach((el) => {
    el.classList.toggle("rotate-bottom");
    if (isTransparent) {
      el.style.top = 0;
    } else {
      el.style.top = "";
    }
  });

  middle.forEach((el) => {
    el.style.background = bckColor;
  });
};

burger.addEventListener("click", () => {
  header.classList.toggle("expand");

  hamburgerEffects(middleLine, topLine, bottomLine);
});

burger_white.addEventListener("click", function () {
  header_white.classList.toggle("expand");

  hamburgerEffects(middleLine, topLine, bottomLine);
});
