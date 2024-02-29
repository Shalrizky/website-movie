const prevBtn = document.querySelector(".prev-btn");
const nextBtn = document.querySelector(".next-btn");
const slides = document.querySelectorAll(".slide");
const dots = document.querySelectorAll(".dot div");

let currentSlide = 0;
let currentDot = 0;

const goToSlide = (n) => {
  slides[currentSlide].style.display = "none";
  dots[currentDot].classList.remove("active");
  currentSlide = (n + slides.length) % slides.length;
  currentDot = (n + dots.length) % dots.length;
  slides[currentSlide].style.display = "block";
   if (currentSlide === 0) {
    currentDot = 0;
  }
  if (currentSlide === 0) {
    dots[currentDot].classList.add("active");
  }
};

prevBtn.addEventListener("click", () => {
  goToSlide(currentSlide - 1);
});

nextBtn.addEventListener("click", () => {
  goToSlide(currentSlide + 1);
});

dots.forEach((dot, index) => {
  dot.addEventListener("click", () => {
    goToSlide(index);
  });
});

setInterval(() => {
  goToSlide(currentSlide + 1);
}, 5000);

//slide img movie section
const list = document.querySelector('.movie-list');
let isDown = false;
let StartX, scrollLeft;

list.addEventListener('mousedown', (e) => {
    isDown = true;
    StartX = e.pageX - list.offsetLeft;
    scrollLeft = list.scrollLeft;
});
list.addEventListener('mouseleave', () => {
    isDown = false;
});
list.addEventListener('mouseup', () => {
    isDown = false;
});
list.addEventListener('mousemove', (e) => {
    if(!isDown) return;
    e.preventDefault();
    const x = e.pageX - list.offsetLeft;
    const walk = x - StartX;
    list.scrollLeft = scrollLeft - walk;
});
