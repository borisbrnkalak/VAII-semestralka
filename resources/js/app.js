import "./bootstrap";
import "./hamburger";
//import "./check-forms";
import "./checkAddProduct";
import "./checkAddEmployee";
import "./checkFeedback";
import "./checkLogin";
import "./checkPassword";
import "./checkRegister";
import "./login-btns";
import Map from "./map";
import "./modal";
import "./parallax-effext";
import RevealSection from "./reveal-sections";
import Slider from "./slider";

("use strict");

function scrollUp() {
    const scrollUp = document.getElementById("scroll-up");
    if (this.scrollY >= 200) scrollUp.classList.add("show-scroll");
    else scrollUp.classList.remove("show-scroll");
}

window.addEventListener("scroll", scrollUp);

function scrollMenu() {
    const scrollMenu = document.getElementById("white-menu");
    if (this.scrollY >= 200) scrollMenu.classList.add("show-menu");
    else scrollMenu.classList.remove("show-menu");
}

window.addEventListener("scroll", scrollMenu);

function image_effect() {
    const mov_image = document.getElementById("mov-img");
    if (this.scrollY > 1305) scrollMenu.classList.add("show-image");
    else scrollMenu.classList.remove("show-image");
}

const covers = document.querySelectorAll(".all-products .movable-products");
const leftArrow = document.querySelector(".left-arrow a");
const rightArrow = document.querySelector(".right-arrow a");
const mapka = document.querySelector("#map");

if (covers.length > 0) {
    new Slider(covers, leftArrow, rightArrow);
}

if (mapka) {
    new Map();
}

//--- reveal
const reveals = document.querySelectorAll(".reveal");
if (reveals) {
    new RevealSection(reveals);
}
