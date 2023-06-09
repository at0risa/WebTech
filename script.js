// const wrapper = document.querySelector(".wrapper-login");
// const info = document.querySelector(".all-info");
// const loginLink = document.querySelector(".login-link");
// const registerLink = document.querySelector(".register-link");
// const btnPopup = document.querySelector(".btnLogin-popup");
// const iconClose = document.querySelector(".icon-close");
// const bodytag = document.querySelector("body");

// registerLink.addEventListener("click", () => {
//   wrapper.classList.remove("active");
// });

// loginLink.addEventListener("click", () => {
//   wrapper.classList.add("active");
// });

// btnPopup.addEventListener("click", () => {
//   wrapper.classList.add("active-popup");
//   info.style.filter = "blur(5px)";
//   info.classList.add("disabled-div");
// });

// iconClose.addEventListener("click", () => {
//   wrapper.classList.remove("active-popup");

//   info.style.filter = "none";
//   info.classList.remove("disabled-div");
// });

const wrapper = document.querySelector(".wrapper-login");
const info = document.querySelector(".all-info");
const loginLink = document.querySelector(".login-link");
const registerLink = document.querySelector(".register-link");
const btnPopup = document.querySelector(".btnLogin-popup");
const iconClose = document.querySelector(".icon-close");
const bodytag = document.querySelector("body");

registerLink.addEventListener("click", () => {
  wrapper.classList.add("active");
});

loginLink.addEventListener("click", () => {
  wrapper.classList.remove("active");
});

btnPopup.addEventListener("click", () => {
  wrapper.classList.add("active-popup");
  info.style.filter = "blur(5px)";
  info.classList.add("disabled-div");
});

iconClose.addEventListener("click", () => {
  wrapper.classList.remove("active-popup");
  info.style.filter = "none";
  info.classList.remove("disabled-div");
});
