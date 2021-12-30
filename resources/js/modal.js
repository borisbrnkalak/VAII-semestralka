"use strict";

const modal = document.querySelector(".modal");
const overlay = document.querySelector(".overlay");
const btnCloseModal = document.querySelectorAll(".btn--close-modal");
const btnCloseModalReg = document.querySelector(".btn--close-modal.register");
const btnsOpenModal = document.querySelectorAll(".login-btn");
const registerBtn = document.querySelector(".register-btn");
const registerWindow = document.querySelector(".register.modal");

const openModal = function (event) {
  event && event.preventDefault();
  modal.classList.remove("hidden");
  overlay.classList.remove("hidden");
};

const closeModal = function () {
  modal.classList.add("hidden");
  overlay.classList.add("hidden");

  if (!registerWindow.classList.contains("hidden")) {
    registerWindow.classList.add("hidden");
  }
};

btnsOpenModal.forEach((btn) => btn.addEventListener("click", openModal));
btnCloseModal.forEach((btn) => btn.addEventListener("click", closeModal));

overlay.addEventListener("click", closeModal);

document.addEventListener("keydown", function (e) {
  if (e.key === "Escape" && !modal.classList.contains("hidden")) {
    closeModal();
    registerWindow.classList.add("hidden");
  }
});

const openRegister = function (event) {
  event && event.preventDefault();
  modal.classList.remove("hidden");
  registerWindow.classList.remove("hidden");
};

registerBtn.addEventListener("click", openRegister);

/*registerBtn.addEventListener("click", function (event) {
  event && event.preventDefault();
  modal.classList.remove("hidden");
  registerWindow.classList.remove("hidden");
});*/
