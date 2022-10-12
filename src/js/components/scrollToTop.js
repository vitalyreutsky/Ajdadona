const btnScrollToTop = document.querySelector(".scroll-btn");

window.addEventListener("scroll", checkHeight);

function checkHeight() {
  if (window.pageYOffset > 300) {
    // Show backToTopButton
    if (!btnScrollToTop.classList.contains("btnEntrance")) {
      btnScrollToTop.classList.remove("btnExit");
      btnScrollToTop.classList.add("btnEntrance");
      btnScrollToTop.style.display = "block";
    }
  } else {
    // Hide backToTopButton
    if (btnScrollToTop.classList.contains("btnEntrance")) {
      btnScrollToTop.classList.remove("btnEntrance");
      btnScrollToTop.classList.add("btnExit");
      setTimeout(function () {
        btnScrollToTop.style.display = "none";
      }, 250);
    }
  }
}

btnScrollToTop.addEventListener("click", smoothScrollBackToTop);

function smoothScrollBackToTop() {
  const targetPosition = 0;
  const startPosition = window.pageYOffset;
  const distance = targetPosition - startPosition;
  const duration = 1000;
  let start = null;

  window.requestAnimationFrame(step);

  function step(timestamp) {
    if (!start) start = timestamp;
    const progress = timestamp - start;
    window.scrollTo(
      0,
      easeInOutCubic(progress, startPosition, distance, duration)
    );
    if (progress < duration) window.requestAnimationFrame(step);
  }
}

function easeInOutCubic(t, b, c, d) {
  t /= d / 2;
  if (t < 1) return (c / 2) * t * t * t + b;
  t -= 2;
  return (c / 2) * (t * t * t + 2) + b;
}
