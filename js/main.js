const carousel = document.querySelector(".carousel");
const leftArrow = document.getElementById("left");
const rightArrow = document.getElementById("right");

// Scroll the carousel forward or backward
rightArrow.addEventListener("click", () => {
  carousel.scrollBy({
    left: 300,
    behavior: "smooth",
  });
});

leftArrow.addEventListener("click", () => {
  carousel.scrollBy({
    left: -300,
    behavior: "smooth",
  });
});

function autoScroll() {
  const maxScrollLeft = carousel.scrollWidth - carousel.clientWidth;

  if (carousel.scrollLeft >= maxScrollLeft) {
    carousel.scrollTo({
      left: 0,
      behavior: "smooth",
    });
  } else {
    carousel.scrollBy({
      left: 300,
      behavior: "smooth",
    });
  }
}

let autoScrollInterval = setInterval(autoScroll, 3000);

leftArrow.addEventListener("click", () => {
  clearInterval(autoScrollInterval);
  autoScrollInterval = setInterval(autoScroll, 3000);
});

rightArrow.addEventListener("click", () => {
  clearInterval(autoScrollInterval);
  autoScrollInterval = setInterval(autoScroll, 3000);
});
$(document).ready(function () {
  $("#contact-form").submit(function (e) {
    e.preventDefault(); // Prevent the form from submitting
    $("#loader").show();
    var formData = $(this).serialize(); // Collect form data
    var recaptchaResponse = grecaptcha.getResponse(); // Get reCAPTCHA response

    if (recaptchaResponse.length === 0) {
      Swal.fire({
        icon: "error",
        title: "reCAPTCHA required",
        text: "Please verify that you are not a robot.",
      });
      $("#loader").hide();
      return;
    }

    formData += "&recaptcha-response=" + recaptchaResponse;

    $.ajax({
      url: `https://cms.jayamwebsolutions.com/mail-sent`,
      type: "POST",
      data: formData,
      success: function (response) {
        $("#loader").hide();
        Swal.fire({
          icon: "success",
          title: "Success!",
          text: response.success,
        });
        $("#contact-form")[0].reset();
      },
      error: function (xhr, status, error) {
        $("#loader").hide();
        console.log(xhr);

        var errMessage = "There was an error. Please try again.";

        // Check if there are validation errors and format them for display
        if (xhr.responseJSON && xhr.responseJSON.errors) {
          var errorMessages = "";
          // Loop through the errors and display them
          for (var key in xhr.responseJSON.errors) {
            if (xhr.responseJSON.errors.hasOwnProperty(key)) {
              errorMessages += xhr.responseJSON.errors[key].join(", ") + "\n";
            }
          }
          errMessage = errorMessages;
        }

        Swal.fire({
          icon: "error",
          title: "Oops...",
          text: errMessage,
        });
      },
    });
  });
});
document.addEventListener("DOMContentLoaded", function () {
  var swiper = new Swiper(".mySwiper", {
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 3,
    spaceBetween: 20, // Add space between slides
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

  // Stop autoplay on hover
  document.querySelector(".swiper").addEventListener("mouseenter", function () {
    swiper.autoplay.stop();
  });

  // Resume autoplay when hover ends
  document.querySelector(".swiper").addEventListener("mouseleave", function () {
    swiper.autoplay.start();
  });
});
// Function to truncate text to 200 characters
function truncateText(selector, maxLength) {
  const elements = document.querySelectorAll(selector);

  elements.forEach((element) => {
    let originalText = element.innerText;

    if (originalText.length > maxLength) {
      const truncatedText = originalText.slice(0, maxLength) + " ...";
      element.innerText = truncatedText;
    }
  });
}

// Apply the truncate function to paragraphs with the class 'scrollable-paragraph'
truncateText(".scrollable-paragraph", 218);

const initSlider = () => {
  const imageList = document.querySelector(".slider-wrapper .image-list");
  const slideButtons = document.querySelectorAll(
    ".slider-wrapper .slide-button"
  );
  const sliderScrollbar = document.querySelector(".slider-scrollbar");
  const scrollbarThumb = sliderScrollbar.querySelector(".scrollbar-thumb");
  const maxScrollLeft = imageList.scrollWidth - imageList.clientWidth;
  let autoSlideInterval;

  // Function to auto-slide to the next image
  const autoSlide = () => {
    const scrollAmount = imageList.clientWidth; // Scroll by one image width
    if (imageList.scrollLeft >= maxScrollLeft) {
      imageList.scrollLeft = 0; // Loop back to the start
    } else {
      imageList.scrollBy({
        left: scrollAmount,
        behavior: "smooth",
      });
    }
  };

  // Start auto-sliding
  const startAutoSlide = () => {
    autoSlideInterval = setInterval(autoSlide, 3000); // Change image every 3 seconds
  };

  // Stop auto-sliding
  const stopAutoSlide = () => {
    clearInterval(autoSlideInterval);
  };

  // Handle scrollbar thumb drag
  scrollbarThumb.addEventListener("mousedown", (e) => {
    stopAutoSlide(); // Stop auto sliding on drag
    const startX = e.clientX;
    const thumbPosition = scrollbarThumb.offsetLeft;
    const maxThumbPosition =
      sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth;

    const handleMouseMove = (e) => {
      const deltaX = e.clientX - startX;
      const newThumbPosition = thumbPosition + deltaX;
      const boundedPosition = Math.max(
        0,
        Math.min(maxThumbPosition, newThumbPosition)
      );
      const scrollPosition =
        (boundedPosition / maxThumbPosition) * maxScrollLeft;

      scrollbarThumb.style.left = `${boundedPosition}px`;
      imageList.scrollLeft = scrollPosition;
    };

    const handleMouseUp = () => {
      document.removeEventListener("mousemove", handleMouseMove);
      document.removeEventListener("mouseup", handleMouseUp);
      startAutoSlide(); // Restart auto sliding after dragging
    };

    document.addEventListener("mousemove", handleMouseMove);
    document.addEventListener("mouseup", handleMouseUp);
  });

  // Slide images according to the slide button clicks
  slideButtons.forEach((button) => {
    button.addEventListener("click", () => {
      stopAutoSlide(); // Stop auto sliding on button click
      const direction = button.id === "prev-slide" ? -1 : 1;
      const scrollAmount = imageList.clientWidth * direction;
      imageList.scrollBy({
        left: scrollAmount,
        behavior: "smooth",
      });
      startAutoSlide(); // Restart auto sliding after click
    });
  });

  // Update scrollbar thumb position based on image scroll
  const updateScrollThumbPosition = () => {
    const scrollPosition = imageList.scrollLeft;
    const thumbPosition =
      (scrollPosition / maxScrollLeft) *
      (sliderScrollbar.clientWidth - scrollbarThumb.offsetWidth);
    scrollbarThumb.style.left = `${thumbPosition}px`;
  };

  // Handle slide button visibility
  const handleSlideButtons = () => {
    slideButtons[0].style.display = imageList.scrollLeft <= 0 ? "none" : "flex";
    slideButtons[1].style.display =
      imageList.scrollLeft >= maxScrollLeft ? "none" : "flex";
  };

  // Call these two functions when image list scrolls
  imageList.addEventListener("scroll", () => {
    updateScrollThumbPosition();
    handleSlideButtons();
  });

  // Stop auto-slide on image hover and restart on mouse out
  const images = imageList.querySelectorAll("img");
  images.forEach((image) => {
    image.addEventListener("mouseover", stopAutoSlide);
    image.addEventListener("mouseout", startAutoSlide);
  });

  // Start auto sliding on load
  startAutoSlide();
};
/*=============== SHOW MENU ===============*/
const showMenu = (toggleId, navId) => {
  const toggle = document.getElementById(toggleId),
    nav = document.getElementById(navId);

  toggle.addEventListener("click", () => {
    // Add show-menu class to nav menu
    nav.classList.toggle("show-menu");
    // Add show-icon to show and hide menu icon
    toggle.classList.toggle("show-icon");
  });
};

showMenu("nav-toggle", "nav-menu");

/*=============== SHOW DROPDOWN MENU ===============*/
const dropdownItems = document.querySelectorAll(".dropdown__item");

// 1. Select each dropdown item
dropdownItems.forEach((item) => {
  const dropdownButton = item.querySelector(".dropdown__button");

  // 2. Select each button click
  dropdownButton.addEventListener("click", () => {
    // 7. Select the current show-dropdown class
    const showDropdown = document.querySelector(".show-dropdown");

    // 5. Call the toggleItem function
    toggleItem(item);

    // 8. Remove the show-dropdown class from other items
    if (showDropdown && showDropdown !== item) {
      toggleItem(showDropdown);
    }
  });
});

// 3. Create a function to display the dropdown
const toggleItem = (item) => {
  // 3.1. Select each dropdown content
  const dropdownContainer = item.querySelector(".dropdown__container");

  // 6. If the same item contains the show-dropdown class, remove
  if (item.classList.contains("show-dropdown")) {
    dropdownContainer.removeAttribute("style");
    item.classList.remove("show-dropdown");
  } else {
    // 4. Add the maximum height to the dropdown content and add the show-dropdown class
    dropdownContainer.style.height = dropdownContainer.scrollHeight + "px";
    item.classList.add("show-dropdown");
  }
};

/*=============== DELETE DROPDOWN STYLES ===============*/
const mediaQuery = matchMedia("(min-width: 1118px)"),
  dropdownContainer = document.querySelectorAll(".dropdown__container");

// Function to remove dropdown styles in mobile mode when browser resizes
const removeStyle = () => {
  // Validate if the media query reaches 1118px
  if (mediaQuery.matches) {
    // Remove the dropdown container height style
    dropdownContainer.forEach((e) => {
      e.removeAttribute("style");
    });

    // Remove the show-dropdown class from dropdown item
    dropdownItems.forEach((e) => {
      e.classList.remove("show-dropdown");
    });
  }
};

addEventListener("resize", removeStyle);

const nestedGrid = document.querySelector(".nested-grid");

function autoScroll() {
  // Scroll down by a certain amount (e.g., 1 pixel)
  nestedGrid.scrollBy(0, 1);

  // Check if we've scrolled past the last item
  if (
    nestedGrid.scrollTop + nestedGrid.clientHeight >=
    nestedGrid.scrollHeight
  ) {
    // Reset to the top after reaching the bottom
    nestedGrid.scrollTop = 0; // Scroll back to the top
  }
}

// Start auto-scrolling at a set interval (e.g., every 20 ms)
setInterval(autoScroll, 15);

// counter section

let valueDisplays = document.querySelectorAll(".num");
let interval = 4000;

valueDisplays.forEach((valueDisplay) => {
  let startValue = 0;
  let endValue = parseInt(valueDisplay.getAttribute("data-val"));
  let duration = Math.floor(interval / endValue);
  let counter = setInterval(function () {
    startValue += 1;
    valueDisplay.textContent = startValue;
    if (startValue == endValue) {
      clearInterval(counter);
    }
  }, duration);
});

//portfolio section

// portfolio section

// para scrolling

const scrollableParagraph = document.querySelector(".scrollable-paragraph");
const indicator = document.querySelector(".indicator");

scrollableParagraph.addEventListener("scroll", () => {
  const scrollHeight =
    scrollableParagraph.scrollHeight - scrollableParagraph.clientHeight;
  const scrollTop = scrollableParagraph.scrollTop;
  const scrollPercent = (scrollTop / scrollHeight) * 100;
  indicator.style.width = `${scrollPercent}%`;
});

// Attach the init function to load and resize events
// window.addEventListener("resize", initSlider);
// window.addEventListener("load", initSlider);
