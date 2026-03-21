function animateCounter(element, target, duration = 2000) {
  let startTime = null;

  function update(timestamp) {
    if (!startTime) startTime = timestamp;
    const progress = timestamp - startTime;

    const percent = Math.min(progress / duration, 1);
    const value = Math.floor(percent * target);

    element.textContent = value.toLocaleString();

    if (percent < 1) {
      requestAnimationFrame(update);
    } else {
      element.textContent = target.toLocaleString();
    }
  }

  requestAnimationFrame(update);
}

// Observe when elements enter viewport
const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      const el = entry.target;
      const target = Number(el.dataset.target);

      animateCounter(el, target);

      observer.unobserve(el); // run only once
    }
  });
}, {
  threshold: 0.2 // starts when 20% is visible
});

const counter = e => {
    document.querySelectorAll(".counter").forEach(el => {
        observer.observe(el);
    });
}

export default counter