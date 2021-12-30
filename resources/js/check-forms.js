"use strict";

const register_username = document.querySelector(".modal__form.reg .fullname");
const register_email = document.querySelector(".modal__form.reg .email");
const register_password = document.querySelector(".modal__form.reg .password");
const register_conf_password = document.querySelector(
  ".modal__form.reg .confirm-password"
);
const register_message = document.querySelector(
  ".modal__form.reg .error-message-register"
);
const register_btn = document.querySelector(".modal__form.reg button");
const register_chech = document.querySelector(".check-register");

console.log(register_password, register_password.value);

register_chech.addEventListener("click", function () {
  if (register_username.value === "") {
    register_message.style.display = "block";
    register_message.value = "Missing your name!";
  } else if (
    register_email.value.length === 0 ||
    !register_email.value.includes("@")
  ) {
    register_message.style.display = "block";
    register_message.value = "Missing or bad email!";
  } else if (register_password.value.length === 0) {
    register_message.style.display = "block";
    register_message.value = "Missing password!";
  } else if (register_password.value != register_conf_password.value) {
    register_message.style.display = "block";
    register_message.value = "Passwords does not match!";
  } else {
    register_message.value = "";
    register_message.style.display = "none";
    register_btn.disabled = false;
  }
});
