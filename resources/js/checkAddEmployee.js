"use strict";

const add_employee = document.querySelector(".new-employee");
const employee_name = document.querySelector(".employee_name");
const employee_text = document.querySelector(".employee_text");
const employee_picture = document.querySelector(".employee_picture");
const employee_err_block = document.querySelector(".err-empl");
const employee_err = document.querySelector(".err-empl p");

if (add_employee && employee_name && employee_text && employee_picture) {
    const checkColors = function () {
        if (employee_name.value == "") {
            employee_name.style.borderColor = "red";
            employee_name.style.outlineColor = "red";
        } else {
            employee_name.style.borderColor = "";
            employee_name.style.outlineColor = "";
        }
        if (employee_text.value == "") {
            employee_text.style.borderColor = "red";
            employee_text.style.outlineColor = "red";
        } else {
            employee_text.style.borderColor = "";
            employee_text.style.outlineColor = "";
        }
        if (employee_picture.value == "") {
            employee_picture.style.borderColor = "red";
            employee_picture.style.outlineColor = "red";
        } else {
            employee_picture.style.borderColor = "";
            employee_picture.style.outlineColor = "red";
        }
    };

    add_employee.addEventListener("submit", function (event) {
        if (
            employee_name.value == "" &&
            employee_text.value == "" &&
            employee_picture.value == ""
        ) {
            employee_err.textContent =
                "Missing name of the employee! " +
                "\r\n" +
                "Missing text of the employee!" +
                "\r\n" +
                "Missing file!";
            employee_err_block.style.display = "block";

            checkColors();

            event.preventDefault();
        } else if (employee_name.value == "") {
            employee_err.textContent = "Missing name of the employee!";

            checkColors();
            employee_err_block.style.display = "block";
            event.preventDefault();
        } else if (employee_text.value == "") {
            employee_err.textContent = "Missing text of the employee!";

            checkColors();
            employee_err_block.style.display = "block";
            event.preventDefault();
        } else if (employee_picture.value == "") {
            employee_err.textContent = "Missing file!";

            checkColors();
            employee_err_block.style.display = "block";
            event.preventDefault();
        } else {
            employee_err.value = "";
            employee_err_block.style.display = "none";
        }
    });
}
