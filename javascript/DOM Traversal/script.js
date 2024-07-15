// const x = document.querySelectorAll(".close");

// x.addEventListener("click", function () {
//   const card = document.querySelector(".card");
//   card.style.display = "none";
// });

// x.forEach(function (e) {
//   e.addEventListener("click", function (el) {
//     el.target.parentElement.style.display = "none";
//     el.preventDefault();
//     el.stopPropagation();
//   });
// });

// const cards = document.querySelectorAll(".card");
// cards.forEach(function (card) {
//   card.addEventListener("click", function (e) {
//     alert("oke");
//   });
// });

const container = document.querySelector(".container");

container.addEventListener("click", function (e) {
  if (e.target.className == "close") {
    e.target.parentElement.style.display = "none";
  }
});
