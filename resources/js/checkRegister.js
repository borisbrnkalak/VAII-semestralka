"use strict";

const form_reg = document.querySelector(".modal__form.reg");
const email_reg = document.querySelector(".modal__form.reg .username");
const name_reg = document.querySelector(".modal__form.reg .fullname");
const pass_reg = document.querySelector(".modal__form.reg .password");
const conf_pass_reg = document.querySelector(
  ".modal__form.reg .confirm-password"
);
const errContainer_reg = document.querySelector(".err.reg");
const error_reg = document.querySelector(".err.reg p");

let timeout;

const strong = new RegExp(
  "(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{6,})"
);

function checkPassword(pass) {
  if (strong.test(pass)) {
    pass_reg.style.outlineColor = "green";
  } else {
    pass_reg.style.outlineColor = "red";
  }
}

pass_reg.addEventListener("input", () => {
  clearTimeout(timeout);

  timeout = setTimeout(() => checkPassword(pass_reg.value), 500);
});

const checkColorss = function () {
  if (email_reg.value == "") {
    email_reg.style.borderColor = "red";
    email_reg.style.outlineColor = "red";
  } else {
    email_reg.style.borderColor = "";
    email_reg.style.outlineColor = "";
  }
  if (name_reg.value == "" || !name_reg.value.includes(" ")) {
    name_reg.style.borderColor = "red";
    name_reg.style.outlineColor = "red";
  } else {
    name_reg.style.borderColor = "";
    name_reg.style.outlineColor = "";
  }
  if (pass_reg.value == "") {
    pass_reg.style.borderColor = "red";
    pass_reg.style.outlineColor = "red";
  } else {
    pass_reg.style.borderColor = "";
    pass_reg.style.outlineColor = "";
  }
  if (conf_pass_reg.value == "") {
    conf_pass_reg.style.borderColor = "red";
    conf_pass_reg.style.outlineColor = "red";
  } else {
    conf_pass_reg.style.borderColor = "";
    conf_pass_reg.style.outlineColor = "";
  }
};

form_reg.addEventListener("submit", function (event) {
  if (!name_reg.value.includes(" ") || name_reg.value === "") {
    error_reg.textContent = "Missing name or your name is not full!";
    checkColorss();
    errContainer_reg.style.display = "block";
    event.preventDefault();
  } else if (email_reg.value.indexOf("@") == -1 || email_reg.value === "") {
    error_reg.textContent = "Not valid email!";
    checkColorss();
    errContainer_reg.style.display = "block";
    event.preventDefault();
  } else if (pass_reg.value === "") {
    error_reg.textContent = "Missing or incorrect password!";
    checkColorss();
    errContainer_reg.style.display = "block";
    event.preventDefault();
  } else if (pass_reg.value != conf_pass_reg.value) {
    error_reg.textContent = "Passwords does not match!";
    checkColorss();
    errContainer_reg.style.display = "block";
    event.preventDefault();
  } else {
    errContainer_reg.style.display = "none";
    error_reg.textContent = "";
  }
});
