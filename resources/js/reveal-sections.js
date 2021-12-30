"use strict";

const reveals = document.querySelectorAll(".reveal");

window.addEventListener("scroll", function () {
  reveals.forEach((el) => {
    let windowHeight = window.innerHeight;
    let revealTop = el.getBoundingClientRect().top;
    let revealPoint = 150;

    if (revealTop < windowHeight - revealPoint) {
      el.classList.add("active");
    } else if (el.classList.contains("active")) {
      el.classList.remove("active");
    }
  });
});

/*const reveal = function (entries, observer) {
  const [entry] = entries;

  if (!entry.isIntersecting) return;

  entry.target.classList.add("active");
};

const sectionObserver = new IntersectionObserver(reveal, {
  root: null,
  threshold: 0.1,
});

reveals.forEach(function (section) {
  section.classList.remove("active");
  sectionObserver.observe(section);
});*/
