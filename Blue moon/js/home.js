var firstindex = 0;
function automaticslide() {
  setTimeout(automaticslide, 3000);
  var pics;
  const img = document.getElementsByClassName("imgs");
  for (pics = 0; pics < img.length; pics++) {
    img[pics].style.display = "none";
  }
  firstindex++;
  if (firstindex > img.length) {
    firstindex = 1;
  }
  img[firstindex - 1].style.display = "block";
}
automaticslide();
var firstindex = 0;
function automaticslidess() {
  setTimeout(automaticslidess, 1400);
  var pics;
  const img = document.getElementsByClassName("imgss-sec");
  for (pics = 0; pics < img.length; pics++) {
    img[pics].style.display = "none";
  }
  firstindex++;
  if (firstindex > img.length) {
    firstindex = 1;
  }
  img[firstindex - 1].style.display = "block";
}
automaticslidess();

var secondindex = 0;
function automaticslidetwo() {
  setTimeout(automaticslidetwo, 1500);
  var pics;
  const img = document.getElementsByClassName("imgs-sec");
  for (pics = 0; pics < img.length; pics++) {
    img[pics].style.display = "none";
  }
  secondindex++;
  if (secondindex > img.length) {
    secondindex = 1;
  }
  img[secondindex - 1].style.display = "block";
}
automaticslidetwo();

var secondindex = 0;
function automaticslidethree() {
  setTimeout(automaticslidethree, 1700);
  var pics;
  const img = document.getElementsByClassName("imgsr-sec");
  for (pics = 0; pics < img.length; pics++) {
    img[pics].style.display = "none";
  }
  secondindex++;
  if (secondindex > img.length) {
    secondindex = 1;
  }
  img[secondindex - 1].style.display = "block";
}
automaticslidethree();
var dark = document.getElementById("dark-mode");
dark.onclick = function () {
  document.body.classList.toggle("dark-theme");
};
var dark = document.getElementById("dark-mode-phone");
dark.onclick = function () {
  document.body.classList.toggle("dark-theme");
};

const burger = document.getElementById("burger");
const nav = document.getElementById("linker");

burger.onclick = function () {
  nav.classList.toggle("active");
};
document.onclick = function (er) {
  if (er.target.id !== "burger" && er.target.id !== "nav") {
    nav.classList.remove("active");
  }
};
