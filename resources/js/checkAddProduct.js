"use strict";

const product_form = document.querySelector(".new-product");
const product_name = document.querySelector(".form_name");
const product_price = document.querySelector(".form_price");
const product_country = document.querySelector(".form_country");
const product_picture = document.querySelector(".form_image");
const product_text = document.querySelector(".form_text");
const product_err = document.querySelector(".err-prod");
const product_err_message = document.querySelector(".err-prod p");

if (
  product_form &&
  product_name &&
  product_price &&
  product_country &&
  product_picture &&
  product_text &&
  product_err &&
  product_err_message
) {
  const checkColors = function () {
    if (product_name.value == "") {
      product_name.style.borderColor = "red";
      product_name.style.outlineColor = "red";
    } else {
      product_name.style.borderColor = "";
      product_name.style.outlineColor = "";
    }
    if (product_price.value == "" || /^[a-zA-Z]/.test(product_price.value)) {
      product_price.style.borderColor = "red";
      product_price.style.outlineColor = "red";
    } else {
      product_price.style.borderColor = "";
      product_price.style.outlineColor = "";
    }
    if (product_country.value == "") {
      product_country.style.borderColor = "red";
      product_country.style.outlineColor = "red";
    } else {
      product_country.style.borderColor = "";
      product_country.style.outlineColor = "";
    }
    if (product_picture.value == "") {
      product_picture.style.borderColor = "red";
      product_picture.style.outlineColor = "red";
    } else {
      product_picture.style.borderColor = "";
      product_picture.style.outlineColor = "red";
    }
    if (product_text.value == "") {
      product_text.style.borderColor = "red";
      product_text.style.outlineColor = "red";
    } else {
      product_text.style.borderColor = "";
      product_text.style.outlineColor = "";
    }
  };

  product_form.addEventListener("submit", function (event) {
    if (
      product_name.value == "" &&
      product_price.value == "" &&
      product_country.value == "" &&
      product_picture.value == "" &&
      product_text.value == ""
    ) {
      product_err_message.textContent =
        "Missing price of the beer! " +
        "\r\n" +
        "Missing name of the beer!" +
        "\r\n" +
        "Missing country!" +
        "\r\n" +
        "Missing file!" +
        "\r\n" +
        "Missing description of the product!";
      product_err.style.display = "block";

      checkColors();

      event.preventDefault();
    } else if (
      product_price.value == "" ||
      /^[a-zA-Z]/.test(product_price.value)
    ) {
      product_err_message.textContent =
        "Missing price of the beer or price contains letter! ";

      checkColors();
      product_err.style.display = "block";
      event.preventDefault();
    } else if (product_name.value == "") {
      product_err_message.textContent = "Missing name of the beer!";

      checkColors();
      product_err.style.display = "block";
      event.preventDefault();
    } else if (product_country.value == "") {
      product_err_message.textContent = "Missing country!";

      checkColors();
      product_err.style.display = "block";
      event.preventDefault();
    } else if (product_picture.value == "") {
      product_err_message.textContent = "Missing picture of the beer!";

      checkColors();
      product_err.style.display = "block";
      event.preventDefault();
    } else if (product_text.value == "") {
      product_err_message.textContent = "Missing description for the beer!";

      checkColors();
      product_err.style.display = "block";
      event.preventDefault();
    } else {
      product_err_message.value = "";
      product_err.style.display = "none";
    }
  });
}
