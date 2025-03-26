// Mobile Menu Toggle
document.querySelector(".menu-toggle")?.addEventListener("click", function () {
  const navMenu = document.querySelector(".nav-menu");
  navMenu.classList.toggle("show");

  // Change icon
  const icon = this.querySelector("i");
  if (navMenu.classList.contains("show")) {
    icon.classList.remove("fa-bars");
    icon.classList.add("fa-times");
  } else {
    icon.classList.remove("fa-times");
    icon.classList.add("fa-bars");
  }
});

// Untuk circular progress
document.querySelectorAll('.circle').forEach(circle => {
    const percent = circle.getAttribute('data-percent');
    circle.style.background = `conic-gradient(#e34f26 0% ${percent}%, #f1f1f1 ${percent}% 100%)`;
});

// Untuk box fill animation
document.querySelectorAll('.box-fill').forEach(box => {
    const targetWidth = box.style.width;
    box.style.width = '0';
    setTimeout(() => {
        box.style.width = targetWidth;
    }, 100);
});
// Initialize Intersection Observer for animations
const initIntersectionObserver = () => {
  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add("animate");

          // Handle skill bars animation
          if (entry.target.classList.contains("skills")) {
            animateSkillBars();
          }

          // Handle timeline items
          if (entry.target.classList.contains("timeline-item")) {
            entry.target.style.opacity = "1";
            entry.target.style.transform = "translateY(0)";
          }
        }
      });
    },
    { threshold: 0.1 }
  );

  // Observe sections
  document.querySelectorAll("section").forEach((section) => {
    observer.observe(section);
  });

  // Observe timeline items
  document.querySelectorAll(".timeline-item").forEach((item, index) => {
    item.style.opacity = "0";
    item.style.transform = "translateY(20px)";
    item.style.transition = `all 0.5s ease ${index * 0.2}s`;
    observer.observe(item);
  });
};

// Form Validation
const initFormValidation = () => {
  const contactForm = document.getElementById("contactForm");
  if (contactForm) {
    contactForm.addEventListener("submit", function (e) {
      // Clear previous errors
      document.querySelectorAll(".error-message").forEach((el) => el.remove());
      document
        .querySelectorAll(".form-group")
        .forEach((el) => el.classList.remove("error"));

      let isValid = true;

      // Validate Name
      const name = document.getElementById("name").value.trim();
      if (name === "") {
        showError("name", "Nama harus diisi");
        isValid = false;
      }

      // Validate Email
      const email = document.getElementById("email").value.trim();
      if (email === "") {
        showError("email", "Email harus diisi");
        isValid = false;
      } else if (!isValidEmail(email)) {
        showError("email", "Format email tidak valid");
        isValid = false;
      }

      // Validate Subject
      const subject = document.getElementById("subject").value.trim();
      if (subject === "") {
        showError("subject", "Subjek harus diisi");
        isValid = false;
      }

      // Validate Message
      const message = document.getElementById("message").value.trim();
      if (message === "") {
        showError("message", "Pesan harus diisi");
        isValid = false;
      } else if (message.length < 10) {
        showError("message", "Pesan terlalu pendek (minimal 10 karakter)");
        isValid = false;
      }

      if (!isValid) {
        e.preventDefault();
        // Scroll to first error
        const firstError = document.querySelector(".error");
        if (firstError) {
          firstError.scrollIntoView({ behavior: "smooth", block: "center" });
        }
      }
    });
  }
};

function showError(fieldId, message) {
  const field = document.getElementById(fieldId);
  const formGroup = field.closest(".form-group");
  formGroup.classList.add("error");

  const errorElement = document.createElement("div");
  errorElement.className = "error-message";
  errorElement.style.color = "#e74c3c";
  errorElement.style.marginTop = "5px";
  errorElement.style.fontSize = "0.85rem";
  errorElement.innerHTML = `<i class="fas fa-exclamation-circle"></i> ${message}`;

  formGroup.appendChild(errorElement);
}

function isValidEmail(email) {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

// Smooth scrolling for anchor links
const initSmoothScrolling = () => {
  document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
    anchor.addEventListener("click", function (e) {
      e.preventDefault();
      const targetId = this.getAttribute("href");
      if (targetId === "#") return;

      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        window.scrollTo({
          top: targetElement.offsetTop - 80,
          behavior: "smooth",
        });
      }
    });
  });
};

// Tab System Functionality
const initTabs = () => {
  // Initialize first tab as active
  const firstTabButton = document.querySelector(".tab-button");
  const firstTabContent = document.querySelector(".tab-content");

  if (firstTabButton && firstTabContent) {
    firstTabButton.classList.add("active");
    firstTabContent.classList.add("active");
  }

  // Tab switching functionality
  document.querySelectorAll(".tab-button").forEach((button) => {
    button.addEventListener("click", () => {
      // Remove active class from all buttons and contents
      document.querySelectorAll(".tab-button").forEach((btn) => {
        btn.classList.remove("active");
      });
      document.querySelectorAll(".tab-content").forEach((content) => {
        content.classList.remove("active");
      });

      button.classList.add("active");

      const tabId = button.getAttribute("data-tab");
      const tabContent = document.getElementById(`${tabId}-tab`);
      if (tabContent) {
        tabContent.classList.add("active");
      }
    });
  });
};

document.addEventListener("DOMContentLoaded", function () {
  initIntersectionObserver();
  initFormValidation();
  initSmoothScrolling();
  initTabs();
});