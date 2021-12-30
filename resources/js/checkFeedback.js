"use strict";

const form_feedback = document.querySelector(".feedback-form");
const feedback_topic = document.querySelector(".feedback_topic");
const feedback_text = document.querySelector(".feedback_text");
const err_feed = document.querySelector(".err-feed");
const err_feed_message = document.querySelector(".err-feed p");

if (
  form_feedback &&
  feedback_topic &&
  feedback_text &&
  err_feed &&
  err_feed_message
) {
  form_feedback.addEventListener("submit", function (event) {
    if (feedback_topic.value === "") {
      err_feed_message.textContent = "Missing topic!";
      err_feed.style.display = "block";
      event.preventDefault();
    } else if (feedback_text.value == "") {
      err_feed_message.textContent = "Missing text!";
      err_feed.style.display = "block";
      event.preventDefault();
    } else {
      err_feed.style.display = "none";
      err_feed_message.textContent = "";
    }
  });
}
