"use strict";

const login = document.querySelectorAll(".list-login");
const logout = document.querySelectorAll(".list-logout");

window.addEventListener("DOMContentLoaded", () => {
  if (window.innerWidth >= 1160) {
    hide();
  }
});

window.addEventListener("resize", function () {
  if (window.innerWidth >= 1160) {
    hide();
  } else {
    show();
  }
});

const hide = function () {
  login.forEach((el) => {
    el.style.display = "none";
  });
  logout.forEach((el) => {
    el.style.display = "none";
  });
};

const show = function () {
  login.forEach((el) => {
    el.style.display = "contents";
  });
  logout.forEach((el) => {
    el.style.display = "contents";
  });
};
