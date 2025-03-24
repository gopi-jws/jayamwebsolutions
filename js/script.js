document.addEventListener("DOMContentLoaded", function () {
  var swiper = new Swiper(".mySwiper", {
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 3,
    spaceBetween: 20,
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop: true,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false,
    },
  });

  //   document.querySelector(".swiper").addEventListener("mouseenter", function () {
  //     swiper.autoplay.stop();
  //   });

  //   document.querySelector(".swiper").addEventListener("mouseleave", function () {
  //     swiper.autoplay.start();
  //   });
});
document.addEventListener("DOMContentLoaded", function () {
  const counters = document.querySelectorAll(".counter-number");

  const startCounting = (element) => {
    const target = parseInt(element.getAttribute("data-target"));
    const duration = 2000; // 2 seconds duration for the animation
    const step = target / (duration / 16); // Calculating step for each frame (60 FPS)
    let current = 0;

    // Select the element that holds the number (the first span)
    const numberElement = element.querySelector(".number");

    const updateCounter = () => {
      current += step;
      if (current < target) {
        numberElement.textContent = Math.round(current); // Update the number part
        requestAnimationFrame(updateCounter); // Keep animating
      } else {
        numberElement.textContent = target; // Ensure we set the final value
      }
    };

    updateCounter();
  };

  // Intersection Observer to trigger counter when it's visible
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          startCounting(entry.target);
          observer.unobserve(entry.target); // Stop observing once the counter starts
        }
      });
    },
    { threshold: 0.5 }
  );

  counters.forEach((counter) => observer.observe(counter)); // Observing all counters
});
const reviewCarousel = document.getElementById("reviewCarousel");
const prevBtnReview = document.getElementById("prevBtnReview");
const nextBtnReview = document.getElementById("nextBtnReview");
const reviewCards = document.querySelectorAll(".carousel-card");

let currentIndex = 0;
let visibleCards = 3; // Default for large screens
let cardWidth;
let totalCards = reviewCards.length;

// Calculate card width dynamically
function calculateCardWidth() {
  const card = document.querySelector(".carousel-card");
  return card ? card.offsetWidth + 20 : 0; // Includes margin
}

// Adjust number of visible cards based on screen size
function adjustVisibleCards() {
  if (window.innerWidth >= 992) {
    visibleCards = 3; // Large screens
  } else if (window.innerWidth >= 768) {
    visibleCards = 2; // Tablets
  } else {
    visibleCards = 1; // Mobile
  }
}

// Move carousel smoothly
function moveCarousel(direction) {
  cardWidth = calculateCardWidth();
  if (direction === "next") {
    currentIndex = (currentIndex + 1) % (totalCards - visibleCards + 1);
  } else {
    currentIndex =
      (currentIndex - 1 + totalCards) % (totalCards - visibleCards + 1);
  }

  reviewCarousel.style.transform = `translateX(-${currentIndex * cardWidth}px)`;
}

prevBtnReview.addEventListener("click", () => moveCarousel("prev"));
nextBtnReview.addEventListener("click", () => moveCarousel("next"));

window.addEventListener("resize", () => {
  adjustVisibleCards();
  moveCarousel("next");
});

// Initialize carousel
adjustVisibleCards();
moveCarousel("next");
g(".project-single-two .owl-carousel").owlCarousel({
  loop: !1,
  nav: !1,
  responsiveClass: !0,
  dots: !1,
  margin: 15,
  smartSpeed: 900,
  responsive: {
    0: { items: 1, margin: 15 },
    576: { items: 2, margin: 20 },
    992: { items: 3, margin: 25 },
    1200: { items: 4, margin: 30 },
  },
});

    document.addEventListener("DOMContentLoaded", function () {
        const counters = document.querySelectorAll(".counter");

        function startCounter(counter) {
            let target = +counter.getAttribute("data-target");
            let count = 0;
            let duration = 5000; // Total duration in milliseconds (5 seconds)
            let steps = 100; // Number of steps (adjustable for smoothness)
            let increment = Math.ceil(target / steps); // Step size
            let speed = duration / steps; // Time per step

            counter.innerText = "0"; // Reset to 0

            let updateCount = setInterval(() => {
                count += increment;
                if (count >= target) {
                    counter.innerText = target + "+"; // Stop exactly at target
                    clearInterval(updateCount);
                } else {
                    counter.innerText = count + "+"; // Keep counting up
                }
            }, speed);
        }

        counters.forEach(counter => startCounter(counter));
    });


